<?php

    $connection_userTable = new mysqli("localhost","root","","database_new1");

    if($connection_userTable->connect_error)
    {
        die("faild".$connection_userTable->connect_error);
    }

?>