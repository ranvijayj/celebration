<?php /*?><style>
dt.message{ color:#990000 ; font-size:13px;font-family: Tahoma; line-height: 18px;}
dt.error{ color:#990000; font-size:13px;font-family: Tahoma; line-height: 18px;}
dd.message{ color:#990000 ; font-size:13px;font-family: Tahoma; line-height: 18px;}
</style>
<?php */?>
<script type="text/javascript">
function displaymessage()
{
var username 	    = document.login.username.value;
var password 	    = document.login.password.value;
			var chars=/^[a-zA-Z0-9\_\.]+$/
if((username=="")||(username=="username")){	
				alert("Please enter your Username");
				document.login.username.focus();
				return false;
			}
else if((password=="")||(password=="password")){	
				alert("Please enter your password");
				document.login.pass.focus();
				return false;
			}

			else if(!username.match(chars)){	
				alert("invalid username");
				document.login.username.focus();
				return false;
			}
			else if(password.length <6 || password.length >25)
			{alert("Password must be 6-25 characters only");
				document.login.username.focus();
				return false;}
				
}
</script>
<a href="#id=12"></a>
<?php
/**
 * @package		Joomla.Site
 * @subpackage	com_users
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 * @since		1.5
 */

defined('_JEXEC') or die;
JHtml::_('behavior.keepalive');
?>
<?php if (($this->params->get('logindescription_show') == 1 && str_replace(' ', '', $this->params->get('login_description')) != '') || $this->params->get('login_image') != '') : ?>
	<div class="login-description">
	<?php endif ; ?>

		<?php if($this->params->get('logindescription_show') == 1) : ?>
			<?php echo $this->params->get('login_description'); ?>
		<?php endif; ?>

		<?php if (($this->params->get('login_image')!='')) :?>
			<img src="<?php echo $this->escape($this->params->get('login_image')); ?>" class="login-image" alt="<?php echo JTEXT::_('COM_USER_LOGIN_IMAGE_ALT')?>"/>
		<?php endif; ?>

	<?php if (($this->params->get('logindescription_show') == 1 && str_replace(' ', '', $this->params->get('login_description')) != '') || $this->params->get('login_image') != '') : ?>
	</div>
	<?php endif ; ?>
<div id="login" style="margin:10px 0px 10px 0px;"></div>	
<div class="login_main">
<h1 class="login_title">User Login </h1>
<form action="<?php echo JRoute::_('index.php?option=com_users&task=user.login'); ?>" method="post" name="login" onSubmit="return displaymessage()">
<div class="login_row">
<div class="login_username">Username</div>
<div class="login_input">
<input type="text" name="username"   class="validate-username login_input_box" value="">
</div>
<div class="flexi"></div>
<div class="login_forgot"><a href="<?php echo JRoute::_('index.php?option=com_users&view=remind'); ?>">forgot your username?</a></div>
</div>

<div class="login_row">
<div class="login_username">Password</div>
<div class="login_input">

<input type="password" name="password"  class="validate-password login_input_box">

</div>
<div class="flexi"></div>
<div class="login_forgot"><a href="<?php echo JRoute::_('index.php?option=com_users&view=reset'); ?>">forgot your password?</a></div>
</div>
<div class="login_button_btn">
<button type="submit" class="button login_button" style="cursor:pointer;" name="submit">Login</button>
			<input type="hidden" name="return" value="<?php echo base64_encode($this->params->get('login_redirect_url', $this->form->getValue('return'))); ?>" />
			<?php echo JHtml::_('form.token'); ?>

</div>
<div class="flexi"></div>
</div>
</form>
<div id="12"></div>


