<!DOCTYPE html>
<html>
    <head>
        <title> Admin Dashboard </title>
        <link rel="stylesheet" href="Admin_dashboard_CSS.css">
        
    <meta charset="UTF-8">
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
                <li class="link"><a href="dinil_admin_update_detail.php">Admin Account</a></li>
            </ul>
        </nav>

        <div class="main">

            <div class="top-section">

                <div class="user-detail">
                    <div class="user-pic">
                        <img class="image-admin" src="administrators-6.png">
                    </div>
                    <div class="text1">Components</div>
                    <div><a href="Online_payments.php"><button class="user-acc-button">Payements</button></a></div>
                    <div><a href="Reservations.php"><button class="hotel-acc-button">Reservations</button></a></div>
                </div>
                
                <div class="accounts">
                    <div class="user-accounts">
                        <div class="text-account">User Account:</div>
                        <iframe src="iframe1-user-acc.php" class="iframe1"></iframe>
                    </div>
                    <div class="hotel-accounts">
                        <div  class="text-account">Hotel Account:</div>
                        <iframe src="iframe2-hotel-acc.php" class="iframe2"></iframe>
                    </div> 
    
                </div>
                
            </div>
    
            <div class="bottom-section">
                <div class="b-section1">
                    <div class="text2">Manage user account</div>
                    <div>
                        <form action="dinil_delete-user-account.php" method="POST" enctype="multipart/form-data">  

                            <div><input type="text" name="uID" class="input" placeholder="user account"></div>
                            <div class="buttons">
                                <input type="submit" class="active-b" value="Delete">
                            </div>

                        </form>
                    </div>
                </div>

                <div class="b-section2">
                    <div class="text2">Manage hotel account</div>
                    <div>
                        <form action="dinil_delete-hotel-account.php" method="POST" enctype="multipart/form-data"> 

                            <div><input type="text" name="hID" class="input" placeholder="Hotel account"></div>
                            <div class="buttons">
                                <input type="submit" class="active-b" value="Delete">
                            </div>

                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
        <a href="nadushka/nadushka_review.php"><button class="hotel-acc-button">Cotact us-Delete</button></a>
        <a href="nadushka/nadushka_email.php"><button class="hotel-acc-button">Cotact us-Update</button></a>

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
            <a href="rukshan/RUKSHAN ABOUT US PAGE/index.html"><p>About Us</p></a>
            <a href="nadushka/Contact.html"><p>Contact Us</p></a>
          </div>

          <div class="footer-col">
            <h4>Legal</h4>
            <a href="nadushka/faq.html"><p>FAQs</p></a>
            <p id="terms">Terms & Conditions</p>
            
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