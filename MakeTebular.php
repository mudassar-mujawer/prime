<?php
/**
* @author Mudassar.M
* @created 15th may 2019
* @comment used to display table of given prime number
* 
*/
class MakeTebular {
    
    private $primeNumbers = array();
    
    public function __construct($numbers) {
    	$this->primeNumbers = $numbers;
    }

    /**
	 *
	 * create the table of given prime number
	 *
	 * @return  string 
	 *
	 */
	public function showTable()
	{
		$str =  " \t".implode("\t", $this->primeNumbers)."\n";
		foreach ($this->primeNumbers as $key => $value) {
			$arrayReindexed  = $this->indexArrayByElement($this->primeNumbers, $value);
			$str .= $value."\t".implode("\t", $arrayReindexed)."\n";
	
		}	
		return $str;	
	}

	/**
	 *
	 * loop till to get the nth prime number
	 *
	 * @param    array  $array prime number array. 
	 * @param    int  $element individual number. 
	 * @return   array multiplication of prime number array
	 *
	 */
	public function indexArrayByElement($array, $element)
	{
	    $arrayReindexed = [];
	    array_walk(
	        $array,
	        function ($item, $key) use (&$arrayReindexed, $element) {
	            $arrayReindexed[$item] = $item * $element;
	        }
	    );
	    return $arrayReindexed;
	}

	
}


?>

