<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla view library
jimport('joomla.application.component.view');
 
/**
 * Members View
 */
class MemberDirectoryViewMembers extends JViewLegacy
{
    /**
     * Members view display method
     * @return void
     */
    function display($tpl = null) 
    {
        // Get data from the model
        $members = $this->get('Members');
        $pagination = $this->get('Pagination');
 
        // Check for errors.
        if (count($errors = $this->get('Errors'))) 
        {
            JError::raiseError(500, implode('<br />', $errors));
            return false;
        }
        // Assign data to the view
        $this->members = $members;
        $this->pagination = $pagination;
 
        // Display the template
        parent::display($tpl);
    }
}