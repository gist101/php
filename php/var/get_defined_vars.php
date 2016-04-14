<?php
// Inspect get_defined_vars()
// @author: Kolier.Li

// Run in global scope.
print_r( get_defined_vars() );

// Run in function.
test1();
function test1() {
  $a = 'apple';
  $b = 'orange';
  print_r( get_defined_vars() );
}
