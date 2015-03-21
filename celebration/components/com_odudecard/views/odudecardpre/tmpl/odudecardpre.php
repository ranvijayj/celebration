<?php defined('_JEXEC') or die('Restricted access');
$doc =& JFactory::getDocument();
$doc->setMetaData( 'generator', 'ODude.com Ecard System' );
//$params = &JComponentHelper::getParams( 'com_odudecard' );
//$component = JComponentHelper::getComponent( 'com_odudecard' );
//$params = new JParameter( $component->params );
JHTML::_('behavior.formvalidation');
JHTML::stylesheet('default.css', 'components/com_odudecard/include/');
require_once ( JPATH_BASE .DS.'components'.DS.'com_odudecard'.DS.'include'.DS.'lib.php' );
$setting=getSetting();
?>
<style>
.submit_card{color: black;width: 130px;padding: 2px;}</style>

  <style type="text/css">
.box {
	background-image: url(<?php echo JURI::root() ?>images/ecard/<?php echo $this->cate_bg ?>);
	border: 1px solid <?php echo $this->a2 ?>;
	float:none;
	height:685px; width:610px;
}




</style>

<script language="javascript">
function myValidate(f) {
        if (document.formvalidator.isValid(f)) {
                f.check.value='<?php echo JUtility::getToken(); ?>';//send token
                return true; 
        }
        else {
                alert('<?php echo JText::_('COM_ODUDECARD_ECARD_ERROR'); ?>');
        }
        return false;
}

Window.onDomReady(function() {
        document.formvalidator.setHandler('birth', function(value) {
                regex=/^\d{4}(-\d{2}){2}$/;
                return regex.test(value);
        })
})

</script>


<?php 

	if($this->cate_banner!="")
	echo "<center><img src=\"".JURI::base()."images/ecard/".$this->cate_banner."\" alt=\"".$this->cate_name."\"  /></center>";

          if($setting->import!='0')
		  {
          $recipients= JRequest::getVar('recipients', '', 'post', 'string', JREQUEST_ALLOWRAW);
          }
          else
          {
           $recipients= "";
          }

          if($setting->add_rec!='0')
		  {
          $rec_no=$_POST["rec_no"];
          }
          else
          {
          $rec_no=1;
          }
if($rec_no>50)
$rec_no=50;
//$params = &JComponentHelper::getParams( 'com_odudecard' );
//$component = JComponentHelper::getComponent( 'com_odudecard' );
//$params = new JParameter( $component->params );


$user =& JFactory::getUser();


   
?>
<div class="box" >
  <div class=bar align="center">&nbsp;</div>

 <form id='myForm' action="<?php echo JRoute::_("index.php?option=com_odudecard&amp;controller=odudecardsend");?>" method="post" class="form-validate" onSubmit="return myValidate(this);">
 <table width="98%" border="0" cellspacing="2" cellpadding="2" class="odude_table">
  <tr>
    <td width="67%" align="left">
     <span class=bar><?php echo JText::_('COM_ODUDECARD_ECARD_TYPE_INFO'); ?> </span><div id=card2>
        <table width="391" border="0" cellspacing="2" cellpadding="2" class="fancy odude_table">
          <tr>
            <td width="213" align="left"><?php echo JText::_('COM_ODUDECARD_ECARD_YOUR_NAME'); ?>*</td>
            <td width="164">
              <input type="text" name="SN" id="SN" class="required" />
              </td>
            </tr>
          <tr>
            <td align="left"><?php echo JText::_('COM_ODUDECARD_ECARD_YOUR_EMAIL'); ?>*</td>
            <td><input type="hidden" name="check" value="post"/>

                          

              <input type="text" name="SE" id="SE" class="required validate-email"/>
            </td>
            </tr>
          <tr>
            <td align="left"><?php echo JText::_('COM_ODUDECARD_ECARD_SUBJECT'); ?>*</td>
            <td><input type="text" name="title" id="title" class="required" /></td>
            </tr>
          </table></div>
      <input name="id" type="hidden" id="id" value="<?php echo JRequest::getVar('id', 0, 'request', 'int');  ?>" />
      <input name="cate" type="hidden" id="cate" value="<?php echo $this->cate;  ?>" />
         </td>
    <td width="33%" align="center"><img src="<?php  echo JURI::base().'images/ecard/'.$this->thumb;  ?>" hspace="2" vspace="2" border="1" /><br />
      <strong>
        <?php echo $this->title;  ?>
      </strong></td>
  </tr>
  <tr>
    <td colspan="2"><br><span class=bar><?php echo JText::_('COM_ODUDECARD_ECARD_MESSAGE'); ?></span><br />
 <textarea name="body" id="body" cols="50" rows="8" class="required"></textarea>

   <input name="send" type="hidden" id="send" value="<?php echo $this->send;  ?>" />

     <input name="point" type="hidden" id="point" value="<?php echo $this->point;  ?>" />
      </td>
  </tr>

  <tr>
    <td colspan="2">
    <table border="0" width="10%" class="fancy odude_table">
     <tr><th><?php echo JText::_('COM_ODUDECARD_ECARD_SNO'); ?></th><th><?php echo JText::_('COM_ODUDECARD_ECARD_REC'); ?> </th><th><?php echo JText::_('COM_ODUDECARD_ECARD_REC_EMAIL'); ?></th></tr>
      <br>
    <span class=bar><?php echo JText::_('COM_ODUDECARD_ECARD_ENTER_REC_DETAILS'); ?></span><br />
      <?php
                       if (!empty($recipients))
                      {
                      $res1 = preg_match_all( "/\"(.*?)\"/", $recipients,   $matches1  );
                      $res = preg_match_all(
                      "/[a-z0-9]+([_\\.-][a-z0-9]+)*@([a-z0-9]+([\.-][a-z0-9]+)*)+\\.[a-z]{2,}/i",
                      $recipients,  $matches  );
                      $k=0;
                      if ($res)
                      {
                       foreach(array_unique($matches[0]) as $email)
	                   {
                       $k++;

                       if(isset($matches1[0][$k-1]))
                       {
                       if (ereg('@', $matches1[0][$k-1]))
                       {
                       $names="";
                       }
                       else
                        {
                        $names= str_replace('"', '', $matches1[0][$k-1]);
                        }
                      }
                      else
                      {
                        $names="";
                      }
	                   echo "<tr><td>".$k."</td><td > <input type=text name=name[] id=name[] value=\"".$names."\" /></td><td><input type=text name=email[] id=email[] class=email size=50 value=\"".$email."\" /></td></tr>";
                       }
                     }
                      else
                      {
                      //echo "No emails found.";
                      }
                     }
	//echo $rec_no;
	for($x=1;$x<=$rec_no;$x++)
	{
	
 echo "<tr><td>#</td><td> <input type=text name=name[] id=name[]  /></td><td><input type=text name=email[] id=email[] class=email /></td></tr>";
                      	}
	?>
    </table>
       </td>
    </tr>

  
 
  <tr>
    <td colspan="2"> <br>
    
      <input type="submit" name="button" id="button" class="submit_card" value="<?php echo JText::_('COM_ODUDECARD_ECARD_SEND_ECARD'); ?>" class="button"/>
      </td>
    </tr>
 
  </table>


 </form>

</div>