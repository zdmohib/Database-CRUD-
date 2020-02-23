<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>LabTask-3</title>
</head>
<body>
	<?php
		$name=$email=$date=$exam=$gender=$bloodGroup="";
		$nameErr = $emailErr = $dateErr=$examErr= $genderErr=$bgErr= $monthErr = $yearErr = "";
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (empty($_POST["name"])){
				$nameErr = "Please Enter Your Name";
			} 
			else {
				$name = $_POST["name"];
			}
			if (empty($_POST["email"])){
				$emailErr = "Invalid email format";
			} 
			else {
				$email = $_POST["email"];
			}
			
			if (empty($_POST["date"])){
				$dateErr = "Please Enter Your Birth Date";
			} 
			else {
				$date = $_POST["date"];
			}
			
			
			if (empty($_POST["gender"])){
				$genderErr = "Please Enter Your Gender";
			} 
			else {
				$gender = $_POST["gender"];
			}
			if (($_POST["bloodGroup"])=="none"){
				$bgErr = "BloodGroup is required";
			} 
			else {
				$bloodGroup = $_POST["bloodGroup"];
			}
			
			if (empty($_POST["degree"]) ){
				$examErr = "Minimum Degree SSC  ";
			} 
			else {
				
				$degree = $_POST["degree"];
				
				/*if(!empty($_POST["bsc"]))
					$exam =$exam.", ".$_POST["bsc"];
				if(!empty($_POST["msc"]))
					$exam =$exam.", ".$_POST["msc*/
			}
			
			
		}
	?>
	<form method="post" action="insertdb.php">
		<h1>Lab Task 3 </h1>
		
				Name :
				<input type="text" name="name"/>
				<span style="color:red;">* <?php echo $nameErr;?></span>
				<br><br>
			
			
				Email :
				<input type="email" name="email"/>
				<span style="color:red;">* <?php echo $emailErr;?></span>
                <br><br>			
			
				Date of Birth :
				<input type="Date" name="date"/>
				<span style="color:red;">* <?php echo $dateErr;?></span>
			    <br><br> 
			
				Gender :
					<input type="radio" value="Male" name="gender"/>Male
					<input type="radio" value="Female" name="gender"/>Female
					<input type="radio" value="Other" name="gender"/>Others
				<span style="color:red;">* <?php echo $genderErr;?></span>
			     <br><br>
		
				Degree :
					<input type="checkbox" name="degree" value="SSC"/>SSC
					<input type="checkbox" name="degree" value="HSC"/>HSC
					<input type="checkbox" name="degree" value="BSC"/>BSC
					<input type="checkbox" name="degree" value="MSC"/>MSC				
				<span style="color:red;">* <?php echo $examErr;?></span>
			    <br><br>
			
				Blood Group :
					<select name="bloodGroup">
						<option value="none"></option>
						<option value="A+">A+</option>
						<option value="A-">A-</option>
						<option value="B+">B+</option>
						<option value="B-">B-</option>
						<option value="AB+">AB+</option>
						<option value="AB-">AB-</option>
						<option value="O+">O+</option>
						<option value="O-">O-</option>
					</select>
				<span style="color:red;">* <?php echo $bgErr;?></span>			
				<br><br>						
	
			
		
		
		<input type="submit" name="submit" value="Submit">  
</form>
	<br><br>




<form method="post" action="table.php">
							
		
		<input type="submit" name="submit" value="Show table">  

			<br><br>
</form>



<form method="post" action="delete.php">
		
			
        eter a id you want to delate :
				<input type="number" name="id"/>				
					
		
		<input type="submit" name="submit" value="delete">  

		<br><br>
</form>


<form method="post" action="update.php">
		
			
        eter a id you want to update :
				<input type="number" name="id"/>	
		eter updated name :
				Name :
				<input type="text" name="name"/>
				<br><br>						
					
		
		<input type="submit" name="submit" value="delete">  
</form>







	<?php
	if($name!="" && $email!="" && $date!="" && $exam!="" && $gender!="" && $bloodGroup!="")
		{
			echo "<h3>Name : $name</h3>";
			echo "<h3>Email : $email</h3>";
			echo "<h3>Date of Birth : $date</h3>";
			echo "<h3>Gender : $gender</h3>";
			echo "<h3>Degree : $degree</h3>";
			echo "<h3>Blood group : $bloodGroup</h3>";
		}
	?>
	
</body>
</html>