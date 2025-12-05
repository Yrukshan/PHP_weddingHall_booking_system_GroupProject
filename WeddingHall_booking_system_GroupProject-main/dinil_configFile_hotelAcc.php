<?php

    $connection_hotelTable = new mysqli("localhost","root","","database_new1");

    if($connection_hotelTable->connect_error)
    {
        die("faild".$connection_hotelTable->connect_error);
    }

?>