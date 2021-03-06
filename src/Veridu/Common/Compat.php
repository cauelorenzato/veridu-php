<?php
/**
* Compatibility class
*/

namespace Veridu\Common;

final class Compat {

	/**
	* Compatibility for http_build_query
	*
	* @param array $query Array with query properties
	*
	* @return string
	*/
	public static function buildQuery(array $query) {
		if (version_compare(PHP_VERSION, '5.4.0', '>='))
			return http_build_query($query, '', '&', PHP_QUERY_RFC1738);
		return http_build_query($query, '', '&');
	}

}
