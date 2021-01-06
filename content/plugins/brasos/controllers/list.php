<?php
/*
function list_data($user)
{

    $args = array(
        'role'    => 'subscriber',
        //'orderby' => 'last_name',
        'order'   => 'DESC'
    );
    $usermeta = array();

    $userData = get_user_meta(
        $user->ID
    );

    $blogusers = get_users($args);
    // Array of WP_User objects.
    foreach ($blogusers as $user) {
        echo '<span>' . esc_html($user->ID) . ' ' . ($user->user_email) . ' ' . ($user->user_registered) . '</span></br></br>';
        //  print_r(get_user_meta ( $user->ID));
    }
   
}
