<div class="comments-wrapper">


    <div class="comments" id="comments">


        <div class="comments-header">

            <h2 class="comment-reply-title">
                <?php
                if (!have_comments()) {
                    echo "Leave a comment!";
                } else {
                    echo get_comments_number(get_the_ID()) . " comments";
                }
                ?>
            </h2><!-- .comments-title -->

        </div><!-- .comments-header -->

        <hr aria-hidden="true">

        <?php
        if (comments_open()) {
            comment_form([
                'class_form' => '',
                'title_reply_before' => '<h2 class="comment-reply-title">',
                'title_reply_after' => '</h2>'
            ]);
        }
        ?>

        <div class="comments-inner">

            <?php
            wp_list_comments([
                'avatar_size' => 60,
                'style' => 'div'
            ]);
            ?>

        </div><!-- .comments-inner -->

    </div><!-- comments -->

</div>