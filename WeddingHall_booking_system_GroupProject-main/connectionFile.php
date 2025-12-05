<?php

    require 'configFile 2.php';

    $c_Num = $_POST["cNum"];
    $date = $_POST["date_inputID"];

    $payment_data = "INSERT INTO payments VALUES ('$c_Num','$date')";

    if($connection_paymentTable -> query($payment_data))
    {
        echo "Insert succesful";
    }
    else
    {
        echo "Insert failed".$connection_paymentTable->error ; 
    }

    $connection_paymentTable->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>connection file</title>
</head>
<body>
    <script>
        alert("Payment Successful!");
    </script>
</body>
</html>