<?php /* Start loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php wpbp_post_before(); ?>
<article id="syndic-<?php the_ID(); ?>" class="syndic vcard" itemtype="http://schema.org/LocalBusiness">
    <?php wpbp_post_inside_before(); ?>
    <div class="container">
        <div class="grid_3">
            <?php if ( has_post_thumbnail() ) the_post_thumbnail('full', array( 'class' => "logo" )); ?>
        </div>
        <div class="grid_9">
            <h3 class="fn org">
                <?php if ( get_field('url') ) : ?>
                <a class="url" href="<?php echo get_field('url'); ?>" target="_blank"><?php the_title(); ?></a>
                <?php else : ?>
                <?php the_title(); ?>
                <?php endif; ?>
            </h3>
            <ul class="contacts">
                <li class="adr" itemprop="address" itemtype="http://schema.org/PostalAddress">
                    <span class="street-address" itemprop="streetAddress"><?php echo get_field('street_address'); ?></span>,
                    <span class="locality" itemprop="addressLocality"><?php echo get_field('locality'); ?></span>
                    <span class="region" itemprop="addressRegion"><?php echo get_field('region'); ?></span>
                    <span class="postal-code" itemprop="postalCode"><?php echo get_field('postal_code'); ?></span>
                </li>
                <li class="tel">
                    <span class="tel" itemprop="telephone"><?php echo get_field('tel'); ?></span>
                </li>
            </ul>
            <div class="description">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
    <?php wpbp_post_inside_after(); ?>
</article>
<?php wpbp_post_after(); ?>
<?php endwhile; // End the loop ?>