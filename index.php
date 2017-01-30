<?php
/*
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
*/

function GetDir($path, &$str)
{
    $mass = scandir($path);
    foreach ($mass as $v) {
        if (!strstr($v, ".")) {
            if (is_dir($path . '/' . $v)) {
                $str .= PATH_SEPARATOR . $path . '/' . $v;
                GetDir($path . '/' . $v, $str);
            }
        }
    }
}

$alldir = get_include_path();
GetDir('.', $alldir);
set_include_path($alldir);
function __autoload($class)
{
    require_once($class . '.php');
}

//echo '<pre>';print_r($alldir);echo '</pre>';

$application = new Application();
$application->run(); 