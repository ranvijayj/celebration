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
<style type="text/css">
.profile{background:#EDF681; padding:0px 0px 10px 0px; font-family:Tahoma;}
.left_profile{ margin:12px 0 0 8px; padding:0px; width:165px; float:left;}
.profile_img{ margin:0px; padding:0px;}
.editprf{float:left; margin:0px; padding-top:10px; font-size:12px;}
.editprf a{color:#000; font-size:12px; font-family:Tahoma; text-decoration:underline;}
.brz_name{ margin-top:10px;padding:0px; border: solid 1px #dcdcdc;  width:165px; background:#CCE9F3;}
.briz_cont{margin:0px; padding:8px 0 0 8px; font-size:12px; font-weight:bold;}
.briz_normal_content{ margin:0px; padding:8px 0 8px 8px; font-size:12px;}
.recent_profile{ margin:0px; padding:8px 0 0 8px; font-size:16px; color:#000; font-weight:bold;}
.p_content{margin:0px; padding:10px 0px 15px 8px; font-size:12px;}
.pcheckbox{ margin-top:10px; padding:0px; float:left;}
.chose_picture{ margin:12px 0 0 8px; padding:0px;  border: solid 1px #dcdcdc; color:#000; width:340px; }
.logout{padding: 2px; color: #fff; background: #000;}
.share_photo{margin:10px 0px 0px 0px; border:1px solid #cecece; background:#CCE9F3; width:165px; padding:10px 0px 10px 0px;}
.share_photo_one{margin:10px 0px 0px 10px; border:1px solid #cecece; background:#CCE9F3; width:338px; padding:10px 0px 10px 0px;}
.shre_bld{font-size:12px; font-weight:bold; font-family:Tahoma; padding:0px 0px 0px 20px; color:#000; border-bottom:1px solid #003333;}
.shrphoto{padding:5px 0px 0px 0px; text-align:center;}
.shrphoto a{font-family:Tahoma; font-size:12px; font-weight:bold; color:#0054A6; text-decoration:none;}
.shrphoto a:hover{text-decoration:underline;}
/***********************registration css end's***************/
</style>
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

<div class="share_photo">
<div class="shre_bld">Share Your Moment</div>
<div class="shrphoto"><a href="index.php/share-photo">Share Photo</a></div>
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
$sql = "SELECT * FROM `#__k2_items` WHERE `created_by` ='".$user_id."' and catid='4'"; 
		$db->setQuery($sql);
        $res = $db->loadObjectList();
#		print_r($res);
		if($res):
		foreach($res as $value){
?>

<div class="shrphoto"><a href="index.php/share-your-photo/item/<?php print_r($value->id)."-".$value->alias;?>" style="padding-left:10px;"><?php print_r($value->title); ?></a></div>
<?php } endif;?>
</div>

<div class="clr"></div>


</div>
<div class="clr"></div>

</div>