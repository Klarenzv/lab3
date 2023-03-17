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

<!-- Guest list Section -->
<div class="java" id="mysql">
    <h2 class="center" >Guest List</h2>

<?php
// establish database connection
$servername = "192.168.150.213";
$username = "webprogss211";
$password = "fancyR!ce36";
$dbname = "webprogss211";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// check if connection failed
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// handle search query
if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $sql = "SELECT * FROM kavillanueva_myguests WHERE ANSname LIKE '%$search%' OR email LIKE '%$search%' OR ANSmessage LIKE '%$search%'";
} else {
    $sql = "SELECT * FROM kavillanueva_myguests";
}
$result = mysqli_query($conn, $sql);

// close database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Guest List</title>
</head>

<body>
    <div class="container-fluid py-5">
        <div class="container">
            <h1 class="display-2 text-uppercase text-center mb-5" style="-webkit-text-stroke: 2px #dee2e6;">Guest List</h1>
            <form class="form-inline justify-content-center mb-3" method="get">
                <div class="form-group">
                    <input type="text" class="form-control" name="search" placeholder="Search...">
                </div>
                <button type="submit" class="btn btn-primary ml-2">Search</button>
            </form>
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Website</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr><td>" . $row["ANSname"] . "</td><td>" . $row["email"] . "</td><td>" . $row["ANSemail"] . "</td><td>" . $row["ANSmessage"] . "</td><tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5' class='text-center'>No results found.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
            <div class="text-center">
                <a href="create" class="btn btn-primary">Create Guest</a>
            </div>
        </div>
    </div>
</body>

</html>



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

