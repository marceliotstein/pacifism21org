?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>

<?php
$num_stories = 0;

// divide into one, two or three columns

$one_col1 = '<div class="col-xs-12">';
$one_col2 = '<div class="col-xs-12">';
$one_col3 = '<div class="col-xs-12">';
$one_col4 = '<div class="col-xs-12">';

$two_col1 = '<div class="col-xs-6">';
$two_col2 = '<div class="col-xs-6">';

$three_col1 = '<div class="col-xs-4">';
$three_col2 = '<div class="col-xs-4">';
$three_col3 = '<div class="col-xs-4">';

foreach ($rows as $id => $row) {

  if (($num_stories%5)==0) {
    $one_col1 .= $row;
  } else if (($num_stories%5)==1) {
    $one_col2 .= $row;
  } else if (($num_stories%5)==2) {
    $one_col3 .= $row;
  } else {
    $one_col4 .= $row;
  }

  if ($num_stories<5) {
    $two_col1 .= $row;
    $three_col1 .= $row;
  } else if ($num_stories<7) {
    $two_col2 .= $row;
    $three_col2 .= $row;
  } else if ($num_stories<9) {
    $two_col1 .= $row;
    $three_col2 .= $row;
  } else {
    $two_col2 .= $row;
    $three_col3 .= $row;
  }
  $num_stories++;
}

$one_col1 .= '</div>';
$one_col2 .= '</div>';
$one_col3 .= '</div>';
$one_col4 .= '</div>';

$two_col1 .= '</div>';
$two_col2 .= '</div>';

$three_col1 .= '</div>';
$three_col2 .= '</div>';
$three_col3 .= '</div>';

$one_col_start = '<div class="col-xs-12 col-sm-12 hidden-md hidden-lg hidden-xl">';
$two_col_start = '<div class="hidden-xs hidden-sm col-md-12 hidden-lg hidden-xl">';
$three_col_start = '<div class="hidden-xs hidden-sm hidden-md col-lg-12 col-xl-12">';

$one_col = $one_col_start . $one_col1 . $one_col2 . $one_col3 . $one_col4 . '</div>';
$two_col = $two_col_start . $two_col1 . $two_col2 . '</div>';
$three_col = $three_col_start . $three_col1 . $three_col2 . $three_col3 . '</div>';

print $one_col . $two_col . $three_col;
?>
