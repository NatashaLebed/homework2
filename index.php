<?php

require_once 'autoload.php';

$mySummer = new \natasha\SummerPerambulator('Chikko','7','3');
echo $mySummer->priceTitle().'<br>';
echo 'Fold - '. $mySummer->fold() .'<br><br>';

$myTransformer = new \natasha\TransformerPerambulator('GoodBaby','15','4');
echo $myTransformer->priceTitle().'<br>';
echo 'Fold - '. $myTransformer->fold().'<br>';
echo 'ProtectCold - '. $myTransformer->protectCold().'<br>';
echo 'ReversibleHandle - '. $myTransformer->reversibleHandle().'<br>';
