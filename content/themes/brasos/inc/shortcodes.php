<?php 

function button_certificados(){
  return '<div class="uk-flex uk-height-small uk-margin uk-text-center"><a class="uk-margin-auto uk-margin-auto-vertical normal-button special-button margin-button" href="' . home_url('/certificados/') . '">Certificados</a></div>';
}
add_shortcode('certificados', 'button_certificados');

    
    

   
    
  
