<?php
/**
* @package Joomla.Administrator
* @subpackage com_j3_member_directory
*
* @license The MIT License (MIT); see LICENSE
*/
 
// No direct access to this file
defined('_JEXEC') or die;
 
// Get an instance of the controller
$controller = JControllerLegacy::getInstance('MemberDirectory');
 
// Perform the Request task
$input = JFactory::getApplication()->input;
$controller->execute($input->getCmd('task'));
 
// Redirect if set by the controller
$controller->redirect();