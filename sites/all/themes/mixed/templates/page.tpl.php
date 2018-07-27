  <?php
    $header_option = arg(0) == 'home' && arg(1) == 'header' ? arg(2) : theme_get_setting('header');
    include "headers/header-{$header_option}.tpl.php";
  ?>
  
   <?php if ($page['page_title']): ?>
         <?php if (!drupal_is_front_page()): ?>
           <!-- #page-title.page-title-1 start -->
        <div id="page-title" class="page-title-3">
         <?php print render($page['page_title']); ?>
           <!--.breadcrumbs-container start -->
            <div class="breadcrumbs-container theme-color">
                <!-- .CONTAINER START -->
                <div class="container">
                    <!-- .row start -->
                    <div class="row">
                        <!-- .col-md-12 start -->
                        <div class="col-md-12">
                        
                             <?php print $breadcrumb; ?> 
                          
                        </div><!-- .col-md-12 end -->
                    </div><!-- .row end -->
                </div><!-- .container end -->
            </div><!-- .breadcrumb-container end -->
             </div>
          <?php endif; ?>
               <?php else: ?>
                <?php if (!drupal_is_front_page()): ?>
           <div id="page-title" class="page-title-7">
            <!-- .container start -->
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="title-container">
                        </div><!-- .title-container end -->
                    </div><!-- .col-md-6 end -->   

                    <div class="col-md-6">
                        <div class="breadcrumbs-container">
                             <?php print $breadcrumb; ?> 
                        </div><!-- .breadcrumb-container end -->
                    </div><!-- .col-md-6 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div>
        <?php endif; ?>
        <?php endif; ?>
        
<?php if ($page['feature1'] || $page['feature2'] || $page['feature3'] || $page['feature4'] || $page['contenttop1'] || $page['contenttop2'] || $page['contenttop3'] || $page['contenttop4']) {  ?>


        <div class="page-content">
            <div class="container">
                <!-- .row start -->
                <div class="row">
               <?php if ($messages): ?>
                
                <div id="messages">
                <?php print $messages; ?>
                </div>
             
                <?php endif; ?>
                
                
       <?php if ($page['feature1'] || $page['feature2'] || $page['feature3'] || $page['feature4']) {  ?>

			<?php if ($page['feature1']) { ?>
		    	<div class="<?php if($page['feature2'] & $page['feature3'] & $page['feature4']) { echo 'col-md-3';} ?>
					<?php if($page['feature2'] xor $page['feature3'] xor $page['feature4']) { echo 'col-md-6'; } 
					 else if ($page['feature2'] & $page['feature3']){echo ('col-md-4');}
			         else if ($page['feature2'] & $page['feature4']){echo ('col-md-4');}
			         else if ($page['feature3'] & $page['feature4']){echo ('col-md-4');}
			         else if ($page['feature2'] xor $page['feature3']){echo ('col-md-4');}
			         else if ($page['feature2'] xor $page['feature4']){echo ('col-md-4');}
			         else if ($page['feature3'] xor $page['feature4']){echo ('col-md-4');}
				     else {echo('col-md-12');} ?>">
						<div id="feature-1"><?php print render($page['feature1']); ?></div>
				</div>
			<?php }; ?>

			<?php if ($page['feature2']) { ?>
				<div class="<?php if($page['feature1'] & $page['feature3'] & $page['feature4']) { echo 'col-md-3';} ?>
					<?php if($page['feature1'] xor $page['feature3'] xor $page['feature4']) { echo 'col-md-6'; }
					 else if ($page['feature1'] & $page['feature3']){echo ('col-md-4');}
			         else if ($page['feature1'] & $page['feature4']){echo ('col-md-4');}
			         else if ($page['feature3'] & $page['feature4']){echo ('col-md-4');}
			         else if ($page['feature1'] xor $page['feature3']){echo ('col-md-4');}
			         else if ($page['feature1'] xor $page['feature4']){echo ('col-md-4');}
			         else if ($page['feature3'] xor $page['feature4']){echo ('col-md-4');}
				     else {echo('col-md-12');} ?>">
						<div id="feature-2"><?php print render($page['feature2']); ?></div>
				</div>
			<?php }; ?>

			<?php if ($page['feature3']) { ?>
				<div class="<?php if($page['feature1'] & $page['feature2'] & $page['feature3']) { echo 'col-md-3';} ?>
					<?php if($page['feature1'] xor $page['feature2'] xor $page['feature4']) { echo 'col-md-6'; }
					 else if ($page['feature1'] & $page['feature2']){echo ('col-md-4');}
			         else if ($page['feature1'] & $page['feature4']){echo ('col-md-4');}
			         else if ($page['feature2'] & $page['feature4']){echo ('col-md-4');}
			         else if ($page['feature1'] xor $page['feature2']){echo ('col-md-4');}
			         else if ($page['feature1'] xor $page['feature4']){echo ('col-md-4');}
			         else if ($page['feature2'] xor $page['feature4']){echo ('col-md-4');}
				     else {echo('col-md-12');} ?>">
					<div id="feature-3"><?php print render($page['feature3']); ?></div>
				</div>
			<?php }; ?>

			<?php if ($page['feature4']) { ?>
				<div class="<?php if($page['feature1'] & $page['feature2'] & $page['feature3']) { echo 'col-md-3';} ?>
					<?php if($page['feature1'] xor $page['feature2'] xor $page['feature3']) { echo 'col-md-6'; }
					 else if ($page['feature1'] & $page['feature2']){echo ('col-md-4');}
			         else if ($page['feature1'] & $page['feature3']){echo ('col-md-4');}
			         else if ($page['feature2'] & $page['feature3']){echo ('col-md-4');}
			         else if ($page['feature1'] xor $page['feature2']){echo ('col-md-4');}
			         else if ($page['feature1'] xor $page['feature3']){echo ('col-md-4');}
			         else if ($page['feature2'] xor $page['feature3']){echo ('col-md-4');}
				     else {echo('col-md-12');} ?>">
					<div id="feature-4"><?php print render($page['feature4']); ?></div>
				</div>
			<?php }; ?>

	    <?php }; ?>






	 	<?php if ($page['contenttop1'] || $page['contenttop2'] || $page['contenttop3'] || $page['contenttop4']) { ?>
	    	<?php if ($page['contenttop1']) {  ?>
		    	<div class="<?php if($page['contenttop2'] & $page['contenttop3'] & $page['contenttop4']) { echo 'col-md-3';} ?>
					<?php if($page['contenttop2'] xor $page['contenttop3'] xor $page['contenttop4']) { echo 'col-md-6'; } 
					 else if ($page['contenttop2'] & $page['contenttop3']){echo ('col-md-4');}
			         else if ($page['contenttop2'] & $page['contenttop4']){echo ('col-md-4');}
			         else if ($page['contenttop3'] & $page['contenttop4']){echo ('col-md-4');}
			         else if ($page['contenttop2'] xor $page['contenttop3']){echo ('col-md-4');}
			         else if ($page['contenttop2'] xor $page['contenttop4']){echo ('col-md-4');}
			         else if ($page['contenttop3'] xor $page['contenttop4']){echo ('col-md-4');}
				     else {echo('col-md-12');} ?>">
		    		<div id="content-top1">
		    			<?php print render($page['contenttop1']); ?>
		    		</div>
		    	</div>
	    	<?php }; ?>

			<?php if ($page['contenttop2']) {  ?>
		    	<div class="<?php if($page['contenttop1'] & $page['contenttop3'] & $page['contenttop4']) { echo 'col-md-3';} ?>
					<?php if($page['contenttop1'] xor $page['contenttop3'] xor $page['contenttop4']) { echo 'col-md-6'; }
					 else if ($page['contenttop1'] & $page['contenttop3']){echo ('col-md-4');}
			         else if ($page['contenttop1'] & $page['contenttop4']){echo ('col-md-4');}
			         else if ($page['contenttop3'] & $page['contenttop4']){echo ('col-md-4');}
			         else if ($page['contenttop1'] xor $page['contenttop3']){echo ('col-md-4');}
			         else if ($page['contenttop1'] xor $page['contenttop4']){echo ('col-md-4');}
			         else if ($page['contenttop3'] xor $page['contenttop4']){echo ('col-md-4');}
				     else {echo('col-md-12');} ?>">
		    		<div id="content-top2">
		    			<?php print render($page['contenttop2']); ?>
		    		</div>
		    	</div>
	    	<?php }; ?>	

	    	<?php if ($page['contenttop3']) {  ?>
		    	<div class="<?php if($page['contenttop1'] & $page['contenttop2'] & $page['contenttop4']) { echo 'col-md-3';} ?>
					<?php if($page['contenttop1'] xor $page['contenttop2'] xor $page['contenttop4']) { echo 'col-md-6'; }
					 else if ($page['contenttop1'] & $page['contenttop2']){echo ('col-md-4');}
			         else if ($page['contenttop1'] & $page['contenttop4']){echo ('col-md-4');}
			         else if ($page['contenttop2'] & $page['contenttop4']){echo ('col-md-4');}
			         else if ($page['contenttop1'] xor $page['contenttop2']){echo ('col-md-4');}
			         else if ($page['contenttop1'] xor $page['contenttop4']){echo ('col-md-4');}
			         else if ($page['contenttop2'] xor $page['contenttop4']){echo ('col-md-4');}
				     else {echo('col-md-12');} ?>">
		    		<div id="content-top3">
		    			<?php print render($page['contenttop3']); ?>
		    		</div>
		    	</div>
	    	<?php }; ?>

	    	<?php if ($page['contenttop4']) {  ?>
		    	<div class="<?php if($page['contenttop1'] & $page['contenttop2'] & $page['contenttop3']) { echo 'col-md-3';} ?>
					<?php if($page['contenttop1'] xor $page['contenttop2'] xor $page['contenttop3']) { echo 'col-md-6'; }
					 else if ($page['contenttop1'] & $page['contenttop2']){echo ('col-md-4');}
			         else if ($page['contenttop1'] & $page['contenttop3']){echo ('col-md-4');}
			         else if ($page['contenttop2'] & $page['contenttop3']){echo ('col-md-4');}
			         else if ($page['contenttop1'] xor $page['contenttop2']){echo ('col-md-4');}
			         else if ($page['contenttop1'] xor $page['contenttop3']){echo ('col-md-4');}
			         else if ($page['contenttop2'] xor $page['contenttop3']){echo ('col-md-4');}
				     else {echo('col-md-12');} ?>">
		    		<div id="content-top4">
		    			<?php print render($page['contenttop4']); ?>
		    		</div>
		    	</div>
	    	<?php }; ?>	
		<?php }; ?>
                 </div><!-- .row end -->
               </div><!-- .container end -->
        </div><!-- .page-content end -->    
        <?php }; ?>
          
            <?php if ($page['bc_no_w']): ?><?php print render($page['bc_no_w']); ?><?php endif; ?>
            <div class="page-content">
            <div class="container">
             <div class="row">
                
                <?php if ($page['sidebar_left'] || $page['content'] || $page['sidebar_right']) { ?>
			    <?php if ($page['sidebar_left']) { ?>
			    <div class="col-xs-12 col-md-3">
	    		 <div id="sidebar-left">
	    			<?php print render($page['sidebar_left']); ?>
	    		 </div>
	    	    </div>
	    	    <?php }; ?>
                
                
        
                
        
        <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
        <div class="<?php if($page['sidebar_left'] & $page['sidebar_right']) { echo 'col-md-6'; }else if($page['sidebar_right'] xor
	    		$page['sidebar_left']){ echo 'col-md-9';} else {echo('col-md-12');} ?>">
                 <?php if ($title): ?><h1 class="title" id="pt"><?php print $title; ?></h1><?php endif; ?>
                 <?php if ($tabs): ?><div class="dd-tabs"><?php print render($tabs); ?></div><?php endif; ?>
        <?php print render($page['help']); ?>
        <?php print render($page['content']); ?>
        </div>
			
        
        <?php if ($page['sidebar_right']) { ?>
			<div class="col-xs-12 col-md-3">
	    		<div id="sidebar-right">
	    			<?php print render($page['sidebar_right']); ?>
	    		</div>
	    	</div>
	    	<?php }; ?>
	    <?php }; ?>
            </div>        

            </div><!-- .container end -->
        </div><!-- .page-content end -->
      

  <?php if ($page['ac_no_w']): ?><?php print render($page['ac_no_w']); ?><?php endif; ?>

        
            <?php if ($page['last1'] || $page['last2'] || $page['last3'] || $page['last4']) {  ?>
            <div class="page-content custom-background bkg-grey mb-80">
            <div class="container">
              <div class="row">
			<?php if ($page['last1']) { ?>
		    	<div class="<?php if($page['last2'] & $page['last3'] & $page['last4']) { echo 'col-md-3';} ?>
					<?php if($page['last2'] xor $page['last3'] xor $page['last4']) { echo 'col-md-6'; } 
					 else if ($page['last2'] & $page['last3']){echo ('col-md-4');}
			         else if ($page['last2'] & $page['last4']){echo ('col-md-4');}
			         else if ($page['last3'] & $page['last4']){echo ('col-md-4');}
			         else if ($page['last2'] xor $page['last3']){echo ('col-md-4');}
			         else if ($page['last2'] xor $page['last4']){echo ('col-md-4');}
			         else if ($page['last3'] xor $page['last4']){echo ('col-md-4');}
				     else {echo('col-md-12');} ?>">
						<div id="bottom-line-1"><?php print render($page['last1']); ?></div>
				</div>
			<?php }; ?>

			<?php if ($page['last2']) { ?>
				<div class="<?php if($page['last1'] & $page['last3'] & $page['last4']) { echo 'col-md-3';} ?>
					<?php if($page['last1'] xor $page['last3'] xor $page['last4']) { echo 'col-md-6'; }
					 else if ($page['last1'] & $page['last3']){echo ('col-md-4');}
			         else if ($page['last1'] & $page['last4']){echo ('col-md-4');}
			         else if ($page['last3'] & $page['last4']){echo ('col-md-4');}
			         else if ($page['last1'] xor $page['last3']){echo ('col-md-4');}
			         else if ($page['last1'] xor $page['last4']){echo ('col-md-4');}
			         else if ($page['last3'] xor $page['last4']){echo ('col-md-4');}
				     else {echo('col-md-12');} ?>">
						<div id="bottom-line-2"><?php print render($page['last2']); ?></div>
				</div>
			<?php }; ?>

			<?php if ($page['last3']) { ?>
				<div class="<?php if($page['last1'] & $page['last2'] & $page['last3']) { echo 'col-md-3';} ?>
					<?php if($page['last1'] xor $page['last2'] xor $page['last4']) { echo 'col-md-6'; }
					 else if ($page['last1'] & $page['last2']){echo ('col-md-4');}
			         else if ($page['last1'] & $page['last4']){echo ('col-md-4');}
			         else if ($page['last2'] & $page['last4']){echo ('col-md-4');}
			         else if ($page['last1'] xor $page['last2']){echo ('col-md-4');}
			         else if ($page['last1'] xor $page['last4']){echo ('col-md-4');}
			         else if ($page['last2'] xor $page['last4']){echo ('col-md-4');}
				     else {echo('col-md-12');} ?>">
					<div id="bottom-line-3"><?php print render($page['last3']); ?></div>
				</div>
			<?php }; ?>

			<?php if ($page['last4']) { ?>
				<div class="<?php if($page['last1'] & $page['last2'] & $page['last3']) { echo 'col-md-3';} ?>
					<?php if($page['last1'] xor $page['last2'] xor $page['last3']) { echo 'col-md-6'; }
					 else if ($page['last1'] & $page['last2']){echo ('col-md-4');}
			         else if ($page['last1'] & $page['last3']){echo ('col-md-4');}
			         else if ($page['last2'] & $page['last3']){echo ('col-md-4');}
			         else if ($page['last1'] xor $page['last2']){echo ('col-md-4');}
			         else if ($page['last1'] xor $page['last3']){echo ('col-md-4');}
			         else if ($page['last2'] xor $page['last3']){echo ('col-md-4');}
				     else {echo('col-md-12');} ?>">
					<div id="bottom-line-4"><?php print render($page['last4']); ?></div>
				</div>
			<?php }; ?>
        </div>
            </div><!-- .container end -->
        </div><!-- .page-content end -->
	    <?php }; ?>

        

        
   <?php if ($page['bottom_line1'] || $page['bottom_line2'] || $page['bottom_line3'] || $page['bottom_line4']) {  ?>
   <div class="page-content">
            <div class="container">
              <div class="row">
			<?php if ($page['bottom_line1']) { ?>
		    	<div class="<?php if($page['bottom_line2'] & $page['bottom_line3'] & $page['bottom_line4']) { echo 'col-md-3';} ?>
					<?php if($page['bottom_line2'] xor $page['bottom_line3'] xor $page['bottom_line4']) { echo 'col-md-6'; } 
					 else if ($page['bottom_line2'] & $page['bottom_line3']){echo ('col-md-4');}
			         else if ($page['bottom_line2'] & $page['bottom_line4']){echo ('col-md-4');}
			         else if ($page['bottom_line3'] & $page['bottom_line4']){echo ('col-md-4');}
			         else if ($page['bottom_line2'] xor $page['bottom_line3']){echo ('col-md-4');}
			         else if ($page['bottom_line2'] xor $page['bottom_line4']){echo ('col-md-4');}
			         else if ($page['bottom_line3'] xor $page['bottom_line4']){echo ('col-md-4');}
				     else {echo('col-md-12');} ?>">
						<div id="bottom-line-1"><?php print render($page['bottom_line1']); ?></div>
				</div>
			<?php }; ?>

			<?php if ($page['bottom_line2']) { ?>
				<div class="<?php if($page['bottom_line1'] & $page['bottom_line3'] & $page['bottom_line4']) { echo 'col-md-3';} ?>
					<?php if($page['bottom_line1'] xor $page['bottom_line3'] xor $page['bottom_line4']) { echo 'col-md-6'; }
					 else if ($page['bottom_line1'] & $page['bottom_line3']){echo ('col-md-4');}
			         else if ($page['bottom_line1'] & $page['bottom_line4']){echo ('col-md-4');}
			         else if ($page['bottom_line3'] & $page['bottom_line4']){echo ('col-md-4');}
			         else if ($page['bottom_line1'] xor $page['bottom_line3']){echo ('col-md-4');}
			         else if ($page['bottom_line1'] xor $page['bottom_line4']){echo ('col-md-4');}
			         else if ($page['bottom_line3'] xor $page['bottom_line4']){echo ('col-md-4');}
				     else {echo('col-md-12');} ?>">
						<div id="bottom-line-2"><?php print render($page['bottom_line2']); ?></div>
				</div>
			<?php }; ?>

			<?php if ($page['bottom_line3']) { ?>
				<div class="<?php if($page['bottom_line1'] & $page['bottom_line2'] & $page['bottom_line3']) { echo 'col-md-3';} ?>
					<?php if($page['bottom_line1'] xor $page['bottom_line2'] xor $page['bottom_line4']) { echo 'col-md-6'; }
					 else if ($page['bottom_line1'] & $page['bottom_line2']){echo ('col-md-4');}
			         else if ($page['bottom_line1'] & $page['bottom_line4']){echo ('col-md-4');}
			         else if ($page['bottom_line2'] & $page['bottom_line4']){echo ('col-md-4');}
			         else if ($page['bottom_line1'] xor $page['bottom_line2']){echo ('col-md-4');}
			         else if ($page['bottom_line1'] xor $page['bottom_line4']){echo ('col-md-4');}
			         else if ($page['bottom_line2'] xor $page['bottom_line4']){echo ('col-md-4');}
				     else {echo('col-md-12');} ?>">
					<div id="bottom-line-3"><?php print render($page['bottom_line3']); ?></div>
				</div>
			<?php }; ?>

			<?php if ($page['bottom_line4']) { ?>
				<div class="<?php if($page['bottom_line1'] & $page['bottom_line2'] & $page['bottom_line3']) { echo 'col-md-3';} ?>
					<?php if($page['bottom_line1'] xor $page['bottom_line2'] xor $page['bottom_line3']) { echo 'col-md-6'; }
					 else if ($page['bottom_line1'] & $page['bottom_line2']){echo ('col-md-4');}
			         else if ($page['bottom_line1'] & $page['bottom_line3']){echo ('col-md-4');}
			         else if ($page['bottom_line2'] & $page['bottom_line3']){echo ('col-md-4');}
			         else if ($page['bottom_line1'] xor $page['bottom_line2']){echo ('col-md-4');}
			         else if ($page['bottom_line1'] xor $page['bottom_line3']){echo ('col-md-4');}
			         else if ($page['bottom_line2'] xor $page['bottom_line3']){echo ('col-md-4');}
				     else {echo('col-md-12');} ?>">
					<div id="bottom-line-4"><?php print render($page['bottom_line4']); ?></div>
				</div>
			<?php }; ?>
        </div>
        </div><!-- .container end -->
        </div><!-- .page-content end -->
	    <?php }; ?>


             <?php if ($page['bottom1'] || $page['bottom2'] || $page['bottom3'] || $page['bottom4']) {  ?>
              <div class="page-content">
            <div class="container">
              <div class="row">
			<?php if ($page['bottom1']) { ?>
		    	<div class="<?php if($page['bottom2'] & $page['bottom3'] & $page['bottom4']) { echo 'col-md-3';} ?>
					<?php if($page['bottom2'] xor $page['bottom3'] xor $page['bottom4']) { echo 'col-md-6'; } 
					 else if ($page['bottom2'] & $page['bottom3']){echo ('col-md-4');}
			         else if ($page['bottom2'] & $page['bottom4']){echo ('col-md-4');}
			         else if ($page['bottom3'] & $page['bottom4']){echo ('col-md-4');}
			         else if ($page['bottom2'] xor $page['bottom3']){echo ('col-md-4');}
			         else if ($page['bottom2'] xor $page['bottom4']){echo ('col-md-4');}
			         else if ($page['bottom3'] xor $page['bottom4']){echo ('col-md-4');}
				     else {echo('col-md-12');} ?>">
						<div id="bottom-1"><?php print render($page['bottom1']); ?></div>
				</div>
			<?php }; ?>

			<?php if ($page['bottom2']) { ?>
				<div class="<?php if($page['bottom1'] & $page['bottom3'] & $page['bottom4']) { echo 'col-md-3';} ?>
					<?php if($page['bottom1'] xor $page['bottom3'] xor $page['bottom4']) { echo 'col-md-6'; }
					 else if ($page['bottom1'] & $page['bottom3']){echo ('col-md-4');}
			         else if ($page['bottom1'] & $page['bottom4']){echo ('col-md-4');}
			         else if ($page['bottom3'] & $page['bottom4']){echo ('col-md-4');}
			         else if ($page['bottom1'] xor $page['bottom3']){echo ('col-md-4');}
			         else if ($page['bottom1'] xor $page['bottom4']){echo ('col-md-4');}
			         else if ($page['bottom3'] xor $page['bottom4']){echo ('col-md-4');}
				     else {echo('col-md-12');} ?>">
						<div id="bottom-2"><?php print render($page['bottom2']); ?></div>
				</div>
			<?php }; ?>

			<?php if ($page['bottom3']) { ?>
				<div class="<?php if($page['bottom1'] & $page['bottom2'] & $page['bottom3']) { echo 'col-md-3';} ?>
					<?php if($page['bottom1'] xor $page['bottom2'] xor $page['bottom4']) { echo 'col-md-6'; }
					 else if ($page['bottom1'] & $page['bottom2']){echo ('col-md-4');}
			         else if ($page['bottom1'] & $page['bottom4']){echo ('col-md-4');}
			         else if ($page['bottom2'] & $page['bottom4']){echo ('col-md-4');}
			         else if ($page['bottom1'] xor $page['bottom2']){echo ('col-md-4');}
			         else if ($page['bottom1'] xor $page['bottom4']){echo ('col-md-4');}
			         else if ($page['bottom2'] xor $page['bottom4']){echo ('col-md-4');}
				     else {echo('col-md-12');} ?>">
					<div id="bottom-3"><?php print render($page['bottom3']); ?></div>
				</div>
			<?php }; ?>

			<?php if ($page['bottom4']) { ?>
				<div class="<?php if($page['bottom1'] & $page['bottom2'] & $page['bottom3']) { echo 'col-md-3';} ?>
					<?php if($page['bottom1'] xor $page['bottom2'] xor $page['bottom3']) { echo 'col-md-6'; }
					 else if ($page['bottom1'] & $page['bottom2']){echo ('col-md-4');}
			         else if ($page['bottom1'] & $page['bottom3']){echo ('col-md-4');}
			         else if ($page['bottom2'] & $page['bottom3']){echo ('col-md-4');}
			         else if ($page['bottom1'] xor $page['bottom2']){echo ('col-md-4');}
			         else if ($page['bottom1'] xor $page['bottom3']){echo ('col-md-4');}
			         else if ($page['bottom2'] xor $page['bottom3']){echo ('col-md-4');}
				     else {echo('col-md-12');} ?>">
					<div id="bottom-4"><?php print render($page['bottom4']); ?></div>
				</div>
			<?php }; ?>
      </div>
        </div><!-- .container end -->
        </div><!-- .page-content end -->
	    <?php }; ?>


<?php if ($page['b_no_w']): ?><?php print render($page['b_no_w']); ?><?php endif; ?>
        <!-- #footer-wrapper start -->
        <div id="footer-wrapper">
            <!-- #footer start -->
            <footer id="footer">
                <!-- .container start -->
                <div class="container">
                <?php if ($page['footer1'] || $page['footer2'] || $page['footer3'] || $page['footer4']) { ?>
		<div class="row">
			<?php if ($page['footer1']) { ?>
				<div class="<?php if($page['footer2'] & $page['footer3'] & $page['footer4']) { echo 'col-md-3';} ?>
				<?php if($page['footer2'] xor $page['footer3'] xor $page['footer4']) { echo 'col-md-6'; } 
				 else if ($page['footer2'] & $page['footer3']){echo ('col-md-4');} 
		         else if ($page['footer2'] & $page['footer4']){echo ('col-md-4');}
		         else if ($page['footer3'] & $page['footer4']){echo ('col-md-4');}
		         else if ($page['footer2'] xor $page['footer3']){echo ('col-md-4');}
		         else if ($page['footer2'] xor $page['footer4']){echo ('col-md-4');}
		         else if ($page['footer3'] xor $page['footer4']){echo ('col-md-4');}
			     else {echo('col-md-12');} ?>">
					<div id="footer1"><?php print render($page['footer1']); ?></div>
				</div>
			<?php }; ?>

			<?php if ($page['footer2']) { ?>
				<div class="<?php if($page['footer1'] & $page['footer3'] & $page['footer4']) { echo 'col-md-3';} ?>
				<?php if($page['footer1'] xor $page['footer3'] xor $page['footer4']) { echo 'col-md-6'; } 
				 else if ($page['footer1'] & $page['footer3']){echo ('col-md-4');} 
		         else if ($page['footer1'] & $page['footer4']){echo ('col-md-4');}
		         else if ($page['footer3'] & $page['footer4']){echo ('col-md-4');}
		         else if ($page['footer1'] xor $page['footer3']){echo ('col-md-4');}
		         else if ($page['footer1'] xor $page['footer4']){echo ('col-md-4');}
		         else if ($page['footer3'] xor $page['footer4']){echo ('col-md-4');}
			     else {echo('col-md-12');} ?>">
					<div id="footer2"><?php print render($page['footer2']); ?></div>
				</div>
			<?php }; ?>

			<?php if ($page['footer3']) { ?>
				<div class="<?php if($page['footer1'] & $page['footer2'] & $page['footer4']) { echo 'col-md-3';} ?>
				<?php if($page['footer1'] xor $page['footer2'] xor $page['footer4']) { echo 'col-md-6'; } 
				 else if ($page['footer1'] & $page['footer2']){echo ('col-md-4');} 
		         else if ($page['footer1'] & $page['footer4']){echo ('col-md-4');}
		         else if ($page['footer2'] & $page['footer4']){echo ('col-md-4');}
		         else if ($page['footer1'] xor $page['footer2']){echo ('col-md-4');}
		         else if ($page['footer1'] xor $page['footer4']){echo ('col-md-4');}
		         else if ($page['footer2'] xor $page['footer4']){echo ('col-md-4');}
			     else {echo('col-md-12');} ?>">
					<div id="footer3"><?php print render($page['footer3']); ?></div>
				</div>
			<?php }; ?>

			<?php if ($page['footer4']) { ?>
				<div class="<?php if($page['footer1'] & $page['footer2'] & $page['footer3']) { echo 'col-md-3';} ?>
				<?php if($page['footer1'] xor $page['footer2'] xor $page['footer3']) { echo 'col-md-6'; } 
				 else if ($page['footer1'] & $page['footer2']){echo ('col-md-4');} 
		         else if ($page['footer1'] & $page['footer3']){echo ('col-md-4');}
		         else if ($page['footer2'] & $page['footer3']){echo ('col-md-4');}
		         else if ($page['footer1'] xor $page['footer2']){echo ('col-md-4');}
		         else if ($page['footer1'] xor $page['footer3']){echo ('col-md-4');}
		         else if ($page['footer2'] xor $page['footer3']){echo ('col-md-4');}
			     else {echo('col-md-12');} ?>">
					<div id="footer4"><?php print render($page['footer4']); ?></div>
				</div>
			<?php }; ?>
		</div>
		<?php }; ?>
                

                </div><!-- .container end -->
            </footer><!-- #footer end -->

            <a href="#" class="scroll-up">Scroll</a>
        </div><!-- #footer-wrapper end -->
<?php if ($page['footer_a'] || $page['footer_b']) { ?>
        <!-- #copyright-container start -->
        <div id="copyright-container">
            <!-- .container start -->
            <div class="container">
                <!-- .row start -->
                <div class="row">
                    <!-- .col-md-6 start -->
                    <div class="col-md-6">
                     <?php if ($page['footer_a']) : ?>
						 <?php print render($page['footer_a']); ?>
                    <?php endif; ?>   
                    </div><!-- .ocl-md-6 end -->
                    <?php if ($page['footer_b']) : ?>
                    <!-- .col-md-6 start -->
                    <div class="col-md-6">
                    
						 <?php print render($page['footer_b']); ?>
                    
                    </div><!-- .col-md-6 end -->
                     <?php endif; ?>  
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .copyright-container end -->
<?php }; ?>

      
<?php
if (theme_get_setting('mixed_boxed') == TRUE) {
    print '</div><!-- #page-wrapper end -->';
  }
  else {

  }
?> 
