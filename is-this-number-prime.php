<?php
class isThisNumberPrimeQueryBuilder {
    public  $key    =   '123';
    public  $number =   '41';
}

$query = new isThisNumberPrimeQueryBuilder();
echo $isThisNumberPrimeQuery = http_build_query($query, '&');

?>