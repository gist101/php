<?php

// @link http://php.net/manual/en/language.oop5.magic.php

class Magic {

  // @link http://php.net/manual/en/language.oop5.decon.php#object.construct
  public function __construct() {

  }

  // @link http://php.net/manual/en/language.oop5.decon.php#object.destruct
  public function __destruct() {

  }

  //
  public function __call( $name, $arguments ) {
    // TODO: Implement __call() method.
  }

  //
  public static function __callStatic( $name, $arguments ) {
    // TODO: Implement __callStatic() method.
  }

  //
  public function __get( $name ) {
    // TODO: Implement __get() method.
  }

  //
  public function __set( $name, $value ) {
    // TODO: Implement __set() method.
  }

  //
  public function __isset( $name ) {
    // TODO: Implement __isset() method.
  }

  //
  public function __unset( $name ) {
    // TODO: Implement __unset() method.
  }

  //
  public function __sleep() {
    // TODO: Implement __sleep() method.
  }

  public function __wakeup() {
    // TODO: Implement __wakeup() method.
  }

  // @link http://php.net/manual/en/language.oop5.magic.php#object.tostring
  public function __toString() {
    return '';
  }

  // @link http://php.net/manual/en/language.oop5.magic.php#object.invoke
  public function __invoke() {

  }

  // @link http://php.net/manual/en/language.oop5.magic.php#object.set-state
  public static function __set_state($an_array) {
    // TODO: Implement __set_state() method.
  }

}
