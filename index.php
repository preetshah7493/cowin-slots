<?php
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://cdn-api.co-vin.in/api/v2/appointment/sessions/public/findByPin?pincode=421302&date=28-06-2021",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache",
    "postman-token: 1b523b8e-4ec0-2e93-070e-e40111d05227"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
/*
$data = json_decode($data);

echo $data->centers[0]->name;
*/

?>
