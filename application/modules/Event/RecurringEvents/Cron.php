<?php

/**
 * PageCarton
 *
 * LICENSE
 *
 * @category   PageCarton
 * @package    Event_RecurringEvents_Creator
 * @copyright  Copyright (c) 2017 PageCarton (http://www.pagecarton.org)
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @version    $Id: Cron.php Wednesday 20th of December 2017 03:23PM ayoola@ayoo.la $
 */

/**
 * @see PageCarton_Widget
 */

class Event_RecurringEvents_Cron extends Event_RecurringEvents_Abstract
{
	
    /**
     * 
     * 
     * @var string 
     */
	protected static $_objectTitle = 'Add new recurrent event'; 

    /**
     * Performs the whole widget running process
     * 
     */
	public function init()
    {    
		try
		{ 
            //var_export( Event_RecurringEvents::getInstance()->select() );
            
			foreach( Event_RecurringEvents::getInstance()->select() as $event )
            {

                $eventData = Application_Article_Abstract::loadPostData( $event );

                //var_export(  $eventData );

                $times = array();
                $nextDate = $timefornext = $event['next_date'];

                if( empty( $event['next_date'] ) )
                {
                    // var_export( 'new exteonent' );

                    $nextDate = strtotime( $eventData['datetime'] );

                    // var_export(  date( 'd-m-Y', $nextDate  ) );

                }

                $start = $nextDate;
                $end = strtotime( $eventData['event_end_datetime'] );
                $event_duration = $end - $start;
                if( $event_duration < 1 )
                {
                    $event_duration = 3600;
                }


                for( $i = 0; $i < intval( $event['advance_events'] ); $i++ )
                {   
    
                    // var_export(  $event['frequency'] );
                    // var_export(  $event );



                    switch( strtoupper( $event['frequency'] ) )
                    {
                        case 'DAILY':
                            $duration = 86400;
                            $timefornext = $nextDate + $duration;
                            $extent = $duration * intval( $event['advance_events'] ) + time();
                        break;
                        case 'WEEKLY':
                            $duration = 604800;
                            $timefornext = $nextDate + $duration;
                            $extent = $duration * intval( $event['advance_events'] ) + time();
                        break;
                        case 'MONTHLY':

                            $datetime = new DateTime(); // Date object for current date
                            $datetime->setTimestamp($nextDate);
                            $datetime->modify('next month');
                            
                            $timefornext = $datetime->format('U');
                            $extent = strtotime('+' . intval( $event['advance_events'] ) . ' months');
                        break;
                        case 'YEARLY':
                            $datetime = new DateTime(); // Date object for current date
                            $datetime->setTimestamp($nextDate);
                            $datetime->modify('next year');
                            $timefornext = $datetime->format('U');
                            $extent = strtotime('+' . intval( $event['advance_events'] ) . ' years');
                        break;

                    }

                    if( $nextDate > $extent )
                    {
                        // var_export(  'extent' );
                        // var_export(  date( 'd-m-Y', $nextDate  ) );

                        continue 2; 
                    }

                    $nextDate = $timefornext;

                    // var_export(  date( 'd-m-Y', $nextDate  ) );

                    //Event_RecurringEvents::getInstance()->update( array( 'next_date' => $timefornext ), array( 'recurringevents_id' => $event['recurringevents_id'] ) );


        
                    $eventData['datetime'] = date( 'o-m-d H:i', $nextDate );
                    $eventData['article_creation_date'] = $nextDate;
                    $eventData['event_end_datetime'] = date( 'o-m-d H:i', $nextDate + $event_duration );

                    if( ! Application_Article_Creator::generateArticleUrl( $eventData ) )
                    {
                        return false;
                    }


                    //exit();

                    $response = Application_Article_Creator::saveArticle($eventData);
                    //var_export(  $response );
                    //var_export(  $eventData );

    
                }

                


            }
          
            exit();
		}  
		catch( Exception $e )
        { 
            //  Alert! Clear the all other content and display whats below.
            $this->setViewContent( self::__( '<p class="badnews">' . $e->getMessage() . '</p>' ) ); 
            $this->setViewContent( self::__( '<p class="badnews">Theres an error in the code</p>' ) ); 
            return false; 
        }
	}
	// END OF CLASS
}
