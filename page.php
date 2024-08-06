<?php get_header(); ?>

    <div class="basic-back shadow">

        <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>

            <div class='single-post'>

                <h3><?php the_title(); ?></h3>

                <?php if(has_post_thumbnail()): ?>
                    <div class="single-image">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                    </div>
                <?php else: ?>
                    <div class="single-image">
                        <img src="<?php echo esc_url( get_theme_file_uri( "img/manafi.jpg" ) ); ?>" alt="<?php the_title(); ?>">
                    </div>
                <?php endif; ?>

                <p class="single-text"><?php the_content(); ?></p>

            </div>
            <br>
            
        <?php endwhile; endif; ?>

    </div>

<?php get_footer();