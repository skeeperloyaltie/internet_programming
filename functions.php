<?php

    function sum($a, $b)
    {
        $total = $a + $b;
        return $total;
    };

    $c = 10;
    echo "The total is ".sum(5,$c);

    function myerror($errno, $errmsg)
    {
        echo "An error occured, ". $errno . $errmsg .  " <br/>";
        die;
    };

    $errno = 5;
    $errmsg = "Check the values";
    if (sum(5, $c) < 16)
    {
        myerror($errno, $errmsg);
    };
?>