<?php
/**
* @author Mudassar.M
* @created 15th may 2019
* @comment used to fetch the first Nth prime numbers 
* 
*/
class Prime {
    
	public function __construct() {

    }


    /**
	 *
	 * loop till to get the nth prime number
	 *
	 * @param    int  $limit Integer Number. 
	 * @return   array prime number till given limit
	 *
	 */
	public function findOutPrimeNumber($limit)
	{
		$counter = 1;
		$number = 1;
		$primeNumbers = [];
		while($counter<=$limit) {
			//$isPrime = true;
			 $isPrime  = $this->primeCheck($number);
			 if($isPrime == true){
			 	$primeNumbers[] = $number;
			 	$counter++;
			 }
			 $number++;
		}
		return $primeNumbers;
	}

	/**
	 *
	 * is given number prime number or not
	 *
	 * @param    int  $number Integer Number. 
	 * @return   bool
	 *
	 */
	public function primeCheck($number)
	{ 
	    if ($number == 1) 
	    return false; 
	      
	    for ($i = 2; $i <= sqrt($number); $i++){ 
	        if ($number % $i == 0) 
	            return false; 
	    } 
	    return true; 
	}


}


?>