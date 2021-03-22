<?php

#Add filters

add_filter( 'excerpt_length', function($length) {
    return 16;
 } );


 #Remove Filters

 remove_filter ('the_content', 'wpautop'); 
 remove_filter( 'the_excerpt', 'wpautop' );