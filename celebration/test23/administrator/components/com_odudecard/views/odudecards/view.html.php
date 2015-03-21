<?php
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.application.component.view' );

class odudecardsViewodudecards extends JView
{
	function display($tpl = null)
	{
		JToolBarHelper::title(   JText::_( 'E-Card Categories' ), 'generic.png' );
		JToolBarHelper::deleteList();
		//JToolBarHelper::editListX();
		JToolBarHelper::addNewX();

		// Get data from the model
		$items		= & $this->get( 'Data');

		$this->assignRef('items',		$items);

		parent::display($tpl);
	}
}