<?php
use PHPUnit\Framework\TestCase;
require (dirname(__FILE__)."/../Prime.php");
class PrimeTest extends TestCase
{
     public function testPrime()
	{
		$array = [2,11,36,29];
			$objPrime = new Prime();
			foreach ($array as $key => $value) {
			$this->assertTrue($objPrime->primeCheck($value));
		}
	}

}

