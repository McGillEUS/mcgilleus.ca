
                                <div class="owl-item">
                                    <figure class="portfolio-item-container">
                                        <div class="portfolio-img zoom-hover">
                                        <img src="<?php print image_style_url('360x240', $row->_field_data['nid']['entity']->field_portfolio_image['und'][0]['uri']);?>" alt="img"/>
                                           

                                            <div class="mask-style-1">
                                                <div class="mask"></div>

                                                <div class="zoom">
                                                    <a href="<?php print file_create_url($row->_field_data['nid']['entity']->field_portfolio_image['und'][0]['uri']);?>" class="triggerZoom"></a>
                                                </div>
                                            </div>
                                        </div><!-- .portfolio-img end -->
<!-- 
                                        <figcaption>
                                            <?php print $fields['title']->content; ?>
                                            <ul class="portfolio-tags">
                                                <li><?php print $fields['field_portfolio_tags']->content; ?></li>
                                               
                                            </ul>
                                        </figcaption> -->
                                    </figure><!-- .portfolio-item end -->
                                </div><!-- .owl-item end -->
