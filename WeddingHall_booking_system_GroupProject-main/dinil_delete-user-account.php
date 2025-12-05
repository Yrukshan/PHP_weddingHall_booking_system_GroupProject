<?php

    require 'dinil_configFile_userAcc.php';
    
    $id = $_POST["uID"];

    $deletAcc = "DELETE FROM `users` WHERE Registerid=$id";
    
    if($connection_userTable->query($deletAcc))
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

    }
    else
    {
        echo "Deleted failed";
    }

?>