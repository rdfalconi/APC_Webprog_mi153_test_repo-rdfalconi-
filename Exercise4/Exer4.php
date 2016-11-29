<!DOCTYPE html>
<html>
<title>MY HOMEPAGE</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<body>


<header class="w3-display-container w3-content" style="max-width:1500px">
  <img class="w3-image" src="travel.jpe" alt="Me" width=1400" height="500">
 <div class="w3-display-middle w3-padding-xlarge w3-border w3-wide w3-text-light-grey w3-center">
    <h1 class="w3-hide-medium w3-hide-small w3-xxxlarge">Richard Falconi</h1>
    <h3 class="w3-hide-medium w3-hide-small">MI-153</h3>
 </div>
</header>

<div class="w3-content w3-padding-jumbo w3-margin-top" id="portfolio">

 
  <img src="league.jpg" class="w3-image" width="1000" height="500">
  <img src="basketball.jpe" class="w3-image w3-margin-top" width="1000" height="500">


  
  <div class="w3-light-grey w3-padding-xlarge w3-padding-32 w3-margin-top" id="contact">
   <FONT FACE = "Times New Roman" SIZE = "4" COLOR="BLACK">     
 <style>
 p.solid {border-style: solid;
    border-width: 5px; 
  }
 h1{ letter-spacing: 6px;
     }
</style>

 <h1><p class="solid" spacing="24px"> I N T E R E S T  && H O B B I E S</p></h1>
 <table style="width:100%" border="1px solid black" align="center">
  <tr>
    <th>Travel</th>
    <th>Surf Internet</th>
  </tr>
  <tr>
    <th>Play League of Legends</th>
    <th>Watching movies</th>
  </tr>
  <tr>
    <th>Basketball</th>
    <th>Eat foods</th>
 </tr>
 </table>    
    
	
</div>
<CENTER>
<FONT FACE = "Times New Roman" SIZE = "4" COLOR="BLUE"> 
<p id="foods"></p>
<p> Favorite foods </p>
          <button onclick="myFunction()">FOODS</button> 
		   
		   
<p id="places"></p>
<p>Places I want to go </p>
		  <button onclick="myPlaces()">PLACES</button>
            
			
<p id="sports"></p>
<p>I'm into sports </p>
         <button onclick="mySports()">SPORTS</button>
	        
<p id="Umoment"></p>
<p> Unforgettable Moment </p>
		 <button onclick="myUmoment()">Moment</button>
			
            
			
<p id="Emoment"></p>
<p> Embarassing Moment </p>
		<button onclick="myEmoment()">Moment</button>

<script>
function myFunction() {
    document.getElementById("foods").innerHTML = "Fries, doughnuts, and chocolates";
	}
	</script>
	
<script>	
function myPlaces() {
     document.getElementById("places").innerHTML = "To travel abroad like going to Japan, Korea , Singapore , and Hongkong.";
}	
</script>

<script>	
function mySports() {
     document.getElementById("sports").innerHTML = "Love sports. I tried many sports such as basketball, swimming, and badminton.";
}	
</script>

<script>	
function myUmoment() {
     document.getElementById("Umoment").innerHTML = " Unforgettable moment was I got to visit Hongkong, Macau, Singapore, Thailand, and some local places here in the Philippines <3";
}	
</script>

<script>	
function myEmoment() {
     document.getElementById("Emoment").innerHTML = "When I was teenager my brother threw sand on my eyes. ";
}	
</script> 
	
</div>
<CENTER>
<p><a href="https://twitter.com/">Twitter<a/></p>
   <a href="https://facebook.com/">Facebook<a/></p>
   

<audio controls>
<source src="bestdayofmylife.mp3" type="audio/mpeg">
</audio>
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
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
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
<p><span class="error">* required field.</span></p>
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

</body>
</html>