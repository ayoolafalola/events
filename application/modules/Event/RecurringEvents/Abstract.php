<?php

/**
 * PageCarton
 *
 * LICENSE
 *
 * @category   PageCarton
 * @package    Event_RecurringEvents_Abstract
 * @copyright  Copyright (c) 2024 PageCarton (http://www.pagecarton.org)
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @version    $Id: Abstract.php Sunday 25th of February 2024 09:21PM ayoola@ayoo.la $
 */

/**
 * @see PageCarton_Widget
 */


class Event_RecurringEvents_Abstract extends PageCarton_Widget
{
	
    /**
     * Identifier for the column to edit
     * 
     * @var array
     */
	protected $_identifierKeys = array( 'recurringevents_id' );
 	
    /**
     * The column name of the primary key
     *
     * @var string
     */
	protected $_idColumn = 'recurringevents_id';
	
    /**
     * Identifier for the column to edit
     * 
     * @var string
     */
	protected $_tableClass = 'Event_RecurringEvents';
	
    /**
     * Access level for player. Defaults to everyone
     *
     * @var boolean
     */
	protected static $_accessLevel = array( 99, 98 );


    /**
     * creates the form for creating and editing page
     * 
     * param string The Value of the Submit Button
     * param string Value of the Legend
     * param array Default Values
     */
	public function createForm( $submitValue = null, $legend = null, Array $values = null )  
    {
		//	Form to create a new page
        $form = new Ayoola_Form( array( 'name' => $this->getObjectName(), 'data-not-playable' => true ) );
		$form->submitValue = $submitValue ;

        
		$fieldset = new Ayoola_Form_Element;

        if( $events = Application_Article_Table::getInstance()->select( 'article_title', array( 'true_post_type' => 'event' ), array( 'row_id_column' => 'article_url' ) ) )
        {
            //asort( $events );
            $present = array();
            foreach( $events as $key => $value )
            {
                //if( $key !== @$values['article_url'] )
                {
                    if(  isset( $present[$value] ) )
                    {
                        unset( $events[$key] );
                    }
                }

                $present[$value] = $key;

            }
        }        

        $fieldset->addElement( array( 'name' => 'article_url','label' => 'Event Name', 'type' => 'Select', 'value' => @$values['article_url'] ), $events );         
        //$fieldset->addElement( array( 'name' => 'article_content','label' => 'Event Details', 'type' => 'TextArea', 'value' => @$values['article_content'] ) );     
        $frequency = array( 'Daily', 'Weekly', 'Monthly', 'Yearly' );
        $frequency = array_combine( $frequency, $frequency );    
        $fieldset->addElement( array( 'name' => 'frequency', 'type' => 'Select', 'value' => @$values['frequency'] ), $frequency );   
        $interval = range( 1, 100 );    
        $interval = array_combine( $interval, $interval );      
        $fieldset->addElement( array( 'name' => 'interval', 'type' => 'Select', 'value' => @$values['interval'] ), $interval ); 
        //$fieldset->addElement( array( 'name' => 'datetime','label' => 'Start of First Event', 'type' => 'DateTime', 'value' => @$values['datetime'] ) ); 
        //$fieldset->addElement( array( 'name' => 'end_date','label' => 'End of First Event', 'type' => 'DateTime', 'value' => @$values['end_date'] ) ); 
        $fieldset->addElement( array( 'name' => 'advance_events','label' => 'No of events to create in advance', 'type' => 'Select', 'value' => @$values['advance_events'] ), $interval );

		$fieldset->addLegend( $legend );
		$form->addFieldset( $fieldset );   
		$this->setForm( $form );
    } 

	// END OF CLASS
}
