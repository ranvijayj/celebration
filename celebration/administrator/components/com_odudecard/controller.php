<?php
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport('joomla.application.component.controller');

class odudecardsController extends JController
{
	function display()
	{
	JToolBarHelper::preferences( 'com_odudecard', '500' );
		parent::display();
		odudecardHelper::addSubmenu('messages');


	}
}
