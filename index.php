<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $size = rand(1,20);
        $num = rand(1,10);
        for ($i = 0; $i < $num; $i++) {
            echo "<p style='font-size:{$size}px'>Ciao sono Tommaso</p>";
            $size = $size + 2;
        }
    ?>
</body>
</html>