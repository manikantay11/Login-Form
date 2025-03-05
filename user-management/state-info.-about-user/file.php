<?php 
session_start(); 
$_SESSION["username"]="cse"; 
$_SESSION["userid"]="501"; 
?> 
<html> 
<body> <?php echo "Session Variable is set."; 
?> 
<center> 
<h1> 
<a href="second_page.php">Go to Second Page </a> 
</h1> 
</center> 
</body> 
</html> 
