<?php
session_start();

#token
if(isset($_SESSION['token'])){

    $TOKEN = $_SESSION['token'];

}else{

    $TOKEN = bin2hex(random_bytes(35));

    $_SESSION['token'] = $TOKEN;

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