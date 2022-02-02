function kepchyk_style_frontend() {
     wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('styles', get_stylesheet_directory_uri() . '/css/style.css');
}
 
add_action('wp_enqueue_scripts', 'kepchyk_style_frontend');
function kepchyk_include_myscript(){
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', '', '1.0', false);
     wp_enqueue_script('bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', '', '1.0', false);
}
 
add_action('wp_enqueue_scripts', 'kepchyk_include_myscript');

if (function_exists('register_sidebar'))
register_sidebar(array(
    'before_widget' => '<div class="card my-4 widget">',
    'after_widget'  => '</div></div>',
    'before_title'  => '<h5 class="card-header">',
    'after_title'   => '</h5><div class="card-body">',
));