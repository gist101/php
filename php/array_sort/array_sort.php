<?php
// @author Kolier.Li

// Rearrange elements according to their value or the first value of array-like element
// @attribute break indexes
// sort(): http://php.net/manual/en/function.sort.php
// rsort(): http://php.net/manual/en/function.rsort.php
// usort(): http://php.net/manual/en/function.usort.php

//
// @attribute maintain indexes
// asort(): http://php.net/manual/en/function.asort.php
// arsort(): http://php.net/manual/en/function.arsort.php
// uasort(): http://php.net/manual/en/function.uasort.php

//
// @attribute maintain indexes
// ksort(): http://php.net/manual/en/function.ksort.php
// krsort(): http://php.net/manual/en/function.krsort.php
// uksort(): http://php.net/manual/en/function.uksort.php

//
// natsort()

// @sort_flags
//   SORT_REGULAR
//   SORT_NUMERIC
//   SORT_STRING
//   SORT_LOCALE_STRING
//   SORT_NATURAL
//   SORT_FLAG_CASE

// =============================================================================
// Tests
// =============================================================================

require_once __DIR__ . '/../array/sample.php';

// -----------------------------------------------------------------------------
// sort()
// -----------------------------------------------------------------------------

// Simple test function
function test( $callable, $array ) {
  echo 'Testing ' . $callable . ' with ';
  $callable( $array );
  var_dump( $array );
}

// Number
test( 'sort', $array_int_number_desc );

// Associate
test( 'sort', $array_assoc_number_asc_desc );

// Mixed
test( 'sort', $array_mixed );
