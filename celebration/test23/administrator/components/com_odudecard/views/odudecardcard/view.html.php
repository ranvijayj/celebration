<?php
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.application.component.view' );

class odudecardsViewodudecardcard extends JView
{
	function display($tpl = null)
	{
		JToolBarHelper::title(   JText::_( 'E-Card Management' ), 'generic.png' );
		JToolBarHelper::deleteList();
		//JToolBarHelper::editListX();
		JToolBarHelper::addNewX();

		$items		= & $this->get( 'Data');

		$this->assignRef('items',		$items);
		
        $items =& $this->get('Data');      
        $pagination =& $this->get('Pagination');
 
        $this->assignRef('items', $items);     
        $this->assignRef('pagination', $pagination);



		parent::display($tpl);
	}
}