<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <?php
        $bookName = "Dark Matter";
        $read = true;
    ?>
    <h1>
        <?php
            if ($read) {
                echo "you have read \"$bookName\".";
            }
            else{
                echo "you have not read \"$bookName\".";
            }
        ?>
        <br>
        <?= "php tag with echo ready for print" ?>

    </h1>
</body>
</html>