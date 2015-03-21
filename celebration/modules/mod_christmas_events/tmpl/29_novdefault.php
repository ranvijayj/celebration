<?php $db = JFactory::getDBO();
$sql = "select * from #__k2_items where catid='2' and published='1' limit 0,2";
$db->setQuery($sql);
$row = $db->loadAssocList(); 
?>

<div class="articleBlock">
    <div class="aTitle size">Events and Parties</div>
	<?php foreach($row as $val): 
	if (JFile::exists(JPATH_SITE.DS.'media'.DS.'k2'.DS.'items'.DS.'cache'.DS.md5("Image".$val['id']).'_XS.jpg'))
		{
		$item->imageXSmall = JURI::base(true).'/media/k2/items/cache/'.md5("Image".$val['id']).'_XS.jpg';
		}
		?>
	<div class="events hLine">
	<div class="eInfoImg"><?php if($item->imageXSmall){?><img src="<?php echo $item->imageXSmall;?>" width="70" height="71"><?php }else{?><img src="images/no_image.jpg" width="70" height="71"><?php }?></div>
	   <div class="eInfo">
	   
	   <h1><?php echo $val['title']; ?></h1>
	    <p><?php echo substr($val['introtext'],"0","110"); ?>...</p>
		 <span><a href="index.php/christmas-event/item/<?php echo $val['id']."-".$val['title']; ?>">more</a></span>
	   </div>
	   <div class="flexi"></div>
	</div>
	<?php endforeach;?>
	
	
  </div>