<?php

$amount = 120; 
$vatRate = 15;


$vat = $amount * ($vatRate / 100);
$totalAmount = $amount + $vat;   


echo "Original Amount: $" . number_format($amount, 2) . "<br>";
echo "VAT ({$vatRate}%): $" . number_format($vat, 2) . "<br>";
echo "Total Amount (including VAT): $" . number_format($totalAmount, 2) . "<br>";
?>
