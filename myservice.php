<html>
<head>
<link href="css/myservice.css" type="text/css" rel="stylesheet">
<script src="https://unpkg.com/scrollreveal"></script>
</script>
</head>


<body>
    
<?php include_once 'header.php'?>



<div id="next">
    <h1 class="main-title">My Service</h1>
<div class="ser">
<h2>Service</h2>
<br/><span id="service"><script>document.getElementById("service").innerHTML=localStorage.getItem("userservice")</script></span>
</div>
<div class="nam">
<h2>Name</h2>
<br/><span id="name"><script>document.getElementById("name").innerHTML=localStorage.getItem("username")</script></span>
</div>
<div class="num">
<h2>Mobile Number</h2>
<br><span id="number"><script>document.getElementById("number").innerHTML=localStorage.getItem("usernumber")</script></span>
</div>
<div class="em">
<h2 >Email</h2>
<br/><span id="email"><script>document.getElementById("email").innerHTML=localStorage.getItem("useremail")</script></span>
</div>
<div class="add">
<h2 >Address</h2>
<br/><span id="address"><script>document.getElementById("address").innerHTML=localStorage.getItem("useraddress")</script></span>
</div>
<div class="sta">
<h2 >State</h2>
<br/><span id="state"><script>document.getElementById("state").innerHTML=localStorage.getItem("userstate")</script></span>
</div>
<div class="con">
<h2>Country</h2>
<br/><span id="country"><script>document.getElementById("country").innerHTML=localStorage.getItem("usercountry")</script></span>
</div>
</div><br/>

<div id="press">
<?php include_once 'press.php'?>
</div>
<div id="ads">
<?php include_once 'ads.php'?>
</div>
<div id="foot">
<?php include_once 'footer.php'?>
</div>





</body>

</html>