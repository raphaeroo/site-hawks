<?php
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );

// add_filter( 'woocommerce_enqueue_styles', '__return_false' );
add_filter('show_admin_bar', '__return_false');
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size (280, 150);
remove_action('init', 'wp_admin_bar_init');

//update_option( 'siteurl', 'https://aes.com.br' );
//update_option( 'home', 'https://aes.com.br' );

function wordpress_pagination() {
	global $wp_query;

	$big = 999999999;

	echo paginate_links( array(
		'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
		'format' => '?paged=%#%',
		'current' => max( 1, get_query_var('paged') ),
		'total' => $wp_query->max_num_pages
	) );
}
function custom_mini_cart() {
    echo '<a href="#" class="dropdown-back" data-toggle="dropdown"> ';
    echo '<i class="fas fa-shopping-cart" aria-hidden="true"></i>';
    echo '<div class="basket-item-count" style="display: inline;">';
        echo '<span class="cart-items-count count">';
            echo WC()->cart->get_cart_contents_count();
        echo '</span>';
    echo '</div>';
    echo '</a>';
    echo '<ul class="dropdown-menu dropdown-menu-mini-cart">';
        echo '<li> <div class="widget_shopping_cart_content">';
                  woocommerce_mini_cart();
            echo '</div></li></ul>';

      }
add_shortcode( 'ana-mini-cart', 'custom_mini_cart' );


/* Menu */
function register_my_menu() {
	register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

/**
 * WP Bootstrap Navwalker
 *
 * @package WP-Bootstrap-Navwalker
 */

/*
 * Class Name: WP_Bootstrap_Navwalker
 * Plugin Name: WP Bootstrap Navwalker
 * Plugin URI:  https://github.com/wp-bootstrap/wp-bootstrap-navwalker
 * Description: A custom WordPress nav walker class to implement the Bootstrap 3 navigation style in a custom theme using the WordPress built in menu manager.
 * Author: Edward McIntyre - @twittem, WP Bootstrap
 * Version: 2.0.5
 * Author URI: https://github.com/wp-bootstrap
 * GitHub Plugin URI: https://github.com/wp-bootstrap/wp-bootstrap-navwalker
 * GitHub Branch: master
 * License: GPL-3.0+
 * License URI: https://www.gnu.org/licenses/gpl-3.0.txt
*/

/* Check if Class Exists. */
if ( ! class_exists( 'WP_Bootstrap_Navwalker' ) ) {
	/**
	 * WP_Bootstrap_Navwalker class.
	 *
	 * @extends Walker_Nav_Menu
	 */
	class WP_Bootstrap_Navwalker extends Walker_Nav_Menu {

		/**
		 * Start Level.
		 *
		 * @see Walker::start_lvl()
		 * @since 3.0.0
		 *
		 * @access public
		 * @param mixed $output Passed by reference. Used to append additional content.
		 * @param int   $depth (default: 0) Depth of page. Used for padding.
		 * @param array $args (default: array()) Arguments.
		 * @return void
		 */
		public function start_lvl( &$output, $depth = 0, $args = array() ) {
			$indent = str_repeat( "\t", $depth );
			$output .= "\n$indent<ul role=\"menu\" class=\" dropdown-menu\" >\n";
		}

		/**
		 * Start El.
		 *
		 * @see Walker::start_el()
		 * @since 3.0.0
		 *
		 * @access public
		 * @param mixed $output Passed by reference. Used to append additional content.
		 * @param mixed $item Menu item data object.
		 * @param int   $depth (default: 0) Depth of menu item. Used for padding.
		 * @param array $args (default: array()) Arguments.
		 * @param int   $id (default: 0) Menu item ID.
		 * @return void
		 */
		public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
			$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

			/**
			* Dividers, Headers or Disabled
			* =============================
			* Determine whether the item is a Divider, Header, Disabled or regular
			* menu item. To prevent errors we use the strcasecmp() function to so a
			* comparison that is not case sensitive. The strcasecmp() function returns
			* a 0 if the strings are equal.
		 	*/
			if ( 0 === strcasecmp( $item->attr_title, 'divider' ) && 1 === $depth ) {
				$output .= $indent . '<li role="presentation" class="divider">';
			} elseif ( 0 === strcasecmp( $item->title, 'divider' ) && 1 === $depth ) {
				$output .= $indent . '<li role="presentation" class="divider">';
			} elseif ( 0 === strcasecmp( $item->attr_title, 'dropdown-header' ) && 1 === $depth ) {
				$output .= $indent . '<li role="presentation" class="dropdown-header">' . esc_attr( $item->title );
			} elseif ( 0 === strcasecmp( $item->attr_title, 'disabled' ) ) {
				$output .= $indent . '<li role="presentation" class="disabled"><a href="#">' . esc_attr( $item->title ) . '</a>';
			} else {
				$class_names = $value = '';
				$classes = empty( $item->classes ) ? array() : (array) $item->classes;
				$classes[] = 'menu-item-' . $item->ID;
				$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
				if ( $args->has_children ) {
					$class_names .= ' dropdown'; }
					if ( in_array( 'current-menu-item', $classes, true ) ) {
						$class_names .= ' active'; }
						$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
						$id = apply_filters( 'nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args );
						$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';
						$output .= $indent . '<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"' . $id . $value . $class_names . '>';
						$atts = array();

						if ( empty( $item->attr_title ) ) {
							$atts['title']  = ! empty( $item->title )   ? strip_tags( $item->title ) : '';
						} else {
							$atts['title'] = $item->attr_title;
						}

						$atts['target'] = ! empty( $item->target )	? $item->target	: '';
						$atts['rel']    = ! empty( $item->xfn )		? $item->xfn	: '';
				// If item has_children add atts to a.
						if ( $args->has_children && 0 === $depth ) {
							$atts['href']   		= '#';
							$atts['data-toggle']	= 'dropdown';
							$atts['class']			= 'dropdown-toggle';
							$atts['aria-haspopup']	= 'true';
						} else {
							$atts['href'] = ! empty( $item->url ) ? $item->url : '';
						}
						$atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args );
						$attributes = '';
						foreach ( $atts as $attr => $value ) {
							if ( ! empty( $value ) ) {
								$value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
								$attributes .= ' ' . $attr . '="' . $value . '"';
							}
						}
						$item_output = $args->before;

				/*
				 * Glyphicons/Font-Awesome
				 * ===========
				 * Since the the menu item is NOT a Divider or Header we check the see
				 * if there is a value in the attr_title property. If the attr_title
				 * property is NOT null we apply it as the class name for the glyphicon.
				 */
				if ( ! empty( $item->attr_title ) ) :
					$pos = strpos( esc_attr( $item->attr_title ), 'glyphicon' );
					if ( false !== $pos ) :
						$item_output .= '<a' . $attributes . '><span class="glyphicon ' . esc_attr( $item->attr_title ) . '" aria-hidden="true"></span>&nbsp;';
					else :
						$item_output .= '<a' . $attributes . '><i class="fa ' . esc_attr( $item->attr_title ) . '" aria-hidden="true"></i>&nbsp;';
					endif;
				else :
					$item_output .= '<a' . $attributes . '>';
				endif;
				$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
				$item_output .= ( $args->has_children && 0 === $depth ) ? ' <span class="caret"></span></a>' : '</a>';
				$item_output .= $args->after;
				$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
			}
		}

		/**
		 * Traverse elements to create list from elements.
		 *
		 * Display one element if the element doesn't have any children otherwise,
		 * display the element and its children. Will only traverse up to the max
		 * depth and no ignore elements under that depth.
		 *
		 * This method shouldn't be called directly, use the walk() method instead.
		 *
		 * @see Walker::start_el()
		 * @since 2.5.0
		 *
		 * @access public
		 * @param mixed $element Data object.
		 * @param mixed $children_elements List of elements to continue traversing.
		 * @param mixed $max_depth Max depth to traverse.
		 * @param mixed $depth Depth of current element.
		 * @param mixed $args Arguments.
		 * @param mixed $output Passed by reference. Used to append additional content.
		 * @return null Null on failure with no changes to parameters.
		 */
		public function display_element( $element, &$children_elements, $max_depth, $depth, $args, &$output ) {
			if ( ! $element ) {
				return; }
				$id_field = $this->db_fields['id'];
			// Display this element.
				if ( is_object( $args[0] ) ) {
					$args[0]->has_children = ! empty( $children_elements[ $element->$id_field ] ); }
					parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
				}

		/**
		 * Menu Fallback
		 * =============
		 * If this function is assigned to the wp_nav_menu's fallback_cb variable
		 * and a menu has not been assigned to the theme location in the WordPress
		 * menu manager the function with display nothing to a non-logged in user,
		 * and will add a link to the WordPress menu manager if logged in as an admin.
		 *
		 * @param array $args passed from the wp_nav_menu function.
		 */
		public static function fallback( $args ) {
			if ( current_user_can( 'edit_theme_options' ) ) {

				/* Get Arguments. */
				$container = $args['container'];
				$container_id = $args['container_id'];
				$container_class = $args['container_class'];
				$menu_class = $args['menu_class'];
				$menu_id = $args['menu_id'];

				if ( $container ) {
					echo '<' . esc_attr( $container );
					if ( $container_id ) {
						echo ' id="' . esc_attr( $container_id ) . '"';
					}
					if ( $container_class ) {
						echo ' class="' . sanitize_html_class( $container_class ) . '"'; }
						echo '>';
					}
					echo '<ul';
					if ( $menu_id ) {
						echo ' id="' . esc_attr( $menu_id ) . '"'; }
						if ( $menu_class ) {
							echo ' class="' . esc_attr( $menu_class ) . '"'; }
							echo '>';
							echo '<li><a href="' . esc_url( admin_url( 'nav-menus.php' ) ) . '" title="">' . esc_attr( 'Add a menu', '' ) . '</a></li>';
							echo '</ul>';
							if ( $container ) {
								echo '</' . esc_attr( $container ) . '>'; }
							}
						}
					}
				}



/*
* Creating a function to create our CPT
*/


add_action( 'init', 'menu_social_media' );

function menu_social_media() {
	register_nav_menu( 'menu-social-media', __( 'Menu das Redes Sociais' ) );
}
function excerpt( $limit ) {
$excerpt = explode(' ', get_the_excerpt(), $limit);
if (count($excerpt)>=$limit) {
array_pop($excerpt);
$excerpt = implode(" ",$excerpt).'...';
} else {
$excerpt = implode(" ",$excerpt);
}
$excerpt = preg_replace('`[[^]]*]`','',$excerpt);
return $excerpt;
}
function content($limit) {
$content = explode(' ', get_the_content(), $limit);
if (count($content)>=$limit) {
array_pop($content);
$content = implode(" ",$content).'...';
} else {
$content = implode(" ",$content);
}
$content = preg_replace('/[.+]/','', $content);
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]&gt;', $content);
return $content;
}

/* POST TYPE BLOG */
function custom_post_type() {

// Set UI labels for Custom Post Type
  $labels = array(
    'name'                => _x( 'blog', 'Post Type General Name', 'twentythirteen' ),
    'singular_name'       => _x( 'blog', 'Post Type Singular Name', 'twentythirteen' ),
    'menu_name'           => __( 'blog', 'twentythirteen' ),
    'parent_item_colon'   => __( 'blog Relacionado', 'twentythirteen' ),
    'all_items'           => __( 'Todos os blog', 'twentythirteen' ),
    'view_item'           => __( 'Ver blog', 'twentythirteen' ),
    'add_new_item'        => __( 'Adicionar novo blog', 'twentythirteen' ),
    'add_new'             => __( 'Adicionar novo', 'twentythirteen' ),
    'edit_item'           => __( 'Editar blog', 'twentythirteen' ),
    'update_item'         => __( 'Atualizar blog', 'twentythirteen' ),
    'search_items'        => __( 'Buscar por blog', 'twentythirteen' ),
    'not_found'           => __( 'Nenhum Segmento encontrado', 'twentythirteen' ),
    'not_found_in_trash'  => __( 'Nenhum Segmento encontrado na lixeira', 'twentythirteen' ),
  );


// Set other options for Custom Post Type

  $args = array(
    'label'               => __( 'blog', 'twentythirteen' ),
    'description'         => __( 'blog news and reviews', 'twentythirteen' ),
    'labels'              => $labels,
    // Features this CPT supports in Post Editor
    'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
    // You can associate this CPT with a taxonomy or custom taxonomy.
    'taxonomies'          => array( 'genres' ),
    /* A hierarchical CPT is like Pages and can have
    * Parent and child items. A non-hierarchical CPT
    * is like Posts.
    */
    'hierarchical'        => false,
    'menu_icon'			      => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 5,
    'can_export'          => true,
    'has_archive'         => false,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
 // This is where we add taxonomies to our CPT
    'taxonomies'          => array( 'category' ),
  );

  // Registering your Custom Post Type
  register_post_type( 'blog', $args );

}

//Registrar uma taxonomia nese post type
register_taxonomy(
  "categorias",
      "BLOG",
      array(
        "label" => "Categorias",
            "singular_label" => "Categoria",
            "rewrite" => true,
            "hierarchical" => true
  )
);

add_action( 'init', 'custom_post_type', 0 );

/* POST TYPE BLOG FIM */

/* POST TYPE SERVICOS */
function custom_post_type_serv() {

// Set UI labels for Custom Post Type
  $labels = array(
    'name'                => _x( 'Serviços', 'Post Type General Name', 'twentythirteen' ),
    'singular_name'       => _x( 'Serviço', 'Post Type Singular Name', 'twentythirteen' ),
    'menu_name'           => __( 'Serviços', 'twentythirteen' ),
    'parent_item_colon'   => __( 'Serviços Relacionado', 'twentythirteen' ),
    'all_items'           => __( 'Todos os Serviços', 'twentythirteen' ),
    'view_item'           => __( 'Ver Serviços', 'twentythirteen' ),
    'add_new_item'        => __( 'Adicionar novo Serviços', 'twentythirteen' ),
    'add_new'             => __( 'Adicionar novo', 'twentythirteen' ),
    'edit_item'           => __( 'Editar Serviços', 'twentythirteen' ),
    'update_item'         => __( 'Atualizar Serviços', 'twentythirteen' ),
    'search_items'        => __( 'Buscar por Serviços', 'twentythirteen' ),
    'not_found'           => __( 'Nenhum Segmento encontrado', 'twentythirteen' ),
    'not_found_in_trash'  => __( 'Nenhum Segmento encontrado na lixeira', 'twentythirteen' ),
  );


// Set other options for Custom Post Type

  $args = array(
    'label'               => __( 'Serviços', 'twentythirteen' ),
    'description'         => __( 'Serviços news and reviews', 'twentythirteen' ),
    'labels'              => $labels,
    // Features this CPT supports in Post Editor
    'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
    // You can associate this CPT with a taxonomy or custom taxonomy.
    'taxonomies'          => array( 'genres' ),
    /* A hierarchical CPT is like Pages and can have
    * Parent and child items. A non-hierarchical CPT
    * is like Posts.
    */
    'hierarchical'        => false,
    'menu_icon'			      => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 5,
    'can_export'          => true,
    'has_archive'         => false,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
 // This is where we add taxonomies to our CPT
    'taxonomies'          => array( 'category' ),
  );

  // Registering your Custom Post Type
  register_post_type( 'servicos', $args );

}

//Registrar uma taxonomia nese post type
register_taxonomy(
  "categorias",
      "Serviços",
      array(
        "label" => "Categorias",
            "singular_label" => "Categoria",
            "rewrite" => true,
            "hierarchical" => true
  )
);

add_action( 'init', 'custom_post_type_serv', 0 );

/* POST TYPE SERVICOS FIM */
