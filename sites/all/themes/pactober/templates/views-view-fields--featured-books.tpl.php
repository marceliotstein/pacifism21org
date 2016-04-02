<?php
 /* 
  * featured books for pacifism.sh sidebar
  */

$amazon1 = '<a href="http://www.amazon.com/gp/product/';
$amazon2 = '/ref=as_li_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=';
$amazon3 = '&linkCode=as2&tag=litekick-20&linkId=';
$amazon4 = "\">";
$amazon5 = '</a><img src="http://ir-na.amazon-adsystem.com/e/ir?t=litekick-20&l=as2&o=1&a=';
$amazon6 = '" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />';

$img = "";
$title = "";
$artist = "";
$summary = "";
$link = "";
$amazon_product_code = "";
$amazon_link_id = "";
foreach ($fields as $id => $field) {
  if ($id=='title') {
    $title = strip_tags($field->content); 
  } else if ($id=='field_review_artist') {
    $artist = strip_tags($field->content); 
  } else if ($id=='field_review_image') {
    $img = $field->content; 
  } else if ($id=='field_review_summary') {
    $summary = strip_tags($field->content); 
  } else if ($id=='field_amazon_product_code') {
    $amazon_product_code = strip_tags($field->content); 
  } else if ($id=='field_amazon_link_id') {
    $amazon_link_id = strip_tags($field->content); 
  //} else if ($id=='') {
  //  $ = $field->content; 
  } else {
    print 'ID IS ' . $id . '<br />';
  }
}

$amazon_prefix = "";
$amazon_suffix = "";
if ((!empty($amazon_product_code)) && (!empty($amazon_link_id))) {
  $amazon_prefix = $amazon1 . 
                   $amazon_product_code . 
                   $amazon2 . 
                   $amazon_product_code .
                   $amazon3 .
                   $amazon_link_id .
                   $amazon4;
  $amazon_suffix = $amazon5 .
                   $amazon_product_code . 
                   $amazon6;
}
print '<div class="featured-book">';
print '<div class="review-header"><span class="review-title">' . $amazon_prefix . $title . $amazon_suffix . '</span>';
print '<span class="review-byline"><i> by ' . $artist . '</i></span></div>';
print '<table class="review-table"><tr>';
print '<td class="review-img-cell">' . $amazon_prefix . $img . $amazon_suffix . '</td>';
print '<td class="review-summary-cell">' . $summary . '</td>';
print '</tr></table>';
print '</div>';
