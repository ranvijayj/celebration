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
$count=0;
        $res = $db->loadObjectList();
$total=count($res);
#		print_r($res);
		if($res):
		foreach($res as $value){
?>
<div class="block" style="margin:0px 0px 0px 10px;width: 150px; text-align:center; float: left;" >
<div class="shrphoto"><a href="index.php/share-your-moment/item/<?php print_r($value->id)."-".$value->alias;?>" style="padding-left:10px;"><?php print_r($value->title); ?></a></div>
<div style="margin:5px 0px 0px 0px;"  ><a href="index.php/share-your-moment/item/<?php print_r($value->id)."-".$value->alias;?>" style="padding-left:10px;"><img src='<?php echo JURI::base()."/"; ?>media/k2/items/cache/<?php echo md5('Image'.$value->id).'_S.jpg';?>' width="50px"/></a></div>
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
</div>

<div class="clr"></div>


</div>
<div class="clr"></div>

</div>