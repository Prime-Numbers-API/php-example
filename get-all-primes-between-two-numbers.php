<?php

$getAllPrimesBetweenTwoNumbersUrl = "http://api.prime-numbers.io/get-all-primes-between-two-numbers.php?";

class getAllPrimesBetweenTwoNumbersQueryBuilder {
    public  $key    =   '123';
    public  $start  =   '350';
    public  $end    =   '500';
}


$query = new getAllPrimesBetweenTwoNumbersQueryBuilder();
echo $getAllPrimesBetweenTwoNumbersQuery = http_build_query($query, '&');

$getAllPrimesBetweenTwoNumbersResult = $getAllPrimesBetweenTwoNumbersUrl . $getAllPrimesBetweenTwoNumbersQuery; 

?>