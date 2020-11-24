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


function amfrrj_event($atts)
{
  $text = isset($atts['text']) ? $atts['text'] : '';
  $link = isset($atts['link']) ? $atts['link'] : '';

  $html = '
  <div id="my-information" uk-modal>
  <div class="amfrrj uk-position-large uk-position-center-left ">
  <div class="uk-modal-dialog uk-modal-body">
  <p>Patricia Daflon is inviting you to a scheduled Zoom meeting. <br /> 
  Topic: WEBINAR AMFRRJ <br />
  Time: Nov 26, 2020 08:00 PM Santiago <br /><br />
  <a class="amfrrj__info" href="' . $link . '"">' . $text . '</a><br />
  Meeting ID: 894 4563 4628 <br />
  Passcode: 907668<br />
  One tap mobile <br />
  +551146806788,,89445634628#,,,,,,0#,,907668# Brazil<br />
  +551147009668,,89445634628#,,,,,,0#,,907668# Brazil<br />
  Dial by your location<br />
  +55 11 4680 6788 Brazil<br />
  +55 11 4700 9668 Brazil<br />
  +55 21 3958 7888 Brazil<br />
  +55 11 4632 2236 Brazil<br />
  +55 11 4632 2237 Brazil<br />
  +1 669 900 6833 US (San Jose)<br />
  +1 929 436 2866 US (New York)<br />
  +1 253 215 8782 US (Tacoma)<br />
  +1 301 715 8592 US (Washington D.C)<br />
  +1 312 626 6799 US (Chicago)<br />
  +1 346 248 7799 US (Houston)<br />
  Meeting ID: 894 4563 4628<br />
  Passcode: 907668
  </p>
  </div>
  </div>
  </div>';

  return $html;
}

add_shortcode('amfrrj_event', 'amfrrj_event');
