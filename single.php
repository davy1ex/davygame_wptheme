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
            <?php the_post_thumbnail() ?>
            <h1 class="title"><?php the_title(); ?></h1>
            
            
            <?php the_content() ?>

            
            <time><?php the_date() ?></time>
            
        </article>

        <?php
                endwhile;
            else:
        ?>

        not found

        <?php endif; ?>
    </div>
</div>