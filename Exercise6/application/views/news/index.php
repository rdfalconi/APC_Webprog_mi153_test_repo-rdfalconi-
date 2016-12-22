<html>
	<head>
		<style>
			body {
				text-align : center;
				font-family: "simplifica";
				font-size: 50px;
			}
			
			a:link {
				color: black;
				background-color: transparent;
				text-decoration: none;
			}
			
			a:visited {
				color: black;
				background-color: transparent;
				text-decoration: none;
			}
			
			a:hover {
				color: red;
				background-color: transparent;
				text-decoration: none;
			}
			
			a:active {
				color: black;
				background-color: transparent;
				text-decoration: none;
			}
			
			table {
				font-family: "simplifica";
				font-size: 30px;
			}
			
			button {
				background-color: white;
				color: black;
				border: white;
				font-family: simplifica;
				font-size: 32px;
			}
			
			button:hover {
				background-color: white;
				color: red;
			}
						
			.input{
				column-count: 2;
				column-gap: 30px;
				column-rule-style: none;
				font-size: 19px;
				
			}
			
			.col1{
				float:right;
			}
			
			.col2{
				float:left;
			}
			
			.error{color: #FF0000;}
			
			a.button{
				float: right;
				font-size: 19px;
			}
			tr{
				text-align:center;
			}
			td{
				padding: 0 35px 0 35px;
			}
	</style>
	</head>

		<body>
		<center>
			RICHARD MIGUEL D. FALCONI<br>
			<img src ="<?php echo base_url('Images/pic1.jpg');?>" style = "width: 512px; height: 383px"><br>
			
			INFORMATION
			
				<table align ="center">

				<tr>
					<td>NICKNAME</td>
					<td>RICHARD</td>
				</tr>

				<tr>
					<td>HOBBIES</td>
					<td>PLAYING COMPUTER GAMES </td>
				</tr>

				<tr>
					<td>INTERESTS</td>
					<td>MUSIC</td>
				</tr>

				<tr>
					<td>FAVOURITE WEBSITE</td>
					<td><a href="https://www.instagram.com/">INSTAGRAM</a></td>
				</tr>
				</table>

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

		
		<a href="<?php echo site_url('news/create'); ?>">WANT TO SEND A MESSAGE? CLICK HERE!</a><br>
		

<h2>MESSAGES</h2>

<table align="center">
    <tr>
		
        <td>NAME</td>
        <td>NICKNAME</td>
		<td>EMAIL</td>
        <td>ADDRESS</td>
		<td>GENDER</td>
        <td>CELLPHONE NUMBER</td>
        <td>COMMENT</td>
		<td>OPERATIONS</td>
		
	</tr>
<?php foreach ($userinfo as $news_item): ?>
        <tr>
            <td><?php echo $news_item['name']; ?></td>
			<td><?php echo $news_item['nName']; ?></td>
			<td><?php echo $news_item['email']; ?></td>
			<td><?php echo $news_item['hAd']; ?></td>
			<td><?php echo $news_item['gender']; ?></td>
			<td><?php echo $news_item['cNum']; ?></td>
			<td><?php echo $news_item['message']; ?></td>
            <td>
                <a href="<?php echo site_url('news/edit/'.$news_item['User_ID']); ?>">EDIT</a> | 
                <a href="<?php echo site_url('news/delete/'.$news_item['User_ID']); ?>" onClick="return confirm('Are you sure you want to delete?')">DELETE</a>
            </td>
        </tr>
<?php endforeach; ?>
</table>
</div>
