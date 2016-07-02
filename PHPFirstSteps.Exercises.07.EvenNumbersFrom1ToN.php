<?php
    $num = intval($_GET['num']);
    for ($i = 1; $i <= $num; $i++) {
        if ($i % 2 == 0)
            echo "$i\n";
    }
?>