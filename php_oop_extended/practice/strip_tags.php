<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP strip tags</title>
</head>
<body>
    <?php
    $str="<p>Deskripsi text yang boleh ditampilkan</p><h2>text yang tidak boleh ditampilakn</h2>";
    $text=strip_tags($str,'<h2><p>');

    // var_dump($text);
    echo $text;
    ?>
</body>
</html>