<?php
class getIsolatedRandomPrimeQueryBuilder {
    public  $key    =   '123';
    public  $include_explanations   =   'true';
    public  $include_prime_types_list   =   'true';
    public  $minimum_combined_prime_gap =   '500';
}


$query = new getIsolatedRandomPrimeQueryBuilder();
echo $getIsolatedRandomPrimeQuery = http_build_query($query, '&');

?>