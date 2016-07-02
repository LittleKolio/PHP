<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>My PHP</title>
    </head>
    <body>
    <?php

    date_default_timezone_set('Europe/Sofia');

    $date = new DateTime('NOW');
    echo $date -> format('d-M-Y H:i');
    echo '<br>';

    $newDate = $date->modify('+1 day');
    echo $date -> format('d-M-Y H:i');
    echo '<br>';

    $dateStr = '31-12-2016 23:59';
    $newDateTime = DateTime::createFromFormat('d-m-Y H:i', $dateStr);
    echo $newDateTime->format('d-M-Y H:i');

    ?>
    </body>
</html>