<?php
if(!defined('ABSPATH')) {
	exit;
}

require_once(CGB_PATH.'includes/options.php');

// This class handles all available admin pages
class CGB_Admin {
	private static $instance;
	private $options;

	private function __construct() {
		$this->options = &CGB_Options::get_instance();
	}

	public static function &get_instance() {
		// Create class instance if required
		if(!isset(self::$instance)) {
			self::$instance = new CGB_Admin();
		}
		// Return class instance
		return self::$instance;
	}

	public function init_admin_page() {
		// Register actions
		add_action('admin_menu', array(&$this, 'register_pages'));
		add_action('plugins_loaded', array(&$this->options, 'version_upgrade'));
	}

	/**
	 * Add and register all admin pages in the admin menu
	 */
	public function register_pages() {
		$page = add_submenu_page('edit-comments.php', 'About Comment Guestbook', 'About Guestbook', 'edit_posts', 'cgb_admin_main', array(&$this, 'show_about_page'));
		add_action('admin_print_scripts-'.$page, array(&$this, 'embed_about_scripts'));
		$page = add_submenu_page('options-general.php', 'Comment Guestbook Settings', 'Guestbook', 'manage_options', 'cgb_admin_options', array(&$this, 'show_settings_page'));
		add_action('admin_print_scripts-'.$page, array(&$this, 'embed_settings_scripts'));
	}

	public function show_about_page() {
		require_once(CGB_PATH.'admin/includes/admin-about.php');
		CGB_Admin_About::get_instance()->show_about();
	}

	public function show_settings_page() {
		require_once(CGB_PATH.'admin/includes/admin-settings.php');
		CGB_Admin_Settings::get_instance()->show_settings();
	}

	public function embed_about_scripts() {
		wp_enqueue_style('cgb_admin_about', CGB_URL.'admin/css/admin_about.css');
	}

	public function embed_settings_scripts() {
		wp_enqueue_style('cgb_admin_settings', CGB_URL.'admin/css/admin_settings.css');
	}
}
?>
