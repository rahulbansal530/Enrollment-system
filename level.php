<?php
$servername="localhost";
$username="root";
$password="realfact";
$dbname="enrollment";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
	die("Connection Failed" . $conn->connect_error);
}
$foundation=$ POST["Foundation Level"];
$advanced=$ POST["Advanced Level"];
$exert=$ POST["Exert Level"];
$ sql="update level set=""";
?>
<html>
<title>Programming Languages</title>
<link rel="stylesheet" href="level.css">
<body>
<h1>Enrollment for Certification</h1>
<ul>
<li><a href="level.html">1.Level</a></li>
<li><a href="onsite details.html">2.Onsite Details</a></li> 
<li><a href="verification.html">3.Verification</a></li>
<li><a href="personal details.html">4.Personal Details</a></li> 
<li><a href="professional details.html">5.Professional Details</a></li> 
<li><a href="contact details.html">6.Contact Details</a></li>
<li><a href="review.html">7.Review</a></li>
</ul>
<h2>1/6 Level Selection</h2>
<h5>Select a level you are eligible for:</h5>
<form action="onsite details.php" method="post">
<table cellpadding="20" bgcolor="skyblue" align="center">
<tr>
<th>Foundation Level<input type="radio" name="Foundation Level" value="Foundation Level"></th>
<th>Advanced Level<input type="radio" name="Advanced Level" value="Advanced Level"></th>
<th>Expert Level<input type="radio" name="Expert Level" value="Expert Level"></th>
</tr>
<tr>
<td>Price-3500 INR</td>
<td>Price-4500 INR</td>
<td>Price-5500 INR</td>
</tr>
<tr align="right">
<td>+18% GST</td>
<td>+18% GST</td>
<td>+18% GST</td>
</table><br><br>
<table class="level" align="center">
<tr>
<th><input type="submit" name="next" value="Next >"></th>
</tr>
</table>
</form>
<br>
</body>
</html>