<?php
namespace SEKI\Core;
use sekigahara;

/*
 * Game: a wrapper over table object to allow more generic modules
 */
class Game {
	public static function get() {
		return sekigahara::get();
	}
}
