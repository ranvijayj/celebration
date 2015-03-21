<?php defined('_JEXEC') or die('Restricted access'); ?>
<?php
 require_once ( JPATH_SITE .DS.'components'.DS.'com_odudecard'.DS.'include'.DS.'lib.php' );
 JHTML::stylesheet('default.css', 'components/com_odudecard/include/');	  
$setting=getSetting();
$u =& JURI::getInstance();
if(substr(decoct(fileperms(JPATH_ROOT.DS.'images'.DS.'ecard'.DS)),3)=='77')
echo "<b>Image Path</b> --- Images are stored inside ".JPATH_ROOT.DS.'images'.DS.'ecard'.DS;
else
echo JPATH_ROOT.DS.'images'.DS.'ecard'.DS." is <b>not writable</b>. <font color=red>Please set chomod 777</font>";

echo "<br><br><b>Facebook Ifrme Convas URL</b> :  ".JURI::root()."index.php?option=com_odudecard&view=facebook&format=raw" ;

echo "<br><br><b>Default CSS File</b> : ".JPATH_SITE .DS.'components'.DS.'com_odudecard'.DS.'include'.DS.'default.css' ;

echo "<br><br><b>Location of watermark.png</b> : ".JPATH_SITE .DS.'components'.DS.'com_odudecard'.DS.'include'.DS.'watermark.png' ;
$odude_profile=JPATH_ROOT.DS.'components'.DS.'com_odudecard'.DS.'views'.DS.'facebook'.DS;
if (!file_exists($odude_profile."view.raw.php"))
{
  echo "<br><BR><font color=red>ODude Ecard Facebook Apps Not installted. Get it from www.ODude.com</font>";
}

?>
<form action="index.php" method="post" name="adminForm" id="adminForm">
<div class="col width-40">
	<fieldset class="adminform">
		<legend><?php echo JText::_( 'Details' ); ?></legend>

		<table class="admintable"  width="100%">
		
   
    <tr>
			<td width="100" align="right" class="key">
				<label for="name">
					<?php echo JText::_( 'Enable Point' ); ?>:
				</label>
			</td>
			<td>
			Buy Ecard PRO
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
				<label for="name">
					<?php echo JText::_( 'Member Restriction' ); ?>:
				</label>
			</td>
			<td>
			Buy Ecard PRO 
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
				<label for="name">
					<?php echo JText::_( 'Captcha' ); ?>:
				</label>
			</td>
			<td>
			Buy Ecard PRO 
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
				<label for="name">
					<?php echo JText::_( 'Watermark' ); ?>:
				</label>
			</td>
			<td>
	Buy Ecard PRO 
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
				<label for="name">
					<?php echo JText::_( 'Share / Bookmark' ); ?>:
				</label>
			</td>
			<td>
		<input name="share" id="share" value="1" type="radio" <?php echo ($setting->share==1) ? "checked" : "" ?>> Enable <input name="share"  id="share"  value="0" type="radio" <?php echo ($setting->share==0) ? "checked" : "" ?>> Disable 
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
				<label for="name">
					<?php echo JText::_( 'Import Contact' ); ?>:
				</label>
			</td>
			<td>
	Buy Ecard PRO 
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
				<label for="name">
					<?php echo JText::_( 'Add no. of Receiver' ); ?>:
				</label>
			</td>
			<td>
	Buy Ecard PRO 
			</td>
		</tr>
    <tr>
			<td width="100" align="right" class="key">
				<label for="name">
					<?php echo JText::_( 'Days to expire' ); ?>:
				</label>
			</td>
			<td>
			Buy Ecard PRO
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
				<label for="name">
					<?php echo JText::_( 'Facebook Ecard A1' ); ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="a1" id="a1" size="10" maxlength="7" value="<?php echo $this->odudecard->a1;?>" />
			</td>
		</tr>
		 <tr>
			<td width="100" align="right" class="key">
				<label for="name">
					<?php echo JText::_( 'Border Color A2' ); ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="a2" id="a2" size="10" maxlength="7" value="<?php echo $this->odudecard->a2;?>" />
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
				<label for="name">
					<?php echo JText::_( 'Facebook Ecard A3' ); ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="a3" id="a3" size="10" maxlength="7" value="<?php echo $this->odudecard->a3;?>" />
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
				<label for="name">
					<?php echo JText::_( 'Facebook Ecard A4' ); ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="a4" id="a4" size="10" maxlength="7" value="<?php echo $this->odudecard->a4;?>" />
			</td>
		</tr>
     <tr>
			<td width="100" align="right" class="key">
				<label for="name">
					<?php echo JText::_( 'Facebook Application ID' ); ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="fbappid" id="fbappid" size="32" maxlength="250" value="<?php echo $this->odudecard->fbappid;?>" />
			</td>
		</tr>
     <tr>
			<td width="100" align="right" class="key">
				<label for="name">
					<?php echo JText::_( 'Facebook API Key' ); ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="fbapikey" id="fbapikey" size="32" maxlength="250" value="<?php echo $this->odudecard->fbapikey;?>" />
			</td>
		</tr>
     <tr>
			<td width="100" align="right" class="key">
				<label for="name">
					<?php echo JText::_( 'Facebook API Secret key' ); ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="fbapisecret" id="fbapisecret" size="32" maxlength="250" value="<?php echo $this->odudecard->fbapisecret;?>" />
			</td>
		</tr>
     <tr>
			<td width="100" align="right" class="key">
				<label for="name">
					<?php echo JText::_( 'Facebook Convas URL' ); ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="canvas_page" id="canvas_page" size="32" maxlength="250" value="<?php echo $this->odudecard->canvas_page;?>" />
			</td>
		</tr> 
    <tr>
			<td width="100" align="right" class="key">
				<label for="name">
					<?php echo JText::_( 'Facebook Cancel URL' ); ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="canvas_cancel_page" id="canvas_cancel_page" size="32" maxlength="250" value="<?php echo $this->odudecard->canvas_cancel_page;?>" />
			</td>
		</tr>
       
        
        		<tr>
			<td width="100" align="right" class="key">
				<label for="name">
					<?php echo JText::_( 'Card Per Row' ); ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="card_row" id="card_row" size="32" maxlength="250" value="<?php echo $this->odudecard->card_row;?>" />
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
				<label for="name">
					<?php echo JText::_( 'Card Per Page' ); ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="card_page" id="card_page" size="32" maxlength="250" value="<?php echo $this->odudecard->card_page;?>" />
			</td>
		</tr>
        		<tr>
			<td width="100" align="right" class="key">
				<label for="name">
					<?php echo JText::_( 'From Email' ); ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="from_email" id="from_email" size="32" maxlength="250" value="<?php echo $this->odudecard->from_email;?>" />
			</td>
		</tr>
        		<tr>
			<td width="100" align="right" class="key">
				<label for="name">
					<?php echo JText::_( 'From Name' ); ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="from_name" id="from_name" size="32" maxlength="250" value="<?php echo $this->odudecard->from_name;?>" />
			</td>
		</tr>
        		<tr>
			<td width="100" align="right" class="key">
				<label for="name">
					<?php echo JText::_( 'Subject Suffix' ); ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="subject_suffix" id="subject_suffix" size="32" maxlength="250" value="<?php echo $this->odudecard->subject_suffix;?>" />
			</td>
		</tr>

	</table>
	</fieldset>
</div>
<div class="clr"></div>

<input type="hidden" name="option" value="com_odudecard" />
<!-- Hidden field cat is set as same like in primary key at table -->
<input type="hidden" name="id" value="<?php echo $this->odudecard->id; ?>" />
<input type="hidden" name="task" value="" />
<input type="hidden" name="controller" value="odudecardsetting" />
</form>

<div class="col width-40">
  <fieldset class="adminform" >
  <legend>Current Settings Preview</legend>

			
				<div class="menu">

				  <div class="bar" align="center">Categories</div>
				  <ul>
				    <li>Sample 1</li>
                    <li><a href="#">Sample 2</a></li>
			      </ul>
    </div>
				<p>&nbsp;</p>
  </fieldset>
            </div>
