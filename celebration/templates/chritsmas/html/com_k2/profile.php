<style>input{color:black!important}</style>
<?php

/**

 * @version		$Id: profile.php 1206 2011-10-17 21:09:08Z joomlaworks $

 * @package		K2

 * @author		JoomlaWorks http://www.joomlaworks.gr

 * @copyright	Copyright (c) 2006 - 2011 JoomlaWorks Ltd. All rights reserved.

 * @license		GNU/GPL license: http://www.gnu.org/copyleft/gpl.html

 */



// no direct access

defined('_JEXEC') or die('Restricted access');

?>



<script type="text/javascript" src="jquery-1.6.4.min.js"></script>

<script type="text/javascript">

$(document).ready(function(){

  $("div.toogle").click(function(){

    $("div.pwd").toggle(600);

  });

});

</script>

<!--<div id="" style="cursor:auto"><a style="cursor:pointer;" class="toogle" >click</a></div>

<div class="pwd" style="display:none;">This is a paragraph.</div>-->



<!-- K2 user profile form -->

<div class="profilemain">

<form action="<?php echo JURI::root(true); ?>/index.php" enctype="multipart/form-data" method="post" name="userform" autocomplete="off" class="form-validate">

<div id="k2Container" class="k2AccountPage">

<div class="pageheading"><?php echo JText::_('K2_ACCOUNT_DETAILS'); ?> </div>

<div class="inputname">	<label for="username"><?php echo JText::_('K2_USER_NAME'); ?> :</label></div>

<div class="inputtxtbld"><?php echo $this->user->get('username'); ?></div>

<div class="clr"></div>

<div class="inputname"><label id="namemsg" for="name"><?php echo JText::_('K2_NAME'); ?> :</label></div>

<div class="inputtxtbld"><input type="text" name="<?php echo $this->nameFieldName; ?>" id="name" size="40" value="<?php echo $this->escape($this->user->get( 'name' )); ?>" class="inputbox required" maxlength="50" /></div>

<div class="clr"></div>

<div class="inputname"><label id="emailmsg" for="email"><?php echo JText::_('K2_EMAIL'); ?></label> :</label></div>

<div class="inputtxtbld"><input type="text" id="email" name="<?php echo $this->emailFieldName; ?>" size="40" value="<?php echo $this->escape($this->user->get( 'email' )); ?>" class="inputbox required validate-email" maxlength="100" /></div>

<div class="clr"></div>

<?php if(version_compare(JVERSION, '2.5', 'ge')): ?>

<div class="inputname"><label id="email2msg" for="email2"><?php echo JText::_('K2_CONFIRM_EMAIL'); ?></label> :</div>

<div class="inputtxtbld"><input type="text" id="email2" name="jform[email2]" size="40" value="<?php echo $this->escape($this->user->get( 'email' )); ?>" class="inputbox required validate-email" maxlength="100" /></div>
<?php endif; ?>



<div class="clr"></div>

<div class="pwd" style="display:block;">

<div class="inputname"><label id="pw2msg" for="password2">New Password (optional):</label></div>

<div class="inputtxtbld"><input class="inputbox validate-password" type="password" id="password" name="<?php echo $this->passwordFieldName; ?>" size="40" value="" /></div>

<div class="clr"></div>

<div class="inputname"><label id="pw2msg" for="password2"><?php echo JText::_('K2_VERIFY_PASSWORD'); ?> (optional):</label></div>

<div class="inputtxtbld"><input class="inputbox validate-passverify" type="password" id="password2" name="<?php echo $this->passwordVerifyFieldName; ?>" size="40" value="" /></div>

<div class="clr"></div>

</div>

<div class="personal" style="margin-top:15px;"><?php //echo JText::_('K2_PERSONAL_DETAILS'); ?></div>

<div class="inputname"><label id="gendermsg" for="gender"><?php echo JText::_('K2_GENDER'); ?> :</label></div>

<div class="inputtxt"><?php echo $this->lists['gender']; ?></div>

<div class="clr"></div>

<div style="display:none; margin-top:6px;"><label id="descriptionmsg" for="description"><?php echo JText::_('K2_DESCRIPTION'); ?></label><span style="padding-left:4px;"><?php echo $this->editor; ?></span>

</div>

<div class="inputname"><label id="imagemsg" for="image"><?php echo JText::_( 'K2_USER_IMAGE_AVATAR' ); ?> :</label></div>

<div class="inputtxt"><input type="file" id="image" name="image"/>
					<?php if ($this->K2User->image): ?>
					<img class="k2AccountPageImage" src="<?php echo JURI::root(true).'/media/k2/users/'.$this->K2User->image; ?>" alt="<?php echo $this->user->name; ?>" />
					<input type="checkbox" name="del_image" id="del_image" />
					<label for="del_image"><?php echo JText::_('K2_CHECK_THIS_BOX_TO_DELETE_CURRENT_IMAGE_OR_JUST_UPLOAD_A_NEW_IMAGE_TO_REPLACE_THE_EXISTING_ONE'); ?></label>
					<?php endif; ?></div>

<div class="clr"></div>

<div class="inputname"><label id="urlmsg" for="url">Mobile :</label></div>

<div class="inputtxt"><input type="text" size="40" value="<?php echo $this->K2User->url; ?>" name="url" id="url"/></div>

<div class="clr"></div>

<div class="inputname">&nbsp;</div>

<div class="inputtxt">

<button class="button validate buttonsave" style="margin-left:0px;" type="submit" onclick="submitbutton( this.form );return false;">

<?php echo JText::_('K2_SAVE'); ?>

</button>

</div>

<div class="clr"></div>

<table class="admintable" cellpadding="0" cellspacing="0">

<?php if(count(array_filter($this->K2Plugins))): ?>

			<!-- K2 Plugin attached fields -->

			<tr>

				<th colspan="2" class="k2ProfileHeading">

					<?php echo JText::_('K2_ADDITIONAL_DETAILS'); ?>

				</th>

			</tr>

			<?php foreach($this->K2Plugins as $K2Plugin): ?>

			<?php if(!is_null($K2Plugin)): ?>

			<tr>

				<td colspan="2">

					<?php echo $K2Plugin->fields; ?>

				</td>

			</tr>

			<?php endif; ?>

			<?php endforeach; ?>

			<?php endif; ?>

			<?php if(isset($this->params) && K2_JVERSION=='15'): ?>

			<tr>

				<th colspan="2" class="k2ProfileHeading">

					<?php echo JText::_('K2_ADMINISTRATIVE_DETAILS'); ?>

				</th>

			</tr>

			<tr>

				<td colspan="2" id="userAdminParams">

					<?php echo $this->params->render('params'); ?>

				</td>

			</tr>

			<?php endif; ?>

		</table>

		

	</div>

	<input type="hidden" name="<?php echo $this->usernameFieldName; ?>" value="<?php echo $this->user->get('username'); ?>" />
	<input type="hidden" name="<?php echo $this->idFieldName; ?>" value="<?php echo $this->user->get('id'); ?>" />
	<input type="hidden" name="gid" value="<?php echo $this->user->get('gid'); ?>" />
	<input type="hidden" name="option" value="<?php echo $this->optionValue; ?>" />
	<input type="hidden" name="task" value="<?php echo $this->taskValue; ?>" />
	<input type="hidden" name="K2UserForm" value="1" />
	<?php echo JHTML::_( 'form.token' ); ?>
</form>

</div>