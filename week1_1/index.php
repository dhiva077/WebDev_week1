<!DOCTYPE html>
<html lang="en">
    <head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <title>Document</title>
    </head>
    <body>
        <table border="1" cellpadding="10" cellpadding="0">
            <?php
                for($i = 1; $i <= 3; $i++){
                    echo "<tr>";
                    for($j = 1; $j <= 5; $j++){
                        echo "<td>$i,$j";
                    }
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>