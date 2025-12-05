<?php

    require 'dinil_configFile_hotelAcc.php';

    $hID = $_POST["hID"];

    $deletAcc = "DELETE FROM `hotel_table` WHERE hotel_id = $hID";

    if ($connection_hotelTable->query($deletAcc))
    {
        echo '

        <script>
            function alert_d()
            {
                alert("Deletion complete!");
            }
            alert_d();
        </script>

        ';


    } else 
    {
        echo "Deletion failed";
    }
    
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



        


</body>
</html>