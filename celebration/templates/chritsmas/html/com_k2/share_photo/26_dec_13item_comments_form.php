<?php
/**
 * @version		$Id: item_comments_form.php 1492 2012-02-22 17:40:09Z joomlaworks@gmail.com $
 * @package		K2
 * @author		JoomlaWorks http://www.joomlaworks.net
 * @copyright	Copyright (c) 2006 - 2012 JoomlaWorks Ltd. All rights reserved.
 * @license		GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

?>

<h3 style="font-size:20px; color:#000; font-weight:normal"><?php echo JText::_('K2_LEAVE_A_COMMENT') ?></h3>

<?php if($this->params->get('commentsFormNotes')): ?>
<p class="itemCommentsFormNotes" style="font-size:12px; color:#000; font-weight:normal">
	<?php if($this->params->get('commentsFormNotesText')): ?>
	<?php echo nl2br($this->params->get('commentsFormNotesText')); ?>
	<?php else: ?>
	<?php echo JText::_('K2_COMMENT_FORM_NOTES') ?>
	<?php endif; ?>
</p>
<?php endif; ?>

<form action="<?php echo JRoute::_('index.php'); ?>" method="post" name="comment-form" id="comment-form" class="form-validate">

	<div class="box_comment_detail" style="text-align:left; padding:4px 0 0 13px;"><label class="formName" for="userName"><?php echo JText::_('K2_NAME'); ?> *</label></div>
	<div class="box_field_detail" style="margin-top:18px;">	<input class="box_input_detail" type="text" name="userName" id="useName" value="<?php echo JText::_('K2_ENTER_YOUR_NAME'); ?>" onblur="if(this.value=='') this.value='<?php echo JText::_('K2_ENTER_YOUR_NAME'); ?>';" onfocus="if(this.value=='<?php echo JText::_('K2_ENTER_YOUR_NAME'); ?>') this.value='';" />
</div>
	<div class="clr"></div>

		<div class="box_comment_detail"  style="text-align:left; padding:1px 0 0 13px;">	<label class="formEmail" for="commentEmail"><?php echo JText::_('K2_EMAIL'); ?> *</label>
</div>
	<div class="box_field_detail" style="margin-top:14px;">	<input class="box_input_detail" type="text" name="commentEmail" id="comentEmail" value="<?php echo JText::_('K2_ENTER_YOUR_EMAIL_ADDRESS'); ?>" onblur="if(this.value=='') this.value='<?php echo JText::_('K2_ENTER_YOUR_EMAIL_ADDRESS'); ?>';" onfocus="if(this.value=='<?php echo JText::_('K2_ENTER_YOUR_EMAIL_ADDRESS'); ?>') this.value='';" />

</div>
	<div class="clr"></div>


	<div class="box_comment_detail"  style="text-align:left; padding:9px 0 0 13px; "><label for="commentText"><?php echo JText::_('K2_MESSAGE'); ?> *</label></div>
	<div class="box_field_detail" style="margin-top:14px;"><textarea  class="comment_txt" style="width: 302px;
height: 137px;" onblur="if(this.value=='') this.value='<?php echo JText::_('K2_ENTER_YOUR_MESSAGE_HERE'); ?>';" onfocus="if(this.value=='<?php echo JText::_('K2_ENTER_YOUR_MESSAGE_HERE'); ?>') this.value='';" name="commentText" id="commentText" style="font-weight:normal; font-size:12px; color:#000;"><?php echo JText::_('K2_ENTER_YOUR_MESSAGE_HERE'); ?></textarea></div>
	<div class="clr"></div>
	
	<?php if($this->params->get('recaptcha') && $this->user->guest): ?>
	<label class="formRecaptcha"><?php echo JText::_('K2_ENTER_THE_TWO_WORDS_YOU_SEE_BELOW'); ?></label>
	<div id="recaptcha"></div>
	<?php endif; ?>
    
     
     <div class="submit" style="float:left; margin:0px; padding:0px;">
     
     <input type="image" src="images/submit_button.jpg" class="button" style="padding:0px; background:none; border:0px; margin:8px 0px 0px 140px;" id="submitCommentButton" value="<?php //echo JText::_('K2_SUBMIT_COMMENT'); ?> " />
</div>
  <div class="reset" style="float:left; margin:8px 0 0 18px;"><button type="reset" style="background:url(images/reset_button.jpg);width: 65px;height: 30px;border: none;" /></button></div>
  <div class="clr"></div>
	<span id="formLog"></span>

	<input type="hidden" name="option" value="com_k2" />
	<input type="hidden" name="view" value="item" />
	<input type="hidden" name="task" value="comment" />
	<input type="hidden" name="itemID" value="<?php echo JRequest::getInt('id'); ?>" />
	<?php echo JHTML::_('form.token'); ?>
</form>