<?php
/**
* ODude Ecard
* 
* @author Navneet Gupta  <navneet@lovelynepal.com>
* @link http://www.odude.com/
*
* @license GNU/GPL
*/
defined('_JEXEC') or die();

jimport( 'joomla.application.component.model' );


class odudecardModelodudecardsend extends JModel
{
	function getSetting()
	{
	$query = "select * from #__ecard_setting";

	
	   $ecardS = array();
	   	$db =& JFactory::getDBO();
		$db->setQuery($query);
		$rows = $db -> loadObjectList();
			$ecardS['from_name']=$rows[0]->from_name;
			$ecardS['from_email']=$rows[0]->from_email;
			$ecardS['subject_suffix']=$rows[0]->subject_suffix;


			return $ecardS;

	}

}
