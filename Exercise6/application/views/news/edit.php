<style>
	table,h1,input{
		font-family: simplifica;
		text-align: center;
	}
	
	table{
		font-size: 38px;
	}
	
	input{
		font-size: 38px;
	}
	
	.button{
		background-color: white;
		color: black;
		border: white;
		font-family: simplifica;
		font-size: 32px;
		text-align: center;
	}
	
	.button:hover{
		background-color: white;
		color: red;
	}
</style>

<h1>EDIT YOUR DATA HERE!</h1>
 
	<?php echo validation_errors(); ?>
	<?php echo form_open('news/edit/'.$news_item['User_ID']); ?>
	<table align=center>
        <tr>
            <td><label for="Name">NAME</label></td>
            <td><input type="text" name="name" rows="10" cols="40"><?php echo $news_item['name'] ?></input></td>
        </tr>
		
        <tr>
            <td><label for="Nickname">NICKNAME</label></td>
            <td><input type="text" name="nName" rows="10" cols="40"><?php echo $news_item['nName'] ?></input></td>
        </tr>
		
		<tr>
            <td><label for="Email">EMAIL</label></td>
            <td><input type="text" name="email" rows="10" cols="40"><?php echo $news_item['email'] ?></input></td>
        </tr>
		
		<tr>
            <td><label for="Home_Address">HOME ADDRESS</label></td>
            <td><input type="text" name="hAd" rows="10" cols="40"><?php echo $news_item['hAd'] ?></input></td>
        </tr>
		
		<tr>
            <td><label for="Gender">GENDER</label></td>
            <td><input type="text" name="gender" rows="10" cols="40"><?php echo $news_item['gender'] ?></input></td>
        </tr>
		
		<tr>
            <td><label for="Cp_Num">PHONE NUMBER</label></td>
            <td><input type="text" name="cNum" rows="10" cols="40"><?php echo $news_item['cNum'] ?></input></td>
        </tr>
		
		<tr>
            <td><label for="Comment">COMMENT</label></td>
            <td><input type="text" name="message" rows="10" cols="40"><?php echo $news_item['message'] ?></input></td>
        </tr>
		
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="SUBMIT" /></td>
        </tr>
    </table>
</form>
