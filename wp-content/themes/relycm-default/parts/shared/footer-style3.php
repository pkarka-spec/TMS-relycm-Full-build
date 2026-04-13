<!--Site Footer Start-->
<footer class="site-footer footer-style3" role="contentinfo">
    <div class="container">
        <div class="row sf-top-wrap">
        <div class="col-lg-7 col-12">
        <?php $logo = get_field('global_footer_logo','option');
        if( !empty($logo) ): ?>
            <a href="<?php echo bloginfo('url') . '/home'; ?>" class="sf-logo">
                <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" title="<?php echo $logo['alt']; ?>">
            </a>
        <?php endif;?>
           <?php if(get_field('global_address','option')):?>
                        <div class="sf-address"><?php echo get_field('global_address','option');?></div>
                    <?php endif;?>
        <div class="sf-logo-wrap">
            <?php if( get_field('thomas_badge' , 'option')): ?>
            <div class="sf-thomas-badge">
               <?php echo get_field('thomas_badge' , 'option'); ?>
             
            </div>   <?php endif; ?>
           
                <?php 
                $image = get_field('sf_iso_logo', 'option');
                if( !empty( $image ) ): ?>
                   <div class="sf-iso-img">  <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></div>
                <?php endif; ?>
            
        </div>
            </div>
        <div class="col-lg-2 col-12">
           <?php if( get_field('sf_company', 'option')): ?>
                    <h2 class="sf-company"><?php echo esc_html(get_field('sf_company', 'option')); ?></h2>
                <?php endif; ?>
                <?php wp_nav_menu(array(
                    'menu'            => 'Footer Left Menu',
                    'container'       => 'ul',
                    'menu_class' => 'sf-links',
                )); ?>
            </div>
           

            <div class="col-lg-3 col-12">
                <div class="sf-contact-info">
                      <?php if( get_field('sf_newsletter', 'option')): ?>
                    <h2 class="sf-newsletter"><?php echo esc_html(get_field('sf_newsletter', 'option')); ?></h2>
                <?php endif; ?>

                <?php if( get_field('sf_news_content', 'option')): ?>
                    <div class="sf-news-content"><?php echo esc_html(get_field('sf_news_content', 'option')); ?></div>
                <?php endif; ?>

                </div>
            
            </div>
        </div>
    </div>

    <div class="footer-bootom sf-small">
        <div class="container">
            <p class="copyright">Copyright &copy; <?php echo date("Y"); ?> <a href="<?php bloginfo('url'); ?>"><?php bloginfo( 'name' ); ?></a> All Rights Reserved | Site created by <a href="https://business.thomasnet.com/marketing-services" target="_blank" rel="noreferrer noopener">Thomas Marketing Services</a> | <?php
						$cta_two = get_field('sf_privacy_policy', 'option');
						if($cta_two):
						$link_url = $cta_two['url'];
						$link_title = $cta_two['title'];
						$link_target = $cta_two['target'] ? $cta_two['target'] : '_self';
						?>
						<a class="sf-privacy-policy" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr( $link_target ); ?>"><span><?php echo esc_html($link_title); ?></span></a>
						<?php endif; ?></p>
        </div>
    </div>
</footer>
<!--Site Footer End-->

