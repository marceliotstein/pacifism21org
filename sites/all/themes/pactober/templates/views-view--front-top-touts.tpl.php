<?php
  // front more items
?>
<div class="<?php print $classes; ?>">
  <?php if ($title): ?>
    <?php print $title; ?>
  <?php endif; ?>
  <?php if ($header): ?>
    <div class="view-header">
      <?php print $header; ?>
    </div>
  <?php endif; ?>

  <?php if ($rows): ?>
    <?php print $rows; ?>
  <?php endif; ?>

  <?php if ($pager): ?>
    <?php print $pager; ?>
  <?php endif; ?>

</div><?php /* class view */ ?>
