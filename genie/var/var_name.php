<?php
// Get the variable name as string.
// @author Kolier.Li

/**
 * Get the variable name as string.
 *
 * @param $var The variable being checked.
 * @param bool|array $scope Variables in scope, default would apply $GLOBALS to checklist.
 * @param bool $more_entropy Make generated temporary name more unique.
 * @return bool|string The name of the variable in string.
 */
function var_name( &$var, $scope = false, $more_entropy = false ) {
  if ( $scope ) {
    $vars = $scope;
  } else {
    $vars = $GLOBALS;
  }
  $tmp = $var;
  $var = uniqid( __FUNCTION__, $more_entropy );
  $name = false;
  foreach ( $vars as $key => $val ) {
    if ( $val === $var ) {
      $name = $key;
    }
  }
  $var = $tmp;

  return $name;
}
