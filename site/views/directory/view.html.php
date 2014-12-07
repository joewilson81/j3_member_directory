<?php
/**
* @package Joomla.Administrator
* @subpackage com_j3_member_directory
*
* @license The MIT License (MIT); see LICENSE
*/
 
// No direct access to this file
defined('_JEXEC') or die;
 
// import Joomla view library
jimport('joomla.application.component.view');
 
/**
* HTML View class for the Member Directory Component
*
* @since 0.0.1
*/
class MemberDirectoryViewMemberDirectory extends JViewLegacy
{
    /**
     * Display the Member Directory view
     *
     * @param   string  $tpl  The name of the template file to parse; automatically searches through the template paths.
     *
     * @return  void
     */
    public function display($tpl = null) 
    {
        // Display the view
        parent::display($tpl);
    }
}