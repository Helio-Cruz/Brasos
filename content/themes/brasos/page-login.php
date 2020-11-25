<!--
   <//?php
/*
Template Name: Page Login
*/
?> 
-->



<?php

add_action('wp_ajax_nopriv_ajax_login', 'ajax_login');
add_action('wp_ajax_ajax_login', 'ajax_login');

	global $user_ID;
	if (!$user_ID)
	{
		if($_POST)
		{
			$username = $wpdb->escape($_REQUEST['log']);
			$password = $wpdb->escape($_REQUEST['pwd']);
            $remember = $wpdb->escape($_REQUEST['remember-me']);
            

            if (empty($username) || empty($password)) {
                $err = 'Merci de compléter les champs.';
                if (!empty($err)) :  echo '<p class="inputs__output-error">PHP' . $err . '</p>';
                endif;
            } else {

        
                $remember = "false";
                $login_data = array();
                $login_data['user_login'] = $username;
                $login_data['user_password'] = $password;
                $login_data['remember'] = $remember;
                $user_verify = wp_signon( $login_data, true );
            }
 



/*
			if($remember) $remember = "true";
			else $remember = "false";
			$login_data = array();
			$login_data['user_login'] = $username;
			$login_data['user_password'] = $password;
			$login_data['remember'] = $remember;
			$user_verify = wp_signon( $login_data, true );*/
 
			if ( is_wp_error($user_verify) ) 
			{
				echo "<span style='color:#FF0000'>Invalid username or password. Please try again!</span>";
				exit();
			} 
			else 
			{	
				echo "<script type='text/javascript'>window.location='". get_bloginfo('url') ."'</script>";
				exit();
			}
		}
	}
?>
 

 <!-- This is the modal  -->
<div id="my-id" uk-modal>
    <div class="uk-modal-dialog uk-modal-body page-login">
        <p>Área exclusiva para Membros</p>
        <!-- <div id="result" style="color:#FF0000"></div>    -->
        <div id="form_output"></div>
        <?php
/*
        $login  = (isset($_GET['login'])) ? $_GET['login'] : 0;

        if ($login === "failed") {
            echo '<p class="login-msg"><strong>ERROR:</strong> Invalid username and/or password.</p>';
        } elseif ($login === "empty") {
            echo '<p class="login-msg"><strong>ERROR:</strong> Username and/or Password is empty.</p>';
        } elseif ($login === "false") {
            echo '<p class="login-msg"><strong>ERROR:</strong> You are logged out.</p>';
        } else

        $args = array(
            'redirect' => home_url('/membros'),
            // 'form_id' => 'loginform-custom',
           'label_username' => __('Email'),
            'id_username' => 'user',
            'id_password' => 'pass'
        ); */
        ?>
    
    <?php 
      $args = array(
        'redirect' => home_url('/membros'),
        // 'form_id' => 'loginform-custom',
       'label_username' => __('Email'),
        'id_username' => 'user',
        'id_password' => 'pass'
    ); 
    
    wp_login_form($args); ?>
    </div>
 
</div>

 
<script type="text/javascript">  

function clearForm() {
    $('#user').val('');
      $('#pass').val('');
    $("#form_output").hide();
}

$("#wp-submit").click(function(event) {

    var formMessage = $("#form_output");
    event.preventDefault();
    var log = $('#user').val();
    var pwd = $('#pass').val();
    formMessage.show();
    var serialized = $(this).serialize();

    // var input_data = $('#wp_login_form').serialize();

    if (serialized.indexOf('=&') > -1 || serialized.substr(serialized.length - 1) == '=') {
        formMessage.addClass('inputs__output-error').html('Merci de compléter les champs vides');
    }
	$.ajax({
		type: "POST",
    //	url:  '<//?php  (wp_redirect('membros')) ?>',
        url: ajaxurl,
        data: {
             log,
             pwd,
                action: 'ajax_login'
        },
		success: function(response){
            window.location= ' ';
        },
        error: function (){
            formMessage.addClass('login-error').html('Une erreur s\'est produite. Veuillez réessayer.');
        }
	});
	return false;
});
</script>	


<!--

<div id="my-id" uk-modal>
    
<div class="uk-modal-dialog uk-modal-body page-login">

<div id="result" style="color:#FF0000"></div>   

<//?php print_r($_SERVER['REQUEST_URI']) ?>

<form name="login" method="post" id="wp_login_form" action="<//?php echo get_option('home'); ?>/wp-login.php">
	<input type="hidden" name="action" value="login" />
	<input type="hidden" name="redirect_to" value="<//?php echo $_SERVER['REQUEST_URI']; ?>" />
	<table width="450px" border="0" cellpadding="0" cellspacing="0">
	  <tr>
		<td colspan="2" style="padding-bottom: 8px;"><strong>MEMBER LOGIN</strong></td>
	  </tr>
	  <tr>
		<td><strong>Username:</strong></td>
		<td align="right"><input type="text" name="log" id="log" value="" class="text" /></td>
	  </tr>
	  <tr>
		<td><strong>Password:</strong></td>
		<td align="right"><input type="password" name="pwd" id="pwd" class="text" /></td>
	  </tr>
	  <tr>
		<td align="left" colspan="2"><input name="rememberme" id="rememberme" type="checkbox" checked="checked" value="forever" /> Remember me</td>
	  </tr>
	  <tr>
		<td align="left" colspan="2"><input type="submit" id="btnsubmit" value="Login"/></td>
	  </tr>
 
 
	</table>
</form>
    </div>
    </div>


    <script type="text/javascript">  						
$("#btnsubmit").click(function() {
    event.preventDefault();
	$('#result').html('Loading ...').fadeIn();
	var input_data = $('#wp_login_form').serialize();
	$.ajax({
		type: "POST",
		url:  "<//?php echo "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>",
		data: input_data,
		success: function(msg){
			$('#result').html(msg);
		}
	});
	return false;
});
</script>	

-->
 