<?php
date_default_timezone_set('America/Phoenix');

 /***************************
 * Dynamic PHP Website
 ****************************/

 $pageTitle = "PHP Dynamic Website";
 $currentTime = date('H:i:s');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$pageTitle?></title>
</head>
<body>
    <h1>Welcome</h1>

    <p>The current Server time is: <?=$currentTime?></p>

    <table class="table">
        <thead>
            <tr>
                <th>Key</th>
                <th>Value</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ( $_SERVER as $key => $value ) : ?>

                <tr>
                    <td><?=$key?></td>
                    <td><?=$value?></td>
                </tr>

            <?php endforeach; ?>

        </tbody>
    </table>

</body>
</html>