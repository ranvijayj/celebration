<?php
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.application.component.view' );

class odudecardsViewodudecardsetting extends JView
{
	function display($tpl = null)
	{
		$odudecard		=& $this->get('Data');
		$isNew		= ($odudecard->id < 1);

		$text = $isNew ? JText::_( 'New' ) : JText::_( 'Edit' );
		JToolBarHelper::title(   JText::_( 'ODude Ecard Settings' ).': <small><small>[ ' . $text.' ]</small></small>' );
		JToolBarHelper::save();
		if ($isNew)  {
			JToolBarHelper::cancel();
		} else {
			JToolBarHelper::cancel( 'cancel', 'Close' );
		}

		$this->assignRef('odudecard',		$odudecard);

		parent::display($tpl);
	}
}