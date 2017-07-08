<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_mailto
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * Class for Mail.
 * 
 * @since       1.5
 */
class EcrireaelisaViewEcrire extends JViewLegacy
{
	/**
	 * Execute and display a template script.
	 *
	 * @param   string  $tpl  The name of the template file to parse; automatically searches through the template paths.
	 *
	 * @return  mixed  A string if successful, otherwise a Error object.
	 *
	 * @since   1.5
	 */
		
	public function display($tpl = null)
	{
		$this->art_id = JFactory::getApplication()->getParams()->get('art_id');
		return parent::display($tpl);
	}
}
