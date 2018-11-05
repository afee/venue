<?php
$error="";
$link="";
if($_SERVER["REQUEST_METHOD"]=="POST") {
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$password=$_POST['password'];
$cnumber=$_POST['cnumber'];
$email=$_POST['email'];
$location=$_POST['location'];
$link = mysqli_connect("localhost", "root", "", "venue");
if($link === false){
   
}
$sql = "INSERT INTO tour(firstname,lastname,password,cnumber,email,location) VALUES ('$firstname','$lastname','$password','$cnumber','$email','$location')";
if(mysqli_query($link, $sql)){
    $error= "* records are inserted successfully.";
} else{
}
}
//mysqli_close($link);
?>

<!DOCTYPE html>
<html>
<head>
<body>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}
input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
input[type=submit]:hover {
    background-color: #45a049;
}
.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
#error{
	color:red;
}
</style>


<h3>Sign Up </h3>

<div class="container">
  <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST" enctype="multipart/form-data" target="_blank"">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name.." required>
    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name.." >
    <label for="password">password</label>
    <input type="password" id="myPsw" value="psw123" placeholder="Your name.." required>
    <label for="number">CONTACT NUMBER</label>
    <input type="text" id="number" name="cnumber" placeholder="Valid Number..." required>
    <label for="email"> EMAIL</label>
    <input type="text" id="email" name="email" placeholder="Youremail id.." required>
    
    <label for="Location">Location</label>
    
    <input type="text" id="place" name="place" placeholder="Your Location.." required>
	<input type="submit" value="submit" class="box"><br>
	<?php echo '<p id=error>'. $error .'</p>'?></div>
	</form>
    
     
  <form action="option.html">

</form>
  </form>
</div>
