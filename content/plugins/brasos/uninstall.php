<?php

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

require __DIR__.'./inc/members-form.php';

$becomeMember = new BecomeMember();
// $becomeMember->removeTable();