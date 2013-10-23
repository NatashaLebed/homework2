<?php

require_once 'natasha/SummerPerambulator.php';
require_once 'natasha/TransformerPerambulator.php';

$MySummer = new SummerPerambulator('Chikko','7','3');
echo $MySummer->PriceTitle().'<br>';
echo 'Fold - '. $MySummer->Fold() .'<br><br>';

$MyTransformer = new TransformerPerambulator('GoodBaby','15','4');
echo $MyTransformer->PriceTitle().'<br>';
echo 'Fold - '. $MyTransformer->Fold().'<br>';
echo 'ProtectCold - '. $MyTransformer->ProtectCold().'<br>';
echo 'ReversibleHandle - '. $MyTransformer->ReversibleHandle().'<br>';
