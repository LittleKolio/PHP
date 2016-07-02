<?php
    $num = intval($_GET['num']);
    for ($i = $num - 1; $i >= 2; $i--) {
        if ($num % $i != 0)
            echo "$i\n";
    }
?>