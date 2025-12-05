<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Accounts</title>
    <link rel="stylesheet" href="Reservations_CSS.css">
    
</head>
<body>
    <div class="all-acc">
        <h2>Reservations :</h2>
        <div class="topic">
            <div class="Column_name">Reservation No.</div>
            <div class="Column_name">Reservation ID</div>
            <div class="Column_name">Groom Name</div>
            <div class="Column_name">Payment Method</div>
            
        </div>

        <?php
        
            require 'dinil_configFile_userAcc.php';

            $userTable = "SELECT * FROM reservations";
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
                    echo $row["ReservationID"];
                    echo '</div>';
                    echo '<div class="examples">';
                    echo $row["GroomName"];
                    echo '</div>';
                    echo '<div class="examples">';
                    echo $row["PaymentMethod"];
                    echo '</div>';
                    echo '</div>';
                    
                    $i=$i+1;
                }
            }
        
        ?>

    </div>
    
    
</body>
</html>