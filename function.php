<?php
function password($number)
{
    $pw = '';
    for ($i = 0; $i < $number; $i++) {
        $pw .= chr(rand(32, 126));
    }
    return $pw;
}
?>