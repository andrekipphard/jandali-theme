<?php
/**
 * augusta_beauty functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package augusta_beauty
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function augusta_beauty_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on augusta_beauty, use a find and replace
		* to change 'augusta_beauty' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'augusta_beauty', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'augusta_beauty' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'augusta_beauty_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'augusta_beauty_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function augusta_beauty_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'augusta_beauty_content_width', 640 );
}
add_action( 'after_setup_theme', 'augusta_beauty_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function augusta_beauty_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'augusta_beauty' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'augusta_beauty' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'augusta_beauty_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function augusta_beauty_scripts() {
	wp_enqueue_style( 'augusta_beauty-style', get_template_directory_uri(). '/assets/css/main.css', array(), _S_VERSION );
	//wp_enqueue_style( 'augusta_beauty-style', get_stylesheet_uri(), array(), _S_VERSION );
	//wp_style_add_data( 'augusta_beauty-style', 'rtl', 'replace' );

	wp_enqueue_script( 'augusta_beauty-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'augusta_beauty/header-mobile-sub-menu', get_template_directory_uri(). '/assets/js/header-mobile-sub-menu.js', array('jquery'), _S_VERSION );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'augusta_beauty_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

require_once get_template_directory() . '/inc/acf.php';

function form_submit_action() {
	// You can now use $_GET/$_POST variables depending on what method you used in your form
	// In this case we are using method post
	$name = sanitize_text_field($_POST['nameInput']);
	$phone = sanitize_text_field($_POST['phoneInput']);
	$email = sanitize_email($_POST['emailInput']);
	$message = sanitize_text_field($_POST['messageInput']);
	if( empty($name) && empty($email) && empty($message) && empty($subject)){
		$name = sanitize_text_field($_POST['nameqay']);
		$phone = sanitize_text_field($_POST['phoneedc']);
		$email = sanitize_email($_POST['emailwsx']);
		$message = sanitize_text_field($_POST['messagerfv']);
		$datenschutz = sanitize_text_field($_POST['datenschutztgb']);
		
		// Then do the processing here like create new post/user, update new post/user , etc.
		// But on this example im gonna show you how send an email, create your own custom html body format.
		
		// Send to admin
		$to = get_bloginfo('admin_email'); // or 'sendee@email.com' to specify email
		// Email subject
		$subject = 'Neue Kontaktanfrage';
		$subject_customer = 'Ihre Kontaktanfrage ist bei uns eingegangen';
		// Email body/content (tricky part)
		/* Instead of:
			$body = '<div>
						<p>'. $first_name .'</p>
					</div>'; 
		*/
		// We can create a custom function with the post fields as your attributes
		$body = my_email_body_function($name,$email, $phone,$message,$datenschutz);
		$body_customer = my_email_body_function_customer($name,$email, $phone,$message,$datenschutz);
		$headers = array('Content-Type: text/html; charset=UTF-8');
		wp_mail( $to, $subject, $body, $headers );
		wp_mail( $email, $subject_customer, $body_customer, $headers);
		
		// Then redirect to desired page
		$redirect = add_query_arg ('kontaktformular', 'gesendet', '/#kontakt');
		wp_redirect($redirect);
		exit;
		//wp_redirect(home_url('/kontakt'));
	}
	else{
		exit;
	}
}
// Necessary action hooks
// Use our specific action form_submit_action to process the data related to our request
add_action( 'admin_post_nopriv_form_submit_action', 'form_submit_action' );
add_action( 'admin_post_form_submit_action', 'form_submit_action' );
  
// Email body function declaration
function my_email_body_function($name,$email,$phone,$message,$datenschutz) {
ob_start(); // We have to turn on output buffering. VERY IMPORTANT! or else wp_mail() wont work 
// Then setup your email body using the postfields from the attritbutes passed on. ?>
<table style="width:100%; border-collapse: collapse;">
<tr>
	<th style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Name:</th>
	<th style="border: 1px solid #dddddd;text-align: left;padding: 8px;"><?php echo $name; ?></th>
</tr>
<tr>
	<th style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Telefonnummer:</th>
	<th style="border: 1px solid #dddddd;text-align: left;padding: 8px;"><?php echo $phone; ?></th>
</tr>
<tr>
	<th style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Email:</th>
	<th style="border: 1px solid #dddddd;text-align: left;padding: 8px;"><?php echo $email; ?></th>
</tr>
<tr>
	<th style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Nachricht oder Kommentar:</th>
	<th style="border: 1px solid #dddddd;text-align: left;padding: 8px;"><?php echo $message; ?></th>
</tr>
	</table>

<?php 
return ob_get_contents();
ob_get_clean();
}
  
function my_email_body_function_customer($name,$email,$phone,$message,$datenschutz) {
	ob_start(); // We have to turn on output buffering. VERY IMPORTANT! or else wp_mail() wont work 
	// Then setup your email body using the postfields from the attritbutes passed on. ?>
	Hallo, <?= $name;?><br><br>
	vielen Dank für Ihre Kontaktanfrage.<br><br>
	Wir bearbeiten diese umgehend und melden uns anschließend bei Ihnen zurück.
	
	<?php 
	return ob_get_contents();
	ob_get_clean();
}

// breadcrumb
function nav_breadcrumb() {
 
 $delimiter = '<div class="mx-1">&rsaquo;</div>';
 $home = 'Startseite'; 
 $before = '<span class="current-page">'; 
 $after = '</span>'; 
 
 if ( !is_home() && !is_front_page() || is_paged() ) {
 
 echo '<nav class="breadcrumb">';
 
 global $post;
 $homeLink = get_bloginfo('url');
 echo '<a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ';
 
 if ( is_category()) {
 global $wp_query;
 $cat_obj = $wp_query->get_queried_object();
 $thisCat = $cat_obj->term_id;
 $thisCat = get_category($thisCat);
 $parentCat = get_category($thisCat->parent);
 if ($thisCat->parent != 0) echo(get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' '));
 echo $before . single_cat_title('', false) . $after;
 
 } elseif ( is_day() ) {
 echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
 echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
 echo $before . get_the_time('d') . $after;
 
 } elseif ( is_month() ) {
 echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
 echo $before . get_the_time('F') . $after;
 
 } elseif ( is_year() ) {
 echo $before . get_the_time('Y') . $after;
 
 } elseif ( is_single() && !is_attachment() ) {
 if ( get_post_type() != 'post' ) {
 $post_type = get_post_type_object(get_post_type());
 $slug = $post_type->rewrite;
 echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a> ' . $delimiter . ' ';
 echo $before . get_the_title() . $after;
 } else {
 $cat = get_the_category(); $cat = $cat[0];
 echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
 echo $before . get_the_title() . $after;
 }
 
 } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
 $post_type = get_post_type_object(get_post_type());
 echo $before . $post_type->labels->singular_name . $after;
 

 } elseif ( is_attachment() ) {
 $parent = get_post($post->post_parent);
 $cat = get_the_category($parent->ID); $cat = $cat[0];
 echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
 echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a> ' . $delimiter . ' ';
 echo $before . get_the_title() . $after;
 
 } elseif ( is_page() && !$post->post_parent ) {
 echo $before . get_the_title() . $after;
 
 } elseif ( is_page() && $post->post_parent ) {
 $parent_id = $post->post_parent;
 $breadcrumbs = array();
 while ($parent_id) {
 $page = get_page($parent_id);
 $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
 $parent_id = $page->post_parent;
 }
 $breadcrumbs = array_reverse($breadcrumbs);
 foreach ($breadcrumbs as $crumb) echo $crumb . ' ' . $delimiter . ' ';
 echo $before . get_the_title() . $after;
 
 } elseif ( is_search() ) {
 echo $before . 'Ergebnisse für Ihre Suche nach "' . get_search_query() . '"' . $after;
 
 } elseif ( is_tag() ) {
 echo $before . 'Beiträge mit dem Schlagwort "' . single_tag_title('', false) . '"' . $after;

 } elseif ( is_404() ) {
 echo $before . 'Fehler 404' . $after;
 }
 
 if ( get_query_var('paged') ) {
 if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
 echo ': ' . __('Seite') . ' ' . get_query_var('paged');
 if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
 }
 
 echo '</nav>';
 
 } 
} 

/*require 'vendor/autoload.php'; // Lädt die scssphp-Klasse

// Pfad zur SCSS-Datei und zur CSS-Datei
$scssFile = get_template_directory_uri(). 'assets/css/theme-variables.scss';
$cssFile = get_template_directory_uri(). 'assets/css/main.css';

// Erstelle den scssphp-Compiler und verarbeite die SCSS-Datei
$scss = new \ScssPhp\ScssPhp\Compiler();
$result = $scss->compile(file_get_contents($scssFile));

// Schreibe das Ergebnis in die CSS-Datei
file_put_contents($cssFile, $result);*/

