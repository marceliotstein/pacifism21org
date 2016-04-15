<?php
// front page tout listing 
?>
<?php
$title = "";
$body = "";
$type = "";
$background_image = "";
foreach ($fields as $id => $field) {
  if ($id=="title") {
    $title = $field->content;
  } else if ($id=="body") {
    $body = $field->content;
  } else if ($id=="field_background_image") {
    $background_image = $field->content;
  } else if ($id=="type") {
    $type = $field->content;
  } else {
    //print "id is " . $id . "<br />";
  }
}
?>
<div class="well">
  <div class="pac-tout-front">
    <div class="pac-blog-title"><?php print $title ?></div>
    <?php if (!empty($background_image)): ?>
      <center><?php print $background_image ?></center>
    <?php endif; ?>
    <?php if (!empty($body)): ?>
      <?php print $body ?>
    <?php endif; ?>
  </div>
</div>
