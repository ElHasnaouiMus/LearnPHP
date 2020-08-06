<?php

function reshape($n, $str)
{    
    return implode('<br>',str_split(str_replace(' ', '', $str), $n));
}

echo reshape(3, "abc de fghij");