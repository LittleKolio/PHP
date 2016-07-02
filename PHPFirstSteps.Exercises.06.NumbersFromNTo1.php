<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>My PHP</title>
    </head>
    <body>
        <?php
            if (isset($_GET['num'])) {
                $num = intval($_GET['num']);
                for ($i = $num; $i >= 1; $i--) {
                    echo "$i\n";
                }
            } else {
        ?>
            <form>
                <div>Num:</div>
                <input type="number" name="num" />
                <div><input type="submit" /></div>
            </form>
        <?php
            }
        ?>
    </body>
</html>