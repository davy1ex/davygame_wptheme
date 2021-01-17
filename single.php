<?php 
    get_header();
?>

<div class="main-content">
    <div class="container">
        <?php 
            if( have_posts() ):
                while( have_posts() ):
                    the_post();
        ?>

        <article>            
            <img class="img-default" src="<?php the_post_thumbnail_url() ?>" alt="">
            <h1 class="title"><?php the_title(); ?></h1>
            
            <div class="article-desc">
                <?php the_content() ?>
            </div>
            

            
            <div class="time_start">Time start: <?php $terms = get_the_terms( $post->ID , 'time_start' ); echo $terms[0]->slug; ?></div>
            
        </article>

        <?php
                endwhile;
            else:
        ?>

        not found

        <?php endif; ?>
    </div>
</div>

<?php
get_footer() 
?>