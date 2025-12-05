<?php
  session_start();
?>

<!DOCTYPE html>
<html>

    <head>
        <title>Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


        <style>
            
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
    height: 30px;
    position: fixed;
    background-color: #f3f4f6;
    width: 100%;
    border-bottom: solid;
    border-width: 1px;
    border-color:  rgb(181, 181, 181);
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





        .full-dis
            {
                display: grid;
                grid-template-columns: 1fr 1fr 1fr;
                column-gap: 5px;
                row-gap: 14px;
                margin:0px 150px 0px 150px;
            }
            .first
            {
                margin-bottom: 5px;
                margin-left: 5px;
            }
            .hotelAd
            {
                height: 350px;
                margin-top: 80px;
                width: 270px;
                border-radius: 5px;
                padding-top:1px;
                cursor: pointer;
                transition: 0.25s;
                box-shadow: 1px 1px 8px rgb(125, 125, 125);
            }
            .top-Ad
            {
                height: 227px;
                margin-left: 5px;
                margin-right: 5px;
                margin-top: 5px;
                border-radius: 5px;
            }
            .hotel-name
            {
                height: 15px;
                margin-left: 5px;
                margin-top: 3px;
                border-radius: 5px;
                padding:3px 0px 0px 10px;
                margin-right: 5px;
                font-family:Arial, Helvetica, sans-serif;
                font-size: 15px;
                font-weight: bold;
                transition: 0.2s;
            }
            
            .middel
            {

                display:grid;
                grid-template-columns: 10fr 8fr;
            }
            .city
            {
                height: 20px;
                border-radius: 5px;
                margin-top: 3px;
                margin-left: 5px;
                margin-right: 5px;
                padding:3px 0px 0px 10px;
                font-family:Arial, Helvetica, sans-serif;
                font-size: 12px;
                transition: 0.2s;
            }
            
            .seeting
            {
                height: 25px;
                border-radius: 5px;
                margin-top: 3px;
                margin-left: 5px;
                margin-right: 5px;
                padding:3px 0px 0px 10px;
                font-family:Arial, Helvetica, sans-serif;
                font-size: 13px;
                transition: 0.2s;
            }
            .seeting:hover
            {
                background-color: #DFA899;
                border-color: white;
            }
            .price
            {
                height: 15px;
                border-radius: 5px;
                font-weight:bold;
                margin-top: 3px;
                margin-left: 5px;
                margin-right: 5px;
                margin-bottom: 8px;
                padding:3px 0px 0px 10px;
                font-family:Arial, Helvetica, sans-serif;
                font-size: 15px;
                transition: 0.2s;
            }
            
            .price:hover
            {
                background-color: #DFA899;
                border-color: white;
            }
            .ratings
            {
                height: 8px;
                border-radius: 5px;
                margin-top: 0px;
                margin-left: 0px;
                margin-right: 0px;
                margin-bottom: 0px;
                padding:3px 0px 0px 0px;
                font-family:Arial, Helvetica, sans-serif;
                font-size: 15px;
            }
            .bottom-Ad
            {
                border-radius: 5px;
                border: solid;
                border-width: 1px;
                border-color: #DFA899;
                margin-top: 3px;
                margin-left: 5px;
                margin-right: 5px;
                margin-bottom: 3px;
                padding:3px 0px 0px 5px;
                font-family:Arial, Helvetica, sans-serif;
                font-size: 15px;
                transition: 0.2s;
            }
            .bottom-Ad:hover
            {
                background-color: #DFA899;
                border-color: white;
            }
            
            .hotelAd:hover
            {
                box-shadow: 0px 0px 5px #DFA899;
            }
            .default_image
            {
                height: 100%;
                width: 100%;
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
            <li class="link"><a href="nadushka/Contact.html">Contact Us</a></li>
            <li class="link"><a href="nadushka/faq.html">F&Qs</a></li>
        </ul>
    </nav>

        <div class="full-dis">

            <?php
            
            require 'dinil_cofigFile.php';
            $hotelTable = "SELECT * FROM hotel_table";

            $result = $connection_hotelTable->query($hotelTable);
            
            if($result -> num_rows > 0)
            {
                while($row = $result -> fetch_assoc())
                {   
                  //done by dinil
                    $hotelDetailUrl = "uvindu_hotel_Detail.php?hotel_id=" . urlencode($row["hotel_id"]);

                    echo '<div class="first">';
                    echo '<a href="' . $hotelDetailUrl . '">';
                    echo '<div class="hotelAd">';
                    echo '<div class="top-Ad"><img class="default_image" src="wedding-party-abstract-concept-vector-illustration-2GEBFC9.jpg"></div>';
                    echo '<div class="bottom-Ad">';
                    echo ' <div class="hotel-name">';
                    echo  $row["hotel_name"];
                    echo '</div>';
                    echo '<div class="middel">';
                    echo '<div class="city">';
                    echo $row["hotel_address"];
                    echo '</div>';
                    echo '<div class="seeting">Seeting:';
                    echo $row["noOf_seetings"];
                    echo '</div>';
                    echo '</div>';
                    echo '<div class="price">Rs.';
                    echo $row["price_per_plate"];
                    echo '(Price per plate)</div>';
                    echo '</a>';
                    echo '</div>';
                    echo '<div class="ratings"></div>';
                    echo '</div>';
                    echo '</div>';
                }
                
            }
            else 
            {
                echo "no results";
            }
            ?>
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
              With a user-friendly interface and a vast selection of hotels,
              Cherrish Booking aims to provide a stress-free experience for travelers
              seeking the perfect stay.
            </p>

          </div>

          <div class="footer-col">
            <h4>Company</h4>
            <a href="../rukshan/RUKSHAN ABOUT US PAGE/index.html"><p>About Us</p></a>
            <a href="../nadushka/Contact.html"><p>Contact Us</p></a>
          </div>

          <div class="footer-col">
            <h4>Legal</h4>
            <a href="../nadushka/faq.html"><p>FAQs</p></a>
            <p><a href="#" id="terms">Terms & Conditions</a></p>
            
          </div>

          <div class="footer-col">
            <h4>Resources</h4>
            <p><a href="#" id="social">Social Media</a></p>
            <p><a href="#" id="help">Help Center</a></p>
            
          </div>

        </div>

        
       
      </footer>

    </body>

</html>