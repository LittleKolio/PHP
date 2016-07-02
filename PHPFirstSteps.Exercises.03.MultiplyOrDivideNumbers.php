<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>My PHP</title>
    </head>
    <body>
        <?php
            if (isset($_GET['num1']) && isset($_GET['num2'])) {
                $num1 = intval($_GET['num1']);
                $num2 = intval($_GET['num2']);
                if ($num2 >= $num1)
                    $multiply = $num1 * $num2;
                else
                    $multiply = $num1 / $num2;
                echo $multiply;
            } else {
        ?>
        <form>
            <div>Num1:</div>
            <input type="number" name="num1" />
            <div>Num2:</div>
            <input type="number" name="num2" />
            <div><input type="submit" /></div>
        </form>
        <?php
            }
        ?>
    </body>
</html>