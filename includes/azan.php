<?php
#corn job work here
require_once 'lib.php';

define('SITE','https://prayertimes.me/Al-Qusayr.html'); #the site will get from him times
define('user_agent','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.82 Safari/537.36'); #the site will get from him times

$ch = curl_init(); //send req
    curl_setopt($ch, CURLOPT_URL,SITE);
    curl_setopt($ch, CURLOPT_COOKIEJAR,"");
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION  ,1);
    curl_setopt($ch, CURLOPT_HEADER      ,0);
    curl_setopt($ch, CURLOPT_USERAGENT, user_agent);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER  ,1);
      $res = curl_exec($ch); // get code
    $html = str_get_html($res);


    foreach($html->find('.list-prayer li span') as $times){

           $out['times'][] = $times->plaintext;

    }

    header('content-type: application/json');
    $encode = json_encode($out);
    file_put_contents('azan.txt',$encode);