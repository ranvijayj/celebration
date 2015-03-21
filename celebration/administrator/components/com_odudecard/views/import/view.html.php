<?php
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.application.component.view' );

class odudecardsViewimport extends JView
{
	function display($tpl = null)
	{
		JToolBarHelper::title(   JText::_( 'Import jpg pictures from Folder' ), 'generic.png' );
		JToolBarHelper::cancel( 'cancel', 'Close' );

		$items		= & $this->get( 'Data');

		$this->assignRef('items',		$items);

		parent::display($tpl);
	}
}