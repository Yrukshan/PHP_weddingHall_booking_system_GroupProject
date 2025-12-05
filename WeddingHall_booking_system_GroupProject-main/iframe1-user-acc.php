<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Accounts</title>
    <style>
    .topic
        {
            display:grid;
            grid-template-columns:70px 100px 130px 130px 100px 100px 180px 100px 210px;
            row-gap: 2px;
            column-gap: 2px;
        }
        .num
        {
            height:25px;
            background-color: rgb(108, 108, 162);
        }
        .id
        {
            height:25px;
            background-color: rgb(108, 108, 162);
        }
        .name
        {
            height:25px;
            background-color: rgb(108, 108, 162);
        }
        .gmail
        {
            height:25px;
            background-color: rgb(108, 108, 162);
        }
        .num-e
        {
            height:25px;
            background-color: rgb(138, 138, 211);
        }
        .id-e
        {
            height:25px;
            background-color: rgb(138, 138, 211);
        }
        .name-e
        {
            height:25px;
            background-color: rgb(138, 138, 211);
        }
        .gmail-e
        {
            height:25px;
            background-color:rgb(138, 138, 211);
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
            <div class="num">User No.</div>
            <div class="id">User ID</div>
            <div class="name">User Name</div>
            <div class="gmail">User First name</div>
            <div class="id">User Last name</div>
            <div class="name">User Regional code</div>
            <div class="gmail">User Password</div>
            <div class="name">Contact</div>
            <div class="gmail">User Email</div>
        </div>

        <?php
        
            require 'dinil_configFile_userAcc.php';

            $userTable = "SELECT * FROM users";
            $results = $connection_userTable->query($userTable);

            if($results->num_rows > 0)
            {
                $i=1;
                while($row = $results -> fetch_assoc())
                {
                    echo '<div class="topic">';
                    echo '<div class="num-e">';
                    echo $i.".";
                    echo '</div>';
                    echo '<div class="id-e">';
                    echo $row["Registerid"];
                    echo '</div>';
                    echo '<div class="name-e">';
                    echo $row["Username"];
                    echo '</div>';
                    echo '<div class="gmail-e">';
                    echo $row["Firstname"];
                    echo '</div>';
                    echo '<div class="id-e">';
                    echo $row["Lastname"];
                    echo '</div>';
                    echo '<div class="name-e">';
                    echo $row["Regionalcode"];
                    echo '</div>';
                    echo '<div class="gmail-e">';
                    echo $row["userPassword"];
                    echo '</div>';
                    echo '<div class="name-e">';
                    echo $row["Contact"];
                    echo '</div>';
                    echo '<div class="gmail-e">';
                    echo $row["Email"];
                    echo '</div>';
                    echo '</div>';
                    
                    $i=$i+1;
                }
            }
        
        ?>

    </div>
    
    
</body>
</html>