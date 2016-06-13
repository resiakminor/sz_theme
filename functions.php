<?php

// functions.php template file

//header.php functions come first

define("THEME_DIR", get_template_directory_uri());
/*--- REMOVE GENERATOR META TAG ---*/
remove_action('wp_head', 'wp_generator');

// ENQUEUE STYLES
     
function enqueue_styles() {
     
    /** REGISTER style.css and otherstyles.css **/
    wp_register_style( 'style', THEME_DIR . '/style.css', array(), '1', 'all' );
    wp_enqueue_style( 'style' );
    wp_register_style( 'mason', THEME_DIR . '/css/mason.css', array('style'), '1', 'all' );
    wp_enqueue_style( 'mason' );
    wp_register_style( 'box', THEME_DIR . '/css/box.css', array('style','mason'), '1', 'all' );
    wp_enqueue_style( 'box' );     
    wp_register_style( 'bootstrap.min', THEME_DIR . '/css/bootstrap.min.css', array('style','mason','box'), '1', 'all' );
    wp_enqueue_style( 'bootstrap.min' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );

// ENQUEUE SCRIPTS
     
function enqueue_scripts() {
     
	/** REGISTER HTML5 script.js **/
    wp_register_script( 'bootstrap.min', THEME_DIR . '/javascript/bootstrap.min.js', array( 'jquery' ), '1', true );
    wp_enqueue_script( 'bootstrap.min' );
    wp_register_script( 'jquery.lightbox', THEME_DIR . '/javascript/jquery.lightbox.js', array( 'jquery','bootstrap.min' ), '1', true );
    wp_enqueue_script( 'jquery.lightbox' );     
    wp_register_script( 'box', THEME_DIR . '/javascript/box.js', array( 'jquery','bootstrap.min','jquery.lightbox' ), '1', true );
    wp_enqueue_script( 'box' );
    wp_register_script( 'masonry.pkgd.min', THEME_DIR . '/javascript/masonry.pkgd.min.js', array( 'jquery','bootstrap.min','jquery.lightbox','box' ), '1', true );
    wp_enqueue_script( 'masonry.pkgd.min' );
    wp_register_script( 'mason', THEME_DIR . '/javascript/mason.js', array( 'jquery','bootstrap.min','jquery.lightbox','box','masonry.pkgd.min.js' ), '1', true );
    wp_enqueue_script( 'mason' );
    wp_register_script( 'stick', THEME_DIR . '/javascript/stick.js', array( 'jquery' ), '1', true );
    wp_enqueue_script( 'stick' );
    wp_register_script( 'jquery.unveil', THEME_DIR . '/javascript/jquery.unveil.js', array( 'jquery' ), '1', false );
    wp_enqueue_script( 'jquery.unveil' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );

//end header.php stuff

// add google analytics to footer
function add_google_analytics() {
	echo '<script src="http://www.google-analytics.com/ga.js" type="text/javascript"></script>';
	echo '<script type="text/javascript">';
	echo 'var pageTracker = _gat._getTracker("UA-XXXXX-X");';
	echo 'pageTracker._trackPageview();';
	echo '</script>';
}
add_action('wp_footer', 'add_google_analytics');

// add a favicon to your 
function blog_favicon() {
	echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.get_bloginfo('wpurl').'/favicon.ico" />';
}
add_action('wp_head', 'blog_favicon');

// Enable thumbnails
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size(200, 200, true); // Normal post thumbnails

// Add custom menus
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

//remove category base from URL strucutre

function fix_slash( $string, $type )
{
global $wp_rewrite;
if ( $wp_rewrite->use_trailing_slashes == false )
{
    if ( $type != 'single' && $type != 'category' )
        return trailingslashit( $string );

    if ( $type == 'single' && ( strpos( $string, '.html/' ) !== false ) )
        return trailingslashit( $string );

    if ( $type == 'category' && ( strpos( $string, 'category' ) !== false ) )
    {
        $aa_g = str_replace( "/category/", "/", $string );
        return trailingslashit( $aa_g );
    }
    if ( $type == 'category' )
        return trailingslashit( $string );
}
return $string;
}

add_filter( 'user_trailingslashit', 'fix_slash', 55, 2 );

/*{
    function start_el(&$output, $item, $depth, $args)
    {
        global $wp_query;
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

        $class_names = $value = '';

        $classes = empty( $item->classes ) ? array() : (array) $item->classes;

        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
        $class_names = ' class="'. esc_attr( $class_names ) . '"';

        $output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';

        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

        $prepend = '<strong>';
        $append = '</strong>';
        $description  = ! empty( $item->description ) ? '<span>'.esc_attr( $item->description ).'</span>' : '';

        if($depth != 0)
        {
            $description = $append = $prepend = "";
           }

        $item_output = $args->before;
        $item_output .= '<a'. $attributes .'>';
        $item_output .= $args->link_before .$prepend.apply_filters( 'the_title', $item->title, $item->ID ).$append;
        $item_output .= $description.$args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
        }
} */

?>