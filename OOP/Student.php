<?php 
require_once 'Person.php';
class Student extends Person 
{
	public string $studentId;

	public function __construct($firstN, $surN,$age, $stdId)
	{
		parent::__construct($firstN, $surN, $age);
		$this->studentId= $stdId;
	}
}
?>