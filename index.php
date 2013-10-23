<?php

require_once 'natasha/SummerPerambulator.php';
require_once 'natasha/TransformerPerambulator.php';

$MySummer = new SummerPerambulator('Chikko','7','3');
echo '<br>';
$MySummer->PriceTitle();
echo '<br>';
$MySummer->Fold();
echo '<br>';
$MyTransformer = new TransformerPerambulator('GoodBaby','15','4');
echo '<br>';
$MyTransformer->PriceTitle();
echo '<br>';
$MyTransformer->Fold();
?>