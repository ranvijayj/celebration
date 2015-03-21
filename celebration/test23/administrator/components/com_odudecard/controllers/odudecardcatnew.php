<?php
defined( '_JEXEC' ) or die( 'Restricted access' );

class odudecardsControllerodudecardcatnew extends odudecardsController
{
	function __construct()
	{
		parent::__construct();

		$this->registerTask( 'add'  , 	'edit' );
	}

	function edit()
	{
		JRequest::setVar( 'view', 'odudecardcatnew' );
		JRequest::setVar( 'layout', 'form'  );
		JRequest::setVar('hidemainmenu', 1);

		parent::display();
	}

	function save()
	{
		$model = $this->getModel('odudecard');

		if ($model->store($post)) {
			$msg = JText::_( 'New Setting Saved!' );
		} else {
			$msg = JText::_( 'Error Saving Setting' );
		}
		$link = 'index.php?option=com_odudecard';
		$this->setRedirect($link, $msg);
	}
	function remove()
	{
			function getBanner($catid)
	{
	$query = "select * from #__ecard_cate where cat='".$catid."'";

	
	   $banner = array();
	   	$db =& JFactory::getDBO();
		$db->setQuery($query);
		$rows = $db -> loadObjectList();

		if(count($rows)!=0)
		{
			
			$banner['name']=$rows[0]->name;
			$banner['banner']=$rows[0]->banner;
			$banner['bg']=$rows[0]->bg;
			$banner['cat']=$rows[0]->cat;
			$banner['front']=$rows[0]->front;
			$banner['subcat']=$rows[0]->subcat;
			return $banner;
			
		}
		else
		{
			return 'No Banner';		
		}

	}

		
		
		$path=JPATH_ROOT.DS.'images'.DS.'ecard'.DS;
		$cid = $_POST['cid']; 
   		for ($i=0; $i<count($cid); $i++)
		{
		$banner=getBanner($cid[$i]);
			
			$msg=$banner['name'].": Deleted with respective banner and background.";
			
				$query="delete from #__ecard_cate where cat=$cid[$i]";
				$db =& JFactory::getDBO();
				$db->setQuery($query);
				$result = $db->query();
				
				unlink("$path".$banner['bg']);
				unlink("$path".$banner['banner']);
				
				
				$query="update #__ecard_cate set subcat='0' where subcat=$cid[$i]";
				$db =& JFactory::getDBO();
				$db->setQuery($query);
				$result = $db->query();
				
				$query="update #__ecard_media set cat='0' where cat=$cid[$i]";
				$db =& JFactory::getDBO();
				$db->setQuery($query);
				$result = $db->query();
		}
		
		$this->setRedirect( 'index.php?option=com_odudecard', $msg );
	}

	function cancel()
	{
		$msg = JText::_( 'Operation Cancelled' );
		$this->setRedirect( 'index.php?option=com_odudecard', $msg );
	}
}