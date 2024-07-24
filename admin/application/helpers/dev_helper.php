<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('_print_r'))
{
	function _print_r($data)
	{
        echo "<pre>";
		print_r($data);
        echo "</pre>";
        die();
	}
}