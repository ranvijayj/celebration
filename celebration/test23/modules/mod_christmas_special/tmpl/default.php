<?php $db = JFactory::getDBO();
$sql = "select * from #__k2_items where catid='1' and published='1'";
$db->setQuery($sql);
$res = $db->loadAssocList();

function limit_words($string, $word_limit)
{
    $words = explode(" ",$string);
    return implode(" ",array_splice($words,0,$word_limit));
}
?>

<div class="special">
	   <div class="sBlock">Fun & festivities</div>
	   <div class="bell"></div>
	     <ul class="specialGifts">
		 <?php foreach($res as $value): 
		 
		 
		// JFile::exists(JPATH_SITE.DS.'media'.DS.'k2'.DS.'items'.DS.'cache'.DS.md5("Image".$res['id']).'_XS.jpg');
		
		  if (JFile::exists(JPATH_SITE.DS.'media'.DS.'k2'.DS.'items'.DS.'cache'.DS.md5("Image".$value['id']).'_XS.jpg'))
		{
		
		
		 $item->imageXSmall = JURI::base(true).'/media/k2/items/cache/'.md5("Image".$value['id']).'_XS.jpg';
				}
		 
		 ?>
		   <li>
		   <div class="sMid">
		     <h2><?php //echo $value['title']; ?></h2>
			 <div class="pIcon">
			 <?php //echo $item->imageXSmall;
			 if($item->imageXSmall ){?>
			 <img src="<?php echo $item->imageXSmall  ?>" width="156" height="116">
			 <?php } else{?>
			 <img src="images/no_img_160.jpg" width="156" height="116">
			 <?php }?>
			 </div>
			 <p><?php echo limit_words($value['introtext'],19) ?></p>
			 <span><a href="index.php/christmas-special/item/<?php echo $value['id']."-".$value['title'];?> ">more</a></span>
			 </div>
		   </li>
		   <?php endforeach; ?>
		   <!--<li>
		   <div class="sMid">
		     <h2>Title</h2>
			 <div class="pIcon"></div>
			 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
			 <span><a href="#">more</a></span>
			 </div>
		   </li>
		   <li>
		   <div class="sMid">
		     <h2>Title</h2>
			 <div class="pIcon"></div>
			 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
			 <span><a href="#">more</a></span>
			 </div>
		   </li>
		   <li>
		   <div class="sMid">
		     <h2>Title</h2>
			 <div class="pIcon"></div>
			 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
			 <span><a href="#">more</a></span>
			 </div>
		   </li>
		   <li>
		   <div class="sMid">
		     <h2>Title</h2>
			 <div class="pIcon"></div>
			 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
			 <span><a href="#">more</a></span>
			 </div>
		   </li>
		   <li>
		   <div class="sMid">
		     <h2>Title</h2>
			 <div class="pIcon"></div>
			 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
			 <span><a href="#">more</a></span>
			 </div>
		   </li>-->
		 </ul>
		 <div class="flexi"></div> 
	 </div>