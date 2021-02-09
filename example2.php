<?php

$urlParam = array();
$urlParam['first'] = 'https://www.expedia.com/';
$urlParam['path'] = 'Bangkok-Hotels-Like-Sukhumvit-22.h15055944.Hotel-Information';
$urlParam['param']['chkin'] = '2/12/2021';
$urlParam['param']['chkout'] = '2/16/2021';
$urlParam['param']['rm1'] = 'a2:c10:c10';

$url = $urlParam['first'] . $urlParam['path'] . '?' . http_build_query($urlParam['param']);

$ch=curl_init($url);
curl_setopt_array($ch,array(
    CURLOPT_USERAGENT=>'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0',
    CURLOPT_ENCODING=>'gzip, deflate',
    CURLOPT_HTTPHEADER=>array(
        'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
        'Accept-Language: en-US,en;q=0.5',
        'Connection: keep-alive',
        'Upgrade-Insecure-Requests: 1',
    ),
));
curl_exec($ch);

