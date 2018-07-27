<?php
if (theme_get_setting('mixed_boxed') == TRUE) {
    print '<div id="page-wrapper">';
  }
  else {
  }
?> 
<!-- .header-wrapper start -->
<div id="header-wrapper" class="header-simple header-transparent">
    <!-- #header.header-type-1 start -->
    <header id="header" class="header-type-1 dark">

        <!-- Main navigation and logo container -->
        <div class="header-inner">
            <!-- .container start -->
            <div class="container">
                <!-- .main-nav start -->
                <div class="main-nav">
                    <!-- .row start -->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- .navbar.pi-mega start -->
                            <nav class="navbar navbar-default nav-left pi-mega dva" role="navigation">

                                <!-- .navbar-header start -->
                                <div class="navbar-header">

                                    <!-- .logo start -->
                                    <div class="logo">
                                        <?php if ($logo) : ?>
                                        <a href="<?php print $front_page; ?>"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="logo" /></a>
                                        <?php elseif ($site_name) : ?>
                                        <a href="<?php print $front_page; ?>" id="site-name"><h1><?php print $site_name; ?></h1></a>
                                        <?php endif; ?>
                                        <?php if ($site_slogan): ?>
                                        <div id="site-slogan">
                                            <?php print $site_slogan; ?>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                    <!-- logo end -->


                                </div>
                                <!-- .navbar-header end -->

                                <!-- Collect the nav links, forms, and other content for toggling  -->
                                <div class="collapse navbar-collapse">
                                    <?php print render($page[ 'main_menu']); ?>
                                    <!-- #search-box start -->
                                    <div class="search-container">
                                        <a id="toggle-search" class="search-button search-open" href="#"><i class="fa fa-search"></i></a>
                                        <div class="search-panel cf">
                                            <?php $block=module_invoke( 'search', 'block_view', 'search'); print render($block); ?>

                                        </div>
                                        <!-- end search-panel -->
                                    </div>
                                    <!-- search-container -->
                                    <!-- #search-box end -->
                                </div>
                                <!-- .navbar.navbar-collapse end -->
                            </nav>
                            <!-- .navbar.pi-mega end -->
                        </div>
                        <!-- .col-md-12 end -->
                    </div>
                    <!-- .row end -->
                </div>
                <!-- .main-nav end -->
            </div>
            <!-- .container end -->
        </div>
        <!-- .header-inner end -->
    </header>
    <!-- #header.header-type-1.dark end -->
</div>
<!-- #header-wrapper end -->

<?php if ($page[ 'slider']): ?>

<div class="tp-banner-container fullwidthbanner  tri mb-0">
    <?php if ($page[ 'slider']): ?>
    <?php print render($page[ 'slider']); ?>
    <?php endif; ?>

</div>
<!-- .tp-banner-container end -->
<?php endif; ?>