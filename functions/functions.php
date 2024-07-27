<?php 
function endsInZeroOrFive($number) {
    return $number % 10 == 0 || $number % 10 == 5;
}