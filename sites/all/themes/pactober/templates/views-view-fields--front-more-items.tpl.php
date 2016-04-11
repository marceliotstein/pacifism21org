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
<div class="well">
  <div class="pac-blog-title-img" style="background-image: url(sites/all/themes/pactober/images/ptfromtheblog1200.jpg)">
    <?php print $title ?>
  </div>
</div>
