<?php defined('_JEXEC') or die('Restricted access'); ?>
<?php

	function getCategory()
    {
       
		   $db =& JFactory::getDBO();
			$query = "select * from #__ecard_cate order by name desc";
			$db->setQuery($query);
			$rows = $db -> loadObjectList();
			return $rows;
		
    }
	
	
?>
<form action="index.php" method="post" name="adminForm" id="adminForm" enctype="multipart/form-data">
<div class="col100">
	<fieldset class="adminform">
		<legend><?php echo JText::_( 'Details' ); ?></legend>

		<table class="admintable">
        <tr>
			<td width="100" align="right" class="key">
				<label for="name">
					<?php echo JText::_( 'Ecard Type' ); ?>:
				</label>
			</td>
			<td>
				<?php echo $this->odudecard->type=='J'?'JPEG':'SWF';;?>

			</td>
		</tr>
        	<tr>
			<td width="100" align="right" class="key">
				<label for="subcat">
					<?php echo JText::_( 'Category' ); ?>:
				</label>
			</td>
			<td>
			        <select name="cat" id="cat" class="text_area">
				          
                          <?php

		
		$subcat=getCategory();
		
					
		for( $j=0; $j<count($subcat); $j++ )
		{
			
			
		$subcategory = $subcat[$j];
							$check="";
					if($this->odudecard->cat==$subcategory->cat)
					$check="selected=selected";

		
		echo "\n\r<option value='".$subcategory->cat."' ".$check.">".$subcategory->name."</option>";
		
		}
						  ?>
				          

			            </select>

			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
				<label for="name">
					<?php echo JText::_( 'Ecard Title' ); ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="title" id="title" size="32" maxlength="250" value="<?php echo $this->odudecard->title;?>" />
			</td>
		</tr>
        		<tr>
			<td width="100" align="right" class="key">
				<label for="name">
					<?php echo JText::_( 'Ecard Large Picture' ); ?>:
				</label>
			</td>
			<td>
<input type="file" name="banner" id="banner" />
 <input name="largepic" type="hidden" id="largepic" value="<?php echo $this->odudecard->file;?>" /><?php echo $this->odudecard->file;?>

			</td>
		</tr>
 	<tr>
			<td width="100" align="right" class="key">
				<label for="name">
					<?php echo JText::_( 'Ecard Thumbnail Picture' ); ?>:
				</label>
			</td>
			<td>
  <input type="file" name="bg" id="bg" />
   <input name="old_thumb" type="hidden" id="old_thumb" value="<?php echo $this->odudecard->thumb;?>" /><?php echo $this->odudecard->thumb;?>
			</td>
		</tr>
			<tr>
			<td width="100" align="right" class="key">
				<label for="name">
					<?php echo JText::_( 'Ecard text' ); ?>:
				</label>
			</td>
			<td>
			
				<textarea rows="5" cols="50" name="desp"  id="desp" class="text_area"><?php echo $this->odudecard->desp;?></textarea>
			</td>
		</tr>
			<tr>
			<td width="100" align="right" class="key">
				<label for="point" class="hasTip" title="Point requires to send.">
					<?php echo JText::_( 'Ecard Point' ); ?>:
				</label>
			</td>
			<td>
  	<input class="text_area" type="text" name="point" id="point" size="10" maxlength="8" value="<?php echo $this->odudecard->point;?>" />
  	<br>
   Point system will only work if 'ODude Profile' component is installed. <br>
   User should have sufficient point to send the card. <br>
   Point equls ZERO 0 means its FREE to send card.
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
<input type="hidden" name="controller" value="odudecardedit" />
</form>
