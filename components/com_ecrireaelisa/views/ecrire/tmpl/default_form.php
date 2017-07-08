<?php
/**
 */
defined('_JEXEC') or die;
?>

<div class="contact-form">
	<form id="contact-form" action="<?php echo JRoute::_('index.php'); ?>" method="post" class="form-validate form-horizontal">
		<fieldset>
			<legend>Envoyer un e-mail. Tous les champs précédés d'un * sont obligatoires.</legend>
<div class="control-group">
				<div class="control-label"><label id="jform_contact_name-lbl" for="jform_contact_name" class="hasTooltip required" title="&lt;strong&gt;Nom&lt;/strong&gt;&lt;br /&gt;Votre nom">
	Nom<span class="star">&#160;*</span></label></div>
				<div class="controls"><input type="text" name="jform[contact_name]" id="jform_contact_name" value="" class="required" size="30" required aria-required="true" /></div>
			</div>
			<div class="control-group">
				<div class="control-label"><label id="jform_contact_email-lbl" for="jform_contact_email" class="hasTooltip required" title="&lt;strong&gt;E-mail&lt;/strong&gt;&lt;br /&gt;Adresse e-mail du contact">
	E-mail<span class="star">&#160;*</span></label></div>
				<div class="controls"><input type="email" name="jform[contact_email]" class="validate-email required" id="jform_contact_email" value="" size="30" required aria-required="true" /></div>
			</div>
			<div class="control-group">
				<div class="control-label"><label id="jform_contact_emailmsg-lbl" for="jform_contact_emailmsg" class="hasTooltip required" title="&lt;strong&gt;Sujet&lt;/strong&gt;&lt;br /&gt;Saisir ici le sujet de votre message.">
	Sujet<span class="star">&#160;*</span></label></div>
				<div class="controls"><input type="text" name="jform[contact_subject]" id="jform_contact_emailmsg" value="" class="required" size="60" required aria-required="true" /></div>
			</div>
			<div class="control-group">
				<div class="control-label"><label id="jform_contact_message-lbl" for="jform_contact_message" class="hasTooltip required" title="&lt;strong&gt;Message&lt;/strong&gt;&lt;br /&gt;Saisir ici votre message.">
	Message<span class="star">&#160;*</span></label></div>
				<div class="controls"><textarea name="jform[contact_message]" id="jform_contact_message" cols="50" rows="10" class="required" required aria-required="true" ></textarea></div>
			</div>
							<div class="control-group">
					<div class="control-label"><label id="jform_contact_email_copy-lbl" for="jform_contact_email_copy" class="hasTooltip" title="&lt;strong&gt;Envoyer une copie � votre adresse&lt;/strong&gt;&lt;br /&gt;Envoie une copie du message � l'adresse que vous avez fournie.">
	Envoyer une copie à votre adresse</label></div>
					<div class="controls"><input type="checkbox" name="jform[contact_email_copy]" id="jform_contact_email_copy" value="1" /></div>
				</div>
				</fieldset>
				</form>
</div>
