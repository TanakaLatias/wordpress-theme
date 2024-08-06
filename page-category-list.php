<?php get_header(); ?>

    <div class="basic-back shadow">

        <div class="archives">

        <h3>All Categories</h3>

            <?php
                $categories = get_categories(array(
                    'orderby' => 'name',
                    'hide_empty' => true,
                ));
                foreach ($categories as $category) {
                    if (strpos($category->name, ':') !== false) {
                        echo '<li><a href="'.get_category_link($category->term_id).'">'.$category->name.'</a> ('.$category->count.')</li>';
                    }
                }
            ?>

        </div>

    </div>

<?php get_footer();