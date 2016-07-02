<?php
    $num = intval($_GET['num']);
    $n = 3;
    $arr = array();
    $arr[0] = 1;
    $arr[1] = 1;
    for ($i = 2; $i <= $num; $i++) {
        $trib = 0;
        for ($j = $i - 1; $j >= $i - $n && $j >= 0; $j--) {
            $trib += $arr[$j];
        }
        $arr[$i] = $trib;
    }
    foreach ($arr as $e) {
        echo "$e\n";
    }
?>
