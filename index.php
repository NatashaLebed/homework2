<?php

require_once 'natasha/SummerPerambulator.php';
require_once 'natasha/TransformerPerambulator.php';

$MySummer = new SummerPerambulator('Chikko','7','3');
echo $MySummer->PriceTitle().'<br>';

echo $MySummer->Fold().'<br>';

$MyTransformer = new TransformerPerambulator('GoodBaby','15','4');
echo $MyTransformer->PriceTitle().'<br>';
echo $MyTransformer->Fold().'<br>';
?>