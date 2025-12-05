<?php

    $connection_paymentTable = new mysqli("localhost","root","","database_new1");

    if($connection_paymentTable -> connect_error)
    {
        die("Connection failed" . $connection_paymentTable -> connect_error);
    }

?>