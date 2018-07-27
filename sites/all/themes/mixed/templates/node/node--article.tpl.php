<?php
	global $base_url; 
	$image_slide = "";

	if ($items = field_get_items('node', $node, 'field_gallery')) {
	  if (count($items) == 1) {
		$image_slide = 'false';
	  }
	  elseif (count($items) > 1) {
		$image_slide = 'true';
	  }
	}

	$img_count = 0;
	$counter = count($items);
	
	$termid = arg(2);
?>


   <?php if ($teaser): ?>
  
       
  
  <ul class="blog-posts blog-post-large">                       

                        <li class="blog-post clearfix">
                            <ul class="post-info">
                                <li class="post-date">
                                    <span class="month"><?php print format_date($node->created, 'custom', 'M'); ?></span>
                                    <span class="day"><?php print format_date($node->created, 'custom', 'd'); ?></span>
                                </li>

                                <li class="post-avatar">
                                    <div class="avatar-container">
                                       <?php print $user_picture; ?>
                                    </div>

                                     <?php print $name; ?>
                                </li>

                                <li class="post-comment-number">
<a href="<?php print $node_url; ?>#comments"><i class="fa fa-comments"></i><?php print $comment_count; ?></a>
                                </li>
                            </ul><!-- .post-info end -->

                            <div class="post-media">
                                  <?php if(isset($node->field_video['und']) && !empty($node->field_video['und'][0]['value'])) :?>
					
                               <?php print $node->field_video['und'][0]['value']; ?>
                    
						
				
				<?php elseif(isset($node->field_audio['und']) && !empty($node->field_audio['und'][0]['value'])) :?>
					
						<?php print $node->field_audio['und'][0]['value']; ?>
						
				
						
						
				<?php elseif($image_slide != '') : ?>
					<div class="entry">
						<div class="flexslider">
							<ul class="slides">
								<?php while ($img_count < $counter) { ?>
									<li><img src="<?php echo file_create_url($node->field_gallery['und'][$img_count]['uri']); ?>" class="img-responsive" alt=""></li>
								<?php $img_count++; } ?>	
							</ul><!-- end slides -->    
						</div><!-- end post-slider -->  
						<div class="post-type">
							<i class="fa fa-camera"></i>
						</div><!-- end pull-right -->
					</div><!-- end entry -->
					
				<?php else :?>
                 <?php if (!empty($content['field_image'])) : ?>
					
						<?php if(isset($node->field_image['und'])) : ?>
							<img src="<?php echo file_create_url($node->field_image['und'][0]['uri']); ?>" alt="img" class="img-responsive">
						<?php else :?>
							<img src="<?php global $image_default; echo $image_default; ?>" alt="img" class="img-responsive">
						<?php endif; ?>
					   <?php endif; ?>	
				<?php endif; ?>
                            </div><!-- .post-media end -->

                            <article class="post-body">
                            <h2 class="blog-content-tile"><a title="<?php print $title; ?>" href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
                                <ul class="post-meta"> 
                                
                                <?php if(isset($node->field_video['und']) && !empty($node->field_video['und'][0]['value'])) :?>
					
						      <li class="fa fa-play"><a href="">Video</a></li>
					
				<?php elseif(isset($node->field_audio['und']) && !empty($node->field_audio['und'][0]['value'])) :?>
					 <li class="fa fa-volume-up"><a href="">Audio</a></li>
				<?php elseif(isset($node->field_quote['und']) && !empty($node->field_quote['und'][0]['value'])) :?>
					<li class="fa fa-quote-left"><a href="">Blockquote</a></li>
                    
                    
                    <?php elseif($image_slide != '') : ?>
					<li class="fa fa-image"><a href="">Gallery</a></li>
                    
                    <?php else :?>
					  <li class="fa fa-camera-retro"><a href="">Standard</a></li>
				<?php endif; ?>
 
                                    <li class="post-tags fa fa-tags">
                                       <?php
// Query database table taxonomy_term_data and taxonomy_index
// So I can get all terms from my node.
$term = db_query('SELECT t.name, t.tid FROM {taxonomy_index} n LEFT JOIN  {taxonomy_term_data} t ON (n.tid = t.tid) WHERE n.nid = :nid', array(':nid' => $node->nid));

// db_query in Drupal 7 returns a stdClass object. 
// Value names are corresponding to the fields in your SQL query 
//(in our case "t.name") AND t.tid for build path.
$tags = '';
foreach ($term as $record) {
  // I put l() function for make my links.
  $tags .= l($record->name, 'taxonomy/term/' . $record->tid) . ' ';
}

print ' ' . $tags;
?>                                        
                                    </li>
                                </ul><!-- .post-meta end -->
                                

                               
                               
                               <?php if(isset($node->field_quote['und']) && !empty($node->field_quote['und'][0]['value'])) :?>

							
								<?php print $node->field_quote['und'][0]['value']; ?>
	
                               
               <?php endif; ?>
         



<?php if(isset($node->body['und'])) { print $node->body['und'][0]['summary']; } ?>

<?php if($teaser): ?>

<a class="read-more" href="<?php print $node_url;?>"><?php echo t('Read more'); ?></a>

 <?php endif;?>

 </article>
  <?php endif; ?>
 
 
<?php if (!$teaser): ?>

   
  <ul class="blog-posts blog-post-large">                       

                        <li class="blog-post format-standard clearfix">
                            <ul class="post-info">
                                <li class="post-date">
                                    <span class="month"><?php print format_date($node->created, 'custom', 'M'); ?></span>
                                    <span class="day"><?php print format_date($node->created, 'custom', 'd'); ?></span>
                                </li>

                                <li class="post-avatar">
                                    <div class="avatar-container">
                                        <?php print $user_picture; ?>
                                    </div>

                                    <?php print $name; ?>
                                </li>

                                <li class="post-comment-number">
 <a href="<?php print $node_url; ?>#comments"><i class="fa fa-comments"></i><?php print $comment_count; ?></a>
                                </li>
                            </ul><!-- .post-info end -->

                            <div class="post-media">
                               <?php if(isset($node->field_video['und']) && !empty($node->field_video['und'][0]['value'])) :?>
				
                               <?php print $node->field_video['und'][0]['value']; ?>
                          
						
				
				<?php elseif(isset($node->field_audio['und']) && !empty($node->field_audio['und'][0]['value'])) :?>
					
						<?php print $node->field_audio['und'][0]['value']; ?>
	
				<?php elseif(isset($node->field_quote['und']) && !empty($node->field_quote['und'][0]['value'])) :?>
					
					
							
								<?php print $node->field_quote['und'][0]['value']; ?>
							
                          
				<?php elseif($image_slide != '') : ?>
					<div class="entry">
						<div class="flexslider">
							<ul class="slides">
								<?php while ($img_count < $counter) { ?>
									<li><img src="<?php echo file_create_url($node->field_gallery['und'][$img_count]['uri']); ?>" class="img-responsive" alt=""></li>
								<?php $img_count++; } ?>	
							</ul><!-- end slides -->    
						</div><!-- end post-slider -->  
						<div class="post-type">
							<i class="fa fa-camera"></i>
						</div><!-- end pull-right -->
					</div><!-- end entry -->
					
				<?php else :?>
					
						<?php if (!empty($content['field_image'])) : ?>
					
						<?php if(isset($node->field_image['und'])) : ?>
							<img src="<?php echo file_create_url($node->field_image['und'][0]['uri']); ?>" alt="img" class="img-responsive">
						<?php else :?>
							<img src="<?php global $image_default; echo $image_default; ?>" alt="img" class="img-responsive">
						<?php endif; ?>
					   <?php endif; ?>	
				
						
				<?php endif; ?>

                            </div><!-- .post-media end -->

                            <article class="post-body">
                                <h2><?php print $title; ?></h2>

                                <ul class="post-meta"> 
                                
                                <?php if(isset($node->field_video['und']) && !empty($node->field_video['und'][0]['value'])) :?>
					
						      <li class="fa fa-play"><a href="">Video</a></li>
					
				<?php elseif(isset($node->field_audio['und']) && !empty($node->field_audio['und'][0]['value'])) :?>
					 <li class="fa fa-volume-up"><a href="">Audio</a></li>
				<?php elseif(isset($node->field_quote['und']) && !empty($node->field_quote['und'][0]['value'])) :?>
					<li class="fa fa-quote-left"><a href="">Blockquote</a></li>
                    
                    
                    <?php elseif($image_slide != '') : ?>
					<li class="fa fa-image"><a href="">Gallery</a></li>
                    
                    <?php else :?>
					  <li class="fa fa-camera-retro"><a href="">Standard</a></li>
				<?php endif; ?>
 
                                    <li class="post-tags fa fa-tags">
                                       <?php
// Query database table taxonomy_term_data and taxonomy_index
// So I can get all terms from my node.
$term = db_query('SELECT t.name, t.tid FROM {taxonomy_index} n LEFT JOIN  {taxonomy_term_data} t ON (n.tid = t.tid) WHERE n.nid = :nid', array(':nid' => $node->nid));

// db_query in Drupal 7 returns a stdClass object. 
// Value names are corresponding to the fields in your SQL query 
//(in our case "t.name") AND t.tid for build path.
$tags = '';
foreach ($term as $record) {
  // I put l() function for make my links.
  $tags .= l($record->name, 'taxonomy/term/' . $record->tid) . ' ';
}

print ' ' . $tags;
?>                                        
                                    </li>
                                </ul><!-- .post-meta end -->
                                

                               
                               
                               
                               
         
          


 <?php
									// Hide comments, tags, and links now so that we can render them later.
									hide($content['field_category']);
									hide($content['field_image']);
									hide($content['field_gallery']);
									hide($content['field_audio']);
									hide($content['field_video']);
									hide($content['field_quote']);
									hide($content['links']);
									hide($content['comments']);
									print render($content);
								?>
                        
                          <?php print render($content['comments']); ?>       
 </article>
 
 
 

 	<?php endif; ?>
