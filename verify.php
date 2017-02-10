<?php
$access_token = 'MmMJE165hv9mxeX58PNVOjL3bUEce3mKI/cHbbOe//cCCy6Ses1HSAtiPYSGnQCdpkqI+L10oYzVPVlUgNwsdsrnNlF4364o0p0OMv1JBfyiQVAF8QhGaHYPDm48KxI2jDRTtBeEA+Jgf9nkI4HbHQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
