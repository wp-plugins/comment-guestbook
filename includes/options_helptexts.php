<?php
if(!defined('WPINC')) {
	exit;
}

$options_helptexts = array(
	// General section
	'cgb_ignore_comments_open'        => array('type'    => 'checkbox',
	                                           'label'   => __('Guestbook comment status','comment-guestbook'),
	                                           'caption' => __('Always allow comments on the guestbook page','comment-guestbook'),
	                                           'desc'    => __('If this option is enabled the wordpress and actual page setting will be overwritten and comments will be always allowed on the guestbook page.','comment-guestbook')),

	'cgb_ignore_comment_registration' => array('type'    => 'checkbox',
	                                           'label'   => __('Guestbook comment registration','comment-guestbook'),
	                                           'caption' => __('Allow comments on the guestbook page without registration','comment-guestbook'),
	                                           'desc'    => __('If this option is enabled the wordpress setting will be overwritten and comments will be always allowed without registration on the guestbook page.','comment-guestbook')),

	'cgb_threaded_gb_comments'        => array('type'    => 'radio',
	                                           'label'   => __('Enable threaded guestbook comments','comment-guestbook'),
	                                           'caption' => array('default' => 'Standard WP-discussion setting', 'enabled' => 'Enabled', 'disabled' => 'Disabled'),
	                                           'desc'    => __('This option allows you to overwrite the threaded comments option for guestbook pages.<br />
	                                                            If this option is enabled a reply to a given comment is allowed, when disabled it isn´t.<br />
	                                                            You can define the allowed depth of threaded comments in the WordPress discussion settings. There also the standard value for all comments can be changed.','comment-guestbook')),

	'cgb_adjust_output'               => array('type'    => 'checkbox',
	                                           'label'   => __('Guestbook comments adjustment','comment-guestbook'),
	                                           'caption' => __('Adjust the guestbook comments output','comment-guestbook'),
	                                           'desc'    => __('This option specifies if the "list_comments" wordpress function shall be overwritten.<br />
	                                                        Switching on this option is required to make most of the other adjustments working (see options and sections descriptions).','comment-guestbook')),

	'cgb_l10n_domain'                 => array('type'    => 'text',
	                                           'label'   => __('Domain for translation','comment-guestbook'),
	                                           'desc'    => __('Sets the domain for translation for the modified code which is set in Comment Guestbook.<br />
	                                                            Standard value is "default". For example if you want to use the function of the twentyeleven theme the value would be "twentyeleven".<br />
	                                                            See the <a href="http://codex.wordpress.org/Function_Reference/_2" target="_blank">description in Wordpress codex</a> for more details.','comment-guestbook')),
	// Comment-form section
	'cgb_form_below_comments'         => array('type'    => 'checkbox',
	                                           'label'   => __('Show form below comments','comment-guestbook'),
	                                           'caption' => __('Add a comment form in the comment area below the comments','comment-guestbook'),
	                                           'desc'    => __('With this option you can add a comment form in the comment section below the comment list.','comment-guestbook')),

	'cgb_form_above_comments'         => array('type'    => 'checkbox',
	                                           'label'   => __('Show form above comments','comment-guestbook'),
	                                           'caption' => __('Add a comment form in the comment area above the comments','comment-guestbook'),
	                                           'desc'    => __('With this option you can add a comment form in the comment section above the comment list.','comment-guestbook')),

	'cgb_form_in_page'                => array('type'    => 'checkbox',
	                                           'label'   => __('Show form in page/post','comment-guestbook'),
	                                           'caption' => __('Add a comment form in the page/post area','comment-guestbook'),
	                                           'desc'    => __('With this option you can add a comment form in the page or post area. The form will be displayed at the position of the shortcode.<br />
	                                                            If the option "Show form above comments" is enabled, this form will not be displayed to avoid showing 2 forms in succession.','comment-guestbook')),

	'cgb_add_cmessage'                => array('type'    => 'checkbox',
	                                           'label'   => __('Message after new comments','comment-guestbook'),
	                                           'caption' => __('Show a "Thank you" message after a new guestbook comment','comment-guestbook'),
	                                           'desc'    => __('If this option is enabled a message will be shown after a new comment was made.<br />
	                                                            There are many additional options availabe to change the message text and format in the "Message after new comments" section.','comment-guestbook')),

	'cgb_form_remove_mail'            => array('type'    => 'checkbox',
	                                           'label'   => __('Remove Email field','comment-guestbook'),
	                                           'caption' => __('Remove the Email field in comment guestbook form','comment-guestbook'),
	                                           'desc'    => __('If this option is enabled the email field will be removed in the comment guestbook form.','comment-guestbook')),

	'cgb_form_remove_website'         => array('type'    => 'checkbox',
	                                           'label'   => __('Remove Website field','comment-guestbook'),
	                                           'caption' => __('Remove the Website url field in comment guestbook form','comment-guestbook'),
	                                           'desc'    => __('If this option is enabled the website url field will be removed in the comment guestbook form.','comment-guestbook')),

	'cgb_form_comment_label'          => array('type'    => 'text',
	                                           'label'   => __('Label for comment field','comment-guestbook'),
	                                           'desc'    => __('With this option you can specify a specific label for the comment field.<br />
	                                                            The standard is "default" to use the wordpress default label. Enter an empty string to hide the label.')),

	'cgb_form_title_reply'            => array('type'    => 'text',
	                                           'label'   => __('Comment form title','comment-guestbook'),
	                                           'desc'    => __('With this option you can specify a specific title for the comment form (when not replying to a comment).<br />
	                                                            The standard is "default" to use the wordpress default title. Enter an empty string to hide the title.')),

	'cgb_form_title_reply_to'         => array('type'    => 'text',
	                                           'label'   => __('Reply comment form title','comment-guestbook'),
	                                           'desc'    => __('With this option you can specify a specific title for the comment form (when replying to a comment).<br />
	                                                            The standard is "default" to use the wordpress default title. Enter an empty string to hide the title.')),

	'cgb_form_notes_before'           => array('type'    => 'text',
	                                           'label'   => __('Notes before form fields','comment-guestbook'),
	                                           'desc'    => __('With this option you can overwrite the text for the notes before the comment form fields.<br />
	                                                            The standard is "default" to use the wordpress default notes. Enter an empty string to hide the notes.')),

	'cgb_form_notes_after'            => array('type'    => 'text',
	                                           'label'   => __('Notes after form fields','comment-guestbook'),
	                                           'desc'    => __('With this option you can overwrite the text for the notes after the comment form fields (and before the submit button).<br />
	                                                            The standard is "default" to use the wordpress default notes. Enter an empty string to hide the notes.')),

	'cgb_form_label_submit'           => array('type'    => 'text',
	                                           'label'   => __('Label of submit button','comment-guestbook'),
	                                           'desc'    => __('With this option you can overwrite the label of the comment form submit button.<br />
	                                                            The standard is "default" or an empty string to use the wordpress default label.')),

	'cgb_form_cancel_reply'           => array('type'    => 'text',
	                                           'label'   => __('Label for cancel reply link','comment-guestbook'),
	                                           'desc'    => __('With this option you can overwrite the label for the comment form cancel reply link.<br />
	                                                            The standard is "default" or an empty string to use the wordpress default label.')),

	'cgb_form_must_login_message'     => array('type'    => 'text',
	                                           'label'   => __('Must login message','comment-guestbook'),
	                                           'desc'    => __('With this option you can overwrite the message which will be displayed when the user must login to add a new comment.<br />
	                                                            The term %s will be replaced by the url to login. You can specify it in your text if you want to include a link to the login page.<br />
	                                                            Example (standard text): <code>You must be &lt;a href="%s"&gt;logged in&lt;/a&gt; to post a comment.</code><br />
	                                                            The standard is "default" or an empty string to use the wordpress default message.')),

	'cgb_form_styles'                 => array('type'    => 'textarea',
	                                           'rows'    => 6,
	                                           'label'   => __('Comment form styles','comment-guestbook'),
	                                           'desc'    => __('With this option you can specify custom css styles for the guestbook comment form.<br />
	                                                            Enter all required styles like you would do it in a css file, e.g.:<br />
	                                                            <code>.form-submit { text-align:center; }<br />&nbsp;#submit { font-weight:bold; }</code>')),

	'cgb_form_args'                   => array('type'    => 'textarea',
	                                           'rows'    => 10,
	                                           'label'   => __('Comment form args','comment-guestbook'),
	                                           'desc'    => __('With this option you can specify args for the comment form.<br />
	                                                            This can be required because some themes change the comment form styling direcly with args.<br />
	                                                            With this option you can insert these specific args in your guestbook form.<br />
	                                                            A list of all available args and there discription can be found <a href="https://codex.wordpress.org/Function_Reference/comment_form#.24args">here</a>.<br />
	                                                            The given text must be valid php array, e.g.<br />
	                                                            <code>array(<br />
	                                                            &nbsp;&nbsp;\'comment_notes_after\' =&gt; \'&lt;p&gt;\'.sprintf(__(\'You may use these &lt;abbr&gt;HTML&lt;/abbr&gt;<br />
	                                                            &nbsp;&nbsp;&nbsp;&nbsp;tags and attributes: %s\'), allowed_tags()).\'&lt;/p&gt;\',<br />
	                                                            &nbsp;&nbsp;\'fields\' =&gt; array(<br />
	                                                            &nbsp;&nbsp;&nbsp;&nbsp;\'author\' =&gt; \'&lt;input type="text" name="author" /&gt;\',<br />
	                                                            &nbsp;&nbsp;&nbsp;&nbsp;\'location\' =&gt; \'&lt;input type="text" name="location" /&gt;\')<br />
	                                                            )</code><br />
	                                                            This setting will be overwritten with all the specific comment form options listed above.')),
	// Comment-list section
	'cgb_clist_order'                 => array('type'    => 'radio',
	                                           'label'   => __('Comment list order','comment-guestbook'),
	                                           'caption' => array('default' => 'Standard WP-discussion setting', 'asc' => 'Oldest comments first', 'desc' => 'Newest comments first'),
	                                           'desc'    => __('This option allows you to overwrite the standard order for top level comments for the guestbook pages.','comment-guestbook')),

	'cgb_clist_child_order'           => array('type'    => 'radio',
	                                           'label'   => __('Comment list child order','comment-guestbook'),
	                                           'caption' => array('default' => 'Standard WP-discussion setting', 'asc' => 'Oldest child comments first', 'desc' => 'Newest child comments first'),
	                                           'desc'    => __('This option allows you to overwrite the standard order for all child comments for the guestbook pages.','comment-guestbook')),

	'cgb_clist_default_page'          => array('type'    => 'radio',
	                                           'label'   => __('Comment list default page','comment-guestbook'),
	                                           'caption' => array('default' => 'Standard WP-discussion setting', 'first' => 'First page', 'last' => 'Last page'),
	                                           'desc'    => __('This option allows you to overwrite the standard default page for the guestbook pages.','comment-guestbook')),

	'cgb_clist_show_all'              => array('type'    => 'checkbox',
	                                           'label'   => __('Show all comments','comment-guestbook'),
	                                           'caption' => __('Show comments of all posts and pages','comment-guestbook'),
	                                           'desc'    => __('Normally only the comments of the actual guestbook site are shown.<br />
	                                                            But with this option you can enable to show the comments of all posts and pages on the guestbook pages.<br />
	                                                            It is recommended to enable "Comment Adjustment" in Section "Comment html code" if you enable this option.<br />
	                                                            There you have the possibility to include a reference to the original page/post in the comment html code.')),

	'cgb_clist_num_pagination'        => array('type'    => 'checkbox',
	                                           'label'   => __('Numbered pagination links','comment-guestbook'),
	                                           'caption' => __('Create a numbered pagination navigation','comment-guestbook'),
	                                           'desc'    => __('Normally only a next and previous links are shown. But if this option is enabled a numbered list of all the comment pages is displayed.','comment-guestbook')),

	'cgb_clist_title'                 => array('type'    => 'text',
	                                           'label'   => __('Title for the comment list','comment-guestbook'),
	                                           'desc'    => __('With this option you can specify an additional title which will be displayed in front of the comment list.','comment-guestbook')),

	'cgb_clist_in_page_content'       => array('type'    => 'checkbox',
	                                           'label'   => __('Comment list in page content','comment-guestbook'),
	                                           'caption' => __('Show the comment list in the page content','comment-guestbook'),
	                                           'desc'    => __('If this option is enabled the comment list is displayed directly in the post/page content and will be removed from the comment area.<br />
	                                                            This can help you in some cases to display the comment list, for example if your theme does not have a comment area at all.<br />
	                                                            The comment list will be displayed instead of the shortcode, the comment form in the page section will be hidden and the comment form in the comment sections will be displayed before and/or after the comment list like specified in the comment form options.')),

	'cgb_comment_callback'            => array('type'    => 'text',
	                                           'label'   => __('Comment callback function','comment-guestbook'),
	                                           'desc'    => __('This option sets the name of comment callback function which outputs the html-code to view each comment.<br />
	                                                            You only require this function if "Guestbook comments adjustment" is enabled and "Comment adjustment" is disabled.<br />
	                                                            Normally this function is set through the selected theme. Comment Guestbook searches for the theme-function and uses this as default.<br />
	                                                            If the theme-function wasn´t found this field will be empty, then the WordPress internal functionality will be used.<br />
	                                                            If you want to insert the function of your theme manually, you can find the name normally in file "functions.php" of your theme.<br />
	                                                            Often it is called "themename_comment", e.g. "twentyeleven_comment" for twentyeleven theme.')),

	'cgb_clist_styles'                => array('type'    => 'textarea',
	                                           'rows'    => 6,
	                                           'label'   => __('Comment list styles','comment-guestbook'),
	                                           'desc'    => __('With this option you can specify custom css styles for the guestbook comment list.<br />
	                                                            Enter all required styles like you would do it in a css file, e.g.:<br />
	                                                            <code>ol.commentlist { list-style:none; }<br />&nbsp;ul.children { list-style-type:circle; }</code>')),
	// Comment html code
	'cgb_comment_adjust'              => array('type'    => 'checkbox',
	                                           'label'   => __('Comment adjustment','comment-guestbook'),
	                                           'caption' => __('Adjust the html-output of each comment','comment-guestbook'),
	                                           'desc'    => __('This option specifies if the comment html code should be replaced with the "Comment html code" below on the guestbook page.<br />
	                                                            If "Guestbook comments adjustment" in "General settings" is disabled this option has no effect.')),

	'cgb_comment_html'                => array('type'    => 'textarea',
	                                           'rows'    => '15',
	                                           'label'   => __('Comment html code','comment-guestbook'),
	                                           'desc'    => __('This option specifies the html code for each comment, if "Comment adjustment" is enabled.<br />
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
	                                                            Example: <code>if($is_comment_from_other_page && "0" == $comment->comment_parent) { echo \' \'.__(\'Link to page:\', $l10n_domain).\' \'.$other_page_link; }</code>')),
	// Message after new comment
	'cgb_cmessage_text'               => array('type'    => 'text',
	                                           'label'   => __('Message text','comment-guestbook'),
	                                           'desc'    => __('This option allows you to change the text for the message after a new comment.','comment-guestbook')),

	'cgb_cmessage_type'               => array('type'    => 'radio',
	                                           'label'   => __('Message type','comment-guestbook'),
	                                           'caption' => array('inline' => 'Show the message inline', 'overlay' => 'Show the message in overlay'),
	                                           'desc'    => __('This option allows to change the format of the message after a new comment.<br />
	                                                            With "inline" the message is shown directly below the comment in a div added via javascript.<br />
	                                                            With "overlay" the message is shown in an overlay div.<br />
	                                                            The message will be slided in with an animation and after a short time the message will be slided out.')),

	'cgb_cmessage_duration'           => array('type'    => 'text',
	                                           'label'   => __('Message duration','comment-guestbook'),
	                                           'desc'    => __('How long should the message after a new comment should be displayed?<br />
	                                                            Normally the message after a new comment will be removed after a certain time.<br />
	                                                            You can define this duration with in milliseconds.<br />
	                                                            Set the value to 0 if you do not want to hide the message.')),

	'cgb_cmessage_styles'             => array('type'    => 'textarea',
	                                           'label'   => __('Message styles','comment-guestbook'),
	                                           'desc'    => __('With this option you can define the css styles for the message after a new comment.<br />
	                                                            The given code will be used for the style attribute of the message surrounding div tag.')),
	// Comments in other pages/posts
	'cgb_page_add_cmessage'           => array('type'    => 'checkbox',
	                                           'label'   => __('Message after new comments','comment-guestbook'),
	                                           'caption' => __('Show a "Thank you" message after a new comment','comment-guestbook'),
	                                           'desc'    => __('If this option is enabled a message will be shown after a new comment was made.<br />
	                                                            There are many additional options availabe to change the message text and format in the "Message after new comment" section.')),

	'cgb_page_remove_mail'            => array('type'    => 'checkbox',
	                                           'label'   => __('Remove Email field','comment-guestbook'),
	                                           'caption' => __('Remove the Email field in comment forms','comment-guestbook'),
	                                           'desc'    => __('If this option is enabled the email field will be removed in comment forms.','comment-guestbook')),

	'cgb_page_remove_website'         => array('type'    => 'checkbox',
	                                           'label'   => __('Remove Website field','comment-guestbook'),
	                                           'caption' => __('Remove the Website url field in comment forms','comment-guestbook'),
	                                           'desc'    => __('If this option is enabled the website url field will be removed in comment forms.','comment-guestbook')),
);

$sections_helptexts = array(
	'general'        => array('caption' => __('General settings','comment-guestbook'),
	                          'desc'    => __('Some general settings for this plugin.','comment-guestbook')),
	'comment_form'   => array('caption' => __('Comment-form settings','comment-guestbook'),
	                          'desc'    => __('In this section you can find settings to modify the comment form.','comment-guestbook').'<br />
	                                           <strong>'.__('Attention','comment-guestbook').':</strong><br />
	                                           '.sprintf(__('If you want to change any option in this section you have to enable the option %1$s in %2$s first.','comment-guestbook'), '"'.$options_helptexts['cgb_adjust_output']['label'].'"', '"'.__('General settings','comment-guestbook').'"').'<br />
	                                           '.sprintf(__('Only the options %1$s, %2$s and all comment form modification options are working without it.','comment-guestbook'), '"'.$options_helptexts['cgb_form_in_page']['label'].'"', '"'.$options_helptexts['cgb_add_cmessage']['label'].'"')),
	'comment_list'   => array('caption' => __('Comment-list settings','comment-guestbook'),
	                          'desc'    => __('In this section you can find settings to modify the comments list.','comment-guestbook').'<br />
	                                           <strong>'.__('Attention','comment-guestbook').':</strong><br />
	                                           '.sprintf(__('If you want to change any option in this section you have to enable the option %1$s in %2$s first.','comment-guestbook'), '"'.$options_helptexts['cgb_adjust_output']['label'].'"', '"'.__('General settings','comment-guestbook').'"')),
	'comment_html'   => array('caption' => __('Comment html code','comment-guestbook'),
	                          'desc'    => __('In this section you can change the html code for the comment output in guestbook pages.','comment-guestbook')),
	'cmessage'       => array('caption' => __('Message after new comments','comment-guestbook'),
	                          'desc'    => __('In this section you can find settings to modify the message after a new comment.','comment-guestbook').'<br />
	                                           '.sprintf(__('You can enable the message in %1$s for the guestbook page.','comment-guestbook'), '"'.__('Comment-form settings','comment-guestbook').'"').'<br />
	                                           '.sprintf(__('This options are also valid for all other posts and pages if you enable the option %1$s in the section %2$s.','comment-guestbook'), '"'.$options_helptexts['cgb_page_add_cmessage']['label'].'"', '"'.__('Comments in other posts/pages','comment-guestbook').'"')),
	'page_comments'  => array('caption' => __('Comments in other posts/pages','comment-guestbook'),
	                          'desc'    => __('In this sections you can change the behavior of comments lists and forms in all other posts and pages of your website (exept the guestbook pages).','comment-guestbook').'<br />
	                                           '.__('If you want to change these settings also for guestbook comments please specify the same setting values in the other option tabs.','comment-guestbook'))
);
