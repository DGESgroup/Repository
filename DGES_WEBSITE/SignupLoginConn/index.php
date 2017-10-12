<?php
  session_start();
?>

<!DOCTYPE html>

<html>

    <head>
<title>DGES, Inc.</title>

        <!--LINKING TO MAIN CSS FILE-->
        <link rel="stylesheet" href="styling/style.css" />

      <!--LINKING TO BACKGROUND IMAGE & SETTING FONTS-->
<style>

    p.sansserif {
        font-family: Arial, Helvetica, sans-serif;
    }



body {

        background-image: url("http://www.designbolts.com/wp-content/uploads/2014/03/Light-Blue-blur-background1.jpg");
}

.clear {
  clear:both;
}

#main {
  margin-bottom: 100px;
  float: left;

}

.logout {
  color: red;
  float: left;
}

a {
  text-decoration: none;
  color: black;
  font-weight: bold;
}
</style>

</head>

<body>


      <!--DISPLAYING LOGO IMAGE-->

    <div id="logo">
     <img src="C:\Users\matth\Dropbox\CURRENT_WORK\DGES_WEBSITE\pics\DGES_LOGO.png" width=256 height=95.63>
    </div>




    <!-- MENU BAR-->
    <div id="main">
        <div id="header">
            <div id="menubar">
                <ul id="menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="examples.html">About Us</a></li>
                    <li><a href="page.html">Contact Us</a></li>
                    <li><a href="another_page.html">Blog</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="clear"></div>


  <br>
  <!--PHP code that allow the user to see this content only if user is login-->
<?php

  if (isset($_SESSION['u_email'])) {
    echo "You are logged in to the DGES website and ready to learn";
    # code...
  }
 ?>

 <!--show logout form if we are logged in-->
 <?php
    if (isset($_SESSION['u_email'])) {
        echo '
        <br>
        <hr>
        <br>
        <br>
        <br>
          <button type="button"><a href="includes/filterdata.php">Filter</a></button>
          <br>
          <hr>
          <br>
          <br>
          <br>
        <!--show logout form -->
          <form action="includes/logout-inc.php" method="POST">
            <button type="submit" name="submitout" class="logout">Logout</button>
          </form>';
    } else {
      echo '     <br>
       <!--ENTERING USERNAME AND PASSWORD-->
        <form action="includes/login-inc.php" method="POST">
            Username: <input type="text" name="user" placeholder="Enter Email:"><br>
            Password: <input type="password" name="password" placeholder="Enter Password">
            <!-- ADDING A LOGIN BUTTON-->
            <button type="submit" name="submit">Login</button>
            <!-- ADDING A SIGN UP BUTTON-->
            <button type="button"><a href="signup.php">Sign Up</a></button>

        </form>';
    }
  ?>





    <!-- FOOTER -->

    <p>
     <center>

         <div id="blah">
         Copyright © 2017 DGES, Inc. All rights reserved.</div></center> </p>









</body>

</html>
