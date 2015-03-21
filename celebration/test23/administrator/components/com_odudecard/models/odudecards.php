<?php


defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.application.component.model' );

class odudecardsModelodudecards extends JModel
{
	var $_data;

	function _buildQuery()
	{
		$query = ' select * from #__ecard_cate order by name desc ';

		return $query;
	}

	function getData()
	{
		if (empty( $this->_data ))
		{
			$query = $this->_buildQuery();
			$this->_data = $this->_getList( $query );
		}

		return $this->_data;
	}
}