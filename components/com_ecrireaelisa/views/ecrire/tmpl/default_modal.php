<?php
/**
 */
defined('_JEXEC') or die;

$modParams = array();
$modParams['title']  = $this->currentItem['modalTitle'];
$modParams['footer'] =
'<button class="btn" onclick="" aria-hidden="true">Envoyer</button>
<button class="btn" data-dismiss="modal" aria-hidden="true">Annuler</button>';
echo JHtml::_('bootstrap.renderModal', 'mail'.$this->currentItemId, $modParams, $this->loadTemplate('form'));
?>
