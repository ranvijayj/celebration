<?php 
defined('_JEXEC') or die('Restricted access');

JHTML::_('behavior.mootools');
JHTML::_('behavior.modal');
 ?>
<form id="adminForm1" action="<?php echo JRoute::_( 'index.php' );?>" method="post" name="adminForm1">

		<?php echo JText::_( 'Filter' ); ?>:
				<input type="text" name="where" id="where" value="<?php echo JRequest::getVar('where',''); ?>" 
class="text_area" onchange="document.adminForm1.submit();" />
				<button onclick="this.form.submit();">
<?php echo JText::_( 'Go' ); ?></button>
				<button onclick="document.getElementById('search').value='';this.form.submit();">
<?php echo JText::_( 'Reset' ); ?></button>
<input type="hidden" name="option" value="com_odudecard" />
<input type="hidden" name="task" value="" />
<input type="hidden" name="boxchecked" value="0" />
<input type="hidden" name="controller" value="odudecardcard" />
</form>

<form id="adminForm" action="<?php echo JRoute::_( 'index.php' );?>" method="post" name="adminForm">

<div id="editcell">
	<table class="adminlist">
	<thead>
		<tr>
			<th width="5">
				<?php echo JText::_( 'ID' ); ?>
			</th>
			<th width="20">
				<input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count( $this->items ); ?>);" />
			</th>			
			<th>
				<?php echo JText::_( 'Titles of E-Cards' ); ?>
			</th>
			<th>
				<?php echo JText::_( 'E-Card Type' ); ?>
			</th>
      <th>
				<?php echo JText::_( 'Username' ); ?>
			</th>
				<th>
				<?php echo JText::_( 'Hits' ); ?>
			</th>
			<th>
				<?php echo JText::_( 'Point' ); ?>
			</th>
			<th>
				<?php echo JText::_( 'Date' ); ?>
			</th>
				<th width="1%" nowrap="nowrap"><?php echo JText::_( 'Order' ); ?></th>
			<th width="1%"><?php echo JHTML::_('grid.order', '', 'filesave.png', 'saveorder' ); ?></th>
            	<th width="1%" nowrap="nowrap"><?php echo JText::_( 'PUBLISHED' ); ?></th>
		</tr>
	</thead>
	<?php
	$k = 0;
	for ($i=0, $n=count( $this->items ); $i < $n; $i++)	{
		$row = &$this->items[$i];
		$checked 	= JHTML::_('grid.id',   $i, $row->id );
		$link 		= JRoute::_( 'index.php?option=com_odudecard&controller=odudecardedit&task=edit&cid[]='.$row->id );
		$published 	= JHTML::_('grid.published', $row, $i );
		?>
		<tr class="<?php echo "row$k"; ?>">
			<td>
				<?php echo $row->id; ?>
			</td>
			<td>
				<?php echo $checked; ?>
			</td>
			<td>
				<?php echo $row->title; ?><a href="<?php echo $link; ?>"> [Edit]</a>
			</td>
			<td>
				<?php 
        if($row->type=='F')
        echo "Flash";
        else
         	echo "JPEG <a rel=\"{handler: 'image', size: {x: 700, y: 400}}\" class=\"modal\" href='".JURI::root()."images/ecard/".$row->file."'><img src='".JURI::root()."components/com_odudecard/include/zoom.png' alt=".JText::_('ZOOM')." title=".JText::_('ZOOM')." border=0></a>";
        
        
       
         ?>
			</td>
			<td>
				<a href="../index.php?option=com_odudecard&controller=odudecardmylist&id=<?php echo $row->username; ?>" target=_blank><?php echo $row->username; ?></a>
			</td>
						<td>
				<?php echo $row->hits; ?>
			</td>
				<td>
				<?php echo $row->point; ?>
			</td>
			<td>
				<?php echo $row->ddate; ?>
			</td>
      	<td class="order" colspan="2">

    				<input type="text" name="order[]" size="5" value="<?php echo $row->ordering; ?>" class="text_area" style="text-align: center" />
			</td>
             	<td>
			     <?php echo $published; ?>
			</td>
		</tr>
		<?php
		$k = 1 - $k;
	}
	?>
	</table>
</div>
<?php echo $this->pagination->getListFooter(); ?>
<input type="hidden" name="option" value="com_odudecard" />
<input type="hidden" name="task" value="" />
<input type="hidden" name="boxchecked" value="0" />
<input type="hidden" name="controller" value="odudecardcard" />
</form>
