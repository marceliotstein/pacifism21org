<?php

/**
 * pacstrap overrides to bootstrap
 */

function pactober_preprocess_html(&$variables) {
}

function pactober_preprocess_page(&$variables) {
  $variables['content_column_class'] = ' class="col-sm-9"';
}

// make all images bootstrap responsive

function pactober_preprocess_image(&$variables) { 
  if (strpos($variables['path'],'public://')!==FALSE) {
    unset($variables['width']); 
    unset($variables['height']); 
    $variables['attributes']['class'][] = 'img-responsive'; 
  }
}
?>
