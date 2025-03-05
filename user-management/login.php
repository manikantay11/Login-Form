<?php include "main.html"; 
?> 
<html> 
<body> 
<form method="POST"> 
Enter User name :<input type="text" id="uname" name="uname"/><br> 
Enter Password :<input type="password" id="pwd" name="pwd"/><br> 
<input type="submit" value="Submit"> 
<input type="reset" value="Reset"> 
</form> 
 
<?php if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
    $uname = $_POST['uname'];     setcookie("uname", $uname, time() + 3600, "/", "", 0);  	echo "Login succesfully"; 
} 
?> 
 
</body> 
</html> 
