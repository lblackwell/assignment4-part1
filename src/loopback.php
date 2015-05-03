<!DOCTYPE html>
<html>
    <head>
        <title>Loopback</title>
    </head>
    <body>
        <?php
            $inputArray = array();
            $outerArray = array();

            foreach($_POST as $key => $value)
            {
                if(empty($value))
                {
                    $value = "undefined";
                }
                $inputArray[$key] = $value;
            }

            foreach($_GET as $key => $value)
            {
                if(empty($value))
                {
                    $value = "undefined";
                }
                $inputArray[$key] = $value;
            }

            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                $outerArray["Type"] = "POST";

                if(empty($inputArray))
                {
                    $outerArray["parameters"] = null;
                }
                else
                {
                    $outerArray["parameters"] = $inputArray;
                }
            }

            elseif($_SERVER['REQUEST_METHOD'] == 'GET')
            {
                $outerArray["Type"] = "GET";

                if(empty($inputArray))
                {
                    $outerArray["parameters"] = null;
                }
                else
                {
                    $outerArray["parameters"] = $inputArray;
                }
            }

            echo json_encode($outerArray);
        ?>
    </body>
</html>