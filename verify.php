<?php
$access_token = 'GvVbsxwUB2rmY6pVXPplkHrb7UD+UjsN1VSbpuZLFgNRiFr82ObKlKda/9HpCm146Ay/ekPpm/xAMtJwSwFAuC2+LepcVxezOTjONjWOHjOtQEs59l/VEpDwh8nKf99tenIkzgIEX1eOgHbbxr0s4QdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
