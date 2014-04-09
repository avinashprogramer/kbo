<?php
/**
 * Twenty Fourteen functions and definitions.
 *
 * Sets up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions would be used.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * see http://codex.wordpress.org/Plugin_API
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
	function getPageContent($id=0) {
	    $content = '';
	    $post = get_page($id);
	    if ($post) {
	       $content = apply_filters('the_content', $post->post_content);
	       $content = str_replace(']]>', ']]>', $content);
	    }
	    return $content;
	}


	/* Hide Content Editor for pages with certain templates. */
		function kbo_hide_editor() {
			// Get the Post ID.
			$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
			if( !isset( $post_id ) ) return;

			// Hide the editor on a page with a specific page template
			// Get the name of the Page Template file.
			$template_file = get_post_meta($post_id, '_wp_page_template', true);

			/* Add the names of the template files here */
			if($template_file == 'pageparts/home.php' || $template_file == 'template-example.php') { // the filename of the page template
			remove_post_type_support('page', 'editor');
			}
		}
		add_action( 'admin_init', 'kbo_hide_editor' );



	function register_my_menus() {
		register_nav_menus(
			array(
			'header_menu' => __( 'header_menu' )
			)
		);
	}
	add_action( 'init', 'register_my_menus' );



// Custom Comment Styling

function kbo_comment($comment, $args, $depth) {
        $GLOBALS['comment'] = $comment;
        extract($args, EXTR_SKIP);

        if ( 'div' == $args['style'] ) {
            $tag = 'div';
            $add_below = 'comment';
        } else {
            $tag = 'li';
            $add_below = 'div-comment';
        }
    ?>
        <?php //if ( 'div' != $args['style'] ) : ?>
            <li id="div-comment-<?php comment_ID() ?>" class="comment">
        <?php //endif; ?>
        <div class="media">
            <a href="<?php //echo get_comment_author_link(); ?>" class="pull-left js-greavatar">
                <?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, 60 ); ?>
            </a>
            <?php if ($comment->comment_approved == '0') : ?>
                <em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting approval.') ?></em>
                <br />
            <?php endif; ?>
            <div class="media-body comment_body">
                <?php printf(__('<p class="comment_name">%s</p>'), get_comment_author_link()) ?>
                <p class="comment_date">
                    <?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))).printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time()); ?>
                </p>
                <?php echo '<p class="comment_txt">'.get_comment_text().'</p>'; ?>
            </div>
        </div>
        <?php //if ( 'div' != $args['style'] ) : ?>
            </li>
        <?php //endif; ?>
<?php
}


?>