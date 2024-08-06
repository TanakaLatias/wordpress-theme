<?php get_header(); ?>

    <div class="basic-back shadow">
        <h3 class="error-h3">404</h3>
        <p class="error-p">Im sorry, this page doesnt exist.</p>
        <p class="error-p"><a href="<?php echo esc_url( home_url( "/" )); ?>">> Return to top</a></p>
        <br>
    </div>

<?php get_footer();