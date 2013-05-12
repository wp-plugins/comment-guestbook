<?php
if( !defined( 'ABSPATH' ) ) {
	exit;
}

// This class handles all available options
class cgb_options {

	private static $instance;
	public $group;
	public $options;

	public static function &get_instance() {
		// Create class instance if required
		if( !isset( self::$instance ) ) {
			self::$instance = new cgb_options();
			self::$instance->init();
		}
		// Return class instance
		return self::$instance;
	}

	private function __construct() {
		$this->group = 'comment-guestbook';

		$this->options = array(

			'cgb_ignore_comments_open'   => array( 'section' => 'general',
			                                       'type'    => 'checkbox',
			                                       'std_val' => '1',
			                                       'label'   => 'Guestbook comment status',
			                                       'caption' => 'Allow comments on the guestbook page',
			                                       'desc'    => 'Always allow comments on the guestbook page. If enabled the comment status of the page will be overwritten.' ),

			'cgb_l10n_domain'            => array( 'section' => 'general',
			                                       'type'    => 'text',
			                                       'std_val' => 'default',
			                                       'label'   => 'Domain for translation',
			                                       'desc'    => 'Sets the domain for translation for the modified code which is set in Comment Guestbook.<br />
			                                                     Standard value is "default". For example if you want to use the function of the twentyeleven theme the value would be "twentyeleven".<br />
			                                                     See the <a href="http://codex.wordpress.org/Function_Reference/_2" target="_blank">description in Wordpress codex</a> for more details.<br />' ),

			'cgb_cmessage'               => array( 'section' => 'cmessage',
			                                       'type'    => 'radio',
			                                       'std_val' => 'default',
			                                       'label'   => 'Show message after comment',
			                                       'caption' => array( 'default' => 'Standard WP-setting (no message)', 'guestbook_only' => 'Show message on guestbook page only', 'always' => 'Show message on all posts/pages' ),
			                                       'desc'    => 'This option allows to enable to show a message after a new comment was made.<br />
			                                                     You have the ability to show the message in all pages/posts or only on the guestbook page.<br />
			                                                     There are some additional options availabe to change the message text and format' ),

			'cgb_cmessage_text'          => array( 'section' => 'cmessage',
			                                       'type'    => 'text',
			                                       'std_val' => 'Thanks for your comment',
			                                       'label'   => 'Text for message after comment',
			                                       'desc'    => 'This option allows you to change the text for the message after a new comment<br />
			                                                     This option has no influence if "Standard-WP-setting" is selected for "Show message after comment"' ),

			'cgb_cmessage_type'          => array( 'section' => 'cmessage',
			                                       'type'    => 'radio',
			                                       'std_val' => 'inline',
			                                       'label'   => 'Type of message after comment',
			                                       'caption' => array( 'inline' => 'Show the message inline', 'overlay' => 'Show the message in overlay' ),
			                                       'desc'    => 'This option allows to change the format of the message after a new comment.<br />
			                                                     With "inline" the message is shown directly below the comment in a div added via javascript.<br />
			                                                     With "overlay" the message is shown in an overlay div.<br />
			                                                     The message will be slided in with an animation and after a short time the message will be slided out.<br />
			                                                     This option has no influence if "Standard-WP-setting" is selected for "Show message after new comment"' ),

			'cgb_clist_adjust'           => array( 'section' => 'comment_list',
			                                       'type'    => 'checkbox',
			                                       'std_val' => '',
			                                       'label'   => 'Comment list adjustment',
			                                       'caption' => 'Adjust the comment list output',
			                                       'desc'    => 'This option specifies if the comment list in the guestbook page should be adjusted or if the standard list specified in the theme should be used.' ),

			'cgb_clist_order'            => array( 'section' => 'comment_list',
			                                       'type'    => 'radio',
			                                       'std_val' => 'default',
			                                       'label'   => 'Comment list order',
			                                       'caption' => array( 'default' => 'Standard WP-discussion setting', 'asc' => 'Oldest comments first', 'desc' => 'Newest comments first' ),
			                                       'desc'    => 'This option allows you to overwrite the standard order for top level comments only for the guestbook page.<br />
			                                                     This option is only available if "Comment list adjustment" is enabled.' ),

			'cgb_clist_child_order'      => array( 'section' => 'comment_list',
			                                       'type'    => 'radio',
			                                       'std_val' => 'default',
			                                       'label'   => 'Comment list child order',
			                                       'caption' => array( 'default' => 'Standard WP-discussion setting', 'asc' => 'Oldest child comments first', 'desc' => 'Newest child comments first' ),
			                                       'desc'    => 'This option allows you to overwrite the standard order for all child comments only for the guestbook page.<br />
			                                                     This option is only available if "Comment list adjustment" is enabled.' ),

			'cgb_clist_default_page'     => array( 'section' => 'comment_list',
			                                       'type'    => 'radio',
			                                       'std_val' => 'default',
			                                       'label'   => 'Comment list default page',
			                                       'caption' => array( 'default' => 'Standard WP-discussion setting', 'first' => 'First page', 'last' => 'Last page' ),
			                                       'desc'    => 'This option allows you to overwrite the standard default page only for the guestbook page.<br />
			                                                     This option is only available if "Comment list adjustment" is enabled.' ),

			'cgb_clist_show_all'         => array( 'section' => 'comment_list',
			                                       'type'    => 'checkbox',
			                                       'std_val' => '',
			                                       'label'   => 'Show all comments',
			                                       'caption' => 'Show comments of all posts and pages',
			                                       'desc'    => 'Normally only the comments of the actual guestbook site are shown.<br />
			                                                     With this option the comments of all posts and pages of your sites will be displayed.<br />
			                                                     It is recommended to enable "Comment Adjustment in Section "Comment html code" if you enable this option.<br />
			                                                     There you have the possibility to include a reference to the original page/post of the comment.' ),

			'cgb_clist_num_pagination'   => array( 'section' => 'comment_list',
			                                       'type'    => 'checkbox',
			                                       'std_val' => '',
			                                       'label'   => 'Numbered pagination links',
			                                       'caption' => 'Create a numbered pagination navigation',
			                                       'desc'    => 'If this option is enabled a numbered list of all the comment pages is displayed.<br />
			                                                     Normally only a next and previous links are shown.<br />
			                                                     This option is only available if "Comment list adjustment" is enabled.' ),

			'cgb_comment_callback'       => array( 'section' => 'comment_list',
			                                       'type'    => 'text',
			                                       'std_val' => '--func--comment_callback',
			                                       'label'   => 'Comment callback function',
			                                       'desc'    => 'This option sets the name of comment callback function which outputs the html-code to view each comment.<br />
			                                                     You only require this function if "Comment list adjustment" is enabled and Comment adjustment is disabled.<br />
			                                                     Normally this function is set through the selected theme. Comment Guestbook searches for the theme-function and uses this as default. <br />
			                                                     If the theme-function wasn´t found this field will be empty, then the WordPress internal functionality will be used.<br />
			                                                     If you want to insert the function of your theme manually, you can find the name in file "functions.php" in your theme directory.<br />
			                                                     Normally it is called "themename_comment", e.g. for twentyeleven theme: "twentyeleven_comment".' ),

			'cgb_comment_adjust'         => array( 'section' => 'comment_html',
			                                       'type'    => 'checkbox',
			                                       'std_val' => '',
			                                       'label'   => 'Comment adjustment',
			                                       'caption' => 'Adjust the html-output of each comment',
			                                       'desc'    => 'This option specifies if the comment html code should be replaced with the html code given in "Comment html code" on the guestbook page.<br />
	 		                                                     If "Comment list adjustment" is disabled this option has no effect.' ),

			'cgb_comment_html'           => array( 'section' => 'comment_html',
			                                       'type'    => 'textarea',
			                                       'std_val' => '--func--comment_html',
			                                       'label'   => 'Comment html code',
			                                       'desc'    => 'This option specifies the html code for each comment, if "Comment adjustment" is enabled.<br />
			                                                     You can use php-code to get the required comment data. The following variables and objects are availabe:<br />
			                                                     - <code>$l10n_domain</code> ... Use this php variable to get the "Domain for translation" value.<br />
			                                                     - <code>$comment</code> ... This objects includes all available data of the comment. You can use all available fields of "get_comment" return object listed in <a href="http://codex.wordpress.org/Function_Reference/get_comment" target="_blank">relevant wordpress codex site</a>.<br />
			                                                     - <code>$is_comment_from_other_page</code> ... This boolean variable gives you information if the comment was created in another page or post.<br />
			                                                     - <code>$other_page_title</code> ... With this variable you have access to the Page name of a commente created in another page or post.<br />
			                                                     - <code>$other_page_link</code> ... With this variable you can include a link to the original page of a comment created in another page or post.<br />
			                                                     Wordpress provides some additional functions to access the comment data (see <a href="http://codex.wordpress.org/Function_Reference#Comment.2C_Ping.2C_and_Trackback_Functions" target="_blank">wordpress codex</a> for datails).<br />
			                                                     The code given as an example is a slightly modified version of the twentyeleven theme.<br />
			                                                     If you want to adapt the code to your theme you can normally find the theme template in the file "functions.php" in your theme directory.<br />
			                                                     E.g. for twentyeleven the function is called "twentyeleven_comment".<br />
			                                                     If you have enabled the option "Show all comments" it is recommended to enable "Comment adjustment" and add a link to the original page of the comment.<br />
			                                                     Example: <code>if( $is_comment_from_other_page && "0" == $comment->comment_parent ) { echo \' \'.__( \'Link to page:\', $l10n_domain ).\' \'.$other_page_link; }</code>' ),

			'cgb_form_below_comments'    => array( 'section' => 'comment_form',
			                                       'type'    => 'checkbox',
			                                       'std_val' => '',
			                                       'label'   => 'Show form below comments',
			                                       'caption' => 'Add a comment form in the comment section below the comments',
			                                       'desc'    => 'With this option you can add a comment form in the comment section below the comment list.<br />
			                                                     This option is only available if "Comment list adjustment" in "Comment list settings" is enabled.' ),

			'cgb_form_above_comments'    => array( 'section' => 'comment_form',
			                                       'type'    => 'checkbox',
			                                       'std_val' => '',
			                                       'label'   => 'Show form above comments',
			                                       'caption' => 'Add a comment form in the comment section above the comments',
			                                       'desc'    => 'With this option you can add a comment form in the comment section above the comment list.<br />
			                                                     This option is only available if "Comment list adjustment" in "Comment list settings" is enabled.' ),

			'cgb_form_in_page'           => array( 'section' => 'comment_form',
			                                       'type'    => 'checkbox',
			                                       'std_val' => '1',
			                                       'label'   => 'Show form in page/post',
			                                       'caption' => 'Add a comment form in the page/post section',
			                                       'desc'    => 'With this option you can add a comment form in the page or post section. The form will be displayed at the position of the shortcode.' ),
		);
	}

	public function init() {
		add_action( 'admin_init', array( &$this, 'register' ) );
	}

	public function register() {
		foreach( $this->options as $oname => $o ) {
			register_setting( 'cgb_'.$o['section'], $oname );
		}
	}

/*
	public function set( $name, $value ) {
		if( isset( $this->options[$name] ) ) {
			return update_option( $name, $value );
		}
		else {
			return false;
		}
	}
*/
	public function get( $name ) {
		if( isset( $this->options[$name] ) ) {
			// set std_val, if a function is used to set the value
			if( substr( $this->options[$name]['std_val'], 0, 8 ) == '--func--' ) {
				$this->options[$name]['std_val'] = call_user_func( array('cgb_options', substr( $this->options[$name]['std_val'], 8 ) ) );
			}
			return get_option( $name, $this->options[$name]['std_val'] );
		}
		else {
			return null;
		}
	}

	/**
	 * Upgrades renamed or modified options to the actual version
	 *
	 * Version 0.1.0 to 0.1.1:
	 *   cgb_clist_comment_adjust   -> cgb_comment_adjust
	 *   cgb_clist_comment_html     -> cgb_comment_html
	 *
	 * Version 0.1.2 to 0.2.0:
	 *   cgb_clist_comment_callback -> cgb_comment_callback
	 */
	public function version_upgrade() {
		$value = get_option( 'cgb_clist_comment_adjust', null );
		if( $value != null ) {
			add_option( 'cgb_comment_adjust', $value );
			delete_option( 'cgb_clist_comment_adjust' );
		}
		$value = get_option( 'cgb_clist_comment_html', null );
		if( $value != null ) {
			add_option( 'cgb_comment_html', $value );
			delete_option( 'cgb_clist_comment_html' );
		}
		$value = get_option( 'cgb_clist_comment_callback', null );
		if( $value != null ) {
			add_option( 'cgb_comment_callback', $value );
			delete_option( 'cgb_clist_comment_callback' );
		}
	}

	private function comment_callback() {
		$func = get_stylesheet().'_comment';
		if( function_exists( $func ) ) {
			return $func;
		}
		else {
			return '';
		}
	}

	private function comment_html() {
		// use 2 spaces instead of 1 tab to have a better view in the options dialog
		$out = '<footer class="comment-meta">
<div class="comment-author vcard">
<?php
	$avatar_size = 68;
	if ( "0" != $comment->comment_parent )
		$avatar_size = 39;
	echo get_avatar( $comment, $avatar_size );
	printf( \'<a href="%1$s"><time datetime="%2$s">%3$s</time></a>\',
		esc_url( get_comment_link( $comment->comment_ID ) ),
		get_comment_time( "c" ),
		sprintf( __( \'%1$s at %2$s<br />\', $l10n_domain ), get_comment_date(), get_comment_time() ) );
	printf( \'<span class="fn">%s</span>\', get_comment_author_link() );
	if( $is_comment_from_other_page && "0" == $comment->comment_parent )
		echo \' \'.__( \'in\', $l10n_domain ).\' \'.$other_page_link;
	edit_comment_link( __( "Edit", $l10n_domain ), \'<span class="edit-link">\', "</span>" ); ?>
</div><!-- .comment-author .vcard -->
<?php if ( $comment->comment_approved == "0" ) : ?>
	<em class="comment-awaiting-moderation"><?php _e( "Your comment is awaiting moderation.", $l10n_domain ); ?></em>
	<br />
<?php endif; ?>
</footer>
<div class="comment-content"><?php comment_text(); ?></div>
<div class="reply">
	<?php comment_reply_link( array_merge( $args, array( "reply_text" => __( "Reply <span>&darr;</span>", $l10n_domain ), "depth" => $depth, "max_depth" => $args["max_depth"] ) ) ); ?>
</div><!-- .reply -->';
		return $out;
	}
}
