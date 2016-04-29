<?php

// @link http://php.net/manual/en/features.safe-mode.php

//==============================================================================
// Functions restricted/disabled by safe mode
// @link http://php.net/manual/en/features.safe-mode.functions.php
//==============================================================================

dbmopen();
dbase_open();
filepro();
filepro_rowcount();
filepro_retrieve();
// ifx_*();
// ingres_*();
// mysql_*();
pg_lo_import();
posix_mkfifo();
putenv();
move_uploaded_file();
chdir();
dl();
// backtick operator
shell_exec();
exec();
system();
passthru();
popen();
fopen();
mkdir();
rmdir();
rename();
unlink();
copy();
chgrp();
chown();
chmod();
touch();
symlink();
link();
apache_request_headers();
header();
// PHP_AUTH variables
highlight_file();
show_source();
parse_ini_file();
set_time_limit();
max_execution_time();
mail();
session_start();
