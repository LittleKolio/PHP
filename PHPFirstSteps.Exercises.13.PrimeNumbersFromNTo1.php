<?php
    $num = intval($_GET['num']);
    //$num = 10;
    for ($i = $num; $i >= 1; $i--) {
        $isPrime = true;
        for ($j = 2; $j <= sqrt($i); $j++) {
            if ($i % $j == 0) {
                $isPrime = false;
                continue;
            }
        }
        if ($isPrime)
            echo "$i\n";
    }
?>
