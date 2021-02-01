<? get_header(); ?>
    
    
 <div id="primary" class="content-area">
    <main id="main" class="site-main">
        <div class="main-content">
            <div class="events-container container">
                <div class="title">
                    EVENTS
                </div>
                <?php
                    $events = get_posts( array(
                        'post_type' => 'events'
                    ) );
                    if ( isset($events) ) :
                        foreach( $events as $post ):
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
            

            <div class="schedules container">
                <div class="title">
                    SCHEDULE
                </div>

                <?php
                    $events = get_posts( array(
                        'post_type' => 'events'
                    ) );
                    if ( isset($events) ) :
                        foreach( $events as $post ):
                            setup_postdata($post);                    
                ?>

                <div class="schedule container-child">
                    <div class="time-line">
                        <div class="time"><?php $terms = get_the_terms( $post->ID , 'time_start' ); echo $terms[0]->slug; ?></div>
                    </div>

                    <div class="name-schedule">
                        <?php the_title( ) ?>
                    </div>
                </div>
                
                <?php
                        endforeach;
                        wp_reset_postdata();                             
                    else: 
                        get_template_part( 'tmp/no-posts' ); 
                    endif; ?>        
            </div>


            <div class="contacts container">
                <?php $page_contacts = get_page_by_title( 'contacts' ); ?>
                <div class="title">
                    <?php echo $page_contacts->post_title; ?>
                    <!-- Contacts -->
                </div>

                <div class="form-container">
                    <?php echo apply_filters('the_content', $page_contacts->post_content);?>
                </div>
            </div>
        </div>
    </main><!-- .site-main -->
</div><!-- .content-area -->
<?php get_footer(); ?>