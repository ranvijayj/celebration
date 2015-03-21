<style>
.tour_pack{margin:10px 10px 0px 0px; padding:0px; width:193px; float:left; border:0px solid #ccc;}
.clr{margin:0px; padding:0px; height:0px; border:0px; clear:both;}
.tour_img{border:1px solid #cecece; padding:2px;}
.tour_cont{font-size:11px; color:#000; text-align:center; padding-top:3px;}
.tour_cont a{font-size:13px; color:#000; text-align:center; text-decoration:none; font-weight:bold;}
.tour_cont a:hover{text-decoration:underline;}
.tour_more a{color:#CC3300; padding-left:3px;}


</style>
<?php $db = JFactory::getDBO();
$sql = "select * from #__k2_items where catid='5' limit 0,3";
$db->setQuery($sql);
$res = $db->loadAssocList();
//print_r($res);
?>
<div class="share_moment_title_main" style="margin:10px 0px 0px 0px; width:606px;">Travel & Tour Package</div>
<?php foreach($res as $value): 
		if (JFile::exists(JPATH_SITE.DS.'media'.DS.'k2'.DS.'items'.DS.'cache'.DS.md5("Image".$value['id']).'_XS.jpg'))
			{
			$item->imageXSmall = JURI::base(true).'/media/k2/items/cache/'.md5("Image".$value['id']).'_XS.jpg';
			}
			?>
<div class="tour_pack">
<div class="tour_img"><a href="index.php/<?php echo $value['alias']; ?>"><img src="<?php echo $item->imageXSmall ?>" width="188" height="170"></a></div>
<div class="tour_cont"><a href="index.php/<?php echo $value['alias']; ?>"><?php echo $value['title'];?></a></div>
</div>
<?php endforeach; ?>
<!--<div class="tour_pack">
<div class="tour_img"><a href="#"><img src="images/tourIcon.jpg" width="188"></a></div>
<div class="tour_cont"><a href="">Hello Ds is Demo.</a></div>
</div>
<div class="tour_pack">
<div class="tour_img"><a href="#"><img src="images/tourIcon.jpg" width="188"></a></div>
<div class="tour_cont">Hello Ds is Demo.<span class="tour_more"><a href="#">more..</a></span></div>
</div>-->
<div class="clr"></div>














