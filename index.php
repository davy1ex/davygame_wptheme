<? get_header(); ?>

    <!-- <div class="banner" style="background-image: url(<?php echo get_stylesheet_directory_uri() . '/assets/img/banner.jpg' ?>)"> -->
        <!-- <div class="container"> -->
            <div class="banner-desc">
                <div class="date">
                    <div class="days">21.</div>
                    <div class="mounth">12.</div>
                    <div class="year">21</div>
                </div>
        
                <div class="event-text">
                    <div class="large">LARGEST GAME EVENT</div>
                    <div class="medium">SAMARA UNIVERSITY, CORP. 42, CAB. 4</div>
                </div>

                <div class="social">
                    <div class="social_item"><a href=""><img src="img/vk.svg" alt=""></a></div>
                    <div class="social_item"><a href=""><img src="img/inst.png" alt=""></a></div>
                    <div class="social_item"><a href=""><img src="img/twitter.png" alt=""></a></div>
                </div>
            </div> 
        <!-- </div>  -->
    </div>
    
    
<div class="main-content">
    <div class="events-container container">
        <div class="title">
            EVENTS
        </div>
        <?php
            $events = get_posts( array(
                'category_name' => 'events'
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
        
        <div class="schedule container-child">
            <div class="time-line">
                <div class="time">9</div>
                <div class="format">pm</div>
            </div>

            <div class="name-schedule">
                COD
            </div>
        </div>

        <div class="schedule container-child">
            <div class="time-line">
                <div class="time">12</div>
                <div class="format">pm</div>
            </div>

            <div class="name-schedule">
                Mk 11
            </div>
        </div>
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