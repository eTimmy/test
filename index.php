<?php
$config = parse_ini_file("config.ini", true);

class exo {
  // Properties
  public $n;
  public const MAIN_STRING = 'TLD';
  public const SEC_STRING = 'TLD_PHP';

function get_n() {
    return $this->n;
	
}
function __construct($n) {
    $this->n = $n;
	$a=1;
	
	while ($a <= $n) {
	if ($a%3== 0)
	  {
		if ($a%5==0)
		{
			echo self::SEC_STRING;
		}
		else
		{
			echo self::MAIN_STRING;
		}
		
		$a++;
	 }
	 else
	 {
		echo $a++;
	 }
	
}
  }
}
class MyTest {
   public function testExo() {
       $obj = new exo(5);
       assert("$obj->get_n() == 5");
       assert("is_numeric($obj->get_n())"); 	   
   }

}
$obj = new exo($config['number_section']['n']);
$test = new MyTest();
#$test->testExo();
?>