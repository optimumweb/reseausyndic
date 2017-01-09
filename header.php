<?php get_template_part('head'); ?>
    <?php wpbp_wrap_before(); ?>
	<div id="wrap" role="document">
        <?php wpbp_header_before(); ?>
        <header id="header" role="banner">
            <?php wpbp_header_inside_before(); ?>
            <section id="top">
                <div class="container <?php wpbp_option('container_class'); ?>">
                    <div class="grid_12 text-right mobile-center">
                        <nav id="top-nav" role="navigation">
                            <?php wp_nav_menu(array( 'theme_location' => 'secondary_navigation' )); ?>
                        </nav>
                    </div>
                </div>
            </section>
            <section id="head">
                <div class="container <?php wpbp_option('container_class'); ?>">
                    <div class="grid_3 mobile-center">
                        <h1 id="logo">
                            <a href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
                        </h1>
                    </div>
                    <div class="grid_9 text-right mobile-center">
                        <nav id="main-nav" role="navigation">
                            <?php wp_nav_menu(array( 'theme_location' => 'primary_navigation' )); ?>
                        </nav>
                    </div>
                </div>
            </section>
            <?php wpbp_header_inside_after(); ?>
        </header>
		<?php wpbp_header_after(); ?>
