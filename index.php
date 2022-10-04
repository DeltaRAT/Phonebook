<?php
# It is FrontController!
use App\Utilities\Asset;

include "Bootstrap/Init.php";

echo Asset::get('css/style.css') .'<hr>';
echo Asset::css('style.css');

echo \App\Utilities\Currency::format_price_in_hezar_toman(12000);

$text = "من سال 1402 را قورت خوام داد";
echo \App\Utilities\Lang::persian_number($text);

