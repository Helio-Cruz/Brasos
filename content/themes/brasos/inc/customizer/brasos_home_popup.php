<?php

function brasos_home_popup($wp_customize)
{
  
  $wp_customize->add_setting('brasos_popup_image', []);

  $popup_image =  new WP_Customize_Image_Control(
    $wp_customize,
    'brasos_popup_image',
    [
      'label'    => 'Mude a Imagem do Pop-up',
      'section'  => 'brasos_home_popup',
      'settings' => 'brasos_popup_image',
    ]
  );

  $wp_customize->add_control($popup_image);
}
