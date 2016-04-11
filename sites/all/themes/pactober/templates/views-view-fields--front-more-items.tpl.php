<?php
// front page blog listing 
?>
<?php
$title = "";
$body = "";
$type = "";
foreach ($fields as $id => $field) {
  if ($id=="title") {
    $title = $field->content;
  } else if ($id=="body") {
    $body = $field->content;
  } else if ($id=="type") {
    $type = $field->content;
  }
}
?>
<?php if ($type=="Item"): ?>
  <div class="well">
    <div class="pac-blog-title-img" style="background-image: url(sites/all/themes/pactober/images/ptfromtheblog1200.jpg)">
      <?php print $title ?>
    </div>
  </div>
<?php else: ?>
  <div class="well">
    <div class="pac-tout-front img-responsive">
      <div class="pac-blog-title"><?php print $title ?></div>
      <?php print $body ?>
    </div>
  </div>
<?php endif; ?>
