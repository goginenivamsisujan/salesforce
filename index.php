<?php

$request = new HttpRequest();
$request->setUrl('https://login.salesforce.com/services/oauth2/token');
$request->setMethod(HTTP_METH_POST);

$request->setHeaders(array(
  'postman-token' => 'e3643de3-0c45-29e5-a3be-7dc89ed4ed5f',
  'cache-control' => 'no-cache',
  'content-type' => 'application/x-www-form-urlencoded'
));

$request->setContentType('application/x-www-form-urlencoded');
$request->setPostFields(array(
  'grant_type' => 'password',
  'username' => 'goginenivamsisujan@rs.com',
  'password' => 'Vssep1992',
  'client_id' => '3MVG9d8..z.hDcPL7xahxq2y0wj7m.LBYGuSbEsNe2FUDMbT8vhtfHkZOPl6H.Nh6aArxULl90t0C2lvFa8KW',
  'client_secret' => '7726233253805331684'
));

try {
  $response = $request->send();

  echo $response->getBody();
} catch (HttpException $ex) {
  echo $ex;
}
