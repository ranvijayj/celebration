<?php
/**
 * @version		$Id: item.php 1492 2012-02-22 17:40:09Z joomlaworks@gmail.com $
 * @package		K2
 * @author		JoomlaWorks http://www.joomlaworks.net
 * @copyright	Copyright (c) 2006 - 2012 JoomlaWorks Ltd. All rights reserved.
 * @license		GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

?>
<style>
.view_all a{text-decoration:none;color:#fff;}
.view_all a:hover{text-decoration:underline;}
</style>
<?php $db = JFactory::getDBO();
$sql = "select * from #__k2_items where catid='4' and published='1' order by id asc limit 0,2";
$db->setQuery($sql);
$row = $db->loadAssocList(); 
?>

<div class="receipe">
	<div class="rBlock">Top Receipe<span class="view_all" style="font-size:11px;padding-left:130px; margin: 0px 0px 0px 0px; "><a href="index.php/top-recipes" >View more </a></span></div>
	
	   <div class="rMid">
	     <ul>
	<?php foreach($row as $val): 
	if (JFile::exists(JPATH_SITE.DS.'media'.DS.'k2'.DS.'items'.DS.'cache'.DS.md5("Image".$val['id']).'_XS.jpg'))
		{
		$item->imageXSmall = JURI::base(true).'/media/k2/items/cache/'.md5("Image".$val['id']).'_XS.jpg';
		}
		?>
		   <li class="rfadeSdw">
		    <div class="rIcon"><?php if($item->imageXSmall){?><a href="index.php/top-recipes/item/<?php echo $val['id']."-".$val['title']; ?>"><img src="<?php echo $item->imageXSmall;?>" width="109" height="63"></a>
	<?php }else{?><a href="index.php/top-recipes/item/<?php echo $val['id']."-".$val['title']; ?>"><img src="images/no_image.jpg" width="109" height="63"></a><?php }?>
			</div>
			<h1><a href="index.php/top-recipes/item/<?php echo $val['id']."-".$val['title']; ?> " style="text-decoration:none; color:#990000"><?php echo $val['title']; ?></a><!--Dry fruits specila choclates--></h1>
			<p><?php echo substr($val['introtext'],"0","50"); ?>...</p><!--lorem ipsum dolor amit set heading dummy orem ipsum dolor amit set--></p>
			<p> <a href="index.php/top-recipes/item/<?php echo $val['id']."-".$val['title']; ?>">more</a></p>
		   </li>
		   
		   <!--<li>
		    <div class="rIcon"> <img src="images/receiPic.jpg" width="109" height="63" /></div>
			<h1>Dry fruits specila choclates</h1>
			<p>lorem ipsum dolor amit set heading dummy orem ipsum dolor amit set</p>
			<p>+ <a href="#">more</a></p>
		   </li>-->
	  <?php endforeach;?>
		   
		 </ul>
		 
	   </div>
	 
	</div>
	<div class="receipeShadow"></div>