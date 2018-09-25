<?php

/**
 * Created by PhpStorm.
 * User: sayed
 * Date: 9/9/18
 * Time: 3:30 PM
 */

require_once 'curl/curl.php';
use simple_curl\curl;

$url = 'https://newsapi.org/v2/top-headlines';

$headers = (array(

));

$query = (array(
    'sources' =>'bbc-news',
    'apiKey' => 'b9a97e06d1654226aa022493b4233a60'
));

curl::prepare($url, $query);
curl::exec_get();
print_r(curl::get_response_assoc());
