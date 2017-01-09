<?php if ( is_front_page() ) : ?>
    <section id="front-page-cta">
        <div class="container <?php wpbp_option('container_class'); ?>">
            <?php dynamic_sidebar("Front Page CTA"); ?>
        </div>
    </section>
<?php endif; ?>
