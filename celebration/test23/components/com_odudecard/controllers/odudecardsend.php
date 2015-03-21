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


class odudecardControllerodudecardsend extends odudecardController
{
	function display()
	{
		$model = $this->getModel('odudecardsend');
		JRequest::setVar( 'view', 'odudecardsend' );
		JRequest::setVar( 'layout', 'odudecardsend'  );
		parent::display();
	}	
}
?>
