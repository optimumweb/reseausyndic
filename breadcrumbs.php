<?php if ( !is_front_page() ) : ?>
<section id="breadcrumbs">
    <div class="container <?php wpbp_option('container_class'); ?>">
        <div class="grid_12">
            <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb(); } ?>
        </div>
    </div>
</section>
<?php endif; ?>