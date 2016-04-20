<?php
// Count amount of white spaces in string.
// @author Kolier.Li

/**
 * Collect all white spaces in string.
 *
 * @param string $string
 * @return int Amount of white space.
 */
function space_count( $string ) {
  return preg_match_all( '/\s/', $string );
}
