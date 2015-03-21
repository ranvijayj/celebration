<?php
// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
jimport( 'joomla.application.component.view');
class odudecardViewodudecard extends JView
{
	function display($tpl = null)
	{
		require_once ( JPATH_BASE .DS.'components'.DS.'com_odudecard'.DS.'include'.DS.'lib.php' );	  
		
    $setting=getSetting();
 	  $model =& $this->getModel();
    //$setting = $model->getSetting();
		$cate_detail = $model->getCategory();
		$front = $model->getFront();
		$random = $model->getGreetingRandom();
		$mymenuitem = JRequest::getVar('Itemid', 0, 'request', 'int');
		//echo $front;
		
    $this->assignRef( 'cate_name',  $cate_detail[0]->name );
		$this->assignRef( 'cate_banner',  $cate_detail[0]->banner );
		$this->assignRef( 'cate_bg',  $cate_detail[0]->bg );
		$this->assignRef( 'cat',  $cate_detail[0]->cat );
			
		//	$this->assignRef( 'a1',  $setting['a1'] );
			$this->assignRef( 'a2',  $setting->a2);
		//	$this->assignRef( 'a3',  $setting['a3'] );
		//	$this->assignRef( 'a4',  $setting['a4'] );

		
$cardPerRow=$setting->card_row;
$cardPerPage=$setting->card_page;
$rows = $model->getGreeting($cardPerPage);


	$tab="<table width=100% border=0 class=odude_table>\n\r";
	$x=0;
	$f=0;
		for( $i=0; $i<count($rows); $i++ )
		{
			$category = $rows[$i];
			if($x==0)
			{
			$tab.="\n\r<tr>";
			$x++;
			}
			
			if($x<=$cardPerRow)
			{
			$id=$category->id;
			$title=$category->title;
			$type=$category->type;
			$file=$category->file;
			$desp=$category->desp;
			$effect=$category->effect;
			$cate=$category->cat;
			$thumb=$category->thumb;
			
			
			$tab.='<td valign=top width=114 align=center ><a href='.JRoute::_('index.php?option=com_odudecard&id='.$id.'&controller=odudecardshow&Itemid='.$mymenuitem.'&cate='.$cate).' ><img src="'.JURI::base().'images/ecard/'.$thumb.'" alt="'.$title.'" border=1 id=card2><br /></a>'.$title.'</td>';
			
			
			$x++;
			}
			
			if($x==$cardPerRow+1)
			{
			$tab.="</tr>\n\r";
			$x=0;
				
			//$f++;
			
		//	if($f>1)
		//	$i=100;
			}
			
			
		}
$tab.="</table>";

		
		
        $this->assignRef( 'listCard',  $tab );
		



 
			  
		parent::display($tpl);
	}
	
}
