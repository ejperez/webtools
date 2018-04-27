<?php
/**
 * Some WP debugging functions
 * Author: EJ Perez
 */

/**
 * Pretty var_dump
 */
if ( ! function_exists( 'p_dump' ) ) {
	function p_dump( $data ) {
		highlight_string( "<?php\n\$data =\n" . var_export( $data, true ) . ";\n?>" );
	}
}

/**
 * JS Console log
 */
if ( ! function_exists( 'c_dump' ) ) {
	function c_dump( $data ) {
		echo '<script>console.log(' . json_encode($data) . ');</script>';
	}
}

/**
 * File var_dump
 */
if ( ! function_exists( 'f_dump' ) ) {
	function f_dump( $data ) {
		file_put_contents('/var/www/' . get_template() . '-fdump.txt', var_export($data, true));
	}
}

/**
 * Error
 */
if ( ! function_exists( 'p_errors' ) ) {
	function p_errors() {
		require( 'php_error.php' );
		\php_error\reportErrors();
	}
}