<?php
class propsectPrimesBetweenTwoNumbersQueryBuilder {
    public    $key      = '123';
    public $start     = '350';
    public $end     = '500';
}

$parent = new propsectPrimesBetweenTwoNumbersQueryBuilder();
echo $propsectPrimesBetweenTwoNumbersQuery = http_build_query($parent, '&');

?>