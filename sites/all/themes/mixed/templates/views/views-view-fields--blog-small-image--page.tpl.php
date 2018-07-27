

<li class="blog-post format-standard clearfix">
                            <ul class="post-info">
                                <li class="post-date">
                                    <span class="month"><?php print $fields['created']->content; ?></span>
                                    <span class="day"><?php print $fields['created_1']->content; ?></span>
                                </li>

                                <li class="post-avatar">
                                    <div class="avatar-container">
                                         <?php print $fields['picture']->content; ?>
                                    </div>

                                    <?php print $fields['name']->content; ?> 
                                </li>

                                <li class="post-comment-number">
                                 <?php print $fields['comment_count']->content; ?>
                                </li>
                            </ul><!-- .post-info end -->

                            <div class="post-media">
                            
                            <?php if(!empty($fields['field_image']->content)) : ?>
                             <?php print $fields['field_image']->content; ?>
                             <?php endif; ?>
                             <?php if(!empty($fields['field_video']->content)) : ?>
                             <?php print $fields['field_video']->content; ?>
                             <?php endif; ?>
                             <?php if(!empty($fields['field_quote']->content)) : ?>
                             <?php print $fields['field_quote']->content; ?>
                             <?php endif; ?>
                             <?php if(!empty($fields['field_audio']->content)) : ?>
                             <?php print $fields['field_audio']->content; ?>
                             <?php endif; ?>
                             <?php if(!empty($fields['field_galery']->content)) : ?>
                             <?php print $fields['field_galery']->content; ?>
                             <?php endif; ?>
                             
                              
                            </div><!-- .post-media end -->

                            <article class="post-body">
                    
                                <a href="<?php print $fields['path']->content; ?>">
                                    <h2><?php print $fields['title']->content; ?></h2>
                                </a>

                                <ul class="post-meta">
                                
                              
                                     
                                    <li class="post-tags fa fa-tags">
                                     <?php print $fields['term_node_tid']->content; ?>                                           
                                    </li>
                                </ul><!-- .post-meta end -->

                                <?php print $fields['body']->content; ?>

                                <a class="read-more" href="<?php print $fields['path']->content; ?>">Read more</a>
                            </article><!-- .post-body end -->
 </li><!-- .blog-post.format-standard end -->
