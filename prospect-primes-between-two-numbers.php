<?php

$propsectPrimesBetweenTwoNumbersUrl = "http://api.prime-numbers.io/prospect-primes-between-two-numbers.php?";

class propsectPrimesBetweenTwoNumbersQueryBuilder {
    public  $key    =   'YOUR_API_KEY';
    public  $start  =   '350';
    public  $end    =   '500';
}

$query = new propsectPrimesBetweenTwoNumbersQueryBuilder();
echo $propsectPrimesBetweenTwoNumbersQuery = http_build_query($query, '&');

$propsectPrimesBetweenTwoNumbersResult = $propsectPrimesBetweenTwoNumbersUrl . $propsectPrimesBetweenTwoNumbersQuery; 

?>