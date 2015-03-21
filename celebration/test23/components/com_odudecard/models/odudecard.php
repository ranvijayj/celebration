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


class odudecardModelOdudecard extends JModel
{
	function getFront()
	{


		  $db =& JFactory::getDBO();
			$query = "select * from #__ecard_cate where front='Y'";
			$db->setQuery($query);
			$rows = $db -> loadObjectList();
			return $rows[0]->cat;

			
	}

	
	function getGreeting($perpage)
    {
        $db =& JFactory::getDBO();
 		
		
		$cate =odudecardModelOdudecard::getFront();

	   $query = "select id,title,type,file,desp,effect,cat,thumb from #__ecard_media where cat='$cate' and published=1 order by rand() limit 0,$perpage";
	   $db->setQuery( $query );
	   $greeting = $db->loadObjectList();
	 
	   return $greeting;

    }
	
		function getGreetingRandom()
    {
        $db =& JFactory::getDBO();
 		

	   $query = "select id,title,type,file,desp,effect,cat,thumb from #__ecard_media order by rand()";
	   $db->setQuery( $query );
	   $greeting = $db->loadObjectList();
	 
	   return $greeting;

    }
	
		function getCategory()
    {
       		$cate = odudecardModelOdudecard::getFront();

		   $db =& JFactory::getDBO();
			$query = "select * from #__ecard_cate where cat='$cate'";
			$db->setQuery($query);
			$rows = $db -> loadObjectList();
			return $rows;
		
    }

	
	
	function getSetting()
	{
	$query = "select * from #__ecard_setting";

	
	   $ecardS = array();
	   	$db =& JFactory::getDBO();
		$db->setQuery($query);
		$rows = $db -> loadObjectList();
			$ecardS['card_row']=$rows[0]->card_row;
			$ecardS['card_page']=$rows[0]->card_page;
			$ecardS['a1']=$rows[0]->a1;
			$ecardS['a2']=$rows[0]->a2;
			$ecardS['a3']=$rows[0]->a3;
			$ecardS['a4']=$rows[0]->a4;
			$ecardS['from_name']=$rows[0]->from_name;
			$ecardS['from_email']=$rows[0]->from_email;
			$ecardS['subject_suffix']=$rows[0]->subject_suffix;


			return $ecardS;

	}
}
