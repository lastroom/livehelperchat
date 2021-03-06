<h1><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncandsoundesetting','Synchronisation and sound settings');?></h1>

<?php if (isset($errors)) : ?>
		<?php include(erLhcoreClassDesign::designtpl('lhkernel/validation_error.tpl.php'));?>
<?php endif; ?>

<?php if (isset($updated)) : $msg = erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncandsoundesetting','Settings updated'); ?>
	<?php include(erLhcoreClassDesign::designtpl('lhkernel/alert_success.tpl.php'));?>	
<?php endif; ?>

<form action="" method="post">
<label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncandsoundesetting','How many seconds for a user to be considered as being online');?></label>
<input type="text" name="OnlineTimeout" value="<?php echo htmlspecialchars(isset($sound_data['online_timeout']) ? $sound_data['online_timeout'] : '')?>" title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncandsoundesetting','Value in seconds');?>" />

<label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncandsoundesetting','Sync for new chats, interval in seconds');?></label>
<input type="text" name="SyncBackOffice" value="<?php echo htmlspecialchars(isset($sound_data['back_office_sinterval']) ? $sound_data['back_office_sinterval'] : '')?>" title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncandsoundesetting','Value in seconds');?>" />

<label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncandsoundesetting','Sync for a new user message, interval in seconds');?></label>
<input type="text" name="SyncForUserMessagesEvery" value="<?php echo htmlspecialchars(isset($sound_data['chat_message_sinterval']) ? $sound_data['chat_message_sinterval'] : '')?>" title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncandsoundesetting','Value in seconds');?>" />

<label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncandsoundesetting','Check for messages from the operators, interval in seconds');?></label>
<input type="text" name="SyncForOperatorMessagesEvery" value="<?php echo htmlspecialchars(isset($sound_data['check_for_operator_msg']) ? $sound_data['check_for_operator_msg'] : '')?>" title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncandsoundesetting','Value in seconds');?>" />

<h2><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncandsoundesetting','Long polling');?></h2>
<label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncandsoundesetting','Enable long polling');?> <input type="checkbox" name="EnableLongPolling" value="on" <?php echo isset($sound_data['long_polling_enabled']) && $sound_data['long_polling_enabled'] == 1 ? 'checked="checked"' : '' ?> /></label>

<label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncandsoundesetting','How many seconds keep connection to server?');?></label>
<input type="text" name="ServerConnectionTimeout" value="<?php echo htmlspecialchars(isset($sound_data['connection_timeout']) ? $sound_data['connection_timeout'] : 30)?>" title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncandsoundesetting','Value in seconds');?>" />

<label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncandsoundesetting','Sync for a new user message, interval in seconds');?></label>
<input type="text" name="SyncForUserMessagesEveryPolling" value="<?php echo htmlspecialchars(isset($sound_data['polling_chat_message_sinterval']) ? $sound_data['polling_chat_message_sinterval'] : '')?>" title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncandsoundesetting','Value in seconds');?>" />

<h2><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncandsoundesetting','New chat request notification settings');?></h2>

<label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncandsoundesetting','Play a new pending chat sound on a new chat request');?> <input type="checkbox" name="PlayOnRequest" value="on" <?php echo isset($sound_data['new_chat_sound_enabled']) && $sound_data['new_chat_sound_enabled'] == 1 ? 'checked="checked"' : '' ?> /></label>
<label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncandsoundesetting','Play a sound on a new message for a back office user');?> <input type="checkbox" name="PlayOnMessageBackOffice" value="on" <?php echo isset($sound_data['new_message_sound_admin_enabled']) && $sound_data['new_message_sound_admin_enabled'] == 1 ? 'checked="checked"' : '' ?> /></label>
<label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncandsoundesetting','Play a sound on a new message for a front end user');?> <input type="checkbox" name="PlayOnMessageFrontOffice" value="on" <?php echo isset($sound_data['new_message_sound_user_enabled']) && $sound_data['new_message_sound_user_enabled'] == 1 ? 'checked="checked"' : '' ?> /></label>
<label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncandsoundesetting','Show alert message on a new chat request');?> <input type="checkbox" name="ShowAlertMessageBackOffice" value="1" <?php echo isset($sound_data['show_alert']) && $sound_data['show_alert'] == 1 ? 'checked="checked"' : '' ?> /></label>

<label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncandsoundesetting','How many times play sound notification');?></label>
<input type="text" name="SoundNotificationRepeat" value="<?php echo htmlspecialchars(isset($sound_data['repeat_sound']) ? $sound_data['repeat_sound'] : '')?>" placeholder="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncandsoundesetting','Number');?>" title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncandsoundesetting','Number');?>" />

<label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncandsoundesetting','Delay between sound notifications in seconds');?></label>
<input type="text" name="SoundNotificationDelay" value="<?php echo htmlspecialchars(isset($sound_data['repeat_sound_delay']) ? $sound_data['repeat_sound_delay'] : '')?>" placeholder="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncandsoundesetting','delay in seconds');?>" title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncandsoundesetting','Seconds');?>" />

<ul class="button-group radius">
<li><input type="submit" class="small button" name="SaveConfig" value="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncandsoundesetting','Save');?>"/></li>
<li><input type="submit" class="small button" name="UpdateConfig" value="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncandsoundesetting','Update');?>"/></li>
<li><input type="submit" class="small button" name="CancelConfig" value="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncandsoundesetting','Cancel');?>"/></li>
</ul>

</form>
