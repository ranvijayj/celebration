<?php defined('_JEXEC') or die('Restricted access'); ?>
<form action="index.php" method="post" name="adminForm">
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
				<?php echo JText::_( 'Categories' ); ?>
			</th>
             <th>
				<?php echo JText::_( 'Type' ); ?>
			</th>
            <th>
				<?php echo JText::_( 'Highlighted' ); ?>
			</th>
		</tr>
	</thead>
	<?php
	$k = 0;
	for ($i=0, $n=count( $this->items ); $i < $n; $i++)	{
		$row = &$this->items[$i];
		$checked 	= JHTML::_('grid.id',   $i, $row->cat );
		$link 		= JRoute::_( 'index.php?option=com_odudecard&controller=odudecard&task=edit&cid[]='.$row->cat );
		?>
		<tr class="<?php echo "row$k"; ?>">
			<td>
				<?php echo $row->cat; ?>
			</td>
			<td>
				<?php echo $checked; ?>
			</td>
			<td>
				<?php echo $row->name; ?> <a href="<?php echo $link; ?>">[Edit]</a>
			</td>
            <td>
				<?php echo $row->subcat=='0'?'Primary':'Sub Category'; ?>
			</td>
            	<td>
				<?php echo $row->front=='Y'?'<img src=images/tick.png>':'<img src=images/publish_x.png>'; ?>
			</td>
		</tr>
		<?php
		$k = 1 - $k;
	}
	?>
	</table>
</div>

<input type="hidden" name="option" value="com_odudecard" />
<input type="hidden" name="task" value="" />
<input type="hidden" name="boxchecked" value="0" />
<input type="hidden" name="controller" value="odudecardcatnew" />
</form>
