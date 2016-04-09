<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>

<?php
$num_stories = 0;

$one_col = '<div class="col-xs-12">';

foreach ($rows as $id => $row) {
  $one_col .= $row;
  $num_stories++;
}

$one_col .= '</div>';

print $one_col;
?>
