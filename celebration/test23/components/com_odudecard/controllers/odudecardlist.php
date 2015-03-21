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


class odudecardControllerodudecardlist extends odudecardController
{
	function display()
	{
		$model = $this->getModel('odudecardlist');
		JRequest::setVar( 'view', 'odudecardlist' );
		JRequest::setVar( 'layout', 'odudecardlist'  );
		parent::display();
	}	
}
?>
