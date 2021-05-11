  <html>
<head>
<title>Food order website</title>
<link rel="stylesheet"href="admin1.css">
</head>
<body>
<div class="menu">
<center>
<div class="wrapper">
    <ul>
       <li><a href="index.php">Home</a></li>
<li><a href="manageadmin.php">Admin</a></li>
<li><a href="manage-category.php">Category</a></li>
<li><a href="manage-category.php">Food</a></li>
<li><a href="manage-order.php">order</a></li>
    </div>
</center>
</div>
<div class="main-content">
  <div class="wrapper">
   <h1>ADD ADMIN</h2>
<form action=""method="POST">

<table>
<tr>
   <td>full name:</td>
    <td><input type="text" name="fullname" placeholder="enter your name"></td>

</tr><br />
<tr>
   <td>username:</td>
    <td><input type="text" name="username" placeholder="enter your username"></td>

</tr><br />
<tr>
   <td>password:</td>
    <td><input type="text" name="password" placeholder="enter your password"></td>

</tr><br />
<tr>
   <td colspan="2">
      <input type="submit" name="submit" value="Add Admin" class="btn-primary1">
</table>
</div>
</div>
<div class="footer">
<div class="wrapper">
 <p><center> Beleive us! We give best!,SRS restaurant,Developed By Rohinth,Sai,Sownder@2021</center></p> 
</div>
 </div>

<?php

$conn = "";

try {
	$servername = "localhost:3306";
	$dbname = "food-order";
	$username = "root";
	$password = "";

	$conn = new PDO(
		"mysql:host=$servername; dbname=food-order",
		$username, $password
	);
	
$conn->setAttribute(PDO::ATTR_ERRMODE,
					PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}

?>

</body></html>