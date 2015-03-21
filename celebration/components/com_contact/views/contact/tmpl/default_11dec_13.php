<style>
.contcet_main{width:600px; padding:2px 0px 8px 8px; border:1px solid #cecece; margin-top:10px;}
.contect_head{margin:0px; padding-top:2px; font-size:16px; font-weight:bold;}
.contect_left{margin:0px; padding-top:4px; width:280px; border-right:0px solid #CCCCCC;}
.contect_txt{font-size:12px;}
.contect_num{font-size:12px; padding-top:8px; font-weight:bold;}
.contect_mail{padding-top:8px; font-size:12px;}
.contect_mail a{text-decoration:underline;  color:#0000FF; font-weight:bold;}
.cotect_right{width:500px; padding-top:15px; margin-top:18px; border-top:1px solid #ccc;}
.contect_input_nm{font-size:12px; font-weight:bold; padding-top:6px;}
.inptut{width:240px; padding-top:6px;}
.star{float:none;}
</style>


<?php
 /**
 * $Id: default.php 21321 2011-05-11 01:05:59Z dextercowley $
 * @package		Joomla.Site
 * @subpackage	com_contact
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
JHTML::_('behavior.formvalidation');
$cparams = JComponentHelper::getParams ('com_media');
//print_r($this->form);
?>
<?php /*?><script>
window.addEvent('domready', function(){
   document.formvalidator.setHandler('alpha', function(value) {
      regex=/^[a-zA-Z]+$/;
      return regex.test(value);
   });
});
</script><?php */?>

<script type="text/javascript">
function displaymessage()
{
var name = document.getElementById('jform_contact_name').value;
var email = document.getElementById('jform_contact_email').value;
var subject = document.getElementById('jform_contact_emailmsg').value;
var message = document.getElementById('jform_contact_message').value;

            var re = /^[A-Za-z]+$/;
                if(!re.test(name))
	   {
		alert("Please Enter character Only");
		document.getElementById('jform_contact_name').focus();
		document.getElementById("jform_contact_name").value="";
		return false;
		}
<?php /*?>if(name=='' )
{
alert("please enter name");
document.getElementById('jform_contact_name').focus();
return false;
}<?php */?>
 

 var re_1 = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(!re_1.test(email))
	   {
		alert("please enter correct email address");
		document.getElementById('jform_contact_email').focus();
		document.getElementById("jform_contact_email").value="";
		return false;
		}
		
	if(subject=="" || subject.length<3 && subject.length>25)
		{
			alert("please enter subject");
			document.getElementById('jform_contact_emailmsg').focus();
			document.getElementById("jform_contact_emailmsg").value="";
			return false;
			}
			
		if(message=="")
		{
			alert("please enter message");
			
				return false;
	    }
	
}
</script>

<div class="contcet_main">
<h1 class="contect_head">Contact us</h1>
<div class="contect_left">
<div class="contect_txt">We will love to here from you. You can reach us at</div>
<div class="contect_num">0120 479 2800</div>
<!--<div class="contect_mail"><a href="#">onamsupport@getit.co.in</a></div>-->
<div class="contect_num">A-13, Sector-63, Noida, Uttar Pradesh </div>
</div>
<div class="cotect_right">
<div class="contact-form">
	<form id="contact-form" action="<?php echo JRoute::_('index.php'); ?>" method="post" onsubmit="return displaymessage()">
		<fieldset style="border:none;"> 
			<div style="font-size:14px; font-weight:bold; margin-bottom:4px;">Get In Touch</div>
			<dl>
				<div class="contect_input_nm"><?php echo $this->form->getLabel('contact_name'); ?></div>
				<div class="inptut"><?php echo $this->form->getInput('contact_name'); ?></div>
				<div class="contect_input_nm"><?php echo $this->form->getLabel('contact_email'); ?></div>
				<div class="inptut"><?php echo $this->form->getInput('contact_email'); ?></div>
				<div class="contect_input_nm"><?php echo $this->form->getLabel('contact_subject'); ?></div>
				<div class="inptut"><?php echo $this->form->getInput('contact_subject'); ?></div>
				<div class="contect_input_nm"><?php echo $this->form->getLabel('contact_message'); ?></div>
				<div class="inptut"><?php echo $this->form->getInput('contact_message'); ?></div>
				<?php 	if ($this->params->get('show_email_copy')){ ?>
						<div style="font-size:12px; padding:2px 0px;"><?php echo $this->form->getLabel('contact_email_copy'); ?></div>
						<dd><?php echo $this->form->getInput('contact_email_copy'); ?></dd>
				<?php 	} ?>
			<?php //Dynamically load any additional fields from plugins. ?>
			     <?php foreach ($this->form->getFieldsets() as $fieldset): ?>
			          <?php if ($fieldset->name != 'contact'):?>
			               <?php $fields = $this->form->getFieldset($fieldset->name);?>
			               <?php foreach($fields as $field): ?>
			                    <?php if ($field->hidden): ?>
			                         <?php echo $field->input;?>
			                    <?php else:?>
			                         <dt>
			                            <?php echo $field->label; ?>
			                            <?php if (!$field->required && $field->type != "Spacer"): ?>
			                               <span class="optional"><?php echo JText::_('COM_CONTACT_OPTIONAL');?></span>
			                            <?php endif; ?>
			                         </dt>
			                         <dd><?php echo $field->input;?></dd>
			                    <?php endif;?>
			               <?php endforeach;?>
			          <?php endif ?>
			     <?php endforeach;?>
				<dt></dt>
				<dd><button class="button validate" type="submit"  name="task"  style="background:#000000; padding:5px; color:#FFFFFF"><?php echo "Submit" ?></button>
					<input type="hidden" name="option" value="com_contact" />
					<input type="hidden" name="task" value="contact.submit" />
					<input type="hidden" name="return" value="<?php echo $this->return_page;?>" />
					<input type="hidden" name="id" value="<?php echo $this->contact->slug; ?>" />
                    
					<?php echo JHtml::_( 'form.token' ); ?>
				</dd>
			</dl>
		</fieldset>
	</form>
</div>

</div>
<div class="clr"></div>
</div>