<?php

// $i still 1 when it's returned
function ipp() {
  $i = 1;
  return $i++;
}

// $i becomes 2 before it's returned
function ppi() {
  $i = 1;
  return ++$i;
}

echo ipp(); // 1
echo ppi(); // 2
