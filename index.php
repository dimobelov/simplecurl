<?php

/**
 * Created by PhpStorm.
 * User: sayed
 * Date: 9/9/18
 * Time: 3:30 PM
 */

require_once 'curl/curl.php';
use simple_curl\curl;

$url = 'https://api.robi.com.bd/fnf/v1/getFNFList';

$headers = (array(
    'Content-Type: application/json',
    'Authorization: Bearer 5217d663-0230-31b4-baf6-9df96f3a33a2'
));

$query = (array(
    'msisdn' =>'8801633764751'
));

curl::prepare($url, $headers, $query);
curl::exec_get();
print_r(curl::get_response_assoc());