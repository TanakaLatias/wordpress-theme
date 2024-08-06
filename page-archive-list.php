<?php get_header(); ?>

    <div class="basic-back shadow">

        <div class="archives">

        <h3>All Archives</h3>

            <?php
                    $args = array(
                        "type" => "monthly",
                        "show_post_count" => true,
                    );
                    $archives = wp_get_archives($args);
                    if ( $archives ) {
                        foreach ( $archives as $archive ) {
                            echo $archive->name;
                        }
                    }
            ?>

        </div>

    </div>

<?php get_footer();