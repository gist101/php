<?php namespace Magic;

// @link http://php.net/manual/en/language.constants.predefined.php

require_once __DIR__ . '/../autoload.php';

//======================================
// Filesystem
//======================================

// The directory of the file. If used inside an include, the directory of the included file is returned.
// This is equivalent to dirname(__FILE__). This directory name does not have a trailing slash unless it is the root directory.
s( __DIR__ );

// The full path and filename of the file with symlinks resolved.
// If used inside an include, the name of the included file is returned.
s( __FILE__ );

// The current line number of the file.
s( __LINE__ );

//======================================
// Code
//======================================

function magic() {
  s( __FUNCTION__ );
}
magic();

//======================================
// OOP
//======================================

// The name of the current namespace.
// @see Line 1.
s( __NAMESPACE__ );

class Magic {
  use MagicTrait;

  public function __construct() {
    s( __CLASS__ );
  }

  public function action() {
    s( __METHOD__ );
  }
}

trait MagicTrait {

  public function getTraitName() {
    s( __TRAIT__ );
  }

}

$magic = new Magic();
$magic->getTraitName();




