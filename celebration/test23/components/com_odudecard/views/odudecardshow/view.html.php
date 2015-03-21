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


class odudecardViewodudecardshow extends JView
{
	function display($tpl = null)
	{
	    require_once ( JPATH_BASE .DS.'components'.DS.'com_odudecard'.DS.'include'.DS.'lib.php' );	  
      $setting=getSetting();
     //$component = JComponentHelper::getComponent( 'com_odudecard' );
  //$params = new JParameter( $component->params );

    	$id = JRequest::getVar('id', 0, 'request', 'int');
	  
		$model =& $this->getModel();
        $greeting = $model->getCard($id);
		
		 //$setting = $model->getSetting();
		$cate_detail = $model->getCategory();
		
        $this->assignRef( 'cate_name',  $cate_detail[0]->name );
		  $this->assignRef( 'cate_banner',  $cate_detail[0]->banner );
		    $this->assignRef( 'cate_bg',  $cate_detail[0]->bg );
			
		//	$this->assignRef( 'a1',  $setting['a1'] );
		$this->assignRef( 'a2',  $setting->a2);
		//	$this->assignRef( 'a3',  $setting['a3'] );
		//	$this->assignRef( 'a4',  $setting['a4'] );

 
 		if($greeting['type']=='J')
 		{
               
                  $card="<img src='".JURI::base()."images/ecard/".$greeting['image']."' alt='".$greeting['title']."' border=1><br>";

             
		}
		
		
 		if($greeting['type']=='F')
		$card="FLASH is not supported. Buy ODude Ecard PRO.";



		$this->assignRef( 'card',  $card );
 		$this->assignRef( 'effect',  $greeting['effect'] );
 		$this->assignRef( 'image',  $greeting['image'] );
 		$this->assignRef( 'thumb',  $greeting['thumb'] );
 		$this->assignRef( 'cate',  $greeting['cate'] );
 		$this->assignRef( 'title',  $greeting['title'] );
 		$this->assignRef( 'point',  $greeting['point'] );
 		$this->assignRef( 'user',  $greeting['user'] );
 		
		
		$this->assignRef( 'type',  $greeting['type'] );
$this->assignRef( 'desp',  $greeting['desp'] );

 //Getting previous pic


                                 $query =  "select * from #__ecard_media WHERE id > ".$id." and cat='".$greeting['cate']."' ORDER BY id ASC LIMIT 1";
                                  $db =& JFactory::getDBO();
		                          $db->setQuery($query);
		                          $rows = $db -> loadObjectList();
                                  $user_data = $db->loadObject();
                                  $f='';
                                  if(empty($user_data))
                                  {

                                  $this->assignRef( 'prev', $f);
                                  }
                                 else
                                  {
                                  $f='x';
                                  $this->assignRef( 'prev', $f);
                                  $this->assignRef( 'prev_thumb',  $rows[0]->thumb );
                                  $this->assignRef( 'prev_id',  $rows[0]->id );
                                  $this->assignRef( 'prev_title',  $rows[0]->title );

                                    }
                                    
                                  $query =  "select * from #__ecard_media WHERE id < ".$id." and cat='".$greeting['cate']."' ORDER BY id DESC LIMIT 1";
                                 $db =& JFactory::getDBO();
		                          $db->setQuery($query);
		                          $rows = $db -> loadObjectList();
                                  $user_data = $db->loadObject();
                                  $g='';
                                  if(empty($user_data))
                                  {

                                  $this->assignRef( 'next', $g);
                                  }
                                 else
                                  {
                                  $g='x';
                                  $this->assignRef( 'next', $g);
                                 $this->assignRef( 'next_thumb',  $rows[0]->thumb );
                                  $this->assignRef( 'next_id',  $rows[0]->id );
                                  $this->assignRef( 'next_title',  $rows[0]->title );
                                    }
//*******
 
			  
		parent::display($tpl);
	}
}
?>
                                                                                                
