<?php
/**

 */

defined('_JEXEC') or die;

/**
 * Class pour ecrireaelisa.
 * 
 * @since       1.5
 */
abstract class ContactsHelper
{
	public static $items = array(
	array('nom' => 'info',
		  'menu' => 'Demande de renseignements',
		  'modalTitle' => 'Demande de renseignements',
		  'mail' => 'info@elisa-lemonnier.fr',
		  'option' => array(
				'nom' => 'info-bts',
				'mail' => 'info-bts@elisa-lemonnier.fr',
				'checkBox' => 'Ma demande concerne un BTS',
				),
		  ),
	array('nom' => 'dir',
		  'menu' => 'Écrire à la direction',
		  'modalTitle' => 'Écrire à la direction',
		  'mail' => '',
		  ),
	array('nom' => 'int',
		  'menu' => 'Écrire à l\'intendance',
		  'modalTitle' => 'Écrire à l\'intendance',
		  'mail' => '',
		  ),
	);
}