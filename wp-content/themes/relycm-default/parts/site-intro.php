
	<div class="site-intro" <?php if (get_field('si_background_image')): ?>style="background-image: url(<?php echo get_field('si_background_image') ?>);"<?php endif ?>>
	  <div class="container">
		  <?php if(get_field('si_heading')):?>
		   <h1 class="si-header"><?php echo get_field('si_heading');?></h1>
		 <?php else: ?>
		  <h1 class="si-header"><?php the_title(); ?></h1>
		<?php endif;?>
		<div class="si-cta-wrap">
			<?php 
                    $link = get_field('cta_1');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="btn btn-primary si-cta1" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    <?php endif; ?>

                    <?php 
                    $link = get_field('cta_2');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="btn btn-alt si-cta2" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    <?php endif; ?>
		</div>
	  </div>
	  	    <div class="si-video">
        <?php if(get_field('si_video_link')):?>
          <video autoplay="" loop="" muted="" playsinline="" width="100%">
            <source src="<?php echo get_field('si_video_link');?>" type="video/mp4">
          </video>
        <?php endif;?>
      </div>
	</div>