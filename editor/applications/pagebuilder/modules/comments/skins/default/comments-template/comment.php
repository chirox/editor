<<?php echo $tag; ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?> id="comment-<?php comment_ID(); ?>">
<?php if ( 'div' != $args['style'] ) : ?>
    <div id="div-comment-<?php comment_ID(); ?>" class="comment-body">
<?php endif; ?>

<div class="comment-author vcard">
    <a><?php if ( 0 != $args['avatar_size'] ) echo get_avatar( $comment, $args['avatar_size'] ); ?></a>
    <div class="comment-meta commentmetadata author-name">
        <cite class="fn">
            <?php echo get_comment_author_link() ?>
        </cite>
        <a href="<?php echo esc_url( get_comment_link( $comment->comment_ID, $args ) ); ?>">
        <?php
            /* translators: 1: date, 2: time */
            printf( __( '%1$s at %2$s' ), get_comment_date(),  get_comment_time() ); ?>
        </a>
        <?php edit_comment_link( __( '(Edit)' ), '  ', '' );?>
    </div>
</div>
<?php if ( '0' == $comment->comment_approved ) : ?>
    <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ) ?></em>
    <br />
<?php endif; ?>

<div class="comment-text"><?php comment_text( get_comment_id() , array_merge( $args , array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
</div>

<?php if ( 'div' != $args['style'] ) : ?>
        <div class="reply">
            <?php echo PBCommentsShortcode::get_comment_reply_link( array_merge( $args, array( 'class' => 'btn btn-xs btn-flat' , 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
        </div>
    </div>
<?php endif; ?>