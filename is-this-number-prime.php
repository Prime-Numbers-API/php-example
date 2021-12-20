<?php

$isThisNumberPrimeUrl = "http://api.prime-numbers.io/is-this-number-prime.php?";

class isThisNumberPrimeQueryBuilder {
    public  $key    =   'YOUR_API_KEY';
    public  $number =   '41';
}

$query = new isThisNumberPrimeQueryBuilder();
echo $isThisNumberPrimeQuery = http_build_query($query, '&');

$isThisNumberPrimeResult = $isThisNumberPrimeUrl . $isThisNumberPrimeQuery;

?>