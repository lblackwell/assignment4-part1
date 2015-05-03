<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Multiplication Table</title>
    </head>
    <body>
        <?php
            function createRow($minMultiplier, $maxMultiplier, $multiplicand)
            {
                echo "<tr>";
                echo "<td>".$multiplicand."</td>";
                for($i = $minMultiplier; $i <= $maxMultiplier; $i++)
                {
                    echo "<td>".$multiplicand * $i."</td>";
                }
                echo "</tr>";
            }

            $allOkay = True;

            if(empty($_GET['min-multiplicand']))
            {
                echo "<p>";
                echo "Missing parameter min-multiplicand.";
                echo "</p>";
                $allOkay = False;
            }
            if(empty($_GET['max-multiplicand']))
            {
                echo "<p>";
                echo "Missing parameter max-multiplicand.";
                echo "</p>";
                $allOkay = False;
            }
            if(empty($_GET['min-multiplier']))
            {
                echo "<p>";
                echo "Missing parameter min-multiplier.";
                echo "</p>";
                $allOkay = False;
            }
            if(empty($_GET['max-multiplier']))
            {
                echo "<p>";
                echo "Missing parameter max-multiplier.";
                echo "</p>";
                $allOkay = False;
            }
            if(!is_int(intval($_GET['min-multiplicand'])))
            {
                echo "<p>";
                echo "min-multiplicand must be an integer.";
                echo "</p>";
                $allOkay = False;
            }
            if(!is_int(intval($_GET['max-multiplicand'])))
            {
                echo "<p>";
                echo "max-multiplicand must be an integer.";
                echo "</p>";
                $allOkay = False;
            }
            if(!is_int(intval($_GET['min-multiplier'])))
            {
                echo "<p>";
                echo "min-multiplier must be an integer.";
                echo "</p>";
                $allOkay = False;
            }
            if(!is_int(intval($_GET['max-multiplier'])))
            {
                echo "<p>";
                echo "max-multiplier must be an integer.";
                echo "</p>";
                $allOkay = False;
            }
            if(intval($_GET['min-multiplicand']) > intval($_GET['max-multiplicand']))
            {
                echo "<p>";
                echo "Minimum multiplicand larger than maximum.";
                echo "</p>";
                $allOkay = False;
            }
            if(intval($_GET['min-multiplier']) > intval($_GET['max-multiplier']))
            {
                echo "<p>";
                echo "Minimum multiplier larger than maximum.";
                echo "</p>";
                $allOkay = False;
            }
            if(intval($_GET['min-multiplicand']) < 0)
            {
                echo "<p>";
                echo "min-multiplicand must be a positive integer.";
                echo "</p>";
                $allOkay = False;
            }
            if(intval($_GET['max-multiplicand']) < 0)
            {
                echo "<p>";
                echo "max-multiplicand must be a positive integer.";
                echo "</p>";
                $allOkay = False;
            }
            if(intval($_GET['min-multiplier']) < 0)
            {
                echo "<p>";
                echo "min-multiplier must be a positive integer.";
                echo "</p>";
                $allOkay = False;
            }
            if(intval($_GET['max-multiplier']) < 0)
            {
                echo "<p>";
                echo "max-multiplier must be a positive integer.";
                echo "</p>";
                $allOkay = False;
            }

            if($allOkay == True)
            {
                echo "<table>";
                echo "<tr>";
                echo "<td></td>";

                for($j = $_GET['min-multiplier']; $j <= $_GET['max-multiplier']; $j++)
                {
                    echo "<td>".$j."</td>";
                }

                for($k = $_GET['min-multiplicand']; $k <= $_GET['max-multiplicand']; $k++)
                {
                    createRow($_GET['min-multiplier'], $_GET['max-multiplier'], $k);
                }

                echo "</table>";
            }
        ?>
    </body>
</html>