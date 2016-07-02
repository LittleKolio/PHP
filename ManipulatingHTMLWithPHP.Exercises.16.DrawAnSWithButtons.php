<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>My PHP</title>
    </head>
    <body>
    <?php
        $keys1 = array(1,2,3,4,5);
        $keys2 = array(1,2,3,4,5,6,7,8,9);
        $subArr = array_fill_keys($keys1, "<button style='background-color: blue'>1</button>");
        $arr = array_fill_keys($keys2, $subArr);
        $arr = ButtonClear($arr, 2, 2);
        $arr = ButtonClear($arr, 6, 1);

        function ButtonClear($arr, $row, $col):array
        {
            for ($r = $row; $r <= $row + 2; $r++) {
                for ($c = $col; $c <= $col + 3; $c++) {
                    $arr[$r][$c] = "<button>0</button>";
                }
            }
            return $arr;
        }
        foreach ($arr as $x) {
            foreach ($x as $t) {
                echo $t;
            }
            echo "<br>";
        }
    ?>
    </body>
</html>