<?php

define('APP_DEBUG', false);
define('LOG_RECORD',true);
define('IN_MWEB',true);
define('ADMINPAGE',false);

//360安全过滤
if(is_file($_SERVER['DOCUMENT_ROOT'].'/360safe/360webscan.php')){
    require_once($_SERVER['DOCUMENT_ROOT'].'/360safe/360webscan.php');
}

require_once('core/core.php');

run();