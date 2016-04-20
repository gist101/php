<?php
// @author Kolier.Li
// @link http://php.net/manual/en/function.mb-strwidth.php

$text_en = 'Peter is a boy.'; // english
$text_ar = 'بيتر هو صبي.'; // arabic
$text_hb = 'פיטר הוא ילד.'; // hebrew
$text_cn = '你好吗'; // Chinese
$text_mix = 'fine,你呢？';
$text_mix_spaces = 'fine, 你呢？';

echo mb_strlen( $text_cn ) . "\n"; // 3
echo mb_strwidth( $text_cn, 'utf-8' ) . "\n"; // 6
echo mb_strwidth( $text_mix ) . "\n"; // 11
echo mb_strwidth( $text_mix_spaces ) . "\n"; // 12
echo strlen( $text_ar ) . "\n"; // 
echo mb_strwidth( $text_ar ); // 12
