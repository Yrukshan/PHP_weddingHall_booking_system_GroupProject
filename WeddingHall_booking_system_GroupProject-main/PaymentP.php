<?php

    require 'configFile 2.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Payment</title>
        <link rel="stylesheet" href="paymentP_CSS.css">
        
    </head>
    <body>
        <div class="full-body">

            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
                <div class="cardPayment">

                    <label class="text1" for="bill">The card number from which the payment was made :</label>
                    <input type="text" class="cNum" name="cNum" placeholder="**** **** **** ****" pattern="[0-9]{16}" minlength="16" maxlength="16" required>

                    <label for="date-inputID" class="text1">Date :</label>
                    <input type="date" name="date_inputID" class="date-input" required>
                    
                    <div class="price_table">
                        <div class="table-sub">
                            <div class="sub_total1">Sub total</div>
                            <div class="sub_total1-1">Rs.

                            <?php

                                    //require_once 'configFile.php';

                                    //$sql_2 = "SELECT *(columnNames) FROM *(tableName) WHERE *(columnName) LIKE *(ID name what we want)";

                                    //$results = $connection_1->query($sql_2);    
                                    //$row=$result->fetch_assoc();
                                    //echo $row["hall-price"];
                            ?>
                               
                            </div>
                        </div>
                        <div class="table-sub">
                            <div class="sub_total2">Total</div>
                            <div class="sub_total2-1">Rs.</div>
                        </div>
                    </div>

                    <input type="submit" class="processPay" name="form_submit" value="Process Pay" onclick="alert_b();">  
        
                </div>
                
            </form>  
    
            <div class="paymentDetail">

                <?php
                
                    require 'cofigFile.php';
                    $hotelTable = "SELECT hName,hCity,seeting,priceRange,introduction FROM hoteltable";
                    $result = $connection_hotelTable->query($hotelTable);

                    if($result -> num_rows > 0)
                    {
                        $row = $result -> fetch_assoc();
                        echo '<div class="hotelPic">';
                        echo '<img class="example-image" src="wedding-party-abstract-concept-vector-illustration-2GEBFC9.jpg">';
                        //echo $row[""];
                        echo '</div>';
                        echo '<div class="moreDetail">';
                        //echo $row["introduction"];
                        echo '</div>';
                    }
                
                ?>
            </div>

        </div>

        <script>
            function alert_b()
                    {
                        alert("Your payment is successful, Thank you!");
                    }
        </script>
        
    </body>

    <?php
        if(isset($_POST["form_submit"]))
        {
            $c_Num = $_POST["cNum"];
            $date = $_POST["date_inputID"];

            $payment_data = "INSERT INTO payments_new VALUES ('$c_Num','$date')";

            if($connection_paymentTable -> query($payment_data))
            {
                echo '';
            }
            else
            {
                echo "Insert failed".$connection_paymentTable->error ; 
            }
        }
    $connection_paymentTable->close();

    ?>

</html>