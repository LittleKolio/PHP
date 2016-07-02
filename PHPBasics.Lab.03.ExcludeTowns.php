<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>My PHP</title>
    </head>
    <body>
    <?php
    function difTowns (array $towns, array $exTowns):array
    {
        $res = [];
        foreach ($towns as $i) {
            if (!in_array($i, $exTowns))
                $res[] = $i;
        }
        return $res;
    }
    function printList (array $resT)
    {
        echo "<ul>\n";
        foreach ($resT as $i) {
            echo "<li>$i</li>\n";
        }
        echo "</ul>\n";
    }
    if (isset($_GET['towns']) && isset($_GET['townsToExclude'])) {
        $towns = array_map('trim', explode("\n", $_GET['towns']));
        $exTowns = array_map('trim', explode("\n", $_GET['townsToExclude']));
        $resultTowns = difTowns($towns, $exTowns);
        printList ($resultTowns);

    } else {
    ?>
    <form>
        <div style="display: inline-block">
            <div>Towns:</div>
            <textarea rows="10" name="towns"></textarea>
        </div>
        <div style="display: inline-block">
            <div>Exclude Towns:</div>
            <textarea rows="10" name="townsToExclude"></textarea>
        </div>
        <div><input type="submit" value="Exclude" /></div>
    </form>
    <?php
        }
    ?>
    </body>
</html>