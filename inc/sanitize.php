<?php
/**
 * Sanitize Class
 *
 * @package WP Canvas 2
 */
class WP_Canvas_2_Sanitize {
	public function number( $value ) {
		$value = preg_replace("/[^0-9\-]/", "",$value);
		$value = intval( $value );

		if ( empty( $value ) )
			$value = '0';

		return $value;
	}

	public function pixel( $value ) {
		$value = preg_replace("/[^0-9\-]/", "",$value);
		$value = intval( $value );

		if ( empty( $value ) )
			$value = '0';

		return $value."px";
	}
}
