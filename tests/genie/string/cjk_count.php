<?php
// @author Kolier.Li

require_once __DIR__ . '/../../../genie/string/cjk_count.php';

$text_cn_only = "你好吗？";
$text_cn_mixed = "Fine,你呢？";

echo cjk_count( $text_cn_only ) . "\n";
echo cjk_count( $text_cn_mixed );
