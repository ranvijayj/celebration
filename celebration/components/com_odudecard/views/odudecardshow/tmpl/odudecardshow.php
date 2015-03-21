<?php defined('_JEXEC') or die('Restricted access'); ?>
<?php JHTML::_('behavior.formvalidation'); ?>
<style>
.submit_card{color: black;width: 130px;padding: 2px;}</style>
<?php
require_once ( JPATH_BASE .DS.'components'.DS.'com_odudecard'.DS.'include'.DS.'lib.php' );	  
$setting=getSetting();
jimport('joomla.html.parameter');
$doc =& JFactory::getDocument();
$doc->setMetaData( 'Description', $this->desp );
$doc->setMetaData( 'generator', 'ODude.com Ecard FREE 2.1' );
$doc->setMetaData( 'keywords', $this->title );
$doc->setTitle($this->title);
$mymenuitem = JRequest::getVar('Itemid', 0, 'request', 'int');
$params = &JComponentHelper::getParams( 'com_odudecard' );
$component = JComponentHelper::getComponent( 'com_odudecard' );
$params = new JParameter( $component->params );
  
$mainframe = JFactory::getApplication();
$document = &JFactory::getDocument();
$document->addCustomTag( "<meta property=\"og:title\" content=\"".$this->title."\">" );
$document->addCustomTag( "<meta property=\"og:url\" content=\"http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."\">" );
$document->addCustomTag( "<meta property=\"og:image\" content=\"".JURI::base()."images/ecard/".$this->thumb."\">" );
$document->addCustomTag( "<meta property=\"og:site_name\" content=\"".$mainframe->getCfg('sitename')."\">" );
$document->addCustomTag( "<meta property=\"og:description\" content=\"".$this->desp ." \">" );
$document->addCustomTag( "<meta property=\"og:type\" content=\"public_figure\">" );
$document->addCustomTag( "<meta property=\"fb:app_id\" content=\"".$setting->fbappid."\">" );
 $id = JRequest::getVar('id', 0, 'request', 'int');
JHTML::stylesheet('default.css', 'components/com_odudecard/include/');
//

$pathway =& $mainframe->getPathway();
JHTML::_('behavior.modal');


$catid=getCategoryDetail($this->cate)->subcat;
if($catid!=0)
$pathway->addItem(getCategoryDetail($catid)->name,"index.php?option=com_odudecard&controller=odudecardlist&Itemid=".$mymenuitem."&cate=".$catid);
$pathway->addItem($this->cate_name,"index.php?option=com_odudecard&controller=odudecardlist&Itemid=".$mymenuitem."&cate=".$this->cate);
$pathway->addItem($this->title,"#");
?>
  <style type="text/css">
.box {
	background-image: url(<?php echo JURI::root() ?>images/ecard/<?php echo $this->cate_bg ?>);
	border: 1px solid <?php echo $this->a2 ?>;
	width:100%; float:none;
}

</style>
<script language="javascript">
function myValidate(f) {
        if (document.formvalidator.isValid(f)) {
                f.check.value='<?php echo JUtility::getToken(); ?>';//send token
                return true; 
        }
        else {
                alert('Some values are not acceptable.  Please retry.');
        }
        return false;
}


</script>

<?php 

	if($this->cate_banner!="")
	echo "<center><img src=\"".JURI::base()."images/ecard/".$this->cate_banner."\" alt=\"".$this->cate_name."\"  /></center>";


?>
<div class=box style="height:auto; width:610px; ">
  <div class=bar align="center"><?php echo $this->cate_name ?>: <?php echo JText::_('COM_ODUDECARD_ECARD_GREETINGS'); ?></div>
<center>
<strong><?php echo $this->title; ?></strong>
<br>
<?php // echo JText::_('COM_ODUDECARD_POSTED_BY'); ?> <a href='<?php  echo JRoute::_('index.php?option=com_odudecard&controller=odudecardmylist&Itemid='.$mymenuitem.'&id='.$this->user); ?>' > <?php // echo $this->user; ?> </a>
<br />

<?php echo $this->card; ?>

<?php
//Hit Counter
if (!session_id())
 {
 session_start();
}
if(!isset($_SESSION['views']))
{
$db2 =& JFactory::getDBO();
     $query2="update #__ecard_media set hits=hits+1 where id='$id'";
     $db2->setQuery($query2);
     $result = $db2->query();
}
else
{

 $_SESSION['views'] = '1';

} 



?>




  <table border="0" width="420" class=odude_table>
  <?php
   if($setting->share==1)
   {
  ?>
  <tr>
  <td colspan=5 align=center id=card2>
    <!-- AddThis Button BEGIN -->
    
<div class="addthis_toolbox addthis_default_style " style="margin-left: -175px;width: 175px;" >

<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
    <a href="https://twitter.com/share" class="twitter-share-button" data-count="none" data-url="<?php echo JURI::current();?>" data-lang="en">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<!--lass="addthis_button_tweet"></a>-->
<!--<a class="addthis_counter addthis_pill_style"></a>-->




</div>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4d70a62727a48da5"></script>
<!-- AddThis Button END -->
</td></tr>
<?php

}
?>

</table>
  
 </center>


<?php
  $user =& JFactory::getUser();
  $dispatcher =& JDispatcher::getInstance();
  $abc=0;
  $odude_profile=JPATH_ROOT.DS.'components'.DS.'com_odudeprofile'.DS;
  
$abc=1;

if($params->get( 'start_ecard')=='1')
$abc=0; 
if($abc==1)
{
?>




 <form method="post" action="<?php echo JRoute::_("index.php?option=com_odudecard&amp;controller=odudecardpre&amp;Itemid=$mymenuitem");?>" id='myForm' class="form-validate" onSubmit="return myValidate(this);">



  <input type=hidden name=rec_no value=1>

	<table width="100%" border="0" cellspacing="2" cellpadding="0" class=odude_table>

  <tr align="left">
    <td colspan="2">  <B<BR><BR>
          <label>
        <input name="effect1" type="hidden" id="effect1" value="N" />
        <input name="image" type="hidden" id="image" value="<?php echo $this->image;  ?>" />
          <input name="thumb" type="hidden" id="thumb" value="<?php echo $this->thumb;  ?>" />
        <input name="cate" type="hidden" id="cate" value="<?php echo $this->cate;  ?>" />
        <input name="id" type="hidden" id="id" value="<?php echo JRequest::getVar('id', 0, 'request', 'int');  ?>" />
        <input name="title" type="hidden" id="title" value="<?php echo $this->title;  ?>" />
         <input name="send" type="hidden" id="send" value="normal" />
        <input type="submit" name="button2" id="button2" class="submit_card" value="<?php echo JText::_('COM_ODUDECARD_ECARD_SEND_ECARD_FIRST'); ?>" class=button />
        
      </label>
    </form>

    

    </td>
    </tr>
</table>


 <?php
}


?>
</div> 

 
