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


class odudecardControllerfacebook extends odudecardController
{
	function display()
	{
		$model = $this->getModel('facebook');
		JRequest::setVar( 'view', 'facebook' );
		JRequest::setVar( 'layout', 'facebook'  );
		parent::display();
	}	
}
?>
