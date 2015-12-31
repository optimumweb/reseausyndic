<?php set_post_id($post_id); ?>
<section id="hero">
    <div id="hero-overlay">
        <div id="hero-pad">
            <div class="container <?php wpbp_option('container_class'); ?>">
                <?php if ( is_front_page() ) : ?>
                <?php dynamic_sidebar("Front Page Hero"); ?>
                <?php elseif ( is_page() ) : ?>
                <div class="grid_6">
                    <h1 class="title no-margin">
                        <?php if ( is_tax() ) : ?>
                            <?php global $wp_query; echo $wp_query->get_queried_object()->name; ?>
                            <?php $term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy')); echo $term->name; ?>
                        <?php else : ?>
                            <?php echo get_the_title($post_id); ?>
                        <?php endif; ?>
                    </h1>
                </div>
                <div class="grid_6">
                    <?php if ( get_post_meta($post_id, 'tagline', true) ) : ?>
                    <h3 class="tagline"><?php echo get_post_meta($post_id, 'tagline', true); ?></h3>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>