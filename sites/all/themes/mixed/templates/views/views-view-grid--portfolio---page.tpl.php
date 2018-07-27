<?php if (!empty($title)) : ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>

<div class="row">
   <ul id="portfolioitems" class="isotope">
  <?php foreach ($rows as $row_number => $columns): ?>        
    <?php foreach ($columns as $column_number => $item): ?>
      <?php print $item; ?>
    <?php endforeach; ?>
  <?php endforeach; ?>
  </ul>
</div>