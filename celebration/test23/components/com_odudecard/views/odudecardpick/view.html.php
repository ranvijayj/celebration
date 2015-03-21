<?php
/**
* ODude Ecard
* 
* @author Navneet Gupta  <navneet@lovelynepal.com>
* @link http://www.odude.com/
*
* @license GNU/GPL
*/
jimport( 'joomla.application.component.view');


class odudecardViewodudecardpick extends JView
{
	function display($tpl = null)
	{

		$xid = JRequest::getVar('xid', 0, 'request', 'int');
		$model =& $this->getModel();
		$view = $model->viewCard($xid);
        $card = $model->getCard($view['card']);
        $setting = $model->getSetting();
				$cate_detail = $model->getCategory();



	$tab="";
	$v="";
	if($view=='x')
	{
	$tab.=JText::_('COM_ODUDECARD_ECARD_WRONG_URL');
	}
	else
	{
		
		$this->assignRef( 'RN',  $view['RN'] );
		$this->assignRef( 'SN',  $view['SN'] );
		$this->assignRef( 'SE',  $view['SE'] );
		$this->assignRef( 'clock',  $view['clock'] );
		$this->assignRef( 'body',  $view['body'] );
		$this->assignRef( 'image',  $card['image'] );
		$this->assignRef( 'title',  $card['title'] );
		$this->assignRef( 'type',  $card['type'] );
		$this->assignRef( 'cat',  $card['cate'] );
		$this->assignRef( 'notify',   $view['notify'] );
		$this->assignRef( 'sub',   $view['sub'] );
    $this->assignRef( 'username',  $card['username'] );
    $this->assignRef( 'point',  $card['point'] );
		
		$this->assignRef( 'from_email',  $setting['from_email'] );
		$this->assignRef( 'from_name',   $setting['from_name'] );
		$this->assignRef( 'msgsuffix',   $setting['subject_suffix'] );
		
		$this->assignRef( 'xid',  $xid );
		
		        $this->assignRef( 'cate_name',  $cate_detail[0]->name );
		  $this->assignRef( 'cate_banner',  $cate_detail[0]->banner );
		    $this->assignRef( 'cate_bg',  $cate_detail[0]->bg );
			
			$this->assignRef( 'a1',  $setting['a1'] );
			$this->assignRef( 'a2',  $setting['a2'] );
			$this->assignRef( 'a3',  $setting['a3'] );
			$this->assignRef( 'a4',  $setting['a4'] );


		
		
		

		$v="o";
	}

		
		
		

		
 		$this->assignRef( 'id',  $tab );
		$this->assignRef( 'v',  $v );
	  
		parent::display($tpl);
	}
}
?>
                                                                                                
