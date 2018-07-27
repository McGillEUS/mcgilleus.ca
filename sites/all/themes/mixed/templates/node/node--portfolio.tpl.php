
<?php 
if (!$page) { 
?>

<?php
$image_slide = "";

if ($items = field_get_items('node', $node, 'field_portfolio_slider')) {
  if (count($items) == 1) {
    $image_slide = 'false';
  }
  elseif (count($items) > 1) {
    $image_slide = 'true';
  }
}

$img_count = 0;
$counter = count($items);

?>


<div class="col-md-3">
                        <div class="portfolio-description">
                             <ul class="clearfix portfolio-tags">
                                <li><i class="fa fa-tags"></i></li>
                                <li> <?php
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
?>                      </li>
                               
                            </ul><!-- .portfolio-tags end -->


                            <div class="simple-heading left">
                                <h3><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h3>
                                <?php
  hide($content['field_portfolio_slider']);
  hide($content['field_portfolio_image']);
  hide($content['links']);
  hide($content['field_portfolio_tags']);
  hide($content['field_portfolio_link']);
  hide($content['field_body']);
?>
                            </div>

                             <?php print render($content['field_portfolio_link']); ?>
                        </div><!-- .portfolio-description end -->
                    </div>
                    
                    <?php } else { 

$acc = user_load(1);
?>

<?php
$image_slide = "";

if ($items = field_get_items('node', $node, 'field_portfolio_slider')) {
  if (count($items) == 1) {
    $image_slide = 'false';
  }
  elseif (count($items) > 1) {
    $image_slide = 'true';
  }
}

$img_count = 0;
$counter = count($items);

?>

<div class="col-md-8">

                        <div class="portfolio-description">
                            <ul class="clearfix portfolio-tags">
                                <li><i class="fa fa-tags"></i></li>
                                <li> <?php
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
?>                      </li>
                               
                            </ul><!-- .portfolio-tags end -->
                         

                            <div class="simple-heading left">
                                <h3><?php print $title; ?></h3>
                            </div>
                    <?php
  hide($content['field_portfolio_slider']);
  hide($content['field_portfolio_image']);
  hide($content['links']);
  hide($content['field_portfolio_tags']);
  hide($content['field_portfolio_link']);
  print render($content);
?>
                           
 <?php print render($content['field_portfolio_link']); ?>

                        </div><!-- .portfolio-description end -->
                    </div>
                    
                    

                    
                    <?php if ( ($image_slide == 'true') ): ?>
 <div class="col-md-8">
                        <div class="nivo-wrapper">
                            <div id="slider" class="nivoSlider">
                <?php while ($img_count < $counter) { ?>
                  <img src="<?php echo file_create_url($node->field_portfolio_slider['und'][$img_count]['uri']); ?>" alt="img" >
                  <?php $img_count++; } ?>	
                </div>
            </div>
</div>            
<?php endif; ?>
 
<?php if ($image_slide == 'false'): ?>
              <div class="col-md-3">
			<img src="<?php echo file_create_url($node->field_portfolio_image['und'][0]['uri']); ?>" alt="img" >
            </div>
<?php endif; ?>



<?php } ?>