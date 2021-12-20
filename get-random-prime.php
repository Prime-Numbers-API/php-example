<?php

$getRandomPrimeUrl = "http://api.prime-numbers.io/get-random-prime.php?";

class getRandomPrimeQueryBuilder {
    public  $key    =   'YOUR_API_KEY';
    public  $language   =   'english';
}

$query = new getRandomPrimeQueryBuilder();
echo $getRandomPrimeQuery = http_build_query($query, '&');

$getRandomResult = $getRandomPrimeUrl . $getRandomPrimeQuery;

?>