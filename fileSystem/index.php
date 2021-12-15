<?php 

// magic constance
// echo __DIR__ . '<br><br>';

// echo __FILE__ . '<br><br>';

// echo __LINE__ . '<br><br>';

// create directory

	// mkdir('Test');

// rename directory
// rename('Test', 'Test2');

// delete directory
// rmdir('Test2');

// read local files

// echo file_get_contents('/Users/chriswu/Github/PHP/fileSystem/00_README.txt');

// read files and folders insdie directory

$file = scandir('./');

// echo '<pre>';
var_dump($file);
// echo '</pre>';

//Output text to the file system 

// $outputeFile = file_put_contents('sampleTxt.txt', 'Here is what I write for sample text');

// get content from url

$urlContent = file_get_contents('https://jsonplaceholder.typicode.com/users');
echo'<pre>';
var_dump($urlContent);
echo __LINE__;
echo '</pre>';

// convert json format into
$jsonFormat = json_decode($urlContent);
echo '<pre>';
var_dump($jsonFormat);
echo '</pre>';
?>






























