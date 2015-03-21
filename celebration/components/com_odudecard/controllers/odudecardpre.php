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


class odudecardControllerodudecardpre extends odudecardController
{
	function display()
	{
		$model = $this->getModel('odudecardpre');
		JRequest::setVar( 'view', 'odudecardpre' );
		JRequest::setVar( 'layout', 'odudecardpre'  );
		parent::display();
	}	
}
?>
