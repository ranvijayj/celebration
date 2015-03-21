<?php
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.application.component.view' );

class odudecardsViewodudecard extends JView
{
	function display($tpl = null)
	{
		$odudecard		=& $this->get('Data');
		$isNew		= ($odudecard->cat < 1);

		$text = $isNew ? JText::_( 'New' ) : JText::_( 'Edit' );
		JToolBarHelper::title(   JText::_( 'Ecard Category' ).': <small><small>[ ' . $text.' ]</small></small>' );
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