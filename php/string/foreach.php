<?php

// Q: Can string characters work with foreach() directly?
// A: No.

$str = "abcd";

// Wrong
foreach ( $str as $el ) {
  echo $el . "\n";
}
