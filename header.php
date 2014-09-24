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
                        <div class="grid_6">
                            <div class="hero-box text-center">
                                <h4><?php _e("Êtes-vous un", 'reseausyndic'); ?></h4>
                                <h2><?php _e("Particulier ?", 'reseausyndic'); ?></h2>
                                <p class="lead"><?php _e("Si vous êtes aux prises avec des problèmes financiers, le syndic de faillite a les solutions pour vous permettre de reprendre le contrôle.", 'reseausyndic'); ?></p>
                                <a class="button large" href="#"><?php _e("Solutions aux particuliers", 'reseausyndic'); ?></a>
                            </div>
                        </div>
                        <div class="grid_6">
                            <div class="hero-box text-center">
                                <h4><?php _e("Êtes-vous une", 'reseausyndic'); ?></h4>
                                <h2><?php _e("Entreprise ?", 'reseausyndic'); ?></h2>
                                <p class="lead"><?php _e("Si votre entreprise connait des difficultés financières, le syndic de faillite peut décortiquer la situation et vous proposer des solutions.", 'reseausyndic'); ?></p>
                                <a class="button large" href="#"><?php _e("Solutions aux entreprises", 'reseausyndic'); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>