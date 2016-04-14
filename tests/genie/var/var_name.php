<?php

require_once __DIR__ . '/../../../genie/var/var_name.php';

$abc = 'hello';
var_dump( var_name( $abc ) );

test();

function test() {
  $king = 'queen';
  //
  var_dump( var_name( $king, get_defined_vars() ) );
}
