<?php
/**
* ODude Ecard
* 
* @author Navneet Gupta  <navneet@lovelynepal.com>
* @link http://www.odude.com/
*
* @license GNU/GPL
*/
defined('_JEXEC') or die();


class odudecardControllerodudecardmylist extends odudecardController
{
	function display()
	{
		$model = $this->getModel('odudecardmylist');
		JRequest::setVar( 'view', 'odudecardmylist' );
		JRequest::setVar( 'layout', 'odudecardmylist'  );
		parent::display();
	}	
}
?>
