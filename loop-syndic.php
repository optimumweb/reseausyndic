<?php /* Start loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php wpbp_post_before(); ?>
<article id="syndic-<?php the_ID(); ?>" class="syndic vcard" itemtype="http://schema.org/LocalBusiness">
    <?php wpbp_post_inside_before(); ?>
    <h3 class="fn org"><?php the_title(); ?></h3>
    <ul class="contacts">
        <li class="adr" itemprop="address" itemtype="http://schema.org/PostalAddress">
            <span class="street-address" itemprop="streetAddress"><?php echo get_field('street_address'); ?></span><br />
            <span class="locality" itemprop="addressLocality"><?php echo get_field('locality'); ?></span>
            <span class="region" itemprop="addressRegion"><?php echo get_field('region'); ?></span>
            <span class="postal-code" itemprop="postalCode"><?php echo get_field('postal_code'); ?></span>
        </li>
        <li class="tel">
            <span class="tel" itemprop="telephone"><?php echo get_field('tel'); ?></span>
        </li>
    </ul>
    <div class="clear"></div>
    <?php wpbp_post_inside_after(); ?>
</article>
<?php wpbp_post_after(); ?>
<?php endwhile; // End the loop ?>