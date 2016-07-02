<?php
    $num = intval($_GET['num']);
    $multiply = 1;
    for ($i = 2; $i <= $num; $i++) {
        $multiply *= $i;
    }
    echo $multiply;
?>