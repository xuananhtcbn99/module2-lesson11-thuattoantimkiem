<?php
function checkPhoneNumber($str)
{
    $str = substr($str, 0, 3);
    switch ($str) {
        case '032':
        case '033':
        case '034':
        case '035':
        case '036':
        case '037':
        case '038':
        case '039':
            return 1;
        case '083':
        case '084':
        case '085':
        case '081':
        case '082':
            return 2;
        case '070':
        case '079':
        case '077':
        case '076':
        case '078':
            return 3;
    }
}