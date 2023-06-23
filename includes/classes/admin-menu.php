<?php
/**
 * Hooks for adding a Top Level Admin Menu page
 * where plugins can add a plugin settings
 * page, that is related to this theme/app
 *
 * @package [THEME_PASCALCASED]
 */

namespace [THEME_PASCALCASED]\Theme;

class AdminMenu {

	/**
	 * Constructor
	 */
	public function __construct() {
		add_action( 'admin_menu', [ $this, 'add_menu' ] );
		add_action( 'admin_menu', [ $this, 'remove_sub_menu' ], 50 );
	}

	/**
	 * Add the admin menu page
	 *
	 * @return void
	 */
	public function add_menu() {
		$text             = THEMEDOMAIN;
		$text_capitalized = ucfirst( THEMEDOMAIN );
		add_menu_page(
			$text_capitalized,
			$text_capitalized,
			'manage_options',
			sanitize_key( $text ),
			[ $this, 'admin_menu_page' ],
			'dashicons-admin-appearance',
			99
		);
	}

	/**
	 * Remove the first subpage
	 *
	 * This removes the first subpage,
	 * as this page is autogenerated and
	 * has no content.
	 *
	 * @return void
	 */
	public function remove_sub_menu() {
		global $submenu, $menu, $admin_page_hooks, $_registered_pages, $_parent_pages;
		if ( isset( $submenu[ THEMEDOMAIN ] ) && isset( $submenu[ THEMEDOMAIN ][0] ) ) {
			unset( $submenu[ THEMEDOMAIN ][0] );
		}

		if ( ! isset( $submenu[ THEMEDOMAIN ] ) || is_null( $submenu[ THEMEDOMAIN ] ) ) {
			remove_menu_page( THEMEDOMAIN );
		}

	}

	/**
	 * Dummy content for the admin menu page,
	 * which is required, but the page is removed.
	 *
	 * @return void
	 */
	public function admin_menu_page() {
		echo 'Admin page';
	}

}