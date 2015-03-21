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


class odudecardControllerodudecardpick extends odudecardController
{
	function display()
	{
		$model = $this->getModel('odudecardpick');
		JRequest::setVar( 'view', 'odudecardpick' );
		JRequest::setVar( 'layout', 'odudecardpick'  );
		parent::display();
	}	
}
?>
