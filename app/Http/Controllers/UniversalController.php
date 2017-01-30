<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UniversalController extends Controller
{
    ///////////////////////////////////////////
	function randNum($size) {
		$alpha_key = '';
		$keys = range('A', 'Z');

		for ($i = 0; $i < 2; $i++) {
			$alpha_key .= $keys[array_rand($keys)];
		}

		$length = $size - 2;

		$key = '';
		$keys = range(0, 9);

		for ($i = 0; $i < $length; $i++) {
			$key .= $keys[array_rand($keys)];
		}

		return $alpha_key . $key;
	}
///////////////////////////////////////////////////

	function traineeIDGen($size) {
		$alpha_key = 'ODIT';
		
		$key = '';
		$keys = range(0, 9);

		for ($i = 0; $i < $size; $i++) {
			$key .= $keys[array_rand($keys)];
		}

		return $alpha_key . $key;
	}

	function benefactorIDGen($size) {
		$alpha_key = 'ODIB';

		$key = '';
		$keys = range(0, 9);

		for ($i = 0; $i < $size; $i++) {
			$key .= $keys[array_rand($keys)];
		}

		return $alpha_key . $key;
	}

}
