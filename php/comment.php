<?php

// This class handles all available admin pages
class cgb_comment {

   public static function show_comment( $comment, $args, $depth ) {
	   $GLOBALS['comment'] = $comment;
	   switch ( $comment->comment_type ) {
		   case 'pingback' :
		   
		   case 'trackback' :
		      $out = '
	            <li class="post pingback">
		         <p><'._e( 'Pingback:', 'twentyeleven' ).' '.comment_author_link().edit_comment_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ).'</p>';
			   break;
			   
		   default :
	         $out = '
	            <li '.comment_class().' id="li-comment-'.comment_ID().'">
		            <article id="comment-'.comment_ID().'" class="comment">
			            <footer class="comment-meta">
				            <div class="comment-author vcard">';	       
            $avatar_size = 68;
            if ( '0' != $comment->comment_parent )
	            $avatar_size = 39;

            $out .= get_avatar( $comment, $avatar_size );

            /* translators: 1: comment author, 2: date and time */
            $out .= sprintf( __( '%1$s on %2$s <span class="says">said:</span>', 'twentyeleven' ),
	                  sprintf( '<span class="fn">%s</span>', get_comment_author_link() ),
	                  sprintf( '<a href="%1$s"><time pubdate datetime="%2$s">%3$s</time></a>',
		                  esc_url( get_comment_link( $comment->comment_ID ) ),
		                  get_comment_time( 'c' ),
		                  /* translators: 1: date, 2: time */
		                  sprintf( __( '%1$s at %2$s', 'twentyeleven' ), get_comment_date(), get_comment_time() )
	                  )
                  );
			   $out .= edit_comment_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' );
				$out .= '
				            </div><!-- .comment-author .vcard -->';

				if ( $comment->comment_approved == '0' ) {
			      $out .= '
			               <em class="comment-awaiting-moderation">'._e( 'Your comment is awaiting moderation.', 'twentyeleven' ).'</em>
					         <br />';
            }
			   $out .= '
			            </footer>
			            
			            <div class="comment-content">'.comment_text().'</div>

			            <div class="reply">
				            '.comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply <span>&darr;</span>', 'twentyeleven' ), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ).'
			            </div><!-- .reply -->
		            </article><!-- #comment-## -->';
			   break;
	   }
   }
}
?>
