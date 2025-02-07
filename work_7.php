<?php

$stroka = "<Обама бараков.";
$uniq = explode(" ",$stroka);

foreach($uniq as $number) {
    print("- {$number}<br> <br>");
}