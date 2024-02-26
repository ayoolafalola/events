<?php

/**
 * PageCarton
 *
 * LICENSE
 *
 * @category   PageCarton
 * @package    Event_RecurringEvents
 * @copyright  Copyright (c) 2024 PageCarton (http://www.pagecarton.org)
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @version    $Id: RecurringEvents.php Sunday 25th of February 2024 09:21PM ayoola@ayoo.la $
 */

/**
 * @see PageCarton_Table
 */


class Event_RecurringEvents extends PageCarton_Table
{

    /**
     * The table version (SVN COMPATIBLE)
     *
     * @param string
     */
    protected $_tableVersion = '0.4';  

    /**
     * Table data types and declaration
     * array( 'fieldname' => 'DATATYPE' )
     *
     * @param array
     */
	protected $_dataTypes = array (
  'article_url' => 'INPUTTEXT',
  'article_content' => 'INPUTTEXT',
  'cover_photo' => 'INPUTTEXT',
  'frequency' => 'INPUTTEXT',
  'datetime' => 'INPUTTEXT',
  'next_date' => 'INPUTTEXT',
  'end_date' => 'INPUTTEXT',
  'interval' => 'INT',
  'advance_events' => 'INT',
);


	// END OF CLASS
}
