<?php
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport('joomla.application.component.controller');

class OnamController extends JController
{
	function display($cachable=null)
	{
		$input = JFactory::getApplication()->input;
		$input->set('view', $input->getCmd('view', 'shopping'));
 
		parent::display($cachable);
	}

}