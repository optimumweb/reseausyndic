<?php get_template_part('head'); ?>
    <?php wpbp_wrap_before(); ?>
	<div id="wrap" role="document">
        <?php wpbp_header_before(); ?>
        <header id="header" role="banner">
            <?php wpbp_header_inside_before(); ?>
            <section id="top">
                <div class="container <?php wpbp_option('container_class'); ?>">
                    <div class="grid_12">
                        <nav id="top-nav" role="navigation">
                            <div class="container">
                                <?php wp_nav_menu( array( 'theme_location' => 'secondary_navigation' ) ); ?>
                                <div class="clear"></div>
                            </div>
                        </nav>
                    </div>
                </div>
            </section>
            <section id="head">
                <div class="container <?php wpbp_option('container_class'); ?>">
                    <div class="grid_3">
                        <h1 id="logo">
                            <a href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
                        </h1>
                    </div>
                    <div class="grid_9">
                        <nav id="main-nav" role="navigation">
                            <div class="container">
                                <?php wp_nav_menu( array( 'theme_location' => 'primary_navigation' ) ); ?>
                                <div class="clear"></div>
                            </div>
                        </nav>
                    </div>
                </div>
            </section>
            <?php wpbp_header_inside_after(); ?>
        </header>
		<?php wpbp_header_after(); ?>
        <section id="hero">
            <div id="hero-overlay">
                <div id="hero-pad">
                    <div class="container <?php wpbp_option('container_class'); ?>">
                        <?php if ( is_front_page() ) : ?>
                        <?php dynamic_sidebar("Front Page Hero"); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
        <?php if ( is_front_page() ) : ?>
        <section id="front-page-cta">
            <div class="container <?php wpbp_option('container_class'); ?>">
                <?php dynamic_sidebar("Front Page CTA"); ?>
            </div>
        </section>
        <?php endif; ?>