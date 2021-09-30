<?php


$getRandomPrimeUrl = "http://api.prime-numbers.io/get-random-prime.php?";
$isThisNumberPrimeUrl = "http://api.prime-numbers.io/is-this-number-prime.php?";
$getAllPrimesBetweenTwoNumbersUrl = "http://api.prime-numbers.io/get-all-primes-between-two-numbers.php?";
$propsectPrimesBetweenTwoNumbersUrl = "http://api.prime-numbers.io/prospect-primes-between-two-numbers.php?";
$getIsolatedRandomPrimeUrl = "http://api.prime-numbers.io/get-isolated-random-prime.php?";

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
   include 'prospect-primes-between-two-numbers.php';
   include 'get-isolated-random-prime.php';

   //create result for call you want
   $getRandomResult = $getRandomPrimeUrl . $getRandomPrimeQuery; 
   $isThisNumberResult = $isThisNumberPrimeUrl . $isThisNumberPrimeQuery; 
   $getAllPrimesBetweenTwoNumbersResult = $getAllPrimesBetweenTwoNumbersUrl . $getAllPrimesBetweenTwoNumbersQuery; 
   $propsectPrimesBetweenTwoNumbersResult = $propsectPrimesBetweenTwoNumbersUrl . $propsectPrimesBetweenTwoNumbersQuery; 
   $getIsolatedRandomPrimeResult = $getIsolatedRandomPrimeUrl . $getIsolatedRandomPrimeQuery; 
   
   //view result URL in terminal
   echo " result --> $getIsolatedRandomPrimeResult <---";

   //create class instance and pass result
   $response = new Main();
   $response->runPrimeURL($getIsolatedRandomPrimeResult);

?>