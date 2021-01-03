<? get_header(); ?>
<div class="main-content">
    <div class="container">
        <div class="desc">
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
    </div> 
    

    <div class="events-container container">
        <div class="title">
            EVENTS
        </div>
        <?php
            if ( have_posts() ):
                while( have_posts() ): 
                    the_post( );
        ?>
        
                    <div class="event">
                        
                        <img class="event-img" src="<?php the_post_thumbnail_url() ?>" alt="">

                        <div class="event-desc">
                            <?php echo get_the_excerpt() ?>
                        </div>
                    </div>
        <?php 
                endwhile;
                    
            else: ?>
                <?php get_template_part( 'tmp/no-posts' ); ?>
            <? endif; ?>
    </div>

    <div class="contacts container">
        <div class="title">
            Contacts
        </div>

        <div class="form-container">
            <form action="">
                <input name="user-email" class="user-email" placeholder="Input Your Email" type="text">
                <input class="send" type="submit" value="Send">
            </form>
        </div>
    </div>
</div>
<? get_footer() ?>