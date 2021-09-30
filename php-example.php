<?php


$getRandomPrimeUrl = "http://api.prime-numbers.io/get-random-prime.php?";
$isThisNumberPrimeUrl = "http://api.prime-numbers.io/is-this-number-prime.php?";
$getAllPrimesBetweenTwoNumbersUrl = "http://api.prime-numbers.io/get-all-primes-between-two-numbers.php?";
$propsectPrimesBetweenTwoNumbersUrl = "http://api.prime-numbers.io/prospect-primes-between-two-numbers.php?key=123&start=350&end=500";
$getIsolatedRandomPrimeUrl = "http://api.prime-numbers.io/get-isolated-random-prime.php?key=123&include_explanations=true&include_prime_types_list=true&minimum_combined_prime_gap=500";

Class Main{
   private $response;
    

   public function runPrimeURL($url) {
      

      $curl = curl_init($url);
      curl_setopt($curl, CURLOPT_URL, $url);
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

      $headers = array(
         "Accept: application/json",
      );
      curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
      //for debug only!
      curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
      curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

      $resp = curl_exec($curl);
      curl_close($curl);
      var_dump($resp);

      return $this;
   }
}

   include 'get-random-prime.php';
   include 'is-this-number-prime.php';
   include 'get-all-primes-between-two-numbers.php';
   $getRandomResult = $getRandomPrimeUrl . $getRandomPrimeQuery; 
   $isThisNumberResult = $isThisNumberPrimeUrl . $isThisNumberPrimeQuery; 
   $getAllPrimesBetweenTwoNumbersResult = $getAllPrimesBetweenTwoNumbersUrl . $getAllPrimesBetweenTwoNumbersQuery; 
   
   //view result URL in terminal
   echo " result --> $getAllPrimesBetweenTwoNumbersResult <---";

   //create class instance and pass result
   $response = new Main();
   $response->runPrimeURL($getAllPrimesBetweenTwoNumbersResult);

?>