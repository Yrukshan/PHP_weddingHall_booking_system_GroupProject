<?php

    $connection_hotelTable=new mysqli("localhost","root","","example-my-project");
    if($connection_hotelTable->connect_error)
    {
        die("connection failed".$connection_hotelTable->connect_error);
    }

?>