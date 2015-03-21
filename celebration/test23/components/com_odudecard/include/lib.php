<?php

     /**
* ODude Ecard
* 
* @author Navneet Gupta  <navneet@lovelynepal.com>
* @link http://www.odude.com/
*
* @license GNU/GPL
*/
   function cleanuserinput($dirty)
   {

   if (get_magic_quotes_gpc())
   {
   $clean = mysql_real_escape_string(stripslashes($dirty));
   }
   else
   {
   $clean = mysql_real_escape_string($dirty);
   }

    return $clean;

    }
        
        
        
  function getSetting()
	{
	$query = "select * from #__ecard_setting";
  $db =& JFactory::getDBO();
	$db->setQuery($query);
	$rows = $db -> loadObjectList();
	return $rows[0];

	}
  
  	function getCategoryDetail($cate)
    {
       

		   $db =& JFactory::getDBO();
			$query = "select * from #__ecard_cate where cat='$cate'";
			$db->setQuery($query);
			$rows = $db -> loadObjectList();
			return $rows[0];
		
    } 
    
    function createThumbSimple($source,$dest,$new_w,$new_h)
		{

			$x=0;
			$y=0;
			$size = getimagesize($source);
			$old_x = $size[0];
			$old_y = $size[1];

			$ratio1=$old_x/$new_w;
			//$ratio2=$old_y/$new_h;
			$ratio2=0;
			if($ratio1>$ratio2)
			{
			$thumb_w=$new_w;
			$thumb_h=$old_y/$ratio1;
			}
			else
			{
			$thumb_h=$new_h;
			$thumb_w=$old_x/$ratio2;
			}

			$new_im = ImageCreatetruecolor($thumb_w,$thumb_h);
			$im = imagecreatefromjpeg($source);
			imagecopyresampled($new_im,$im,0,0,0,0,$thumb_w,$thumb_h,$old_x,$old_y);
			imagejpeg($new_im,$dest,100);

		}
		
		function getCard($cardid)
		{
		
		$card = array();
		$db =& JFactory::getDBO();
		$query =  "select * from #__ecard_media where id='".$cardid."'";
		$db->setQuery($query);
		$rows = $db -> loadObjectList();
				
		if(!empty($rows))
		{
		
		$card['effect']=$rows[0]->effect;
		$card['cate']=$rows[0]->cat;
		$card['title']=$rows[0]->title;
		$card['image']=$rows[0]->file;
		$card['type']=$rows[0]->type;
		$card['desp']=$rows[0]->desp;
		$card['thumb']=$rows[0]->thumb;
		return $card;
		}
		else
		{
		
		return 'X';	

		}
		}
    
    function remove($cardid)
	{
		
		$path=JPATH_ROOT.DS.'images'.DS.'ecard'.DS;
		$card=getcard($cardid);
			
			$msg=$card['title'].": ".JText::_('COM_ODUDECARD_DELETE_MSG')."</li>";
			
			
			
				$query="delete from #__ecard_media where id=$cardid";
				$db =& JFactory::getDBO();
				$db->setQuery($query);
				$result = $db->query();
				
				unlink("$path".$card['image']);
				unlink("$path".$card['thumb']);
      
      
	  return $msg;
	}                     
                    
?>