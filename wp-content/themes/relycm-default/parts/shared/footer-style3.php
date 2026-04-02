<!--Site Footer Start-->
<footer class="site-footer footer-style3" role="contentinfo">
    <div class="container">
        <div class="row sf-top-wrap">
        <div class="col-lg-5 col-12">
        <?php $logo = get_field('global_footer_logo','option');
        if( !empty($logo) ): ?>
            <a href="<?php bloginfo('url'); ?>" class="sf-logo">
                <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" title="<?php echo $logo['alt']; ?>">
            </a>
        <?php endif;?>
           <?php if(get_field('global_address','option')):?>
                        <div class="sf-address"><?php echo get_field('global_company_name','option');?> <?php echo get_field('global_address','option');?></div>
                    <?php endif;?>
        <div class="sf-logo-wrap">
            <?php if( get_field('thomas_badge' , 'option')): ?>
            <div class="sf-thomas-badge">
               <?php echo get_sub_field('section_subtext'); ?>
             
            </div>   <?php endif; ?>
           
                <?php 
                $image = get_field('sf_iso_logo', 'option');
                if( !empty( $image ) ): ?>
                   <div class="sf-iso-img">  <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></div>
                <?php endif; ?>
            
        </div>
            </div>
        <div class="col-lg-3 col-12">
                <?php wp_nav_menu(array(
                    'menu'            => 'Footer Left Menu',
                    'container'       => 'ul',
                    'menu_class' => 'sf-links',
                )); ?>
            </div>
           

            <div class="col-lg-4 col-12">
                <ul class="sf-contact-info">

                    <?php $string = get_field('global_phone_number','option');$string = preg_replace("/[^0-9]/", '', $string);?>
                    <?php if ($string): ?>
                        <li class="sf-ph">Tel: <a href="tel:<?php echo $string;?>" aria-label="Phone Number"><?php echo get_field('global_phone_number','option');?></a></li>
                    <?php endif ?>                 

                    <?php if (get_field('global_fax','option')): ?>
                        <li class="sf-fax">Fax: <a href="javascript:void(0)" class="nonlink fax" tabindex="-1" aria-label="Fax Number"><?php echo get_field('global_fax','option');?></a></li>
                    <?php endif;?>

                    <?php if(get_field('global_email','option')):?>
                        <li>Em: <a href="mailto:<?php echo get_field('global_email','option');?>" class="sf-mail" aria-label="Email Us"><?php echo get_field('global_email','option');?></a></li>
                    <?php endif;?>
                </ul>
            
            </div>
        </div>
    </div>

    <div class="footer-bootom sf-small">
        <div class="container">
            <p class="copyright">&copy; <?php echo date("Y"); ?> <a href="<?php bloginfo('url'); ?>"><?php bloginfo( 'name' ); ?></a>, All Rights Reserved | Site created by <a href="https://business.thomasnet.com/marketing-services" target="_blank" rel="noreferrer noopener">Thomas Marketing Services</a></p>

            <div class="social-icons">
                <?php
                if( have_rows('social_profiles', 'option') ): ?>
                    <?php
                    while ( have_rows('social_profiles', 'option') ) : the_row(); ?>
                        <?php
                        $sf_social_icon = get_sub_field('sp_social_icon');
                        $socialclass = str_replace(' ', '-', get_sub_field('sp_social_profile')); // Replaces all spaces with hyphens.
                        $socialclass = preg_replace('/[^A-Za-z0-9\-]/', '', $socialclass); // Removes special chars.
                        $socialclass = strtolower($socialclass); // Convert to lowercase
                        if (get_sub_field('sp_social_link')) :
                        ?>
                            <a class="<?php echo $socialclass; ?>" href="<?php echo esc_url(get_sub_field('sp_social_link')); ?>" target="_blank"  title="<?php echo get_sub_field('sp_social_profile'); ?>" rel="noreferrer noopener" aria-label="<?php echo get_sub_field('sp_social_profile'); ?>">
                        <?php endif ?>
                                <?php if ($sf_social_icon): ?>
                                    <?php echo $sf_social_icon; ?>
                                <?php endif ?>
                        <?php if (get_sub_field('sp_social_link')) : ?>
                            </a>
                        <?php endif ?>
                    <?php
                    endwhile; ?>
                <?php
                endif;  ?>
            </div>
        </div>
    </div>
</footer>
<!--Site Footer End-->

