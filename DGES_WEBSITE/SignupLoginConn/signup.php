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

input:required:focus {
  border: 1px solid red;
  outline: none;
}
</style>

</head>

<body>






    <!-- MENU BAR-->
    <div id="main">
        <div id="header">
            <div id="menubar">
                <ul id="menu">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="examples.html">About Us</a></li>
                    <li><a href="page.html">Contact Us</a></li>
                    <li><a href="another_page.html">Blog</a></li>
                </ul>
            </div>
        </div>
    </div>


    <div style="clear: both"></div>
    <hr>
<div>
    <!--ENTERING PERSONAL INFORMATION-->
    <form action="includes/signup-inc.php" method = "POST">
           First Name:<br>
           <input type="text" name="firstName" required><br>
           Last Name:<br>
           <input type="text" name="lastName" required><br>
              Phone Number:<br>
           <input type="text" name="phoneNumber" place holder="123-456-7892"><br>

          Street Address:<br>
           <input type="text" name="streetAddress"><br>
           City:<br>
           <input type="text" name="cityName"><br>
           State:<br>
           <input type="text" name="stateName" placeholder="Optional"><br>
           Country<br>
           <input type="text" name="countryName" placeholder="Country"><br>
           <!--SELECTING USER TYPE-->
           User Type:
           <select name="userType">
                <option value="Student">Student</option>
               <option value="Teacher">Teacher</option>
            </select><br>


           <!--SELECTING GRADE LEVEL-->
           <select name="grade">
               <option value="gradeLevel">Grade Level:</option>
               <option value="k">K</option>
               <option value="1st">1st</option>
               <option value="2nd">2nd</option>
               <option value="3rd">3rd</option>
               <option value="1st">4th</option>
               <option value="1st">5th</option>
               <option value="2nd">6th</option>
               <option value="3rd">7th</option>
               <option value="1st">8th</option>
               <option value="1st">9th</option>
               <option value="2nd">10th</option>
               <option value="3rd">11th</option>
               <option value="1st">12th</option>
           </select><br>

           Email Address:<input type="text" name="emailAddress" required><br>
          Password: <input type="password" name="password" placeholder="At least 6 characters" required><br>
          <p><button type="submit" name="submit">Sign up</button></p>
    </form>
</div>
<hr>




<!--SELECTING FAVORITE SUBJECTS-->
<form action="">
    <input type="checkbox" name="subject" value="planguage">Programming Languages<br>
    <input type="checkbox" name="subject" value="rreading">Recommended Reading<br>
    <input type="checkbox" name="subject" value="edgames">Fun Educational Games<br>
    <input type="checkbox" name="subject" value="cinfo">Information on Universities and Careers
</form>
