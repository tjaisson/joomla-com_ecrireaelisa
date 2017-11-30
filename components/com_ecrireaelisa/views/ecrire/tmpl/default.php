<?php
/**
 */

defined('_JEXEC') or die;
JHtml::_('behavior.core');
JHtml::_('behavior.keepalive');
JHtml::_('behavior.formvalidator');

JFactory::getDocument()->addScriptDeclaration("
	Joomla.submitbutton = function(pressbutton)
	{
		var form = document.getElementById('mailtoForm');

		// do field validation
		if (form.mailto.value == '' || form.from.value == '')
		{
			alert('" . JText::_('COM_MAILTO_EMAIL_ERR_NOINFO') . "');
			return false;
		}
		form.submit();
	}
");
?>

<pre>
<?php echo $this->art_id; ?> 
</pre>

<div class="dropdown">
  <a class="btn btn-large dropdown-toggle" id="dLabel" role="button" data-toggle="dropdown" href="#">
    Nous contacter
    <b class="caret"></b>
  </a>
  <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
<?php
foreach (ContactsHelper::$items as $cntId => $cnt) {
	echo '<li><a href="#mail' . $cntId . '" data-toggle="modal">' . $cnt['menu'] . '</a></li>';
}
?>
  </ul>
</div>

<div>

<p>Nous écrire</p>

</div>

<?php
foreach (ContactsHelper::$items as $cntId => $cnt) {
	$this->currentItem = $cnt;
	$this->currentItemId = $cntId;
	echo $this->loadTemplate('modal');
}

$modParams = array();
$modParams['title']  = 'Envoi en cours...';
unset($modParams['footer']);
$modParams['backdrop'] = 'static';
$modParams['closeButton'] = false;
$formulaire = '<div class="progress progress-striped active">
  <div class="bar" style="width: 100%;"></div>
</div><h1>Veuillez patienter.</h1>';
echo JHtml::_('bootstrap.renderModal', 'sending', $modParams, $formulaire);
$modParams['title']  = 'Message envoyé.';
$modParams['backdrop'] = true;
$modParams['closeButton'] = true;
$modParams['footer'] = '<button class="btn" data-dismiss="modal" aria-hidden="true">Fermer</button>';
$formulaire = '<h1>Vous pouvez fermer cette fenêtre.</h1>';
echo JHtml::_('bootstrap.renderModal', 'sent', $modParams, $formulaire);
?>
<script type="text/javascript">
	jQuery('#mail1').on('hide', function () {
  jQuery('#sending').modal('show');
});
	jQuery('#mail2').on('hide', function () {
  jQuery('#sending').modal('show');
});
	jQuery('#sending').on('hide', function () {
  jQuery('#sent').modal('show');
}).on('shown', function () {
	setTimeout(function() {
		jQuery('#sending').modal('hide');
   },1000);
});
</script>
