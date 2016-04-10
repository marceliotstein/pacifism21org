<?php
?>
<div class="<?php print $classes; ?>">
  <div class="row pac-blog-header">
    <img class="ptbanner img-responsive" src="sites/all/themes/pactober/images/ptbanner1200.jpg" />
    <div class="pac-blog-desc pull-right">The Pacifism21 Blog. Artwork by <a href="http://espenerichsen.blogspot.com">Espen Erichsen</a></div>
  </div>

  <?php if ($rows): ?>
    <?php print $rows; ?>
  <?php endif; ?>

  <?php if ($pager): ?>
    <?php print $pager; ?>
  <?php endif; ?>

</div><?php /* class view */ ?>
