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


class odudecardControllerodudecardshow extends odudecardController
{
	function display()
	{
		$model = $this->getModel('odudecardshow');
		JRequest::setVar( 'view', 'odudecardshow' );
		JRequest::setVar( 'layout', 'odudecardshow'  );
		parent::display();
	}	
}
?>
