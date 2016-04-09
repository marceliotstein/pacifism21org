<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
?>
<?php
$title = "";
$body = "";
$img = "";
$tout_order = 0;
$tout_title = null;
foreach ($fields as $id => $field) {
  if ($id=="title") {
    $title = $field->content;
  } else if ($id=="body") {
    $body = $field->content;
  } else if ($id=="field_main_image") {
    $img = $field->content;
  } else if ($id=="field_tout_order") {
    $tout_order = $field->content;
  } else if ($id=="field_tout_title") {
    $tout_title = $field->content;
  } else if ($id=="path") {
    $tout_path = $field->content;
  }
}

// get clean img URL for background
$justimg = null;
if (!empty($img)) {
  if (empty($tout_title)) {
    $tout_title = $title;
    $title = "";
  } else if ($tout_title=="none") {
    $tout_title = null;
    $title = "";
  }
  $imgexp = explode("http",$img);
  if (!empty($imgexp[1])) {
    $imgexp2 = explode(".jpg",$imgexp[1]);
    $justimg = "http" . $imgexp2[0] . ".jpg";
    $img_uri = str_replace("http://pacifism21.org/","",$justimg);
    /*
    $img_info = image_get_info($img_uri);
    $img_width = $img_info['width'];
    $img_height = $img_info['height'];
    */
  }
}
if (!empty($justimg)) {
  if (!empty($tout_title)) {
    // well with title and background image
    // override height with random value based on length of title
    $tout_height_vary = strlen(strip_tags($tout_title)) * 6;
    if ($tout_height_vary < 100) {
      $tout_height_vary = 100;
    } else if ($tout_height_vary > 200) {
      $tout_height_vary = 200;
    }
    $tout_height = 120 + $tout_height_vary;
    ?>
    <div class="well pac-story-image-well" tout-order="<?php print $tout_order ?>" style="height:<?php print $tout_height ?>px;background-size: 110%;background-image: url(<?php print $justimg ?>)">
      <div class="pacheading-dark">
        <h4><?php print $tout_title ?></h4>
      </div>
    </div>
    <?php
  } else {
    // well with image and no title
    ?>
    <a href="<?php print $tout_path ?>"><img class="pac-well-image img-responsive" src="<?php print $justimg ?>" /></a>
    <?php
  }
} else {
  // well with no background image
  if (!empty($tout_title)) {
    $title = $tout_title;
  }
  ?>
    <div class="well">
      <h4><?php print $title ?></h4>
      <?php print $body; ?>
    </div>
  <?php
}
