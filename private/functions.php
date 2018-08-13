<?php

	// Reference the correct url based on the location of the current php file in relation to the root of the website. 
	function url_for($script_path) {
		// add the leading '/' if not present
		if($script_path[0] != '/') {
			$script_path = '/'. $script_path;
		}
		return WWW_ROOT . $script_path;
	}

	// Encode a string to be used in a query part of a url.  It is conveneint when passing variables to the next page. 
	function u($string="") {
		return urlencode($string);
	}

	// Encodes a given string according to RFC 3986.
	function raw_u($string="") {
		return rawurlencode($string);
	}

	// Converts special characters to HTML.  This prevents html characters from being dynamically added.  This is a security requirement and protects against vulnerability.
	function h($string="") {
		return htmlspecialchars($string);
	}

	// Displays server error 404 Not Found.
	function error_404() {
		header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
		exit();
	}

	// Displays server error 500 Internal Server Error.
	function error_500() {
		header($_SERVER["SERVER_PROTOCOL"] . " 500 Internal Server Error");
		exit();
	}

	// Redirects to a provided address using the header parameter.d
	function redirect_to($location) {
		header("Location: " . $location);
		exit;
	}

?>
