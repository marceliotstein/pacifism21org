<?php
//
// template for main blog landing page
//
$title = "";
$post_date = "";
foreach ($fields as $id => $field) {
  if ($id=="title") {
    $title = $field->content;
  } else if ($id=="created") {
    $post_date = $field->content;
  }
}
?>
<div class="pac-blog-title"><?php print $title ?></div>
<div class="pac-blog-date"><?php print $post_date ?></div>
