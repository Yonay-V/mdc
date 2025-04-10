<!doctype html>
<?php
$startYear = 2023;
$thisYear = date('Y');
if ($thisYear > $startYear){
   $dates = "$startYear – $thisYear";
} else {
   $dates = $startYear;
}
?>
<?php
$servername = "localhost";
$username = "accountadmin";
$password = "accountadminpassword124";
$dbname = "gra2727p4";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO accounts (salutation, firstname, lastname, birthmonth, birthdate, birthyear, phone, address1, address2, city, state, zipcode) VALUES ('$_POST[salutation]', '$_POST[firstname]', '$_POST[lastname]', '$_POST[birthmonth]', '$_POST[birthdate]', '$_POST[birthyear]', '$_POST[phone]', '$_POST[address1]', '$_POST[address2]', '$_POST[city]', '$_POST[state]', '$_POST[zipcode]')";;

if ($conn->query($sql) === TRUE) {
  //echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="styles.css" rel="stylesheet" type="text/css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barrio&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
</head>

<body>
<wrapper>
<header>
	<nav>
		<h1>Greg's Groceries</h1>
		<ul>
		    <li>Weekly Ad</li>
			<li>Produce</li>
			<li>Meat</li>
			<li>Deli</li>
			<li>Loyalty Program</li>
		</ul>
	</nav>
	</header>
	<main>
		<form method="post">
			<div class="form-container">
				<label for="salutation">Salutation</label><br>
				<select name="salutation" type="select" id="salutation" class="input-33" required="required">
					<option value="none">--</option>
					<option value="mr">Mr.</option>
					<option value="ms">Ms.</option>
					<option value="mrs">Mrs.</option>
				</select>
				<div class="input_group">
					<div class="input-container">
						<label for="firstname">First Name</label><br>
						<input name="firstname" type="text" id="firstname" class="input-50" required="required" placeholder="Enter First Name">
					</div>
					<div class="input-container">
						<label for="lastname">Last Name</label><br>
						<input name="lastname" type="text" id="lastname" class="input-50" required="required" placeholder="Enter Last Name">
					</div>
				</div>
				<div class="input_group">
					<div class="input-container">
						<label for="birthmonth">Birth Month</label><br>
						<input name="birthmonth" type="text" id="birthmonth" class="input-33" required="required" placeholder="MM">
					</div>
					
					<div class="input-container">
						<label for="birthdate">Birth Date</label><br>
						<input name="birthdate" type="text" id="birthdate" class="input-33" required="required" placeholder="DD">
					</div>
					
					<div class="input-container">
						<label for="birthyear">Birth Year</label><br>
						<input name="birthyear" type="text" id="birthyear" class="input-33" required="required" placeholder="YYYY">
					</div>	
				</div>
				<label for="phone">Phone</label><br>
				<input name="phone" type="text" id="phone" class="input-100" required="required" placeholder="Enter Your Phone Number">
			</div>
			
			<div class="form-container">
				<label for="address1">Address Line 1</label><br>
				<input name="address1" type="text" id="address1" class="input-100" required="required" placeholder="Enter Your Address">

				<label for="address2">Address Line 2</label><br>
				<input name="address2" type="text" id="address2" class="input-100" required="required" placeholder="Enter Your Address">
				
				<div class="input_group">
					<div class="input-container">
						<label for="city">City</label><br>
						<input name="city" type="text" id="city" class="input-50" required="required" placeholder="Enter Your City">
					</div>
					<div class="input-container">
						<label for="state">State</label><br>
						<input name="state" type="text" id="state" class="input-50" required="required" placeholder="Enter Your State">
					</div>
				</div>
				<label for="zipcode">Zipcode</label><br>
				<input name="zipcode" type="text" id="zipcode" class="input-50" required="required" placeholder="Enter Zipcode">
			</div>	
			<div class="submit-container">
				<input name="submit" type="submit" class="submitButton">
			</div>
		</form>
	</main>
<footer>
<p>© 2025, Yonay Valdes. This is a fictitious web page created solely for the purpose of education and training. All products and people associated with this web page are also fictitious. Any resemblance to real brands, products, or people is purely coincidental. Information provided about the product is also fictitious and should not be construed to be representative of actual products on the market in a similar product category.</p>
</footer>
</wrapper>
</body>
</html>