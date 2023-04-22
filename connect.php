<?php
// Connect to the database
$host = "localhost";
$username = "root";
$password = "Advait@0305";
$database = "web_design_ell802";
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST["submit"])){
  $first_name = $_POST["First_name"];
  $last_name = $_POST["Last_name"];
  $email = $_POST["Email"];
  $contact = $_POST["Contact"];

  $query = "INSERT INTO connection_request (First_name, Last_name, Email, Contact) VALUES('$first_name', '$last_name', '$email', '$contact')";
  mysqli_query($conn, $query);

  if(mysqli_affected_rows($conn) > 0) {
    echo "<script>alert('Recorded Successfully ADVAIT would connect to you in a while...');</script>";
  } else {
    echo "<script>alert('Error: Data Insertion Failed');</script>";
  }
}

mysqli_close($conn); // Close database connection
?>



<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Oleo+Script&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Marvel&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-HZnnnNJ23eR57X8aJAvCQbUXyPxVnbxnsbzdG7VqE/ZLSuZ7fijF5dX9bq5OFiP6oItIBQLpOj6g5U6m2M6iJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel = "stylesheet" href="home.css" />
  <title>ADVAIT CHAVAN's | Let's Connect</title>
  <link rel="icon" href="https://th.bing.com/th/id/OIP.ZJKfzU3y4jHOmTHwK9tf4AHaHa?pid=ImgDet&rs=1">

  
  
  <script>
    function validateForm() {
    var firstName = document.forms[0]["First_name"].value;
    var lastName = document.forms[0]["Last_name"].value;
    var email = document.forms[0]["Email"].value;
    var contactNumber = document.forms[0]["Contact"].value;

    var nameFormat = /^[a-zA-Z]+$/;
    var numberFormat = /^[0-9]+$/;
    var blank = '';

      

      if (!firstName.match(nameFormat)) {
        alert("This is compulsory Field.Please enter a valid first name.Only Aphabets allowed No Numeric Values allowed");
        return false;
      }
      
      

      if (!lastName.match(nameFormat)) {
        alert("This is compulsory Field.Please enter a valid last name.Only Aphabets allowed No Numeric Values allowed");
        return false;
      }
      

      

      if (!contactNumber.match(numberFormat)) {
        alert("This is compulsory Field.Please enter a valid contact number.Only Numeric Values Allowed");
        return false;
      }
      
      
      // Validate email format
      var emailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
      if (!email.match(emailFormat)) {
        alert("This is compulsory Field.Please enter a valid email.");
        return false;
      }

    return true;
    }

  </script>
  <style>
    .form-check-label {
      padding-left: 50px;
      position: relative;
      font-size: 18px;
      font-family: Oleo Script;
    }
    .form-check-label:before {
      content: '';
      display: inline-block;
      width: 20px;
      height: 20px;
      
      position: absolute;
      left: 0px;
      top: 0px;
      background: url('https://www.google.com/recaptcha/api2/demo') no-repeat center center;
      background-size: contain;
      
    }
    .form-check-input[type="checkbox"] {
      position: absolute;
      left: 510px;
      background-color: white;
      border-color: black;
      width: 20px;
      height: 20px;
    }
    .form-check-input[type="checkbox"]:checked + .form-check-label:before {
      background-image: none;
      background-color: #007bff;
      border-color: #007bff;
      content: '\2713';
      color: white;
      text-align: center;
      font-size: 24px;
    }
  </style>

</head>
<body>
  <div class="body">
    <div class="content"><div>
    <div class="bottom"></div><span class="bottom_text">Made with&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;     from ADVAIT CHAVAN</span><div class="love"></div>
    <div class="upper_tab"></div>
      <a href="home.html"><span class="home">HOME</span></a>
      <a href="academics.html"><span class="academics">ACADEMICS</span></a>
      <a href="certifications.html"><span class="certifications">CERTIFICATIONS</span></a>
      <a href="projects.html"><span class="projects">PROJECTS</span></a>
      <a href="internships.html"><span class="internships">INTERNSHIPS</span></a>
      <a href="connect.php"><span class="connect">CONNECT TO ME ON</span></a>
    </div>
    <div class="GitHub">
      <a href="https://github.com/ADVAIT135"><img src="https://camo.githubusercontent.com/357f19138a1a4569442d4f95103b5abf8902eae05651a3e39aa7168278e9ca1b/68747470733a2f2f7777772e766563746f726c6f676f2e7a6f6e652f6c6f676f732f6769746875622f6769746875622d617232312e737667" alt="ADVAIT CHAVANS's GitHub Profile" style="position: relative;
                      width: 208px;
                      height: 107px;
                      left: 58px;
                      top: 100px;
                      background: #f1c232;
                      cursor: pointer;
                      border: 2px solid black;
                      z-index: 50;"
                      onmouseover="this.style.backgroundColor='lightblue', this.style.width = '248px', this.style.height = '128px';"
                      onmouseout="this.style.backgroundColor= '#f1c232', this.style.width = '208px', this.style.height = '107px' ;"></a>
    </div>
    <div class="HackerRank">
      <a href="https://www.hackerrank.com/advaitchavan135?hr_r=1"><img src="https://cdn4.iconfinder.com/data/icons/logos-and-brands/512/160_Hackerrank_logo_logos-512.png" alt="ADVAIT CHAVANS's HackerRank Profile" style="position: absolute;
                      width: 208px;
                      height: 107px;
                      left: 358px;
                      top: 100px;
                      border: 2px solid black;
                      background: #f1c232;
                      cursor: pointer;"
                      onmouseover="this.style.backgroundColor='lightblue', this.style.width = '248px', this.style.height = '128px';"
                      onmouseout="this.style.backgroundColor= '#f1c232', this.style.width = '208px', this.style.height = '107px'  ;"></a>
    </div>
    <div class="Linked In">
      <a href="https://www.linkedin.com/in/advait-chavan-69928b129/"><img src="https://camo.githubusercontent.com/8d7fb5859a2748bacf328eeff8e53540636b1e26e8d983800480f81a9b121994/68747470733a2f2f7777772e766563746f726c6f676f2e7a6f6e652f6c6f676f732f6c696e6b6564696e2f6c696e6b6564696e2d617232312e737667" alt="ADVAIT CHAVANS's Linked In Profile" style="position: absolute;
                      width: 208px;
                      height: 107px;
                      left: 658px;
                      top: 100px;
                      border: 2px solid black;
                      background: #f1c232;
                      cursor: pointer;"
                      onmouseover="this.style.backgroundColor='lightblue', this.style.width = '248px', this.style.height = '128px';"
                      onmouseout="this.style.backgroundColor= '#f1c232' , this.style.width = '208px', this.style.height = '107px' ;"></a>
    </div>
    <div class="Facebook">
      <a href="https://www.facebook.com/advait.chavan.98/"><img src="https://camo.githubusercontent.com/3b13024e253561eb8da0f32c64ab1546aee22ae1d64d935dc62a7fa77f5c7f79/68747470733a2f2f7777772e766563746f726c6f676f2e7a6f6e652f6c6f676f732f66616365626f6f6b2f66616365626f6f6b2d617232312e737667" alt="ADVAIT CHAVANS's Facebook Profile" style="position: absolute;
                      width: 208px;
                      height: 107px;
                      left: 958px;
                      top: 100px;
                      border: 2px solid black;
                      background: #f1c232;
                      cursor: pointer;"
                      onmouseover="this.style.backgroundColor='lightblue', this.style.width = '248px', this.style.height = '128px';"
                      onmouseout="this.style.backgroundColor= '#f1c232', this.style.width = '208px', this.style.height = '107px'  ;"></a>
    </div>
    <div class="Instagram">
      <a href="https://www.instagram.com/advaitchavan/?hl=en"><img src="https://camo.githubusercontent.com/7f898e521731e60a17da1ea1a673fed3ae514f2ee4bf67e13121a2255fc8642d/68747470733a2f2f7777772e766563746f726c6f676f2e7a6f6e652f6c6f676f732f696e7374616772616d2f696e7374616772616d2d617232312e737667" alt="ADVAIT CHAVANS's Instagram Profile" style="position: absolute;
                      width: 208px;
                      height: 107px;
                      left: 1258px;
                      top: 100px;
                      border: 2px solid black;
                      background: #f1c232;
                      cursor: pointer;"
                      onmouseover="this.style.backgroundColor='lightblue', this.style.width = '248px', this.style.height = '128px';"
                      onmouseout="this.style.backgroundColor= '#f1c232', this.style.width = '208px', this.style.height = '107px'  ;"></a>
    </div>
    <div class="Discord">
      <a href="https://discord.com/channels/@ADVAIT#7159"><img src="https://camo.githubusercontent.com/99c712780569c459084fcc5e12a9753e36fa80133e37374ad86aa61e23daee1e/68747470733a2f2f7777772e766563746f726c6f676f2e7a6f6e652f6c6f676f732f646973636f72646170702f646973636f72646170702d617232312e737667" alt="ADVAIT CHAVANS's Discord Profile" style="position: absolute;
                      width: 208px;
                      height: 107px;
                      left: 58px;
                      top: 350px;
                      border: 2px solid black;
                      background: #ffc000;
                      cursor: pointer;"
                      onmouseover="this.style.backgroundColor='lightblue', this.style.width = '248px', this.style.height = '128px';"
                      onmouseout="this.style.backgroundColor= '#ffc000', this.style.width = '208px', this.style.height = '107px'  ;"></a>
    </div>
    <div class="Credly">
      <a href="https://www.credly.com/users/advait_chavan_135/badges"><img src="https://camo.githubusercontent.com/737b288c9eb04afac39731b1b2bf085c8f7e8c47afff09ab7ecc27982dfd6ff7/68747470733a2f2f696e666f2e637265646c792e636f6d2f68732d66732f68756266732f437265646c795f4c6f676f5f4f72616e67655f31302d496e63682e706e673f77696474683d33303030266e616d653d437265646c795f4c6f676f5f4f72616e67655f31302d496e63682e706e67" alt="ADVAIT CHAVANS's Credly Profile" style="position: absolute;
                      width: 208px;
                      height: 107px;
                      left: 1258px;
                      top: 350px;
                      border: 2px solid black;
                      background: #ffc000;
                      cursor: pointer;"
                      onmouseover="this.style.backgroundColor='lightblue', this.style.width = '248px', this.style.height = '128px';"
                      onmouseout="this.style.backgroundColor= '#ffc000', this.style.width = '208px', this.style.height = '107px'  ;"></a>
    </div>



    <div style = "position: absolute;
    width: 234px;
    height: 22px;
    left: 490px;
    top: 250px;

    font-family: 'Roboto';
    font-style: normal;
    font-weight: 747;
    font-size: 32px;
    line-height: 38px;
    text-align: center;

    color: #000000;
    font-stretch: 100;

    text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">Let's Connect</div>
    


    <div style="height: 200px;"></div> <!-- Add space at top -->
    <form class = "" method="POST" action = "#" style="max-width: 500px; margin: 0 auto;" onsubmit="return validateForm()">
      <label style="display: block; margin-bottom: 5px;">First Name:</label>
      <input type="text" name="First_name" style="padding: 8px; font-size: 16px; border: 1px solid #ccc; border-radius: 4px; width: 100%; box-sizing: border-box;">
      
      <label style="display: block; margin-bottom: 5px;">Last Name:</label>
      <input type="text" name="Last_name" style="padding: 8px; font-size: 16px; border: 1px solid #ccc; border-radius: 4px; width: 100%; box-sizing: border-box;">
      
      <label style="display: block; margin-bottom: 5px;">Email ID:</label>
      <input type="email" name="Email" style="padding: 8px; font-size: 16px; border: 1px solid #ccc; border-radius: 4px; width: 100%; box-sizing: border-box;">
      
      <label style="display: block; margin-bottom: 5px;">Contact:</label>
      <input type="tel" name="Contact" style="padding: 8px; font-size: 16px; border: 1px solid #ccc; border-radius: 4px; width: 100%; box-sizing: border-box;">
      
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="not-a-robot" required>
        <label class="form-check-label" for="not-a-robot">I am not a robot</label>
      </div>

      <input type="submit" name = "submit"value="Submit" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; margin-top: 10px;">
      

    </form>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js" integrity="sha512-BP5x5RvGztDRSM91Q/fcB4tEBvhgY4+4tH/ZqM2zKUpGgJtS5+5x5ZI0dMNfWGMjLQ2Iy9G0+Jpy0PMGBtvug==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  </body>
</html>
