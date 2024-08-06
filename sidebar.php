<div class="sidebar">

    <div class="element shadow">
        <?php get_search_form(); ?>
        <p><a href="<?php echo esc_url( home_url( "/" )); ?>">> Unselect</a></p>
    </div>

    <div class="element shadow">
        <p>Greeting</p>
        <p>Hi There. Nice seeing you.</p>
    </div>
    
    <div class="element shadow">
        <label for="archive">Archive:</label>
        <?php 
            echo '<select id="archive" onchange="if (this.value !== \'\') { window.location.href=this.value; } else { window.location.href=\'\'; }">';
            echo '<option value=""></option>';
            wp_get_archives(array(
                'type' => 'monthly',
                'format' => 'option',
                'show_post_count' => 1
            ));
            echo '</select>';
        ?>
        <p><a href="<?php echo esc_url( home_url( "/" )); ?>">> Unselect</a></p>
    </div>

    <div class="element shadow">
        <label for="category">Categories:</label>
        <?php 
        echo '<select id="category" onchange="if (this.value != \'\') { document.location.href=this.value; }">';
        echo '<option value=""></option>';
        $args = array(
            'orderby' => 'name'
        );
        $categories = get_categories($args);
        foreach ($categories as $category) {
            if (strpos($category->name, ':') !== false) {
                echo '<option value="' . esc_url(get_category_link($category->term_id)) . '">' . $category->name . ' (' . $category->count . ')</option>';
            }
        }
        echo '</select>';
        ?>
        <p><a href="<?php echo esc_url( home_url( "/" )); ?>">> Unselect</a></p>  
    </div>

</div>

<?php 
/*
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
<select name='archive-dropdown' onchange='document.location.href=this.options[this.selectedIndex].value;'>
    <option value=''></option>
    <?php wp_get_archives( array( 
        'type' => 'monthly', 
        'format' => 'option', 
        'show_post_count' => 1) ); 
    ?>
</select>
--
<?php
    $categories = get_categories(array(
        'orderby' => 'name',
        'hide_empty' => true,
    ));
    foreach ($categories as $category) {
        if (strpos($category->name, ':') !== false) {
            echo '<p><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a> (' . $category->count . ')</p>';
        }
    }
?>
<div class="-category-dropdown">
    <form method="get" action="<?php bloginfo('url'); ?>">
        <?php
        $args = array(
            'show_option_none' => '  ',
            'exclude' => '1',
            'orderby' => 'name'
        );
        $categories = get_categories($args);

        if ($categories) {
            echo '<select name="cat">';
            echo '<option value="">  </option>';

            foreach ($categories as $category) {
                if (strpos($category->name, ':') !== false) {
                echo '<option value="' . $category->cat_ID . '">' . $category->name . ' (' . $category->count . ')</option>';
            }
        }

            echo '</select>';
        }
        ?>
        <input type="submit" value="  Search  ">
    </form>
</div>
*/
?>