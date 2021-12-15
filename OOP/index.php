<?php 
require_once 'Person.php';
require_once 'Student.php';

$student = new Student('Chris', 'Wu', 16, '10656324');
$p2 = new Person('John', 'Morgan', 20);
$p1 = new Person('Chris', 'Wu', 25);

print_r($student);
?>