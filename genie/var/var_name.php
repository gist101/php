<?php
// Get the variable name.
// @author Kolier.Li

/**
 * Get the variable name as string.
 *
 * @param $var
 * @param bool $scope
 * @param bool $more_entropy
 * @return bool|int|string
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
