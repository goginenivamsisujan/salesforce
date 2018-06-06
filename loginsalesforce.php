<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://login.salesforce.com/services/oauth2/token",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "grant_type=password&username=goginenivamsisujan%40rs.com&password=Vssep1992&client_id=3MVG9d8..z.hDcPL7xahxq2y0wj7m.LBYGuSbEsNe2FUDMbT8vhtfHkZOPl6H.Nh6aArxULl90t0C2lvFa8KW&client_secret=7726233253805331684",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache",
    "content-type: application/x-www-form-urlencoded",
    "postman-token: 1ee2dbdb-d142-96a2-bc5a-fe2faacb5eaa"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  //header('Content-Type: application/json');
  echo $response;
}
