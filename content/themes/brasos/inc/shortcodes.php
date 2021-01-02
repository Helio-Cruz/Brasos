<?php

function button_certificados()
{
  return '<div class="uk-flex uk-height-small uk-margin uk-text-center"><a class="uk-margin-auto uk-margin-auto-vertical normal-button special-button margin-button" href="' . home_url('/certificados/') . '">Certificados</a></div>';
}
add_shortcode('certificados', 'button_certificados');

function link_popup($atts)
{
  $text = isset($atts['text']) ? $atts['text'] : '';
  $link = isset($atts['link']) ? $atts['link'] : '';

  $html = '<a href="' . $link . '"" class="popup-link">' . $text . '</a>';

  return $html;
}
add_shortcode('link_popup', 'link_popup');

function link_brasit2020($atts)
{
  $text = isset($atts['text']) ? $atts['text'] : '';
  $link = isset($atts['link']) ? $atts['link'] : '';

  $html = '<a href="' . $link . '"" class="popup-brasit">' . $text . '</a>';

  return $html;
}
add_shortcode('link_brasit2020', 'link_brasit2020');


function brasos_form_members($atts) {
	ob_start();
	require_once(dirname( __DIR__ ) . '../../../plugins/brasos/templates/form.php' );
	$output = ob_get_clean();
	return $output;
}
add_shortcode('brasos_form_members', 'brasos_form_members');