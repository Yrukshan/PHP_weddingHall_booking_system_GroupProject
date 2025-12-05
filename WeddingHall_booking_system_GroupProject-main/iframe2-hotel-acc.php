<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Accounts</title>
    <style>
        
        .topic
        {
            display:grid;
            grid-template-columns:70px 150px 130px 100px 190px 190px 250px 200px 200px 200px 200px 200px 200px;
            row-gap: 2px;
            column-gap: 2px;
        }
        .num
        {
            height:35px;
            background-color: rgb(111, 165, 113);
        }
        .id
        {
            height:35px;
            background-color:  rgb(111, 165, 113);
        }
        .name
        {
            height:35px;
            background-color: rgb(111, 165, 113);
        }
        .gmail
        {
            height:35px;
            background-color:  rgb(111, 165, 113);
        }
        .num-e
        {
            height:35px;
            background-color: rgb(168, 209, 169);
        }
        .id-e
        {
            height:35px;
            background-color:   rgb(168, 209, 169);
        }
        .name-e
        {
            height:35px;
            background-color:   rgb(168, 209, 169);
        }
        .gmail-e
        {
            height:35px;
            background-color: rgb(168, 209, 169);
        }
        .all-acc
        {
            display:grid;
            row-gap: 2px;
            column-gap: 2px;
        }
    </style>
    
</head>
<body>
    <div class="all-acc">
        <div class="topic">
            <div class="num">Hotel No.</div>
            <div class="id">Hotel ID</div>
            <div class="name">Hotel Name</div>
            <div class="gmail">City</div>
            <div class="gmail">hotel address</div>
            <div class="gmail">hotel email</div>
            <div class="id">hotel facilities</div>
            <div class="name">hotel phoneNo</div>
            <div class="gmail">No. Of rooms</div>
            <div class="gmail">No Of seeting</div>
            <div class="gmail">Password</div>
            <div class="gmail">Price per plate</div>
            <div class="gmail">additional informations</div>
        </div>

        <?php
        
            require 'dinil_configFile_hotelAcc.php';

            $hotelTable = "SELECT * FROM hotel_table";
            $results = $connection_hotelTable->query($hotelTable);
            
            if($results -> num_rows > 0)
            {   
                $i=1;
                while($row = $results -> fetch_assoc())
                {
                    echo '
                        <div class="topic">
                        <div class="num-e">'.$i.'</div>
                        <div class="id-e">'.$row["hotel_id"].'</div>
                        <div class="gmail-e">'.$row["hotel_name"].'</div>
                        <div class="name-e">'.$row["city"].'</div>
                        <div class="gmail-e">'.$row["hotel_address"].'</div>
                        <div class="gmail-e">'.$row["hotel_email"].'</div>
                        <div class="gmail-e">'.$row["hotel_facilities"].'</div>
                        <div class="gmail-e">'.$row["hotel_phoneNo"].'</div>
                        <div class="id-e">'.$row["noOf_rooms"].'</div>
                        <div class="name-e">'.$row["noOf_seetings"].'</div>
                        <div class="gmail-e">'.$row["password"].'</div>
                        <div class="gmail-e">'.$row["price_per_plate"].'</div>
                        <div class="gmail-e">'.$row["additional_info"].'</div>
                        </div>

                    ';
                    $i++;
                }
            }
        
        ?>
        
    </div>
    
    
</body>
</html>