<?php

function getBalance($exotel_sid, $exotel_token)
{
  // To get your Exotel Sid and token, visit https://my.exotel.in/Exotel/settings/site#exotel-settings
 
  $url = "https://".$exotel_sid.":".$exotel_token."@twilix.exotel.in/v1/Accounts/".$exotel_sid."/balance";
 
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_VERBOSE, 1);
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_FAILONERROR, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

  $http_result = curl_exec($ch);
  $error = curl_error($ch);
  $http_code = curl_getinfo($ch ,CURLINFO_HTTP_CODE);
 
  curl_close($ch);
  return $http_result;
} 
print_r(getBalance("xxx", "xxx"));
?>
