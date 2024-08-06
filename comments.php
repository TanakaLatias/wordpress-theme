<?php if( comments_open() ) : ?>

<div class="comment">

    <?php
    $args = array(
        'title_reply' => 'You want to leave a comment?',
        'label_submit' => 'Submit',
    );
    comment_form( $args );
    ?>
    <br>

    <?php if( have_comments() ): ?>
        <div class="commets-list">
            <h3>Comment List</h3>
            <?php wp_list_comments(array('callback' => 'mytheme_comment')); ?>
        </div>
    <?php endif; ?>

</div>

<?php endif; ?>