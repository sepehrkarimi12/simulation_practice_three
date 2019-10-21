<?php
function getRequest($number, $state)
{
    if ($state == "<span style='color: green;'>خوب</span>") {
        switch ($number) {
            case ($number >= 0 and $number <= 3):
                return 40;
                break;
            case ($number >= 4 and $number <= 8):
                return 50;
                break;
            case ($number >= 9 and $number <= 23):
                return 60;
                break;
            case ($number >= 24 and $number <= 43):
                return 70;
                break;
            case ($number >= 44 and $number <= 78):
                return 80;
                break;
            case ($number >= 79 and $number <= 93):
                return 90;
                break;
            case ($number >= 94 and $number <= 100):
                return 100;
                break;
        }
    }
    if ($state == "<span style='color: yellow;'>متوسط</span>") {
        switch ($number) {
            case ($number >= 0 and $number <= 10):
                return 40;
                break;
            case ($number >= 11 and $number <= 28):
                return 50;
                break;
            case ($number >= 29 and $number <= 68):
                return 60;
                break;
            case ($number >= 60 and $number <= 88):
                return 70;
                break;
            case ($number >= 89 and $number <= 96):
                return 80;
                break;
            case ($number >= 97 and $number <= 100):
                return 90;
                break;
        }
    }
    if ($state == "<span style='color: red;'>بد</span>") {
        switch ($number) {
            case ($number >= 0 and $number <= 44):
                return 40;
                break;
            case ($number >= 45 and $number <= 66):
                return 50;
                break;
            case ($number >= 67 and $number <= 82):
                return 60;
                break;
            case ($number >= 83 and $number <= 94):
                return 70;
                break;
            case ($number >= 95 and $number <= 100):
                return 80;
                break;
        }
    }
}

function getDay($number)
{
    $good = "<span style='color: green;'>خوب</span>";
    $melo = "<span style='color: yellow;'>متوسط</span>";
    $bad = "<span style='color: red;'>بد</span>";
    switch ($number) {
        case ($number >= 1 and $number <= 35):
            return $good;
            break;
        case ($number >= 36 and $number <= 80):
            return $melo;
            break;
        case ($number >= 81 and $number <= 100):
            return $bad;
            break;
    }
}

ini_set('display_errors', 'off');
error_reporting(E_ALL);
?>