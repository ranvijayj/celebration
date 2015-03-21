<?php
/**
 * @version		$Id: register.php 1492 2012-02-22 17:40:09Z joomlaworks@gmail.com $
 * @package		K2
 * @author		JoomlaWorks http://www.joomlaworks.net
 * @copyright	Copyright (c) 2006 - 2012 JoomlaWorks Ltd. All rights reserved.
 * @license		GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

?>
<script>
function validation()
{
	var username=document.getElementById('username').value;
	var name=document.getElementById('name').value;
	var password=document.getElementById('password').value;
	var email=document.getElementById('email').value;
	re = /^[A-Za-z\s]+$/;
	re_3= /^[A-Za-z\_]+[0-9]*$/;
	var re_2=/[^.[0-9]]*/;
	if(document.getElementById('name').value==""){
	alert('Please Enter your Name.');
	document.getElementById('name').focus();
	document.getElementById('name').value="";
	return false;
	}	
		if(!re.test(name))
		{
		alert('Numbers ,Spaces and Special character are not allowed.');
		document.getElementById('name').focus();
		document.getElementById('name').value="";
		return false;
		}
	
		if(document.getElementById('username').value==""){
		alert('Please Enter Username.');
		document.getElementById('username').focus();
		document.getElementById('username').value="";
		return false;
		}
		
		if(!re_3.test(username))
		{
		alert('Username may contain letters, numbers, or underscore. \n\n No space allowed.');
		document.getElementById('username').focus();
		document.getElementById('username').value="";
		return false;
		}
		
	var re_1 = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(!re_1.test(email)){
		alert("please enter correct email address");
		document.getElementById('email').focus();
		document.getElementById("email").value="";
		return false;
		}
	if(email!=document.getElementById('email2').value)
	{
		alert("please enter same as email");
		document.getElementById('email2').focus();
		document.getElementById("email2").value="";
		return false;
		}	

		if(password=="" || document.getElementById('password').value.length<6)
		{
			alert("please enter password more than six value");
			document.getElementById('password').focus();
			document.getElementById("password").value="";
			return false;
			}
			
		if(password!=document.getElementById('password2').value)
		{
			alert("please enter same password .");
			document.getElementById('password2').focus();
			document.getElementById("password2").value="";
			return false;
			}
			
/*var fup = document.getElementById('image');
var fileName = fup.value;
var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
if(ext == "gif" || ext == "GIF" || ext == "JPEG" || ext == "jpeg" || ext == "jpg" || ext == "JPG" || ext == "png" || ext == "PNG")
{
<!--return true;-->
} 
else
{
alert("Upload Gif, Png or Jpg images only");
fup.focus();
fup.value="";
return false;
} */   
		
	if(re_2.test(document.getElementById('url').value))
	{
		alert("Please enter numeric value only");
		document.getElementById('url').focus();
		document.getElementById("url").value="";
		return false;
		}		
		
		
	if(document.getElementById('url').value.length<10 || document.getElementById('url').value.length>10 )
	{
		alert("please enter more than 10 numeric value");
		document.getElementById('url').focus();
		document.getElementById("url").value="";
		return false;
		}
		
		

		
	}
</script>
<div class="breadcrumbs" style="margin: 7px 0px 0px -11px;">
<a href="/celebrat/" class="pathway">Home</a> <img src="media/system/images/arrow.png" alt=""> <span>User Register</span></div>
<!-- K2 user register form -->
<?php if(isset($this->message)) $this->display('message'); ?>

<form action="<?php echo JRoute::_('index.php'); ?>"  onsubmit="return validation();" enctype="multipart/form-data" method="post" id="josForm" name="josForm">
	
	
<div id="k2Container" class="k2AccountPage">
<div class="login_form">
<h1 class="plan_your_title">User Register</h1>
<div class="login_box">
<div class="inptnam"><label id="namemsg" for="name"><?php echo JText::_('K2_NAME'); ?></label></div>
<div class="field_box"><input type="text" name="<?php echo $this->nameFieldName; ?>" id="name" size="40" value="<?php echo $this->escape($this->user->get( 'name' )); ?>" class="inputbox required input_box" maxlength="50" /> *</div>
<div class="clr"></div>	
<div class="inptnam"><label id="usernamemsg" for="username"><?php echo JText::_('K2_USER_NAME'); ?></label></div>
<div class="field_box"><input type="text" id="username" name="<?php echo $this->usernameFieldName; ?>" size="40" value="<?php echo $this->escape($this->user->get( 'username' )); ?>" class="inputbox required validate-username input_box" maxlength="25" /> *</div>
<div class="clr"></div>	
<div class="inptnam"><label id="emailmsg" for="email"><?php echo JText::_('K2_EMAIL'); ?></label></div>
<div class="field_box"><input type="text" id="email" name="<?php echo $this->emailFieldName; ?>" size="40" value="<?php echo $this->escape($this->user->get( 'email' )); ?>" class="inputbox required validate-email input_box" maxlength="100" />
*</div>

<div class="clr"></div>
<?php if(version_compare(JVERSION, '1.6', 'ge')): ?>	
<div class="inptnam"><label id="email2msg" for="email2"><?php echo JText::_('K2_CONFIRM_EMAIL'); ?></label></div>
<div class="field_box"><input type="text" id="email2" name="jform[email2]" size="40" value="" class="inputbox required validate-email input_box" maxlength="100" /> *</div>
<?php endif; ?>
<div class="clr"></div>	
<div class="inptnam"><label id="pwmsg" for="password"><?php echo JText::_('K2_PASSWORD'); ?></label></label></div>
<div class="field_box"><input class="inputbox required validate-password input_box" type="password" id="password" name="<?php echo $this->passwordFieldName; ?>" size="40" value="" /> *</div>
<div class="clr"></div>	
<div class="inptnam"><label id="pw2msg" for="password2"><?php echo JText::_('K2_VERIFY_PASSWORD'); ?></label></div>
<div class="field_box"><input class="inputbox required validate-passverify input_box" type="password" id="password2" name="<?php echo $this->passwordVerifyFieldName; ?>" size="40" value="" /> *</div>
<div class="clr"></div>
<div class="geninpt"><label id="gendermsg" for="gender"><?php echo JText::_('K2_GENDER'); ?></label></label></div>
<div class="field_box"><?php echo $this->lists['gender']; ?></div>
<div class="clr"></div>	
<div class="inptnam"><label id="imagemsg" for="image"><?php echo 'User Image' ?></label></div>
<div class="field_box"><input type="file" id="image" name="image"/>
					<?php if ($this->K2User->image): ?>
					<img class="k2AdminImage" src="<?php echo JURI::root().'media/k2/users/'.$this->K2User->image; ?>" alt="<?php echo $this->user->name; ?>" />
					<input type="checkbox" name="del_image" id="del_image" />
					<label for="del_image"><?php echo JText::_('K2_CHECK_THIS_BOX_TO_DELETE_CURRENT_IMAGE_OR_JUST_UPLOAD_A_NEW_IMAGE_TO_REPLACE_THE_EXISTING_ONE'); ?></label>
					<?php endif; ?> </div>
<div class="clr"></div>	
<div class="inptnam"><label id="urlmsg" for="url">Mobile</label></label></div>
<div class="field_box"><input type="text" class="input_box" value="<?php echo $this->K2User->url; ?>" name="url" id="url"/></div>
<div class="clr"></div>	
<?php if($this->K2Params->get('recaptchaOnRegistration') && $this->K2Params->get('recaptcha_public_key')): ?>
		<label class="formRecaptcha"><?php echo JText::_('K2_ENTER_THE_TWO_WORDS_YOU_SEE_BELOW'); ?></label>
		<div id="recaptcha"></div>
		<?php endif; ?>
		
		<div class="k2AccountPageNotice" style="font-size: 12px; margin-left: 131px;"><?php echo JText::_('K2_REGISTER_REQUIRED'); ?></div>
		<div class="submit_btn">
		<div class="k2AccountPageUpdate" style="border:0px; text-align:justify; margin:0px; padding:0px;">
			<button class="button submit" type="submit" style="text-align:justify;  margin:0px; font-size:18px">
				<?php echo "Submit"; ?>
			</button>
		</div>
		</div>
		
		
	</div>
	</div>
	</div>
	<input type="hidden" name="option" value="<?php echo $this->optionValue; ?>" />
	<input type="hidden" name="task" value="<?php echo $this->taskValue; ?>" />
	<input type="hidden" name="id" value="0" />
	<input type="hidden" name="gid" value="0" />
	<input type="hidden" name="K2UserForm" value="1" />
	<?php echo JHTML::_( 'form.token' ); ?>
</form>
		
		
		
