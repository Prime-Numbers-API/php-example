<?php

//$getRandomPrimeUrl = "http://api.prime-numbers.io/get-random-prime.php?key=123&language=english";
$getRandomPrimeUrl = "http://api.prime-numbers.io/get-random-prime.php?";
$isThisNumberPrimeUrl = "http://api.prime-numbers.io/is-this-number-prime.php?key=123&number=41";
$getAllPrimesBetweenTwoNumbersUrl = "http://api.prime-numbers.io/get-all-primes-between-two-numbers.php?key=123&start=350&end=500";
$propsectPrimesBetweenTwoNumbersUrl = "http://api.prime-numbers.io/prospect-primes-between-two-numbers.php?key=123&start=350&end=500";
$getIsolatedRandomPrimeUrl = "http://api.prime-numbers.io/get-isolated-random-prime.php?key=123&include_explanations=true&include_prime_types_list=true&minimum_combined_prime_gap=500";

Class A{
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
   $result = $getRandomPrimeUrl . $query; 
   //echo $url;
   //echo $getRandomPrimeUrl;
   echo " result --> $result <---";
   $response = new A();
   $response->runPrimeURL($result);
   // $response->runPrimeURL($getRandomPrimeUrl);
   // $response->runPrimeURL($isThisNumberPrimeUrl);
   // $response->runPrimeURL($getAllPrimesBetweenTwoNumbersUrl);
   // $response->runPrimeURL($propsectPrimesBetweenTwoNumbersUrl);
   // $response->runPrimeURL($getIsolatedRandomPrimeUrl);

?>