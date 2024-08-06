<?php get_header(); ?>

    <div class="basic-back shadow">

        <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
        
            <div class='single-post'>

                <h1><?php the_title(); ?></h1>

                <div class="prev-next">
                    <div class="next"><p><?php next_post_link('%link'); ?></p></div>
                    <div class="prev"><p><?php previous_post_link('%link'); ?></p></div>
                </div>

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
                <br>
                <p class="single-text">( <?php echo the_date(); ?> )</p>

                <?php comments_template(); ?>

            </div>

        <?php endwhile; endif; ?>

        <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) :
            $older_comments_link = get_previous_comments_link(__('Older Comments'));
            $newer_comments_link = get_next_comments_link(__('Newer Comments')); ?>
            <?php if ($older_comments_link || $newer_comments_link) : ?>
                <nav class="comment-pagination" role="navigation">
                    <?php if ($newer_comments_link) : ?>
                        <div class="nav-next"><?php echo $newer_comments_link; ?></div>
                    <?php endif; ?>
                    <?php if ($older_comments_link) : ?>
                        <div class="nav-previous"><?php echo $older_comments_link; ?></div>
                    <?php endif; ?>
                </nav>
                <br>
            <?php endif; ?>
        <?php endif; ?>

    </div>

<?php get_footer();