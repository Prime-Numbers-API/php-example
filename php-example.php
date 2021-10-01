<?php

include 'get-random-prime.php';
include 'is-this-number-prime.php';
include 'get-all-primes-between-two-numbers.php';
include 'prospect-primes-between-two-numbers.php';
include 'get-isolated-random-prime.php';

//use cURL to handle and return the response
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

   // --- results from each endpoint ---
   // $getRandomResult 
   // $isThisNumberPrimeResult 
   // $getAllPrimesBetweenTwoNumbersResult  
   // $propsectPrimesBetweenTwoNumbersResult  
   // $getIsolatedRandomPrimeResult  
   
   //view result URL in terminal
   echo " result ---> $getRandomResult <---";

   //create class instance and pass result to Main
   $response = new Main();
   $response->runPrimeURL($getRandomResult);

?>