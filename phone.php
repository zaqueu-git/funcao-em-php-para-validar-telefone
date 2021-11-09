<?php
function phone($value)
{
    if (preg_match('/^\(?[1-9]{2}\)? ?(?:[2-8]|9[1-9])[0-9]{3}\-?[0-9]{4}$/', $value)) {
        return true;
    }
    return false;
}
?>