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
echo $url = http_build_query($parent, '&');
echo $decoded_url = urldecode($url);
?>