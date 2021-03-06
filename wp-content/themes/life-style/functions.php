<?php
add_action('wp_head','pluginname_ajaxurl');
function pluginname_ajaxurl() {?>
    <script type="text/javascript">
        var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
    </script>
<?php }
/**
 * Life Style functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Life_Style
 */

if ( ! function_exists( 'life_style_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function life_style_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Life Style, use a find and replace
	 * to change 'life-style' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'life-style', get_template_directory() . '/languages' );

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
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'life-style' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'life_style_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'life_style_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function life_style_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'life_style_content_width', 640 );
}
add_action( 'after_setup_theme', 'life_style_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function life_style_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'life-style' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'life-style' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'life_style_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function life_style_scripts() {
	wp_enqueue_style( 'life-style-style', get_template_directory_uri() . '/css/style.css');
	wp_enqueue_style( 'owl-animate', get_template_directory_uri() . '/js/owlcarousel/assets/animate.css');
	wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/js/owlcarousel/assets/owl.carousel.css');

    wp_enqueue_script('fontawesome', 'https://use.fontawesome.com/4fc20b1625.js', array(), '20120207', true);
    wp_enqueue_script('lifejquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', true);

	wp_enqueue_script( 'life-style-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'life-style-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script( 'life-site', get_template_directory_uri() . '/js/site.js', array(), '20151215', true );

	wp_enqueue_script( 'owl-carousel-js', get_template_directory_uri() . '/js/owlcarousel/owl.carousel.min.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'life_style_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


function add_slug_body_class($classes)
{
    global $post;
    if (isset($post)) {
        $classes[] = $post->post_name;
    }
    return $classes;
}

add_filter('body_class', 'add_slug_body_class');

add_action('init', 'custom_post_type');
function custom_post_type()
{

    register_post_type('blog',
        array(
            'public' => true,
            'exclude_from_search' => false,
            'menu_position' => 3,
            'has_archive' => false,
            'rewrite' => true,
            'hierarchical' => true,
            'taxonomies' => array('post_tag'),
            'show_in_nav_menus' => true,
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'revisions'),
            'labels' => array(
                'name' => __('Blog'),
                'singular_name' => __('Blog')
            )
        )
    );
}

add_action('init', 'create_topics_hierarchical_taxonomy', 0);
function create_topics_hierarchical_taxonomy()
{

// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI

    register_taxonomy(
        'blog_category',
        'blog',
        array(
            'hierarchical' => true,
            'public' => true,
            'label' => __('Blog Category'),
            'sort' => true,
            'args' => array('orderby' => 'term_order'),
            'rewrite' => array('slug' => 'blog_category'),
            'query_var' => 'blog_category',
            'required' => true,
            //'single_value' => true
        )
    );

}




add_action('wp_ajax_nopriv_get_more_blogs', 'get_more_blogs');
add_action('wp_ajax_get_more_blogs', 'get_more_blogs');

function get_more_blogs()
{
    $count = $_REQUEST['count'];
   $category =$_REQUEST['category'];
    $type = 'blog';
    $args=array(
        'post_type' => $type,
        'post_status' => 'publish',
        'posts_per_page' => 3,
        'offset' => $count,
        'tax_query' 			=> array(
            array(
                'taxonomy' 		=> 'blog_category',
                'terms' 		=> $category,
                'field' 		=> 'slug',
                'operator' 		=> 'IN'
            )
        )
    );
    $my_query = null;
    $my_query = new WP_Query($args);
    if( $my_query->have_posts() ) {
        $i = 1;
        $class = '';

        while ($my_query->have_posts()) : $my_query->the_post();
            if($i == 2) {
                $class = 'center';
            }else {
                $class = '';
            }
            ?>
            <div class="blog-item <?= $class?>">
                <a href="<?= esc_url(get_permalink()) ?>" class="permalink">
                    <?php the_post_thumbnail()?>
                    <div class="box">
                        <div class="title"><?php the_title()?></div>
                        <div class="date"><?php the_time('d.m.y G:i:s'); ?></div>
                        <?php $summary = get_field('post_short_description');?>
                        <div class="short-description"><?= substr($summary,0 , 120) . '...' ;?></div>
                        <div class="read-more">read more</div>
                        <div class="clear"></div>
                    </div>
                </a>
            </div>
            <?php if($i==3){
                $i = 0;
                $class = '';
            }
            $i++;
        endwhile;
    }

    die();
    //wp_reset_query();  // Restore global post data stomped by the_post().
}