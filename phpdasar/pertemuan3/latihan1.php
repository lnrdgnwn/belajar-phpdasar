<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Latihan 1</title>
        <style>
            .warna-baris {
                background-color : silver;
            }
        </style>
    </head>
    <body>
        <table border="1" cellpadding="10" cellspacing ="0">
            <?php for($i = 0; $i <5; $i++) { ?>
                <tr class ="warna-baris">
                <?php
                    for($j = 0; $j <6; $j++) { ?>
                    <td>
                        <?=
                             "$i,$j";
                        ?>
                    </td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </table>
    </body>
    </html>