<?php
/*
Plugin Name: Darknk
Description: Plugin del sitio 
Version: 1.0
Author: Carlos Rafael
License: GPLv2 or later
*/

if ( !defined( 'ABSPATH' ) ) {
  exit;
}

function darknk_carousel_register_front(){
  wp_register_style( 'ce-app-style',  plugin_dir_url( __FILE__ ) . 'css/app.css' );

  wp_register_script( 'ce-app-js',  plugin_dir_url( __FILE__ ) . 'js/app.js' );
}

function darknk_carousel_enqueue_front(){
  wp_enqueue_style( 'ce-app-style' );
  
  wp_enqueue_script( 'ce-app-js' );
}

add_action( 'wp_enqueue_scripts', 'darknk_carousel_register_front' );


function darknk_carousel( $atts, $content = null ) {

  $a = shortcode_atts( array(
     'post_type' => 'profile',
     'posts_per_page' => '5',
     'category_name' => 'women'
  ), $atts );
  
  ob_start();
  
  $args = array( 
     'post_type' => $a['post_type'],
     'posts_per_page' => $a['posts_per_page'],
     'tax_query' => array(
        array(
            'taxonomy' => 'pl-categs',
            'field'    => 'slug',
            'terms'    => $a['category_name'],
        ),
    )
  );
     
  $posts_query = new WP_Query;
  $posts_query->query( $args );
  if ($posts_query->have_posts()) {
     ?>
      <div class="ce-carousel">
        <?php
          while($posts_query->have_posts()){
            $posts_query->the_post();?>
            <article class="ce-slide">

                <h1 class="title"><?php the_title();?></h1>

                <?php if (has_post_thumbnail()): ?>
                  <div class="ce-slide-img" style="background: center / cover no-repeat url(<?php the_post_thumbnail_url('large');?>)">
                  </div>
                <?php endif ?>
                <p class="excerpt"><?php  the_excerpt() ?></p>
                <a href="<?php the_permalink();?>" class="ce-read-more">View more</a>

            </article>

        <?php }
          wp_reset_postdata();
        ?>
          </div>
        <?php
     /* Get the buffered content into a var */
     $news = ob_get_contents();

     /* Clean buffer */
     ob_end_clean();
     return $news;
  }else{
     return 'No posts found';
  }
}

add_shortcode( 'darknk_carousel', 'darknk_carousel' );
