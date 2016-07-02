<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>My PHP</title>
    </head>
    <body>
    <?php
    function sumIncomes (array $lines)
    {
        $sums = [];
        foreach ($lines as $l) {
            $parts = explode(':', $l);
            $town = $parts[0];
            $money = floatval($parts[1]);
            if (isset($sums[$town])) {
                $sums[$town] += $money;
            } else {
                $sums[$town] = $money;
            }
        }
        return $sums;
    }
    if (isset($_GET['towns-incomes'])) {
        $lines = array_filter(array_map('trim', explode("\n", $_GET['towns-incomes'])));
        $sums = sumIncomes($lines);
        ksort($sums);
        foreach ($sums as $town => $money) {
            echo "$town -> $money<br>";
        }
    } else {
    ?>
    <form>
        <textarea rows="10" name="towns-incomes"></textarea>
        <br>
        <div><input type="submit" /></div>
    </form>
    <?php
        }
    ?>
    </body>
</html>