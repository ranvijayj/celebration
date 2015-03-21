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
JHtml::_('behavior.tooltip');
JHtml::_('behavior.formvalidation');
?>
<script type="text/javascript">
function info_msg()
{
var email = document.getElementById('jform_email').value;
var re_1 = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(!re_1.test(email))
	   {
		alert("please enter correct email address");
		document.getElementById('jform_email').focus();
		document.getElementById("jform_email").value="";
		return false;
		}
}

</script>
<div class="login_main">
<div class="reset<?php echo $this->pageclass_sfx?>">
<fieldset><?php if ($this->params->get('show_page_heading')) : ?>
	<h1 style="margin: 5px 0px 9px 8px;">
		Forget your Password
	</h1>
	<?php endif; ?>

	<form id="user-registration" action="<?php echo JRoute::_('index.php?option=com_users&task=reset.request'); ?>" method="post" onsubmit="return info_msg();">

		<div style="font-size:13px; font-family:Tahoma; line-height:17px;margin-left:7px;"><?php foreach ($this->form->getFieldsets() as $fieldset): ?>
		<?php echo JText::_($fieldset->label); ?></div>
			<dl>
			<?php foreach ($this->form->getFieldset($fieldset->name) as $name => $field): ?>
				<div style="float:left; font-size:13px; margin:18px 0px 0px 65px; font-family:Tahoma; font-weight:bold;"><?php echo $field->label; ?></div>
				<dd style="float:right;margin: -24px 249px 0px 0px;"><?php echo $field->input; ?></dd>
			<?php endforeach; ?>
			</dl>
		</fieldset>
		<?php endforeach; ?>

		<div>
		<div class="login_button_btn" style="margin:-19px 0px 0px 230px;">
			<button type="submit" class="login_button" style="cursor:pointer;"><?php echo JText::_('JSUBMIT'); ?></button>
			<?php echo JHtml::_('form.token'); ?>
		</div></div></fieldset>
	</form>
</div></div>
