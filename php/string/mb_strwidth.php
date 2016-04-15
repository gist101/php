<?php
// @author Kolier.Li
// @link http://php.net/manual/en/function.mb-strwidth.php

$text_en = 'Peter is a boy.'; // english
$text_ar = 'بيتر هو صبي.'; // arabic
$text_hb = 'פיטר הוא ילד.'; // hebrew
$text_cn = '你好吗'; // Chinese

echo mb_strlen( $text_cn );
