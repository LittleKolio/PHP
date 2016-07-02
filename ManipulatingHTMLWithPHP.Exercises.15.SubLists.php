<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>My PHP</title>
    </head>
    <body>
        <ul>
        <?php
            $num1 = intval($_GET['num1']);
            $num2 = intval($_GET['num2']);
        for ($i = 1; $i <= $num1; $i++) {
        ?>
        <li>List <?= $i ?>
            <ul>
            <?php
                for ($j = 1; $j <= $num2; $j++) {
                    echo "\t<li>Element $i.$j</li>\n";
                }
            ?>
            </ul>
        </li>
        <?php
            }
        ?>
        </ul>
    </body>
</html>