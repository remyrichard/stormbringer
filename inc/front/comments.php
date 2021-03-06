<?php
// Comment Layout
function stormbringer_comments($comment, $args, $depth) {
  $GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class('media'); ?>>
    <div class="pull-left">
      <div class="comment-avatar vcard">
        <?php echo get_avatar($comment,apply_filters('twentyeleven_author_bio_avatar_size', 100) ); ?>
      </div>
    </div>
    <!-- /.comment-avatar -->
    <div class="media-body">
      <div class="comment-message">
        <?php printf(__('<h4 class="media-heading">%s</h4>','stormbringer'), get_comment_author_link()) ?>
        <?php edit_comment_link(__('Modifier','stormbringer'),'<span class="edit-comment btn btn-info"><i class="icon-white icon-pencil"></i>','</span>') ?>

        <?php if ($comment->comment_approved == '0') : ?>
          <div class="alert-message success">
            <p><?php _e('Votre commentaire est en cours de modération.','stormbringer') ?></p>
          </div>
        <?php endif; ?>

        <?php comment_text() ?>

        <time datetime="<?php echo comment_time('Y-m-j'); ?>"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php comment_time(''); ?> <?php _e("à", "stormbringer"); ?> <?php comment_time('H:i'); ?> </a></time>

      </div>
    </div>
    <!-- /.comment-message	-->

    <!-- </li> is added by wordpress automatically -->
<?php
} // don't remove this bracket!