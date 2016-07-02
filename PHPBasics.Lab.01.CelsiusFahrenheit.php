<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>My PHP</title>
    </head>
    <body>
    <?php
        function  celToFah (float $cel):float {
           return $cel * 1.8 + 32;
        }
        function  fahToCel (float $fah):float {
            return ($fah - 32) / 1.8;
        }
        $msgCelsius = "";
        if (isset($_GET['cel'])) {
            $cel = floatval($_GET['cel']);
            $fah = celToFah($cel);
            $msgCelsius = "$cel &deg;C = $fah &deg;F";
        }
        $msgFahrenheit = "";
        if (isset($_GET['fah'])) {
            $fah = floatval($_GET['fah']);
            $cel = fahToCel($fah);
            $msgFahrenheit = "$fah &deg;F = $cel &deg;C";
        }
    ?>
    <form>
        Celsius: <input type="number" name="cel" />
        <input type="submit" value="Convert">
        <?= $msgCelsius ?>
    </form>
    <br>
    <form>
        Fahrenheit: <input type="number" name="fah" />
        <input type="submit" value="Convert">
        <?= $msgFahrenheit ?>
    </form>
    </body>
</html>