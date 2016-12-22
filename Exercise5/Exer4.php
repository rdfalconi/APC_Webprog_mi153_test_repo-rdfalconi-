<?php
	include_once 'dbconfig.php';
	if(isset($_POST['submit']))
		{
			// variables for input data
			$name = $_POST['name']
			$nName = $_POST['nName'];
		    $email = $_POST['email'];
			$hAd = $_POST['hAd'];
			$gender = $_POST['gender'];
			$cNum = $_POST['cNum'];
			$comment = $_POST['comment'];
			// variables for input data
			
			// sql query for inserting data into database			 
			$sql_query = "INSERT INTO users(name,nName,email,hAd,gender,cNum,message) VALUES ('$name','$nName','$email','$hAd','$gender','$cNum','$comment')";
			mysqli_query($con,$sql_query);
			// sql query for inserting data into database
		}
?>

<!DOCTYPE html>
<html>
<title>MY HOMEPAGE</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<body>


<header class="w3-display-container w3-content" style="max-width:1500px">

 <div class="w3-display-middle w3-padding-xlarge w3-border w3-wide w3-text-light-grey w3-center">
    <h1 class="w3-hide-medium w3-hide-small w3-xxxlarge">Richard Falconi</h1>
    <h3 class="w3-hide-medium w3-hide-small">MI-153</h3>
 </div>
</header>

<div class="w3-content w3-padding-jumbo w3-margin-top" id="portfolio">



  
  <div class="w3-light-grey w3-padding-xlarge w3-padding-32 w3-margin-top" id="contact">
   <FONT FACE = "Times New Roman" SIZE = "4" COLOR="BLACK">     
 <style>
 p.solid {border-style: solid;
    border-width: 5px; 
  }
 h1{ letter-spacing: 6px;
     }
 body{background-image: url(red)}
</style>

 <h1><p class="solid" spacing="24px" align="center"> H O B B I E S </p></h1>
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
			$nameErr = $nNameErr = $emailErr = $genderErr = $cNumErr = $commentErr = "";
			$name = $nName = $email = $hAd = $gender = $cNum = $comment = "";
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				if (empty($_POST["name"])) {
				$nameErr = "NAME IS REQUIRED ";
			} else {
				$name = test_input($_POST["name"]);
				if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
				$nameErr = "ONLY LETTERS ARE ALLOWED DUDE"; 
				}
			}
		  
			if (empty($_POST["nName"])) {
				$nNameErr = "NICKNAME IS REQUIRED ";
			} else {
				$nName = test_input($_POST["nName"]);
				if (!preg_match("/^[a-zA-Z ]*$/",$nName)) {
				$nNameErr = "ONLY LETTERS ARE ALLOWED DUDE"; 
				}
			}
		  
			if (empty($_POST["email"])) {
				$emailErr = "E-MAIL IS REQUIRED MAYNE";
			} else {
				$email = test_input($_POST["email"]);
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$emailErr = "INVALID EMAIL FORMAT MAYNE"; 
				}
			}
		  
			if (empty($_POST["hAd"])) {
				$hAd = "";
			} else {
				$hAd = test_input($_POST["hAd"]);
			}
		  
			if (empty($_POST["gender"])) {
				$genderErr = "GENDER IS REQUIRED";
			} else {
				$gender = test_input($_POST["gender"]);
			}
		  
			if (empty($_POST["cNum"])) {
				$cNumErr = "NUMBER IS REQUIRED";
			} else {
				$cNum = test_input($_POST["cNum"]);
				if (!filter_var($cNum, FILTER_VALIDATE_INT) === FALSE) {
				$cNumErr = "NUMBERS ONLY MAYNE"; 
				}
			}
		  
			if (empty($_POST["comment"])) {
				$comment = "";
			} else {
				$comment = test_input($_POST["comment"]);
				}
			}
			function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
			}
		?>

		<h3>Send us message!</h3>

		<form method="post" >
			<div class="input">
				<div class="col1">
					NAME:
						<input type="text"  name="name" value="<?php echo $name;?>">
						<span class="error"> <?php echo $nameErr;?></span>
						<br><br>
					NICKNAME:
						<input type="text" name="nName" value="<?php echo $nName;?>">
						<span class="error"> <?php echo $nNameErr;?></span>
						<br><br>
					E-MAIL: 
						<input type="text" name="email" value="<?php echo $email;?>">
						<span class="error"> <?php echo $emailErr;?></span>
						<br><br>
					ADDRESS: 
					<textarea name="hAd" rows="3" cols="35"><?php echo $hAd;?></textarea>
				</div>
				<div class="col2">
					GENDER:
						<input type="radio" name="gender" value="Male"/>MALE
						<input type="radio" name="gender" value="Female"/>FEMALE
						<span class="error"> <?php echo $genderErr;?></span>					
						<br><br>
					CELLPHONE NUMBER:
						<input type="cNum" name="cNum" value="<?php echo $cNum;?>">
						<span class="error"> <?php echo $cNumErr;?></span>
						<br><br>
					COMMENT:
						<textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
						<br><br>
				</div>
			</div>
			
			<input type="submit" name="submit" value="SUBMIT" 
			style="background-color: white; color: red; border: white; font-family: simplifica; font-size: 35px; ">
			
		</form>
<a href="index.php" class=button>MESSAGES ARE HERE</a>
</body>
</html>