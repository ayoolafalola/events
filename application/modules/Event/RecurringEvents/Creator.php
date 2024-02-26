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
 * @version    $Id: Creator.php Wednesday 20th of December 2017 03:23PM ayoola@ayoo.la $
 */

/**
 * @see PageCarton_Widget
 */

class Event_RecurringEvents_Creator extends Event_RecurringEvents_Abstract
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

			if( ! $events = Application_Article_Table::getInstance()->select( 'article_title', array( 'true_post_type' => 'event' ), array( 'row_id_column' => 'article_url' ) ) )
			{
				$this->setViewContent(  '' . self::__( '<div class="badnews">You need to add an event first before you can make it recurrent. </div>' ) . '', true  ); 
			}
	
            //  Code that runs the widget goes here...
			$this->createForm( 'Submit...', 'Add new recurrent event' );
			$this->setViewContent( $this->getForm()->view() );


			if( ! $values = $this->getForm()->getValues() ){ return false; }
			
			//	Notify Admin
			$mailInfo = array();
			$mailInfo['subject'] = __CLASS__;
			$mailInfo['body'] = 'Form submitted on your PageCarton Installation with the following information: "' . self::arrayToString( $values ) . '". 
			
			';
			try
			{

				@Ayoola_Application_Notification::mail( $mailInfo );
			}
			catch( Ayoola_Exception $e ){ null; }

			if( $this->insertDb( $values ) )
			{ 
				$this->setViewContent(  '' . self::__( '<div class="goodnews">Added successfully. </div>' ) . '', true  ); 
			}
            // end of widget process
          
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
