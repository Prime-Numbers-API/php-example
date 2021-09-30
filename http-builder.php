<?php
class parentClass {
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

// ob_start();
echo $url = http_build_query($parent, '&');
// $output = ob_get_clean();
// echo $output;
// return $output[0] > 0;
?>