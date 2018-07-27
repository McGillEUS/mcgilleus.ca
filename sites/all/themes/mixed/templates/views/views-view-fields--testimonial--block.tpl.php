<div class="testimonial testimonial-image-left">
   <div class="img-container">
      <?php echo $fields['field_t_img']->content; ?>
   </div><!-- .img-container end -->
   <div class="testimonial-container">
   <span class="date"><?php echo $fields['created']->content; ?></span>
    <?php echo $fields['body']->content; ?>
   <span class="author"><?php echo $fields['title']->content; ?>, <strong><?php echo $fields['field_company']->content; ?></strong></span>
   </div><!-- .testimonial-container end -->
</div><!-- .testimonial.testimonial-image-left end -->