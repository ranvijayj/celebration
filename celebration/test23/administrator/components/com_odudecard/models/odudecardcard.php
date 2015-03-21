<?php
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.application.component.model' );

class odudecardsModelodudecardcard extends JModel
{
	var $_data;

  var $_total = null;
 
  var $_pagination = null;
function __construct()
  {
        parent::__construct();
 
        global $mainframe, $option;
         $mainframe = JFactory::getApplication();
        $limit = $mainframe->getUserStateFromRequest('global.list.limit', 'limit', $mainframe->getCfg('list_limit'), 'int');
        $limitstart = JRequest::getVar('limitstart', 0, '', 'int');
        $limitstart = ($limit != 0 ? (floor($limitstart / $limit) * $limit) : 0);
 
        $this->setState('limit', $limit);
        $this->setState('limitstart', $limitstart);
  }

	function _buildQuery()
	{
		$where = JRequest::getVar('where','');
	
		$query = ' select * from #__ecard_media  where title LIKE "%'.$where.'%" order by id desc ';
		
		return $query;
	}

	 
	 function getData() 
  {
        if (empty($this->_data)) {
            $query = $this->_buildQuery();
            $this->_data = $this->_getList($query, $this->getState('limitstart'), $this->getState('limit')); 
        }
        return $this->_data;
  }

	 
	
	  function getTotal()
  {
        // Load the content if it doesn't already exist
        if (empty($this->_total)) {
            $query = $this->_buildQuery();
            $this->_total = $this->_getListCount($query);    
        }
        return $this->_total;
  }
  function getPagination()
  {
        // Load the content if it doesn't already exist
        if (empty($this->_pagination)) {
            jimport('joomla.html.pagination');
            $this->_pagination = new JPagination($this->getTotal(), $this->getState('limitstart'), $this->getState('limit') );
        }
        return $this->_pagination;
  }


}