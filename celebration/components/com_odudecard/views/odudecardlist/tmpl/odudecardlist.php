<?php
defined('_JEXEC') or die('Restricted access');
$mainframe = JFactory::getApplication();
$document = &JFactory::getDocument();
$doc =& JFactory::getDocument();
$doc->setMetaData( 'generator', 'ODude.com Ecard System' );
JHTML::stylesheet('default.css', 'components/com_odudecard/include/');
require_once ( JPATH_BASE .DS.'components'.DS.'com_odudecard'.DS.'include'.DS.'lib.php' );
JHTML::_('behavior.mootools');
JHTML::_('behavior.modal');
$category=JRequest::getVar('cate', '0');
$mymenuitem = JRequest::getVar('Itemid', 0, 'request', 'int');
$pathway =& $mainframe->getPathway();
$catid=getCategoryDetail($category)->subcat;
if($catid!=0)
$pathway->addItem(getCategoryDetail($catid)->name,"index.php?option=com_odudecard&controller=odudecardlist&Itemid=".$mymenuitem."&cate=".$catid);

$pathway->addItem($this->cate_name,"index.php?option=com_odudecard&controller=odudecardlist&Itemid=".$mymenuitem."&cate=".$category);
//$pathway->addItem('',"#");

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

  $doc =& JFactory::getDocument();
  $doc->setTitle($this->cate_name);
?>
<div class=box  >
  <div class=bar align="center"><?php echo $this->cate_name ?>: <?php echo JText::_('COM_ODUDECARD_ECARD'); ?></div>

<?php 
///echo $this->listCard;
								
?>
</div>
  <br />
<?php 
echo $this->pagination;
								
?>
