
 <div class="col-md-3">
    <div class="blog-post-box">
       <div class="post-media">
       
<?php if(!empty($fields['field_video']->content)) : ?>
<?php print $fields['field_video']->content; ?>
<?php endif; ?>
                               
<?php if(!empty($fields['field_image']->content)) : ?>
<?php print $fields['field_image']->content; ?>
<?php endif; ?>

<?php if(!empty($fields['field_quote']->content)) : ?>

<?php print $fields['field_quote']->content; ?>

<?php endif; ?>
        </div> 

                            <div class="post-body">
                                    <h3><?php print $fields['title']->content; ?></h3>
                                    <div class="comment-container">
                                        <span class="date"><?php print $fields['created']->content; ?></span>
                                    </div>
                                <?php print $fields['body']->content; ?>
                            </div><!-- .post-body end -->
                        </div><!-- .blog-post-box end -->
                    </div><!-- .col-md-4 end -->