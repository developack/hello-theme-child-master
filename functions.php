<?php
/**
 * Theme functions and definitions.
 *
 * For additional information on potential customization options,
 * read the developers' documentation:
 *
 * https://developers.elementor.com/docs/hello-elementor-theme/
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define( 'HELLO_ELEMENTOR_CHILD_VERSION', '2.0.0' );

/**
 * Load child theme scripts & styles.
 *
 * @return void
 */
function hello_elementor_child_scripts_styles() {

	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		HELLO_ELEMENTOR_CHILD_VERSION
	);

}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_scripts_styles', 20 );


function theme_asstes() {
	wp_enqueue_style('tailwind', get_stylesheet_directory_uri() . '/src/output.css', [], filemtime(get_stylesheet_directory() . '/src/output.css'));
	wp_enqueue_script('app', get_stylesheet_directory_uri() . '/public/js/app.js', [], filemtime(get_stylesheet_directory() . '/public/js/app.js'));
	wp_dequeue_style('hello-elementor');
    wp_deregister_style('hello-elementor');

	wp_dequeue_style('hello-elementor-theme-style');
	wp_deregister_style('hello-elementor-theme-style');
}
add_action('wp_enqueue_scripts', 'theme_asstes', 999);


require_once get_stylesheet_directory()."/shortcodes/home.php";
require_once get_stylesheet_directory()."/shortcodes/pricing.php";
require_once get_stylesheet_directory()."/shortcodes/login.php";
require_once get_stylesheet_directory()."/shortcodes/register.php";
require_once get_stylesheet_directory()."/shortcodes/features.php";



function add_theme_script() {
	?>
	<script>	
		(function () {
		const theme = localStorage.getItem('theme') || 'system';
		const isDark =
			theme === 'dark' ||
			(theme === 'system' &&
			window.matchMedia('(prefers-color-scheme: dark)').matches);
		
		document.documentElement.classList.toggle('dark', isDark);
		})();
	</script>
	<?php
	}
	add_action('wp_head', 'add_theme_script');