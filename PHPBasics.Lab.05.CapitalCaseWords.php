<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>My PHP</title>
    </head>
    <body>
    <?php
    function isUpperCaseWord ($word)
    {
        return strtoupper($word) == $word;
    }
    if (isset($_GET['text'])) {
        $text = $_GET['text'];
        preg_match_all('/\w+/', $text, $words);
        $words = $words[0];
        $upperWords = array_filter($words, 'isUpperCaseWord');
        echo implode(', ', $upperWords);
    } else {
    ?>
    <form>
        <textarea rows="10" name="text"></textarea>
        <br>
        <div><input type="submit" /></div>
    </form>
    <?php
        }
    ?>
    </body>
</html>