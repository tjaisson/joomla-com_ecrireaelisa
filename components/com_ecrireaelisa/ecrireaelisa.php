<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_mailto
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

//require_once JPATH_COMPONENT . '/helpers/mailto.php';
require_once JPATH_COMPONENT . '/controller.php';
require_once JPATH_COMPONENT . '/helpers/contacts.php';

$controller = JControllerLegacy::getInstance('Ecrireaelisa');
$controller->registerDefaultTask('ecrire');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();