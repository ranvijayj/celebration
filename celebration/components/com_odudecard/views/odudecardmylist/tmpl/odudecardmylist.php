<?php
defined('_JEXEC') or die('Restricted access');
$doc =& JFactory::getDocument();
$doc->setMetaData( 'generator', 'ODude.com Ecard' );
JHTML::stylesheet('default.css', 'components/com_odudecard/include/');
require_once ( JPATH_BASE .DS.'components'.DS.'com_odudecard'.DS.'include'.DS.'lib.php' );
JHTML::_('behavior.mootools');
JHTML::_('behavior.modal');
?>
<style type="text/css">
.box {
	border: 1px solid <?php echo $this->a2 ?>;
	width:100%; float:none;
}

</style>
   <div id=card2>                                  
   <center>
Buy ODude Ecard PRO.
       </center>     </div>