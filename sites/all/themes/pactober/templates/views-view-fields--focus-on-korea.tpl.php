<?php
 /* 
  * featured topic for pacifism.sh 
  */

$img = "";
$title = "";
$author = "";
$link = "";
foreach ($fields as $id => $field) {
  if ($id=='title') {
    $title = $field->content; 
  } else if ($id=='name') {
    $author = strip_tags($field->content); 
  } else if ($id=='field_main_image') {
    $img_html = $field->content; 
    $img2 = explode('http',$img_html);
    $img3 = explode('.jpg',$img2[1]);
    $img = "http" . $img3[0] . ".jpg";
  } else {
    //print 'ID IS ' . $id . '<br />';
  }
}

//print '<div class="pac-topic-box">';
//print '<div class="pac-topic-well" style="background-image:url(' . $img . ')">';
//print '<div class="pactopic-dark"><div class="pactopic-dark-little">FOCUS ON KOREA</div><div class="pactopic-dark-big">' . $title . '</div></div>';
//print '</div></div>';

print '<div class="pac-story-index row">';
print '<div class="pac-story-index-img col-xs-12 col-sm-12 col-md-12 centered"><img class="center-block img-responsive" src="' . $img . '" /></div>';
print '<div class="pac-story-index-title col-xs-12 col-sm-12 col-md-12 centered"><div>' . $title . ' by ' . $author . '</div></h3></div>';
print '</div>';

