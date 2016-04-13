<?php
  // front more items
?>
<div class="<?php print $classes; ?>">
  <div class="col-xs-12">
    <div class="well">
      <div class="pac-blog-title-img" style="background-image: url(sites/all/themes/pactober/images/ptfromtheblog1200.jpg); background-repeat: no-repeat">
        <?php if ($rows): ?>
          <?php print $rows; ?>
        <?php endif; ?>
      </div>
      <center><h2><a href="/peaceful-thoughts">More from <b>Peaceful Thoughts</b></a></h2></center>
    </div>
  </div>
</div>
