<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>My PHP</title>
    </head>
    <body>
        <?php
            if (isset($_GET['num1']) &&
                isset($_GET['num2']) &&
                isset($_GET['num3'])) {
                $count = 0;
                $zero = false;
                foreach ($_GET as $num) {
                    if ($num < 0)
                        $count++;
                    if ($num == 0)
                        $zero = true;
                }
                if ($count % 2 != 0 && !$zero)
                    echo "Negative";
                else
                    echo "Positive";
            } else {
        ?>
        <form>
            <div>Num1:</div>
            <input type="number" name="num1" />
            <div>Num2:</div>
            <input type="number" name="num2" />
            <div>Num3:</div>
            <input type="number" name="num3" />
            <div><input type="submit" /></div>
        </form>
        <?php
            }
        ?>
    </body>
</html>