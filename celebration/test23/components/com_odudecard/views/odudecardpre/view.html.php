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


class odudecardViewodudecardpre extends JView
{
	function display($tpl = null)
	{
		$id = JRequest::getVar('id', 0, 'request', 'int');
	  
		$model =& $this->getModel();
        $greeting = $model->getCard($id);
				        $setting = $model->getSetting();
		$cate_detail = $model->getCategory();
		$captcha= JRequest::getVar('captcha', 0, 'post', 'string');
		$this->assignRef( 'captcha',  $captcha );
		
        $this->assignRef( 'cate_name',  $cate_detail[0]->name );
		  $this->assignRef( 'cate_banner',  $cate_detail[0]->banner );
		    $this->assignRef( 'cate_bg',  $cate_detail[0]->bg );
			
			//$this->assignRef( 'a1',  $setting['a1'] );
			$this->assignRef( 'a2',  $setting['a2'] );
		//	$this->assignRef( 'a3',  $setting['a3'] );
		//	$this->assignRef( 'a4',  $setting['a4'] );

 
 		if($greeting['type']=='J')
		$card="<img src='".JURI::base()."images/ecard/".$greeting['image']."' alt='".$greeting['title']."' border=1><br>";

		$this->assignRef( 'card',  $card );
 		$this->assignRef( 'effect',  $greeting['effect'] );
 		$this->assignRef( 'image',  $greeting['image'] );
 		$this->assignRef( 'thumb',  $greeting['thumb'] );
 		$this->assignRef( 'cate',  $greeting['cate'] );
 		$this->assignRef( 'title',  $greeting['title'] );
 		$this->assignRef( 'point',  $greeting['point'] );
 		$send=JRequest::getVar('send', 0, 'request');
 		$this->assignRef( 'send',  $send );

 
			  
		parent::display($tpl);
	}
}
?>
                                                                                                
