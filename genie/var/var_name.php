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
    $vals = $scope;
  } else {
    $vals = $GLOBALS;
  }
  $old = $var;
  $var = $new = uniqid( __FUNCTION__, $more_entropy );
  $vname = false;
  foreach ( $vals as $key => $val ) {
    if ( $val === $new ) {
      $vname = $key;
    }
  }
  $var = $old;

  return $vname;
}
