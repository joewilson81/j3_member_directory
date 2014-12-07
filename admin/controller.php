<?php
// No direct access to this file
defined('_JEXEC') or die;
 
/**
 * General Controller of MemberDirectory component
 */
class MemberDirectoryController extends JControllerLegacy
{
    /**
     * display task
     *
     * @return void
     */
    function display($cachable = false, $urlparams = false) 
    {
        // set default view if not set
        $input = JFactory::getApplication()->input;
        $input->set('view', $input->getCmd('view', 'Members'));
 
        // call parent behavior
        parent::display($cachable);
    }
}