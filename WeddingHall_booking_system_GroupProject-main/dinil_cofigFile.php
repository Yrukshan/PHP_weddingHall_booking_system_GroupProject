<?php

    $connection_hotelTable=new mysqli("localhost","root","","database_new1");
    if($connection_hotelTable->connect_error)
    {
        die("connection failed".$connection_hotelTable->connect_error);
    }

?>