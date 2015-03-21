<?php defined('_JEXEC') or die('Restricted access');
$doc =& JFactory::getDocument();
$doc->setMetaData( 'generator', 'ODude.com Ecard System' );
$doc->setTitle($this->title);
//$component = JComponentHelper::getComponent( 'com_odudecard' );
//$params = new JParameter( $component->params );
JHTML::stylesheet('default.css', 'components/com_odudecard/include/');
require_once ( JPATH_BASE .DS.'components'.DS.'com_odudecard'.DS.'include'.DS.'lib.php' );
$setting=getSetting();
$mymenuitem = JRequest::getVar('Itemid', 0, 'request', 'int');
?>
  <style type="text/css">
.box2 {
	background-image: url(<?php echo JURI::root() ?>images/ecard/<?php echo $this->cate_bg ?>);
	border: 1px solid <?php echo $this->a2 ?>;
	width:100%;
}

</style>


<?php 

	if($this->cate_banner!="")
	echo "<center><img src=\"".JURI::base()."images/ecard/".$this->cate_banner."\" alt=\"".$this->cate_name."\"  /></center>";


?>
<div class=box2>
  <div class=bar align="center"><?php echo $this->cate_name ?></div>

	<center>
<?php echo $this->id;  ?>
<?php
if($this->v=='o')
{
	?>
<?php echo JText::_('COM_ODUDECARD_ECARD_HELLO'); ?> <?php echo $this->RN;  ?>, <?php echo JText::_('COM_ODUDECARD_ECARD_YOU'); ?><br />

<?php
 		if($this->type=='J')
 		{
              
                   echo "<img src='".JURI::base()."images/ecard/".$this->image."' alt='".$this->title."' border=1><br>".$this->title;
           

         }
         
		if($this->type=='F')
		echo "Buy ODude Ecard PRO.<br><br>";

?>
<br>
<?php echo JText::_('COM_ODUDECARD_POSTED_BY'); ?> :<a href='<?php echo JRoute::_('index.php?option=com_odudecard&view=odudecardmylist&Itemid='.$mymenuitem.'&id='.$this->username); ?>' > <?php echo $this->username; ?> </a>
</center>
<br />
<div class=bar align="center"><?php echo JText::_('COM_ODUDECARD_ECARD_SENDER'); ?></div>
<?php echo JText::_('COM_ODUDECARD_ECARD_SENDER_NAME'); ?>: <?php echo $this->SN;  ?><br />
<?php echo JText::_('COM_ODUDECARD_ECARD_SENDER_EMAIL'); ?>: <?php echo $this->SE;  ?><br />
<?php echo JText::_('COM_ODUDECARD_ECARD_DATE'); ?>: <?php echo $this->clock;  ?><br />
<div class=bar align="center"><strong><?php echo $this->sub; ?></strong></div>
<pre><?php echo wordwrap($this->body);  ?></pre>
<?php //echo nl2br(htmlspecialchars($this->body)) ?>


<?php


		
		
		$from = $this->from_email;
		$fromname = $this->from_name;
		$recipient = $this->SE;
		$subject = $this->msgsuffix.': '.JText::_('COM_ODUDECARD_ECARD_PICKEDUP'). ' '.$this->RN;
		
			$u =& JURI::getInstance();	
			
		$db =& JFactory::getDBO();
		$qr="update #__ecard_view set notify='N' where id='".$this->xid."'";
		$db->setQuery($qr);
		$result = $db->query();
		
	$linc=$u->getScheme()."://".$u->getHost().JRoute::_("index.php?option=com_odudecard&amp;xid=".$this->xid."&amp;notify=N&amp;controller=odudecardpick&amp;cate=".$this->cat);

		
		$mode = 1;
$body = JText::_('COM_ODUDECARD_ECARD_HELLO').",<br><br>".JText::_('COM_ODUDECARD_ECARD_PICKEDUP')." ".$this->RN.".<br><br>".JText::_('COM_ODUDECARD_ECARD_CLICK_LINK')."<br><br><a href=".$linc.">".$linc."</a><br><br>".JText::_('COM_ODUDECARD_ECARD_THANK')."<br>$fromname";


        JUtility::sendMail($from, $fromname, $recipient, $subject, $body, $mode,'','','','', '');

        JError::raiseNotice( 100, JText::_(JText::_('COM_ODUDECARD_ECARD_NOTIFIED')) );




}
echo "<br><a href=".JRoute::_("index.php?option=com_odudecard&Itemid=$mymenuitem")." class=\"ODude\" style=\"clear:none;\">".JText::_('COM_ODUDECARD_ECARD_NEW')."</a>";
?>

</div>
