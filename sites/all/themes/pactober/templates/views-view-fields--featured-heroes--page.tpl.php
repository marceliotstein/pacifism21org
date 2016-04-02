<?php
 /* 
  * featured books for pacifism.sh sidebar
  */

$img = "";
$title = "";
$artist = "";
$summary = "";
$link = "";
foreach ($fields as $id => $field) {
  if ($id=='title') {
    $title = $field->content; 
  } else if ($id=='body') {
    $summary = $field->content; 
  } else if ($id=='field_review_artist') {
    $artist = strip_tags($field->content); 
  } else if ($id=='field_flow_image') {
    $img_html = $field->content; 
    $img2 = explode('http',$img_html);
    $img3 = explode('.jpg',$img2[1]);
    $img = "http" . $img3[0] . ".jpg";
  } else {
    //print 'ID IS ' . $id . '<br />';
  }
}

print '<div class="pac-hero-box">';
print '<div class="pac-hero-page-well" style="background-image:url(' . $img . ')">';
print '<div class="pachero-dark"><div class="pachero-dark-little">HEROES OF PACIFISM</div><div class="pachero-dark-big">' . $title . '</div></div>';
print '</div>';
print '<div class="pac-hero-summary"><p>' . $summary . '</p></div>';
print '</div>';

