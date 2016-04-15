<?php
// Count amount of white spaces in string.
// @author Kolier.Li

function space_count( $string ) {
  return preg_match_all( '/\s/', $string );
}
