<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Accounts</title>
    <style>
        
        .all-acc
        {
            margin: 100px 0px 0px 100px;
        }
        .topic
        {
            display:grid;
            grid-template-columns:100px 100px 130px 130px ;
            row-gap: 2px;
            column-gap: 2px;
        }
        .Column_name
        {
            height:25px;
            background-color: rgb(155, 152, 67);
        }
        
        .examples
        {
            height:25px;
            background-color: rgb(206, 211, 138);
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
        <h2>Payments :</h2>
        <div class="topic">
            <div class="Column_name">Payment No.</div>
            <div class="Column_name">Payment ID</div>
            <div class="Column_name">Hotel ID</div>
            <div class="Column_name">Account No</div>
           
        </div>

        <?php
        
            require 'dinil_configFile_userAcc.php';

            $userTable = "SELECT * FROM payment";
            $results = $connection_userTable->query($userTable);

            if($results->num_rows > 0)
            {
                $i=1;
                while($row = $results -> fetch_assoc())
                {
                    echo '<div class="topic">';
                    echo '<div class="examples">';
                    echo $i.".";
                    echo '</div>';
                    echo '<div class="examples">';
                    echo $row["payment_id"];
                    echo '</div>';
                    echo '<div class="examples">';
                    echo $row["hotel_id"];
                    echo '</div>';
                    echo '<div class="examples">';
                    echo $row["account_no"];
                    echo '</div>';
                    echo '</div>';
                    
                    $i=$i+1;
                }
            }
        
        ?>

    </div>
    
    
</body>
</html>