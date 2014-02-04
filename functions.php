<?php
add_action( 'do_action_example', 'an_action_function' );
add_filter( 'apply_filter_example', 'a_filter_function' );

function an_action_function() {
	// Just do an echo
	echo "Action successfully executed";
}

function a_filter_function( $value_to_filter, $params = array() ) {
	extract( $params );
	if( empty( $sentence_end ) ) {
		return $value_to_filter;
	}
	return $value_to_filter . $sentence_end;
}