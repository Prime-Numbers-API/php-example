<?php

$getRandomUrl = "http://api.prime-numbers.io/get-random-prime.php?key=123&language=english";
Class A{
   private $response;
    

   public function getRandomPrime($url) {
      

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

   $response = new A();
   $response->getRandomPrime($getRandomUrl);

?>