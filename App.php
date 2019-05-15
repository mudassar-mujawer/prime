<?php
/**
* @author Mudassar.M
* @created 15th may 2019
* @comment used to show the table of the first Nth prime numbers 
* Command to execute the Program i.e php App.php  -c 10 or php App.php  --count 10
* 
*/
class App {
        
    public function __construct() {

    }

    
    /**
	 *
	 * display the table of the first Nth prime numbers 
	 * @param    array  $options params option 	 *
	 */
	public function displayPrimeTable($options)
	{
		$counter = isset($options['c']) ? (int)$options['c'] : (int)$options['count'];
		$isValidate = $this->validateInput($counter);
		if(!$isValidate) {
			echo "Wrong input has given, please check command php App.php  --Help\n";
		}
		$objPrimeClass = new Prime();
		$primeNumber = $objPrimeClass->findOutPrimeNumber($counter);

		$objPrimeClass = new MakeTebular($primeNumber);
		echo $objPrimeClass->showTable();
	}

	/**
	 *
	 * help function which diaply the command detail
	 */
	public function help()
	{
		echo "Usage: php App.php  [-c] [--count] <number>  [help]  \n\n";
		echo "    -c, --count      first n number of prime numbers. n should be integer and greater than 0 \n";
		echo "    --help           display this help and exit\n";
		echo "\nExamples:\n";
		echo "    php App.php  -c 10\n";
		echo "    php App.php  --count 10\n";
		echo "    php App.php  --Help\n";
	}

	/**
	 *
	 * validate the is given param is number or not
	 *
	 * @param    int  $number Integer Number
	 * @return   bool
	 *
	 */
	public function validateInput($number)
	{
		if($number <= 0) {
			return false;
		}
		$this->counter = $number;
		return true;
	}

	/**
	 *
	 * gateway of program to display the result
	 *
	 *
	 */
	public static function run()
	{
		$shortopts = "c:";  // Required value
		$longopts  = array(
			"count:",     // Required value
			"help",        // No value
		);
		$options = getopt($shortopts, $longopts);

		$obj = new self();
		if(isset($options['c']) || isset($options['count'])) {
			$obj->displayPrimeTable($options);
		}
		else
		{
			$obj->help();	
		}
	}

}

function __autoload($classname) {
    $filename = "./". $classname .".php";
    include_once($filename);
}

App::run();



?>


