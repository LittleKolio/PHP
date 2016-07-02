<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>My PHP</title>
    </head>
    <body>
        <?php
            $num = intval($_GET['num']);
            for ($i = 1; $i <= $num; $i++) {
        ?>
        <button style="display: block"><?= $i ?></button>
        <?php
            }
        ?>
    </body>
</html>