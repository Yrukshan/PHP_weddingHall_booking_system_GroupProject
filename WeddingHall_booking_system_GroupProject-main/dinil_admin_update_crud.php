<?php

    require 'configFile2.php';

    $aID = $_POST["id"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $mname = $_POST["mname"];
    $email = $_POST["email-n"];
    $password = $_POST["newPsw"];

    if(empty($aID)||empty($fname)||empty($lname)||empty($mname)||empty($email)||empty($password))
    {
        echo "All Required";
    }
    else{
        $sql="UPDATE system_admin set F_name='$fname', L_name='$lname', M_name='$mname',Email='$email',Password='$password' WHERE Admin_ID='$aID' ";

        if($connection_paymentTable->query($sql))
        {
            echo "Updated";
        }
        else
        {
            echo "Not Updated";
        }

    }

?>
