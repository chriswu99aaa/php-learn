<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body>
<?php
include_once('header.php');
echo "<br>";
echo date('F j Y', time() - 60 * 60 * 24). '<br>';
echo '<pre>';
echo var_dump(date_parse('2021-6-24 14:32:58'));
echo '</pre>';
include_once('footer.php');
?>

</body>

</html>
























