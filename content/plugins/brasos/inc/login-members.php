<?php
class loginMembers {}

$loginMembers = new loginMembers();

// A l'activation du plugin...
register_activation_hook(__FILE__, [$loginMembers, 'activate']);