<?php 
$url = 'https://jsonplaceholder.typicode.com/users';

$user = [
'name' => 'Chris Wu',
'age' => 23,
'email' => 'chriswu@example.com'
];
$resource = curl_init($url);
curl_setopt($resource, CURLOPT_RETURNTRANSFER, true);
$results = curl_exec($resource);

$info = curl_getinfo($resource, CURLINFO_HTTP_CODE);
curl_close($resource);

// echo '<pre>';
// // var_dump($results);
// var_dump($info);
// echo '</pre>';

$resource = curl_init();
curl_setopt_array($resource, [
CURLOPT_URL => $url,
CURLOPT_RETURNTRANSFER => true,
CURLOPT_HTTPHEADER => ['content-type: application/json'],
CURLOPT_POST => true,
CURLOPT_POSTFIELDS => json_encode($user)

]);

$results = curl_exec($resource);

echo '<pre>';
// var_dump($results);
var_dump($results);
echo '</pre>';
curl_close($resource);

?>