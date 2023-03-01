<!DOCTYPE html>
<html lang="en">
<head>
<title>My Website</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="images/peace.jpg">

<!-- CSS reference-->
<link rel="stylesheet" href="css/mystyles.css" >

</head>
<body>


<!-- Header -->
<header>
  <nav class="navbar">
    <ul>
      <li><a href="#">Home</a></li>
      <li style="float: right;">
        <a href="#introduction">Introduction</a>
        <a href="#javascript">JavaScript</a>
        <a href="#php">PHP</a>
        <a href="#mysql">MySQL</a>
        <a href="#reference">Reference</a>
        
      </li>
    </ul>
  </nav>
</header>

<!-- Top Section -->
<div class=top id=topp>
  <h3><marquee class="center" direction="up">Welcome to my website feel free to explore!</marquee></h3>
  <h3><marquee direction="left">Welcome to my website feel free to explore!</marquee></h3>
  <h3><marquee direction="right">Welcome to my website feel free to explore!</marquee></h3>
  <h3><marquee class="center" direction="down">Welcome to my website feel free to explore!</marquee></h3>

</div>

<!--Space per Sections-->
<div class=space></div>
<div class=space></div>
<div class=space></div>
<div class=space></div>
<div class=space></div>

<!-- Introduction Section -->
<div id="introduction">
  <h2 class="center">ABOUT ME</h2>
  <article>
  <div>
    <h1 class="center">Introduction</h1>
    <h1>Nickname: klang</h1>
    <p>Senior High School Graduate From? Asia Pacific College</p>
    <p>Course: Bachelor of Science in Information Technology</p>
    <p>Scholarship? Yes, 35%</p>
    <p>Transferee? No.</p>
    <p>Second Course? Police</p>
    <p>Did you choose this course? Yes, I am interested in computer technology system. </p>
    <p>I.T Experience: Yes, I am interested in computer technology system.</p>
    <p>Hobbies / Interest / Libangan: Cycling, Football, Basketball, Bowling, Badminton, and etc. </p>
    <p>Goals in life/ Pangarap sa buhay: To be happy, contented, and love what I’m doing </p>
    <p>What do you expect to learn from this course? (Web Programming)? All the basics that would help me move forward to keep on learning. </p>
    <p>What do you want to learn to help you in your chosen Major? Most especially is applications or a software that I could create to help most company and software’s to prevent Cyber Attack.</p>
    <p>Any other interesting aspects of your life that you would like to share? None</p>

  </div>
</div>
  </article>

<!--Space per Sections-->
<div class=space>t</div>
<div class=space> </div>
<div class=space> </div>
<div class=space> </div>
<div class=space> </div>

<!-- JavaScripts Section -->
  <div class="java" id="javascript">
    <h2 class="center">JavaScript</h2>
    <h4>1st JavaScript</h4>
      <button type="button"
      onclick="document.getElementById('demo').innerHTML = Date()">
      Click to display Date and Time.</button>
      <p id="demo"></p>

      <h4>2nd JavaScript</h4>
      <p id="demo1"></p>

      <script>
      let x = 5;      // Declare x, give it the value of 5
      let y = x + 2;  // Declare y, give it the value of x + 2 

      // Write y to demo:
      document.getElementById("demo1").innerHTML = y;
      </script>
      
      <h4>3rd JavaScript if statement</h4>

      <p>Display "Good day!" if the hour is less than 18:00:</p>

      <p id="demo3">Good Evening!</p>

      <script>
      if (new Date().getHours() < 18) {
      document.getElementById("demo3").innerHTML = "Good day!";
      }
      </script>
      
      <h4>4th JavaScript Switch Case statement</h4>
      <p id="demo4"></p>
  </div>

<script>
let day;
switch (new Date().getDay()) {
  case 0:
    day = "Sunday";
    break;
  case 1:
    day = "Monday";
    break;
  case 2:
    day = "Tuesday";
    break;
  case 3:
    day = "Wednesday";
    break;
  case 4:
    day = "Thursday";
    break;
  case 5:
    day = "Friday";
    break;
  case 6:
    day = "Saturday";
}
document.getElementById("demo4").innerHTML = "Today is " + day;
</script>

    </ul>
  </nav>
</div>

<!--Space per Sections-->
<div class=space></div>
<div class=space></div>
<div class=space></div>
<div class=space></div>
<div class=space></div>

<!-- PHP Section -->
<div class="java" id="php">
    <h2 class="center">PHP</h2>

    <p class="center" ><a style="color:Black" href="http://localhost/lab2/week9/forms.php" target="_blank">>Forms<</a></p>
<!--
    <h4>Forms</h4>
    <form action="welcome.php" method="post">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit">
-->

</div>

<!--Space per Sections-->
<div class=space></div>
<div class=space></div>
<div class=space></div>
<div class=space></div>
<div class=space></div>

<!-- MySQL Section -->
<div class="java" id="mysql">
    <h2 class="center" >MySQL</h2>

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $servername = "localhost";
    $username = "webprogss211";
    $password = "webprogss211";
    $dbname = "webprogss211";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO kavillanueva_myguests (firstname, lastname, email)
    VALUES ('$name', '   ', '$email')";

    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

}
?>
</div>

<!--Space per Sections-->
<div class=space></div>
<div class=space></div>
<div class=space></div>
<div class=space></div>
<div class=space></div>

<!-- JavaScripts Section -->
<div id="reference">
    <h2 class="center" padding-top= 20px>Reference</h2>

<footer>
  <p><a href="https://r.mtdv.me/ClickHere" target="_blank">not a virus Click me</a></p>
  <p><a href="#topp">to the top</a></p>

</footer>

</body>
</html>

