<?php
class parentClass {
    public $base_url = 'http://api.prime-numbers.io/get-random-prime.php?';
    public    $key      = '123';
    public $language     = 'english';
}
    // public    $pub_bar  = Null;
    // protected $prot_bar = Null;
    // private   $priv_bar = Null;

    // public function __construct(){
    //     $this->pub_bar  = new childClass();
    //     $this->prot_bar = new childClass();
    //     $this->priv_bar = new childClass();
    // }
//}

// class childClass {
//     public    $pub  = 'publicChild';
//     protected $prot = 'protectedChild';
//     private   $priv = 'privateChild';
// }

$parent = new parentClass();
$url = http_build_query($parent, '&');
echo $decoded_url = urldecode($url);
return $decoded_url[0] > 0;

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
 
    $response = new A();
    $response->runPrimeURL($decoded_url);



?>