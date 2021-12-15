<?php 
class Person
{
	public string $firstname;
	protected ?int $age;
	public string $surname;
	public static int $counter=0;

	public function __construct($firstN, $surN, $age)
	{
		$this ->surname = $surN;
		$this ->firstname = $firstN;
		$this ->age = $age;
		self::$counter++;	}

	public function getName()
	{
		return $this->surname;
	}

	public static function getCounter()
	{
		return self::$counter;
	}
    
}

$p2 = new Person('John', 'Morgan', 20);
$p1 = new Person('Chris', 'Wu', 25);

echo '<pre>';
var_dump($p2);
echo '</pre>';

echo $p2->getName().'<br>';
echo Person::$counter;


?>