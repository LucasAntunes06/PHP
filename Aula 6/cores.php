<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cores</title>
</head>

<body>
    <h1 id="cores">Cores</h1>
    <table>
        <?php

        for ($i = 0; $i <= 255; $i += 10) {
            echo '<tr>';
            for ($j = 0; $j <= 255; $j += 10) {
                if ($j % 20 == 0) {
                    echo '<tr></tr>';
                }
                for ($l = 0; $l <= 255; $l += 10) {
                    $cor = "background-color:rgb($i,$j,$l)";
                    echo "<td style=$cor>&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;</td>";
                }
            }
        }
        ?>
    </table>








    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
            background-color: rgb(29, 29, 29);
            color: white;
            text-align: center;
            box-sizing: border-box;
            padding: 0;
        }

        td {
            border: solid 1px white;
            /* padding: 10px; */
        }

        h1,
        h2,
        h3,
        h4,
        h5 {
            font-size: 5em;
        }

        hr {
            width: 85%;
        }
    </style>
</body>

</html>