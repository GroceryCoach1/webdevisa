<?php

/*
Plugin Name: Taxonomies
Description: CancerPreventers
*/

/* Start Adding Functions Below this Line */

function Food_CancerPreventers() {  
   register_taxonomy(  
    'Food_Facts',  
    'mysite_reviews',  
    array(  
         
        'label' => 'CancerPreventers',  
        'query_var' => true,  
        'rewrite' => array('slug' => 'CancerPreventers')  
    )  
);  
}  
  



function CancerPreventers_init() {
    // create a new taxonomy
    register_taxonomy(
        'cancerpreventers',
        'post',
        array(
            'label' => __( 'cancer preventers' ),
            'rewrite' => array( 'slug' => 'cancerpreventers' ),
            'capabilities' => array(
                'hierarchical' => true, 
                
            )
        )
    );
}
add_action( 'init', 'cancerpreventers_init' );



function gout_init() {
    // create a new taxonomy
    register_taxonomy(
        'gout',
        'post',
        array(
            'label' => __( 'gout' ),
            'rewrite' => array( 'slug' => 'gout' ),
            'capabilities' => array(
                 'hierarchical' => true,
            )
        )
    );
}
add_action( 'init', 'gout_init' );




function keepmoving_init() {
    // create a new taxonomy
    register_taxonomy(
        'keepmoving',
        'post',
        array(
            'label' => __( 'keepmoving' ),
            'rewrite' => array( 'slug' => 'keepmoving' ),
            'capabilities' => array(
                 'hierarchical' => true,
            )
        )
    );
}
add_action( 'init', 'keepmoving_init' );


/* Stop Adding Functions Below this Line */
?>