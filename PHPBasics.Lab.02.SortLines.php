<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>My PHP</title>
    </head>
    <body>
    <?php
    if (isset($_GET['lines'])) {
        $towns = $_GET['lines'];
        $towns = explode("\n", $towns);
        $towns = array_map('trim', $towns);
        sort($towns, SORT_STRING);
        $towns = implode("\n", $towns);
    }
    ?>
    <form>
        <div><textarea rows="10" name="lines"><?php if (isset($towns)) echo $towns ?></textarea></div>
        <div><input type="submit" value="Sort"></div>
    </form>
    </body>
</html>