<?php if ($visitor->has_message_from_operator == true) : ?>
lh_inst.stopCheckNewMessage();
lh_inst.showStartWindow('http://<?php echo $_SERVER['HTTP_HOST']?><?php echo erLhcoreClassDesign::baseurl('chat/readoperatormessage')?>');
<?php endif; ?>