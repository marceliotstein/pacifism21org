<?php
 // 
 // top blog post display on front page
 //
?>
<?php
$title = "";
$img = "";
foreach ($fields as $id => $field) {
  if ($id=="title") {
    $title = $field->content;
  } else if ($id=="field_main_image") {
    $img = $field->content;
  } else if ($id=="path") {
    $path = $field->content;
  }
}

// well with image and no title
$justimg = null;
if (!empty($img)) {
  $imgexp = explode("http",$img);
  if (!empty($imgexp[1])) {
    $imgexp2 = explode(".jpg",$imgexp[1]);
    $justimg = "http" . $imgexp2[0] . ".jpg";
    $img_uri = str_replace("http://pacifism21.org/","",$justimg);
  }
  ?>
  <a href="<?php print $path ?>"><img class="pac-well-image img-responsive" src="<?php print $justimg ?>" /></a>
  <?php
}
