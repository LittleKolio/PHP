<?php
    $num = intval($_GET['num']);
    for ($i = $num; $i >= 1; $i--) {
        if ($i % 2 != 0)
            echo "$i\n";
    }
?>