<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
    <style>
        .kotak {
            background-color: salmon;
            float: left;
            width: 50px;
            height: 50px;
            line-height: 50px;
            text-align: center;
            margin: 3px;
            transition: 0.5s;
        }

        .kotak:hover {
            border-radius: 50%;
            transform: rotate(360deg);
        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>
    <?php
    $angka = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];
    ?>

    <?php foreach ($angka as $a) : ?>
        <?php foreach ($a as $ia) : ?>
            <div class="kotak"> <?= $ia ?></div>
        <?php endforeach; ?>
        <div class="clear"></div>
    <?php endforeach; ?>


</body>

</html>