<?php
	// Load jQuery
	if ( !is_admin() ) {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"), false);
	   wp_enqueue_script('jquery');
	}

	// Declare sidebar widget zone
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }

	// Declare footer widget zone
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Footer Widgets',
    		'id'   => 'footer-widgets',
    		'description'   => 'These are widgets for the footer.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }

    add_theme_support( 'post-thumbnails' ); 

    function excerpt($limit) {
          $excerpt = explode(' ', get_the_excerpt(), $limit);
          if (count($excerpt)>=$limit) {
            array_pop($excerpt);
            $excerpt = implode(" ",$excerpt).' &hellip;';
          } else {
            $excerpt = implode(" ",$excerpt);
          } 
          $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
          $link = get_the_permalink();
          $excerpt .= ' <a href="' . $link . '">Read More &rarr;</a>';
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
          $content = preg_replace('/\[.+\]/','', $content);
          $content = apply_filters('the_content', $content); 
          $content = str_replace(']]>', ']]&gt;', $content);
          return $content;
        }    

?>