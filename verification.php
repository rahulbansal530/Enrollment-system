<?php
$servername="localhost";
$username="root";
$password="realfact";
$dbname="enrollment";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
	die("Connection Failed" . $conn->connect_error);
}
?>
<html>
<title>Programming Languages</title>
<link rel="stylesheet" href="verification.css">
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
<h2>3/6 Verification</h2>
<form action="verification.php" method="post">
<h5>* Select Government Photo ID:<br>
<select class="date" name="Government Photo ID" value="ID" required>
<option hidden>photo ID</option>
<option>PAN Card</option>
<option>Aadhar Card</option>
<option>Passport</option>
<option>Driving License</option>
<option>Voter ID Card</option>
</select>
</h5>
<h5 class="number">* Mention Government ID Number:<br>
<input type="number" placeholder="Government ID Number" name="Government ID Number" value="Number" required>
</h5>
<h5 class="name">* Mention Government ID Name:<br>
<input type="text" placeholder="Government ID Name" name="Government ID Name" id="ID Name" required>
</h5>
<h5>Pay Attention:</h5>
<p>You need to carry the original physical copy of the government ID during exam,falling which you will not be allowed to sit for the exam.</p><br>
<table align="center" class="level">
<tr>
<th><input type="submit"  name="next" value="Next >"></th>
</tr>
</table>
</form>
</body>
</html>