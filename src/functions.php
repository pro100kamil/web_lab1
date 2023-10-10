<?php
function validate_x($x)
{
    return is_numeric($x) && $x >= -5 && $x <= 3;
}

function validate_y($y)
{
    if (strlen((string)$y) > 7) return false;
    return is_numeric($y) && $y > -3 && $y < 5;
}

function validate_r($r)
{
    return is_numeric($r) && $r >= 1 && $r <= 5;
}

function validate($x, $y, $r)
{
    return validate_x($x) && validate_y($y) && validate_r($r);
}

function addToData($x, $y, $r)
{
    $word = "Нет попадания";
    if (check_hit($x, $y, $r)) {
        $word = "Есть попадание";
    }
    $_SESSION["data"][] = array($x, $y, $r, $word);
}

function check_hit($x, $y, $r)
{
    if ($x > 0 and $y > 0) {
        return $x * $x + $y * $y <= $r * $r / 4;
    }
    if ($x > 0 and $y < 0) {
        return $y >= $x / 2 - $r / 2;
    }
    if ($x < 0 and $y < 0) {
        return false;
    }
    if ($x < 0 and $y > 0) {
        return $x >= -$r && $y <= $r;
    }

    if ($x == 0 && $y != 0) {
        return $r >= $y && $y >= -$r / 2;
    }
    if ($x != 0 && $y == 0) {
        return $r >= $x && $x >= -$r;
    }

    return $x == 0 && $y == 0;
}

?>
