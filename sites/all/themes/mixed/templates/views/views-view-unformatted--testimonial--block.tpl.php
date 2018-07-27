<div class="carousel-container">
    <div id="owl-testimonial" class="owl-carousel owl-carousel-navigation">
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php foreach ($rows as $id => $row): ?>
  <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
    <?php print $row; ?>
  </div>
<?php endforeach; ?>
 </div><!-- .owl-carousel end -->
</div><!-- .carousel-container end -->