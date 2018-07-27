


<li class="col-md-6 isotope-item <?php print $fields['field_portfolio_tags']->content; ?>">
                            <figure class="portfolio-item-container">
                                <div class="portfolio-img hover-alt">
                                  <?php print $fields['field_portfolio_image']->content; ?>

                                    <div class="mask-style-2">
                                        <div class="mask"></div>

                                        <ul>
                                            <li class="portfolio-zoom">
                                               <a href="<?php print file_create_url($row->_field_data['nid']['entity']->field_portfolio_image['und'][0]['uri']);?>" class="triggerZoom fa fa-expand"></a>
                                            </li>
                                            
                                            <li class="portfolio-single">
                                                <a href="<?php print $fields['path']->content; ?>" class="fa fa-mail-forward"></a>
                                            </li>
                                        </ul>                                       
                                    </div>
                                </div><!-- .portfolio-img end -->

                                <figcaption>
                                    <?php print $fields['title']->content; ?>
                                    <ul class="portfolio-tags">
                                        <li><?php print $fields['field_portfolio_tags_1']->content; ?></li>
                                       
                                    </ul>
                                </figcaption>
                            </figure><!-- .portfolio-item end -->
                        </li>