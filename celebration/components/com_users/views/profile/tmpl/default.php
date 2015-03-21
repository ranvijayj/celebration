<style>
div.pagination {
	padding: 3px;
	margin: 3px;
	text-align:center;
}

div.pagination a {
	padding: 2px 5px 2px 5px;
	margin: 2px;
	border: 1px solid #AAAADD;
	
	text-decoration: none; /* no underline */
	color: #000099;
}
div.pagination a:hover, div.pagination a:active {
	border: 1px solid #000099;

	color: #000;
}
div.pagination span.current {
	padding: 2px 5px 2px 5px;
	margin: 2px;
		border: 1px solid #000099;
		
		font-weight: bold;
		background-color: #000099;
		color: #FFF;
	}
	div.pagination span.disabled {
		padding: 2px 5px 2px 5px;
		margin: 2px;
		border: 1px solid #ccc;
	
		color: #333;
	}
	
</style>

<?php
/**
 * @version		$Id: default.php 20196 2011-01-09 02:40:25Z ian $
 * @package		Joomla.Site
 * @subpackage	com_users
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 * @since		1.6
 */

defined('_JEXEC') or die;
JHtml::_('behavior.tooltip');
?>

<div class="profile<?php echo $this->pageclass_sfx?>">
<?php if ($this->params->get('show_page_heading')) : ?>
<!--<h1>
	<?php // echo $this->escape($this->params->get('page_heading')); ?>
</h1>-->
<?php endif; ?>

<?php //echo '<pre>'; print_r($this->data) // echo $this->loadTemplate('core'); ?>

<?php // echo $this->loadTemplate('params'); ?>

<?php  $db=JFactory::getDBO(); 
       $qry='SELECT * FROM #__k2_users WHERE userID='.$this->data->id;
       $db->setQuery($qry);
       $res = $db->loadObjectList();
    // echo $this->loadTemplate('custom'); ?>
<div class="left_profile">
<div class="profile_img">
<?php if($res[0]->image): ?>
<img width="165" height="135" style="border: 0px #cecece solid" src="<?php echo JURI::root(true).'/media/k2/users/'.$res[0]->image; ?>" alt="<?php echo $this->user->name; ?>" />
<?php else:
$noImage=($res[0]->gender=='m')?'male':'female';
?>
<img width="165" height="135" style="border: 0px #ccc solid" src="<?php echo JURI::root(true).'/media/k2/users/'.$noImage.'.png' ?>" alt="<?php echo $this->user->name; ?>" />
<?php endif; ?>
</div>
<div class="editprf"><?php if (JFactory::getUser()->id == $this->data->id) : ?>
<a href="<?php echo JRoute::_('index.php?option=com_users&task=profile.edit&user_id='.(int) $this->data->id);?>">
<?php echo JText::_('COM_USERS_Edit_Profile'); ?></a>
<?php endif; ?>
</div>
<form action="<?php echo JRoute::_('index.php'); ?>" method="post" id="login-form">
<div class="logout-button" style="float: right; margin-top: 8px;">
<input type="submit" name="Submit" class="button logout" value="<?php echo JText::_('JLOGOUT'); ?>" />
<input type="hidden" name="option" value="com_users" />
<input type="hidden" name="task" value="user.logout" />
<?php echo JHtml::_('form.token'); ?>
</div>
</form>
<div class="clr"></div>
<div class="brz_name">
<p class="briz_cont"><?php echo $this->data->name; ?></p>
<p class="briz_normal_content">
<em>Last visit:</em><br />
<?php if ($this->data->lastvisitDate != '0000-00-00 00:00:00'){?>
<?php echo JHtml::_('date',$this->data->lastvisitDate); ?>
<?php }
else {?>
<?php echo JText::_('COM_USERS_PROFILE_NEVER_VISITED'); ?>
<?php } ?>
</p>
</div>



<div class="brz_name">
<div class="shre_bld">Share Your Moment</div>

<div class="shrphoto"><a href="index.php/share-moment" style="padding-left:10px;"> Share Moment</a></div>

</div>
</div>
<div style="float: left;">
<div class="chose_picture">
<p class="recent_profile">Profile Details</p>
<p class="p_content"><strong>User Name:</strong> <?php echo $this->data->username ?></p>
<p class="p_content"><strong>Name:</strong> <?php echo $this->data->name ?></p>
<p class="p_content"><strong>Gender:</strong> <?php echo ($res[0]->gender=='m')?'Male':'Female' ?></p>
<p class="p_content"><strong>Email:</strong> <?php echo $this->data->email ?></p>
<p class="p_content"><strong>Phone:</strong> <?php echo $res[0]->url ?></p>
</div>



<div class="share_photo_one">
<div class="shre_bld">Recently Shared Photo's</div>
<?php $user_id= $this->data->id;
$sql = "SELECT * FROM `#__k2_items` WHERE `created_by` ='".$user_id."' and catid='3'"; 
		$db->setQuery($sql);
		$res = $db->loadObjectList();
 $total=count($res);
$count=0;
        
		$adjacents = 3;

	
	$limit = 10; 								//how many items to show per page
	$page = $_GET['page'];
	if($page) 
		$start = ($page - 1) * $limit; 			//first item to display on this page
	else
		$start = 0;	
		$res = array_slice($res,$start,$limit);

#		print_r($res);
		if($res):
		foreach($res as $value){
?>
<div class="block" style="margin:0px 0px 0px 10px;width: 150px; text-align:center; float: left;" >
<div class="shrphoto"><a href="index.php/share-your-moment/item/<?php print_r($value->id)."-".$value->alias;?>" style="padding-left:10px;"><?php print_r($value->title); ?></a></div>
<div style="margin:5px 0px 0px 0px;"  ><a href="index.php/share-your-moment/item/<?php print_r($value->id)."-".$value->alias;?>" style="padding-left:10px;"><img src='<?php echo JURI::base()."/"; ?>media/k2/items/cache/<?php echo md5('Image'.$value->id).'_S.jpg';?>' width="50px" height="50px"/></a></div>
</div>
<?php 
$count++;
if($count%2==0||$count==$total)
{?>
<div class="clr"></div>
    
    <?php
}
?>

<?php } endif;?>
<div class="clr"></div>
 <?php
	
	//$query = "SELECT COUNT(*) as num FROM $tbl_name";
	//$total_pages = mysql_fetch_array(mysql_query($query));
	$total_pages = $total;
	//$type  = $_GET['type'];
	/* Setup vars for query. */
	$targetpage = "index.php/my-account"; 	//your file name  (the name of this file)
	
	/* Setup page vars for display. */
	if ($page == 0) $page = 1;					//if no page var is given, default to 1.
	$prev = $page - 1;							//previous page is page - 1
	$next = $page + 1;							//next page is page + 1
	$lastpage = ceil($total_pages/$limit);		//lastpage is = total pages / items per page, rounded up.
	$lpm1 = $lastpage - 1;						//last page minus 1
	
	/* 
		Now we apply our rules and draw the pagination object. 
		We're actually saving the code to a variable in case we want to draw it more than once.
	*/
	$pagination = "";
	if($lastpage > 1)
	{	
		$pagination .= "<div class=\"pagination\">";
		//previous button
		if ($page > 1) 
			$pagination.= "<a href=\"$targetpage?page=$prev\"> Prev</a>";
		else
			$pagination.= "<span class=\"disabled\"> Prev</span>";	
		
		//pages	
		if ($lastpage < 7 + ($adjacents * 2))	//not enough pages to bother breaking it up
		{	
			for ($counter = 1; $counter <= $lastpage; $counter++)
			{
				if ($counter == $page)
					$pagination.= "<span class=\"current\">$counter</span>";
				else
					$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
			}
		}
		elseif($lastpage > 5 + ($adjacents * 2))	//enough pages to hide some
		{
			//close to beginning; only hide later pages
			if($page < 1 + ($adjacents * 2))		
			{
				for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
				}
				$pagination.= "...";
				$pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
				$pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>";		
			}
			//in middle; hide some front and some back
			elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
			{
				$pagination.= "<a href=\"$targetpage?page=1\">1</a>";
				$pagination.= "<a href=\"$targetpage?page=2\">2</a>";
				$pagination.= "...";
				for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
				}
				$pagination.= "...";
				$pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
				$pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>";		
			}
			//close to end; only hide early pages
			else
			{
				$pagination.= "<a href=\"$targetpage?page=1\">1</a>";
				$pagination.= "<a href=\"$targetpage?page=2\">2</a>";
				$pagination.= "...";
				for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
				}
			}
		}
		
		//next button
		if ($page < $counter - 1) 
			$pagination.= "<a href=\"$targetpage?page=$next\">Next </a>";
		else
			$pagination.= "<span class=\"disabled\">Next </span>";
		$pagination.= "</div>\n";		
	}
?>

	

<?php echo $pagination ?>
</div>

<div class="clr"></div>


</div>
<div class="clr"></div>

</div>