<?php
/*$handle = curl_init();
$username = "sarthak_ishu11";
$password="sarthak11@@@"; 
$url = "https://api.twitter.com/1.1/search/tweets.json?q=nasa&result_type=popular";

 
*/




$oauth_hash = '';

$oauth_hash .= 'oauth_consumer_key=kdSRTYqJqjvWoGWXdlru4Mxh5&';

$oauth_hash .= 'oauth_nonce=' . time() . '&';

$oauth_hash .= 'oauth_signature_method=HMAC-SHA1&';

$oauth_hash .= 'oauth_timestamp=' . time() . '&';

$oauth_hash .= 'oauth_token=1715864318-ApKHcL601GngotqqBhD04R0EKXUf5fUpX2BWyXp&';

$oauth_hash .= 'oauth_version=1.0';

$base = '';

$base .= 'GET';

$base .= '&';

$base .= rawurlencode('hthttps://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=sarthak_ishu11');

$base .= '&';

$base .= rawurlencode($oauth_hash);

$key = '';

$key .= rawurlencode('sXgCtXbxzpDu7S6GaneqkVhq7PlUr3bfJq75yszPFJmLBCjvxZ');

$key .= '&';

$key .= rawurlencode('eHBiEkv5YmE3XyqGiW2QecE5dpPS0yjR7MflJujjCmf73');

$signature = base64_encode(hash_hmac('sha1', $base, $key, true));

$signature = rawurlencode($signature);


$oauth_header = '';

$oauth_header .= 'oauth_consumer_key="kdSRTYqJqjvWoGWXdlru4Mxh5", ';

$oauth_header .= 'oauth_nonce="' . time() . '", ';

$oauth_header .= 'oauth_signature="' . $signature . '", ';

$oauth_header .= 'oauth_signature_method="HMAC-SHA1", ';

$oauth_header .= 'oauth_timestamp="' . time() . '", ';

$oauth_header .= 'oauth_token="1715864318-ApKHcL601GngotqqBhD04R0EKXUf5fUpX2BWyXp", ';

$oauth_header .= 'oauth_version="1.0", ';

$curl_header = array("Authorization: Oauth {$oauth_header}", 'Expect:');

$curl_request = curl_init();

curl_setopt($curl_request, CURLOPT_HTTPHEADER, $curl_header);

curl_setopt($curl_request, CURLOPT_HEADER, false);

curl_setopt($curl_request, CURLOPT_URL, 'https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=sarthak_ishu11');

curl_setopt($curl_request, CURLOPT_RETURNTRANSFER, true);

curl_setopt($curl_request, CURLOPT_SSL_VERIFYPEER, false);

$json = curl_exec($curl_request);

curl_close($curl_request);

$t=json_decode($json, true);
print_r($t);
/*foreach ($t as $key => $value)
              {
          echo ' <br> <td><font  face="calibri"color="red">'.$value['created_at'].'   </font></td><td><font  face="calibri"color="blue">'.$value['text'].'   </font></td><td><font  face="calibri"color="green">';

           }*/




/*// Set the url
curl_setopt($handle, CURLOPT_URL, $url);
// Set the result output to be a string.
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($handle, CURLOPT_USERPWD , "$username:$password");
 
$t = curl_exec($handle);
 
curl_close($handle);
 
print_r($t);*/
?>