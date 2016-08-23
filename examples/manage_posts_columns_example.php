<?php 
 
function manage_posts_columns_example( $columns ) {

	//if( $columns['title'] ) unset( $columns['title'] );
	unset( $columns['author'] );    
    unset( $columns['categories'] );
    unset( $columns['tags'] );
    unset( $columns['comments'] );
    return $columns;
    
}

add_filter( 'manage_posts_columns', 'manage_posts_columns_example' );


?>