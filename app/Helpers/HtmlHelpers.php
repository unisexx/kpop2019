<?php

if(!function_exists('catch_that_image'))
{
	function catch_that_image( $str ) {  
		$output = preg_match_all('/<img[^>]+src=[\'"]([^\'"]+)[\'"][^>]*>/i', $str, $matches);  
		return $matches[1][0];  
	} 
} 