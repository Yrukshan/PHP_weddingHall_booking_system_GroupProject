<!DOCTYPE html>
<html>
<head>
    <title>Update Admin detail</title>
    <style>
        .input
            {
                margin-left: 33px;
                margin-top:7px;
                width: 55%;
                height: 35px;
                margin-right: 30px;
                margin-left: 30px;
                border-radius:5px ;
                border: none;
                box-shadow: 1px 2px 5px rgb(181, 181, 181);
                padding-left: 13px;
                display: flex;
                flex-direction: row;
                justify-content:center;
            }
            body
            {
                font-family: Arial, Helvetica, sans-serif;
            }
            .sub_button
            {
                height: 45px;
                width:100px;
                font-size: 16px;
                font-weight: bold;
                margin-top: 28px;
                margin-right: 50px;
                margin-left: 50px;
                margin-bottom: 20px;
                border-radius:40px;
                border: none;
                box-shadow: 1px 2px 5px rgb(181, 181, 181);
                padding-left: 13px;
                padding-top: 3px;
                background-color: rgb(31, 31, 31);
                color: white;
                display: flex;
                justify-content:center;
                cursor: pointer;
            }

    </style>
</head>
<body>
    <h1>Edit Admin Detali</h1>
    
    <form onsubmit="confirmPswd()" action="dinil_admin_update_crud.php" method="POST" enctype="multipart/form-data">

        <lable>Admin ID</lable><br>
        <input type="text" class="input" placeholder="Your ID" name="id" maxlength="6" required><br>

        <lable>First Name:</lable><br>
        <input type="text" class="input" placeholder="first name" name="fname" maxlength="10"><br>

        <lable>Last Name:</lable><br>
        <input type="text" class="input" placeholder="last name" name="lname" maxlength="10"><br>

        <lable>Mid Name:</lable><br>
        <input type="text" class="input" placeholder="mid name" name="mname" maxlength="10"><br>

        <lable>E-mail:</lable><br>
        <input type="email" class="input" name="email-n" placeholder="abc@email.com" pattern="[a-zA-Z0-9.-+/]+@[a-z0-9A-Z.-]+\.[a-zA-Z]{2,}"><br>

        <lable>Enter the new password:</lable><br>
        <input type="password" name="newPsw"  class="input" id="pwd" maxlength="10"><br>

        <lable>Re-Enter the new password:</lable><br>
        <input type="password" class="input" id="confirmPwd" maxlength="10"><br>
        
        <input type="checkbox" clss="inputStyle" id="chechbox" onclick="enableButton()">Accept privacy policy

        <center> <input class="sub_button" type="submit" value="submit" id="submitBtn" onclick="enableButton()" disable> </center>

    </form>

    <script>

        //onsubmit="return confirmPswd()"

        function confirmPswd()
        {
             var password = document.getElementById('pwd').value
             var re_password = document.getElementById('confirmPwd').value

             if(password == re_password)
             {
                alert("password success");
                return true;
             }
             else
             {
                alert("password is maimatch");
                return false;
             }
        }



        function enableButton()
        {
            if(document.getElementById('chechbox').checked)
            {
                document.getElementById('submitBtn').disabled=false;
            }
            else
            {
                document.getElementById('submitBtn').disabled=true;
            }
        }   

    </script>
</body>
</html>