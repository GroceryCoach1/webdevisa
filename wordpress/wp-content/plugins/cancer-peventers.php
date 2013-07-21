<?php

/*
Plugin Name: Taxonomies
Description: CancerPreventers
*/

/* Start Adding Functions Below this Line */




add_action( 'init', 'create_my_taxonomies', 0 );
function create_my_taxonomies() {
    register_taxonomy(
        'movie_reviews_movie_genre',
        'movie_reviews',
        array(
            'labels' => array(
                'name' => 'Movie Genre',
                'add_new_item' => 'Add New Movie Genre',
                'new_item_name' => "New Movie Type Genre"
            ),
            'show_ui' => true,
            'show_tagcloud' => false,
            'hierarchical' => true,

        )
    );
}

 add_filter( 'manage_edit-movie_reviews_columns', 'my_columns' );

function my_columns( $columns ) {
    $columns['movie_reviews_director'] = 'Director';
    $columns['movie_reviews_rating'] = 'Rating';
    unset( $columns['comments'] );
    return $columns;
}
add_action( 'manage_posts_custom_column', 'populate_columns' );


function populate_columns( $column ) {
    if ( 'movie_reviews_director' == $column ) {
        $movie_director = esc_html( get_post_meta( get_the_ID(), 'movie_director', true ) );
        echo $movie_director;
    }
    elseif ( 'movie_reviews_rating' == $column ) {
        $movie_rating = get_post_meta( get_the_ID(), 'movie_rating', true );
        echo $movie_rating . ' stars';
    }
}


add_filter( 'manage_edit-movie_reviews_sortable_columns', 'sort_me' );



function sort_me( $columns ) {
    $columns['movie_reviews_director'] = 'movie_reviews_director';
    $columns['movie_reviews_rating'] = 'movie_reviews_rating';
 
    return $columns;
}



add_filter( 'request', 'column_ordering' );
 
add_filter( 'request', 'column_orderby' );
 
function column_orderby ( $vars ) {
    if ( !is_admin() )
        return $vars;
    if ( isset( $vars['orderby'] ) && 'movie_reviews_director' == $vars['orderby'] ) {
        $vars = array_merge( $vars, array( 'meta_key' => 'movie_director', 'orderby' => 'meta_value' ) );
    }
    elseif ( isset( $vars['orderby'] ) && 'movie_reviews_rating' == $vars['orderby'] ) {
        $vars = array_merge( $vars, array( 'meta_key' => 'movie_rating', 'orderby' => 'meta_value_num' ) );
    }
    return $vars;
}