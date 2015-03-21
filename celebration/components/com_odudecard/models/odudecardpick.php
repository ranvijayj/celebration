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


class odudecardModelodudecardpick extends JModel
{
	function viewCard($xid)
	{
		$view = array();
		$db =& JFactory::getDBO();
		$query =  "select * from #__ecard_view where id='".$xid."'";
		$db->setQuery($query);
		$rows = $db -> loadObjectList();
		
		if(count($rows)!=0)
		{
		
		$view['status']=$rows[0]->status;
		$view['notify']=$rows[0]->notify;
		$view['clock']=$rows[0]->clock;
		$view['SN']=$rows[0]->SN;
		$view['SE']=$rows[0]->SE;
		$view['RN']=$rows[0]->RN;
		$view['RE']=$rows[0]->RE;
		$view['sub']=$rows[0]->sub;
		$view['card']=$rows[0]->card;
		$view['body']=$rows[0]->body;

		return $view;
		}
		else
		{
		
		return 'x';	

		}
		
	}
	
	function getCard($cardid)
	{
		$card = array();
		$db =& JFactory::getDBO();
		$query =  "select * from #__ecard_media where id='".$cardid."'";
		$db->setQuery($query);
		$rows = $db -> loadObjectList();
		
		if(count($rows)!=0)
		{
		
		$card['effect']=$rows[0]->effect;
		$card['cate']=$rows[0]->cat;
		$card['title']=$rows[0]->title;
		$card['image']=$rows[0]->file;
		$card['type']=$rows[0]->type;
		$card['desp']=$rows[0]->desp;
		$card['thumb']=$rows[0]->thumb;
		$card['username']=$rows[0]->username;
		$card['point']=$rows[0]->point;


		return $card;
		}
		else
		{
		
		return 'No Card';	

		}
		
	}
	
				function getCategory()
    {
       		$cate = JRequest::getVar('cate', '0');

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
			$ecardS['from_name']=$rows[0]->from_name;
			$ecardS['from_email']=$rows[0]->from_email;
			$ecardS['subject_suffix']=$rows[0]->subject_suffix;
			$ecardS['a1']=$rows[0]->a1;
			$ecardS['a2']=$rows[0]->a2;
			$ecardS['a3']=$rows[0]->a3;
			$ecardS['a4']=$rows[0]->a4;


			return $ecardS;

	}


}
