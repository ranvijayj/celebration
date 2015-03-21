<?php
defined('_JEXEC') or die('Restricted access');
$doc =& JFactory::getDocument();
$doc->setMetaData( 'generator', 'ODude.com Ecard System' );
JHTML::stylesheet('default.css', 'components/com_odudecard/include/');
require_once ( JPATH_BASE .DS.'components'.DS.'com_odudecard'.DS.'include'.DS.'lib.php' );
?>
  <style type="text/css">
.box {
	background-image: url(<?php echo JURI::root() ?>images/ecard/<?php echo $this->cate_bg ?>);
	border: 1px solid <?php echo $this->a2 ?>;
	width:100%; float:none;
}

</style>

<?php 

	if($this->cate_banner!="")
	echo "<center><img src=\"".JURI::base()."images/ecard/".$this->cate_banner."\" alt=\"".$this->cate_name."\"  /></center>";


?>
<div class=box style="height:500px; width:610px;">
  <div class=bar align="center"><?php echo $this->cate_name ?>: <?php echo JText::_('COM_ODUDECARD_ECARD_GREETINGS'); ?></div>

<?php 
echo $this->listCard;
								
?>

</div>
<div class="clr"></div>