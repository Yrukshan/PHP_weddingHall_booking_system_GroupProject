<?php
//done by uvindu
  SESSION_START();

    require 'uvindu_config.php';

    //done by dinil
    if (isset($_GET['hotel_id'])) {
        $hotel_id = $_GET['hotel_id'];

        $query = "SELECT * FROM hotel_table WHERE hotel_id = ?";
        $stmt = $conn->prepare($query);//prepare function for retrive data from queary
        $stmt->bind_param("s", $hotel_id);//attach variables to the dummy values in the prepared template
        $stmt->execute();//Binds parameter values ​​and sends them to the server

        $result = $stmt->get_result();

        if($result->num_rows > 0) {
            $hotel = $result->fetch_assoc();
            
            $hotelID = htmlspecialchars($hotel['hotel_id']); 
            $hotelName = htmlspecialchars($hotel['hotel_name']);
            $hotelAddress = htmlspecialchars($hotel['hotel_address']);
            $hotelContact = htmlspecialchars($hotel['hotel_phoneNo']);
            $hotelSeating = htmlspecialchars($hotel['noOf_seetings']);
            $pricePP = htmlspecialchars($hotel['price_per_plate']);
            $hotelRooms = htmlspecialchars($hotel['noOf_rooms']);
            $hotelFacilities =htmlspecialchars($hotel['hotel_facilities']);
            $additionalInfo = htmlspecialchars($hotel['additional_info']);
        } 
        else {
            $hotelID = 0;
            $hotelName = "Display Hotel Name";
            $hotelAddress = "Display Address of the hotel";
            $hotelContact = "Display Contact number of the hotel";
            $hotelSeating = " Display Seating details";
            $pricePP = "Display price";
            $hotelRooms = "Display No of rooms";
            $hotelFacilities = "Display Hotel Facilities in pointwise ";
            $additionalInfo = "Display a text about details of the hotel";
        }
        $stmt->close();
    }
    else 
    {
        echo "Invalid request. No hotel ID provided.";
    }
    //done by uvindu
    $_SESSION['hotelID'] = $hotel_id; 
$conn->close();
      
?>


<!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title><?php echo $hotelName; ?></title>
               

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <style>

.leftContainer {
    width: 70%;
    float: left;
}


.rightContainer {
    width: 25%;
    float: right;
    margin-left: 10px;
}

.rightContainer button
{
    width: 250px;
    height: 60px;
    background: #4593C6;
    border: none;
    outline: none;
    border-radius: 20px;
    cursor: pointer;
    font-size: 16px;
    color: aliceblue;
    font-weight: 500;
    font-size: 18px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 5);
}


.hotelDetails {
    padding: 20px;
    border: 1px solid #ccc;
    margin-bottom: 20px;

}


.hotelImg {
    width: 400px;
    height: 400px;
    border-radius: 5px;
}


button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    margin-left:30px;
    margin-right:30px;
    margin-left:30px;
    height:50px;
    width:250px;
}


button:hover {
    background-color: #45a049;
}


.hotelFacilities {
    padding: 20px;
    border: 1px solid #ccc;
    margin-bottom: 20px;
    clear:both;
}


.aboutHotel {
    padding: 20px;
    border: 1px solid #ccc;
    margin-top: 40px;
    margin-bottom: 20px;
}

.priceTable{
    font-size:150%;
}







        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

*
{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

:root
{
    --primary-color: #2c3855;
    --primary-color-dark: #435681;
    --text-dark: #333333;
    --text-light: #767268;
    --extra-light: #f3f4f6;
    --white: #ffffff;
    --maxwidth: 1200px;
}

*
{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.section-container
{
    max-width: var(--maxwidth);
    margin: auto;
    padding: 5rem 1rem;
}

.section-header
 {
    font-size: 2rem;
    font-weight: 600;
    color: var(--text-dark);
    text-align: center;
}
  
  a
{
    text-decoration: none;
}
  
img 
{
    width: 100%;
    display: flex;
}

body
{
   font-family: 'poppins',sans-serif;
}

/*header*/
nav
{
    
    max-width: var(--maxwidth);
    margin: auto;
    padding: 2rem 1rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.nav-logo 
{
    font-size: 1.5rem;
    font-weight: 600;
    color: var(--text-dark);
}

.nav_-logo i {
    font-size: 1.5rem;
    font-weight: 600;
    color: var(--text-dark);
}

.nav-link
{
    list-style: none;
    display: flex;
    align-items: center;
    gap: 2rem;
}

.link a
{
    font-weight: 500;
    color: var(--text-light);
    transition: 0.3s;
}

.link a:hover 
{
    color: var(--primary-color);
}



/*footer*/

.footer {

    background-color: var(--white);
  }
  
  .footer-container {
    display: grid;
    grid-template-columns: 2fr repeat(3, 1fr);
    gap: 5rem;
  }
  
  .footer-col h3 {
    margin-bottom: 1rem;
    font-size: 1.5rem;
    font-weight: 600;
    color: var(--text-dark);
  }
  
  .footer-col h4 {
    margin-bottom: 1rem;
    font-size: 1.2rem;
    font-weight: 600;
    color: var(--text-dark);
  }
  
  .footer-col p {
    margin-bottom: 1rem;
    color: var(--text-light);
    cursor: pointer;
    transition: 0.3s;
  }
  
  .footer-col p:hover {
    color: var(--text-dark);
  }



   /*id*/
   #terms 
  {
    margin-bottom: 1rem;
    color: var(--text-light);
    cursor: pointer;
    transition: 0.3s;
  }

  #terms:hover 
  {
    color: var(--text-dark);
  }

  #social 
  {
    margin-bottom: 1rem;
    color: var(--text-light);
    cursor: pointer;
    transition: 0.3s;
  }

  #social:hover 
  {
    color: var(--text-dark);
  }

  #help
  {
    margin-bottom: 1rem;
    color: var(--text-light);
    cursor: pointer;
    transition: 0.3s;
  }

  #help:hover 
  {
    color: var(--text-dark);
  }

    </style>            
            </head>
            <body>
            <nav>
        <div class="nav-logo">
            <i class='bx bxs-location-plus'></i>
            Cherrish Booking
        </div>
        <ul class="nav-link">
            <li class="link"><a href="avisha/home_page.php">Home</a></li>
            <li class="link"><a href="dinil_hotelLPage.php">Hotels</a></li>
            <li class="link"><a href="nadushka/Contact.html">Contact Us</a></li>
            <li class="link"><a href="nadushka/faq.html">F&Qs</a></li>
        </ul>
    </nav>
 
      <div class="leftContainer">
        <div class="imgContainer">
            <img class="hotelImg" src="wedding-party-abstract-concept-vector-illustration-2GEBFC9.jpg" alt="Hotel Image">
        </div>
        
        <div class="hotelDetails">
            <h2 class="hotelName"><?php echo $hotelName; ?></h2>
            <p class="hotelAdress"><?php echo $hotelAddress; ?></p>
            <p class="hotelContact"><?php echo $hotelContact; ?></p>
            <table class="seetTable">
                <tr>
                    <th>Seeting details</th>
                </tr>
                <tr>
                    <th><?php echo $hotelSeating; ?></th>
                </tr>
            </table>
            <table class="roomTable">
                <tr>
                    <th>No of rooms</th>
                </tr>
                <tr>
                    <th><?php echo $hotelRooms; ?></th>
                </tr>
            </table>
        </div>
    </div>


    <div class="rightContainer">

            <a href="rukshan/rukshan_Hotel Wedding Reservation/indexreservation.php"><button >Reserve hotel</button></a><br><br><br><br><br>
    
        <table class="priceTable">
            <tr>
                <th>Price per plate : Rs </th>
                <th><?php echo $pricePP; ?></th>
            </tr>
        </table><br><br><br><br><br>

                <div class="hotelFacilities">
                    <h3>Hotel Facilities</h3>
                    <ul>
                    <?php
                            $facilities = explode(",", $hotelFacilities);
                            foreach($facilities as $facility) {
                                echo "<li>".$facility."</li>";
                            }
                    ?>
                    </ul>
                </div>

                <div class="aboutHotel">
                    <p><?php echo $additionalInfo ?> 
                    </p>
                </div>
    
                <footer class="footer">
        <div class="section-container footer-container">
          <div class="footer-col">
            <h3>Cherrish Booking</h3>

            <p>
              Cherrish Booking is a premier hotel booking website that offers a seamless and
              convenient way to find and book accommodations worldwide.
            </p>

            <p>
            </p>

          </div>

          <div class="footer-col">
            <h4>Company</h4>
            <a href="rukshan/RUKSHAN ABOUT US PAGE/index.html"><p>About Us</p></a>
            <a href="nadushka/Contact.html"><p>Contact Us</p></a>
          </div>

          <div class="footer-col">
            <h4>Legal</h4>
            <a href="nadushka/faq.html"><p>FAQs</p></a>
            <p><a href="#" id="terms">Terms & Conditions</a></p>
            
          </div>

          <div class="footer-col">
            <h4>Resources</h4>
            <p><a href="#" id="social">Social Media</a></p>
            <p><a href="#" id="help">Help Center</a></p>
            
          </div>

        </div>
       
      </footer>
                </div>
    

      </body>
</html>

    

