<?php
// front page blog listing 
?>
<?php
$title = "";
foreach ($fields as $id => $field) {
  if ($id=="title") {
    $title = $field->content;
  }
}
?>
<div class="pac-blog-listing"><?php print $title ?></div>
