<?php

// @link https://en.wikipedia.org/wiki/Singleton_pattern

class Singleton {

  private static $instance;

  public static function getInstance() {
    if ( static::$instance === NULL ) {
      static::$instance = new static();
    }

    return static::$instance;
  }

  // Protected constructor to prevent creating a new instance of the Singleton via the 'new' operator from outside of this class.
  protected function __construct() {}

  // Private clone method to prevent cloning of the instance of the Singleton instance.
  private function __clone() {}

  // Private unserialize method to prevent unserializing of the Singleton instance.
  private function __wakeup() {}

}
