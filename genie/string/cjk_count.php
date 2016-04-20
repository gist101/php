<?php
// Count CJK Characters
// @author: Kolier.Li
// CJK - Chinese, Japanese, Korean
// @see /cookbook/utf-8.php

/**
 * Count amount of CJK characters in the string.
 *
 * Only support UTF-8.
 *
 * @param string $string The string being tested.
 * @return int Amount of CJK characters.
 */
function cjk_count( $string ) {
  return preg_match_all( '/[\x{0800}-\x{3FFFF}]/u', $string );
}
