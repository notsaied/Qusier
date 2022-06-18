<?php
session_start();

#token
if(isset($_COOKIE['token'])){

    $TOKEN = $_COOKIE['token'];

}else{

    $TOKEN = bin2hex(random_bytes(35));
    setcookie('token', $TOKEN, time() + 60 * 60 * 24 * 30);
}
# vars
$path = basename(__DIR__).'/';

$protocol = strpos(strtolower($_SERVER['SERVER_PROTOCOL']), 'https') === FALSE ? 'http' : 'https';
$link = $protocol . '://' . $_SERVER['HTTP_HOST'];

# All Requried files
 require_once 'information.php';
 require_once 'backend.php';

#functions
function filterinput($str){
    $str = htmlspecialchars($str);
    $str = filter_var($str, FILTER_SANITIZE_STRING);
    return $str;
}