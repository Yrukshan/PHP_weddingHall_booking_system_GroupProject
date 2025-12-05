<?php
    require_once("uvindu_config.php");

    if(isset($_POST['register_btn'])){
        $hotelName = $_POST['hotelName'];
        $hotelAddress = $_POST['hotelAdress'];  
        $hotelCity = $_POST['hotelCity'];  
        $hotelEmail = $_POST['hotelEmail'];  
        $hotelContact = $_POST['hotelContact'];  
        $hotelPassword = $_POST['hotelPassword'];
        $hotelRooms = $_POST['hotelRooms']; 
        $hotelSeetings = $_POST['hotelSeetings']; 
        $pricePP = $_POST['pricePP'];

        $hotelImage1 = $_FILES['hotelImage1']['name'];
        $hotelImage2 = $_FILES['hotelImage2']['name'];
        $hotelImage3 = $_FILES['hotelImage3']['name'];
        $tempImage1 = $_FILES['hotelImage1']['tmp_name'];
        $tempImage2 = $_FILES['hotelImage2']['tmp_name'];
        $tempImage3 = $_FILES['hotelImage3']['tmp_name'];

        if (isset($_POST['facility'])) {
            $fac = $_POST['facility'];
        } else {
            $fac = array();
        }
        $fac = implode(",", $fac);

        $additionalInfo = $_POST['additionalInfo'];

        move_uploaded_file($tempImage1,"./hotel_images/$hotelImage1");
        move_uploaded_file($tempImage2,"./hotel_images/$hotelImage2");
        move_uploaded_file($tempImage3,"./hotel_images/$hotelImage3");

        echo "<script>alert('Registration successful')</script>";

        $insert_hotels = "INSERT INTO `hotel_table` (hotel_name,
                                        hotel_address,
                                        city,
                                        hotel_email,
                                        hotel_phoneNo,
                                        password,
                                        noOf_rooms,
                                        noOf_seetings,
                                        price_per_plate,
                                        hotel_image1,
                                        hotel_image2,
                                        hotel_image3,
                                        hotel_facilities,
                                        additional_info)
                            VALUES ('$hotelName', 
                                        '$hotelAddress', 
                                        '$hotelCity', 
                                        '$hotelEmail',
                                        '$hotelContact',
                                        '$hotelPassword',
                                        $hotelRooms,
                                        $hotelSeetings,
                                        $pricePP,
                                        '$hotelImage1',
                                        '$hotelImage2',
                                        '$hotelImage3',
                                        '$fac',
                                        '$additionalInfo')" ;
    
        $run_query = mysqli_query($conn, $insert_hotels);
        if(!$run_query) {
            echo "Error: " . $conn->error;
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="hotel_reg_form.css">
    <title>Hotel registration page</title>
</head>
<body>
    <h1 class="formHeading">Vender Registration</h1>
    
    <div class="formContainer">

        <img src="images/form_img2.jpeg" alt="Form image" class="formImage">

        <div class="fieldContainer">

            <form action="" method="post" enctype="multipart/form-data" >

                <label for="hotelName">Hotel name</label><br>
                <input type="text" name="hotelName" class="field hotelName" id="hotelName" required><br><br>
                
                <label for="hotelAddress">Hotel address</label><br>
                <input type="text" name="hotelAdress" class="field hotelAddress" id="hotelAddress" required><br><br>
    
                <label for="hotelCity">City</label><br>
                <input type="text" name="hotelCity" class="field hotelCity" id="hotelCity" required><br><br>
    
                <label for="hotelEmail">Email address</label><br>
                <input type="text" name="hotelEmail" class="field hotelEmail" id="hotelEmail" required><br><br>
                
                <label for="hotelContactNo">Phone number</label><br>
                <input type="text" name="hotelContact" class="field hotelContactNo" id="hotelContactNo" required><br><br>
                
                <label for="password">Create a password</label><br>
                <input type="password" name="hotelPassword" class="field password" id="password" required><br><br>
                
                <label for="rePassword">Re-enter password</label><br>
                <input type="password"  class="field rePassword" id="rePassword" required><br><br>
    
                <label for="roomCount">Number of rooms</label><br>
                <input type="number" name="hotelRooms" class="field roomCount" id="roomCount" required><br><br>
    
                <label for="seetings">Number of seetings</label><br>
                <input type="number" name="hotelSeetings" class="field seetings" id="seetings" required><br><br>

                <label for="pricePP">Price per plate</label><br>
                <input type="number" name="pricePP" class="field price" id="price" required><br><br>


                <p class="images">Input Images of hotel</p><br>
    
                <label for="image1">Image 1</label>
                <input type="file" name="hotelImage1" class="image1" id="image1" required><br><br>

                <label for="image2">Image 2</label>
                <input type="file" name="hotelImage2" class="image2" id="image2" required><br><br>
                
                <label for="image3">Image 3</label>
                <input type="file" name="hotelImage3" class="image3" id="image3" required><br><br>
    
                <p>Select hotel facilities</p>
    
                <input type="checkbox" class="facilities" id="indoor" name="facility[]" value="indoorSpace">
                <label for="indoor"  id="labelFacility">Indoor space</label><br>
    
                <input type="checkbox" class="facilities" id="outdoor" name="facility[]" value="outdoorSpace">
                <label for="outdoor"  id="labelFacility">Outdoor space</label><br>
    
                <input type="checkbox" class="facilities" id="inhouseCatering" name="facility[]" value="inhouseCatering">
                <label for="inhouseCatering" id="labelFacility">Inhouse catering</label><br>
    
                <input type="checkbox" class="facilities" id="outsideCatering" name="facility[]" value="outsideCatering">
                <label for="outsideCatering"  id="labelFacility">Outside catering permitted</label><br>
    
                <input type="checkbox" class="facilities" id="inhouseAlcohol" name="facility[]" value="inhouseAlcohol">
                <label for="inhouseAlcohol"  id="labelFacility">Inhouse alcohol</label><br>
    
                <input type="checkbox" class="facilities" id="outsideAlcohol" name="facility[]" value="outsideAlcohol">
                <label for="outsideAlcohol"  id="labelFacility">Outside alcohol permited</label><br>
    
                <input type="checkbox" class="facilities" id="inhouseDJ" name="facility[]" value="indoorDj">
                <label for="inhouseDJ"  id="labelFacility">Inhouse DJ</label><br>
    
                <input type="checkbox" class="facilities" id="outsideDj" name="facility[]" value="outdoorDj">
                <label for="outsideDj"  id="labelFacility">Outside DJ permitted</label><br><br>
            
                <label for="additionalInfo">Enter additional details</label><br>
                <textarea name="additionalInfo" name="additionalInfo" id="additionalInfo" cols="60" rows="10"></textarea><br><br>
    
                <input type="submit" name="register_btn" class="register" id="register" value="Register"><br><br>
               
            </form>
        </div>
  
    </div>
    
</body>
</html>