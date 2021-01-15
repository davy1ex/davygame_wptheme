<?php get_header() ?>
<div class="events-container container">
        <div class="title">
            EVENTS
        </div>
        <?php
            $schedules = get_posts( array(
                'category_name' => 'schedules'
            ) );
            if ( isset($schedules) ) :
                foreach( $schedules as $post ):
                    setup_postdata($post);
                ?>
        
        <a class="event container-child" href="<?php the_permalink() ?>">
            <img class="event-img" src="<?php the_post_thumbnail_url() ?>" alt="">

            <div class="event-desc desc">
                <?php echo get_the_excerpt() ?>
            </div>
        </a>
            
            
            
        <?php
                endforeach;
                wp_reset_postdata(); 
        ?>
            
                    
        <?php                     
            else: ?>
                <?php get_template_part( 'tmp/no-posts' ); ?>
            <? endif; ?>
    </div>
<?php get_footer() ?>