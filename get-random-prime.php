<?php
class getRandomPrimeQueryBuilder {
    public    $key      = '123';
    public $language     = 'english';
}

$parent = new getRandomPrimeQueryBuilder();
echo $getRandomPrimeQuery = http_build_query($parent, '&');

?>