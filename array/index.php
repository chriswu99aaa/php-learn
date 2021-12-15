<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Index</title>
</head>
<body>
<?php 
$customers=[];

$customers[] = array('John Morgan', 'jason@example.com', '614-999-9999');
$customers[] = array('Chris Wu', 'jesse@example.com', '475893978');
$customers[] = array('Cc J', 'catch@example.com', '2734732');

// foreach ($customers as $customer) {
// 	vprintf("<p> Name: %s<br>E-mail: %s<br>Phone: %s<br><br>", $customer);
// }

// print_r($customers);
// echo '<br>';

// echo '<pre>';
// var_dump($customers);
// echo '</pre>';

// search wheher an element is in array
$states = ['Ohio', 'California', 'New York'];

if (in_array('ohio', $states, True)) {
	echo 'Ohio is in the array';

}

// wheter array key exists

$US = ['Ohio'=>'December', 'New York'=>'Novomber', 'Delawaere'=>'March'];

// print_r($US);
// if (array_key_exists('Ohio', $US))
// {
// 	echo 'Ohio is in';
// }

// search for value in associative array
if (array_search('December', $US))
{
	echo 'True';

}

$Person = [
	['name'=>'Chris', 'age'=>14],
	['name'=>'Morgan', 'age'=>39],
	['name'=>'CC', 'age'=>38]
];
$names = array_column($Person, 'name');

print_r($names);




curl_close($resource);
// substr('chris', 0)







?>
</body>
</html>