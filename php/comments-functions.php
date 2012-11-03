<?php
require_once( CGB_PATH.'php/options.php' );

// This class handles all required function to display the comment list
class cgb_comments_functions {
	public $l10n_domain;
	private $options;
	private $nav_label_prev;
	private $nav_label_next;

	public function __construct() {
		// get options instance
		$this->options = &cgb_options::get_instance();
		// set language domain
		$this->l10n_domain = $this->options->get( 'cgb_l10n_domain' );
		$this->nav_label_prev = __( '&larr; Older Comments', $this->l10n_domain );
		$this->nav_label_next = __( 'Newer Comments &rarr;' , $this->l10n_domain);
		if( 'desc' === $this->options->get( 'cgb_clist_order' ) ) {
			//switch labels and corred arrow
			$tmp_label = $this->nav_label_prev;
			$this->nav_label_prev = '&larr; '.substr( $this->nav_label_next, 0, -6);
			$this->nav_label_next = substr( $tmp_label, 6 ).' &rarr;';
		}
	}

	public function list_comments() {
		// Prepare wp_list_comments args
		//comment callback function
		if( '' === $this->options->get( 'cgb_comment_adjust' ) ) {
			$args['callback'] = $this->options->get( 'cgb_comment_callback' );
		}
		else {
			$args['callback'] = array( &$this, 'show_comment_html' );
		}
		//correct order of top level comments
		if( 'default' !== $this->options->get( 'cgb_clist_order' ) ) {
			$args['reverse_top_level'] = false;
		}
		//correct order of child comments
		if( 'desc' === $this->options->get( 'cgb_clist_child_order' ) ) {
			$args['reverse_children'] = true;
		}
		elseif( 'asc' === $this->options->get( 'cgb_clist_child_order' ) ) {
			$args['reverse_children'] = false;
		}
		//change child order if top level order is desc due to array_reverse
		if( 'desc' === $this->options->get( 'cgb_clist_order' ) ) {
			$args['reverse_children'] = isset( $args['reverse_children'] ) ? !$args['reverse_children'] : true;
		}

		// Print comments
		wp_list_comments( $args );
	}

	public function show_comment_html( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment;
		$l10n_domain = $this->options->get( 'cgb_l10n_domain' );
		switch ( $comment->comment_type ) {
			case 'pingback' :
			case 'trackback' :
				echo '
					<li class="post pingback">
					<p>'.__( 'Pingback:', $l10n_domain ).get_comment_author_link().get_edit_comment_link( __( 'Edit', $l10n_domain ), '<span class="edit-link">', '</span>' ).'</p>';
				break;
			default :
				echo '
					<li '.comment_class( '', null, null, false ).' id="li-comment-'.get_comment_ID().'">
						<article id="comment-'.get_comment_ID().'" class="comment">';
				eval( '?>'.$this->options->get( 'cgb_comment_html' ) );
				echo '
						</article><!-- #comment-## -->';
				break;
		}
	}

	public function show_nav_html() {
		echo '<h1 class="assistive-text">'.__( 'Comment navigation', $this->l10n_domain ).'</h1>
					<div class="nav-previous">'.$this->get_comment_nav_label( true ).'</div>
					<div class="nav-next">'.$this->get_comment_nav_label().'</div>';
	}

	public function show_form_below_comments_html() {
		if( '' !== $this->options->get( 'cgb_form_below_comments' ) ) {
			comment_form();
		}
	}

	private function get_comment_nav_label( $previous=false ) {
		ob_start();
		if( $previous ) {
			previous_comments_link( $this->nav_label_prev );
		}
		else {
			next_comments_link( $this->nav_label_next );
		}
		$out = ob_get_contents();
		ob_end_clean();
		return $out;
	}
}
?>
