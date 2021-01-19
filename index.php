<? get_header(); ?>
    <div class="banner-desc">
        <div class="date">
            <div class="days"><?php echo get_field('day') ?>.</div>
            <div class="mounth"><?php echo get_field('mounth') ?>.</div>
            <div class="year"><?php echo get_field('year') ?></div>
        </div>

        <div class="event-text">
            <div class="large"><?php the_field('bigger-desc') ?></div>
            <div class="medium"><?php the_field('smaller_desc') ?></div>
        </div>

        <div class="social">
            <div class="social_item"><a href=""><img src="img/vk.svg" alt=""></a></div>
            <div class="social_item"><a href=""><img src="img/inst.png" alt=""></a></div>
            <div class="social_item"><a href=""><img src="img/twitter.png" alt=""></a></div>
        </div>
    </div> 
</div>
    
    
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
        <div class="title">
            Contacts
        </div>

        <div class="form-container">
            <form action="">
                <input name="user-email" class="user-email container-child" placeholder="Input Your Email" type="text">
                <input class="send container-child" type="submit" value="Send">
            </form>
        </div>
    </div>
</div>
<? get_footer() ?>