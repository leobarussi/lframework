<?php
namespace Config;
class Base {
	/**
	 * @param $url
	 */
	public static function base_uri($url) {
		try {
			return str_replace($_SERVER['HTTP_HOST'], '', str_replace('http://', '', str_replace('https://', '', $url)));
		} catch (\Exception $ex) {
			throw new \Exception($ex->getMessage());
		}
	}

	/**
	 * @param $atRoot
	 * @param FALSE     $atCore
	 * @param FALSE     $parse
	 */
	public static function base_url($atRoot = FALSE, $atCore = FALSE, $parse = FALSE) {
		if (isset($_SERVER['HTTP_HOST'])) {
			$http = isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) !== 'off' ? 'https' : 'http';
			$hostname = $_SERVER['HTTP_HOST'];
			$dir = str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);

			$core = preg_split('@/@', str_replace($_SERVER['DOCUMENT_ROOT'], '', realpath(dirname(__FILE__))), NULL, PREG_SPLIT_NO_EMPTY);
			$core = $core[0];

			$tmplt = $atRoot ? ($atCore ? "%s://%s/%s/" : "%s://%s/") : ($atCore ? "%s://%s/%s/" : "%s://%s%s");
			$end = $atRoot ? ($atCore ? $core : $hostname) : ($atCore ? $core : $dir);
			$base_url = sprintf($tmplt, $http, $hostname, $end);
		} else {
			$base_url = 'http://localhost/';
		}

		if ($parse) {
			$base_url = parse_url($base_url);
			if (isset($base_url['path'])) {
				if ($base_url['path'] == '/') {
					$base_url['path'] = '';
				}
			}

		}

		return str_replace('/web/', '', $base_url);
	}

	public static function base_only($atRoot = FALSE, $atCore = FALSE, $parse = FALSE) {
		if (isset($_SERVER['HTTP_HOST'])) {
			$http = isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) !== 'off' ? 'https' : 'http';
			$hostname = $_SERVER['HTTP_HOST'];
			$dir = str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);

			$core = preg_split('@/@', str_replace($_SERVER['DOCUMENT_ROOT'], '', realpath(dirname(__FILE__))), NULL, PREG_SPLIT_NO_EMPTY);
			$core = $core[0];

			$tmplt = $atRoot ? ($atCore ? "%s://%s/%s/" : "%s://%s/") : ($atCore ? "%s://%s/%s/" : "%s://%s%s");
			$end = $atRoot ? ($atCore ? $core : $hostname) : ($atCore ? $core : $dir);
			$base_url = sprintf($tmplt, $http, $hostname, $end);
		} else {
			$base_url = 'http://localhost/';
		}

		if ($parse) {
			$base_url = parse_url($base_url);
			if (isset($base_url['path'])) {
				if ($base_url['path'] == '/') {
					$base_url['path'] = '';
				}
			}

		}

		return str_replace(Base::base_uri($base_url), '', $base_url);
	}
}
?>