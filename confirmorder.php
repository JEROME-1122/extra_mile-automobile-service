<?php
$host = "localhost";
$username = "root";
$password = "";

try 
{
    $conn = new PDO('mysql:host=localhost;dbname=ooplogin', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}

// FORM SUBMITTED DATA CAN ACCESSED BY:
// 1. $_REQUEST : CAN BE USED FOR BOTH get AND post METHOD
// 2. $_POST : CAN BE USED ONLY FOR post METHOD
// 3. $_GET : CAN BE USED ONLY FOR get METHOD

if(isset($_POST['submit']))
{
	
	$sql = "INSERT INTO myform(service,name,number,email,address,state,country) VALUES('".addslashes($_POST['service'])."', '".addslashes($_POST['name'])."', '".addslashes($_POST['number'])."', '".addslashes($_POST['email'])."', '".addslashes($_POST['address'])."', '".addslashes($_POST['state'])."', '".addslashes($_POST['country'])."')";
	$conn->query($sql);
}

?>
<html>
<head>
<script src="https://unpkg.com/scrollreveal"></script>
<link href="css/confirmorder.css" type="text/css" rel="stylesheet">

</head>


<body>
    
<?php include_once 'header.php'?>



<div id="next">
<span id="message"></span>
<section class="sec-01">
<div class="container">
<h1 class="main-title">Booking</h1>
<form  method="POST" id="myform" method="POST" action="">
<label>Service</label><br/>
<select id="service" name="service">
    <option value="#"> </option>
    <option value="AC Service -RS:0-3000">AC Service -RS:0-3000</option>
    <option valuse="Bumper Service -Rs:0-5000">Bumper Service -Rs:0-5000</option>
    <option value="Engine Diagnostics Service -Rs:0-8000">Engine Diagnostics Service -Rs:0-8000</option>
    <option value="Full Service -Rs:0-20000">Full Service -Rs:0-20000</option>
    <option value="Performance Upgrades Service -Rs:0-6000">Performance Upgrades Service -Rs:0-6000</option>
    <option value="Lube, oil and filter Service -Rs:0-5000">Lube, oil and filter service -Rs:0-5000</option>
    <option value="Anti-Lock-Break Service -Rs:0-8000">Anti-Lock-Break Service -Rs:0-8000</option>
    <option value="Computer Diagnostics Service -Rs:0-3000">Computer Diagnostics Service -Rs:0-3000</option>
    <option value="General Bike Service -Rs:0-2000">General Bike Service -Rs:0-2000</option>
    <option value="Bike Repair Service -Rs:0-3000">Bike Repair Service -Rs:0-3000</option>
    <option value="Premium Bike Service -Rs:0-5000">Premium Bike  Service -Rs:0-5000</option>
    <option value="Bike Wash and Polish -Rs:0-1000">Bike Wash and Polish -Rs:0-1000</option>
    <option value="Breakdown -Rs:0-8000">Breakdown</option>
    <option value="Towing -Rs:0-6000">Towing -Rs:0-6000</option>
    <option value="Punture -Rs:0-4000">Punture -Rs:0-4000</option>
   
</select><br/>
<label>User Name</label><br/>
<input type="text" placeholder="Enter Your Name Here" id="name" name="name" class="form_data"><br/>
<label>Mobile Number</label><br/>
<input type="number" placeholder="Enter Your Number Here" id="number"  name="number" class="form_data"><br/>
<label>Email</label><br/>
<input type="text" placeholder="Enter Your Mail Here" id="email" name="email" class="form_data"><br/>
<label>Address</label><br/>
    <input type="text" placeholder="Enter your Address Here" id="address" name="address" class="form_data"><br/>
<label>State</label><br/>
    <input type="text" placeholder="Enter Your State Here" id="state" name="state" class="form_data"><br/>
<label>Country</label><br/>
    <input type="text" placeholder="Enter Your Country Here" id="country" name="country" class="form_data"><br/>
<input type="submit"   placeholder="Order" id="submit"  name="submit"  value="submit" onclick="adddata()" >

</form>
</div>
    </section>
</div>


<div id="press">
<?php include_once 'press.php'?>
</div>
<div id="ads">
<?php include_once 'ads.php'?>
</div>
<div id="foot">
<?php include_once 'footer.php'?>
</div>

<script src="js/order.js"></script> 



</body>

</html>