<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Array Example</title>
</head>
<body>
<?php 
$customers=[];

$customers[] = array('John Morgan', 'jason@example.com', '614-999-9999');
$customers[] = array('Chris Wu', 'jesse@example.com', '475893978');
$customers[] = array('Cc J', 'catch@example.com', '2734732');

foreach ($customers as $customer) {
	vprintf("<p> Name: %s<br>E-mail: %s<br>Phone: %s", $customer);
}
?>
</body>
</html>
