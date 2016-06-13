<?php
include "head.php";
include "connect.php";
?>


  
<div id="featured" class="container">
    
    <div class="boxB">

<?php 

if (!$conn) { 
    die("Connection failed: " . mysqli_connect_error());
    echo '<META HTTP-EQUIV="Refresh" Content="3; URL=signup.php">';
}
        $tablechecksql = "CREATE TABLE IF NOT EXISTS `person` (`user_id` int(11) NOT NULL AUTO_INCREMENT, `fname` varchar(255) NOT NULL, `lname` varchar(255) NOT NULL,`email` varchar(255) NOT NULL, `password` varchar(255) NOT NULL, `DOB` date NOT NULL, `phone` int(11) NOT NULL, `disability` tinyint(1) NOT NULL DEFAULT '0', 'user_location` int(255) DEFAULT NULL COMMENT 'FK', PRIMARY KEY (`user_id`), KEY `user_location` (`user_location`),CONSTRAINT `person_ibfk_1` FOREIGN KEY (`user_location`) REFERENCES `location` (`location_id`)) ENGINE=InnoDB DEFAULT CHARSET=latin1";

        $tablecheck = $conn->query($tablechecksql);
        $action = $mysqli->query($tablecheck);
        
if(isset($_POST["Signup"]))
{
    
    ?>
        <div class="alert alert-success">
         <h4 class="Rform">Processing...</h4> 
        </div>
        
    <?php
    
    
    // taking inputs
	$fName = mysqli_real_escape_string($conn, $_POST["fname"]);
	$lName = mysqli_real_escape_string($conn, $_POST["lname"]);
	$email = mysqli_real_escape_string($conn, $_POST["email"]);
	$pass = mysqli_real_escape_string($conn, $_POST["passw"]);
    $DateOfBirth = mysqli_real_escape_string($conn, $_POST["DOB"]);
	$phone = mysqli_real_escape_string($conn, $_POST["pNumber"]);
	$user_location = mysqli_real_escape_string($conn, $_POST["user_location"]);

    // check if duplicate email exists on db
    
    $sql_check = $conn->query("SELECT * from person where `email` = '$email' ");
    
    //$result = mysqli_query($conn, $sql_check);
    
    $result = $mysqli->query($sql_check);
    
    $row = mysqli_fetch_assoc($result);    
    
    if(mysqli_num_rows($row) >= 1){

        echo "<b>". $email ." e-mail address you've entered is already registered in our databases, 
        you can login or register with a new email</b><br>";
		die("refresh:0;url=index.php");
    }
    
    echo "result:". $row['email'];
        
    
    // sql statement
	$sql = $conn->query("INSERT INTO person (`fname`, `lname`, `email`, `password`, `DOB`, `phone`) 
    VALUES('$fName', '$lName', '$email', '$pass', '$DateOfBirth', '$phone')");
    
    
    
    
?>
        
      
<?php
    
	if($sql){
		echo "<b>Registeration Completed...Redirecting!</b> <br>";
		header( "refresh:0;url=index.php" );
	}
	else
	{
		echo "An error occured...Redirecting! <br>";
		header("refresh:3;url=signup.php");
	}
    
    
    
}else{
        ?>
         <div class="alert alert-warning">
         <h4 class="Rform">An error occured...Redirecting!</h4> 
        </div>
        
        
        
        <?php
    header("refresh:3;url=signup.php");
    
}
mysqli_close($conn);



?>
        
        
    </div>
</div>
        
        
<?php
include "footer.php";
?>