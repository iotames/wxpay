<?php
define('WXAPPID','');
define('WXAPPSECRET', '');
define('WXMCHID', '');
define('WXMCHSECRET', '');
$wxSSLcert= dirname(__file__).'/cert/apiclient_cert.pem';
$wxSSLkey=dirname(__file__).'/cert/apiclient_key.pem';
define('WXSSLCERT', $wxSSLcert);
define('WXSSLKEY', $wxSSLkey);
