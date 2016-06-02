
<?php

include 'head.php';


//TODO: condition to check if user is logged in to continue with the process.

// div tags here

?>



<div id="featured" class="container">
    <div class="boxB">
            
        <div class="alert alert-success">
         <h4 class="Rform">Reservation</h4> 
        </div>

<?php
/////////////// 
            
            
            

$conn = mysqli_connect("localhost", "root", "root", "db1") or die("database connection is not working");
	/* check connection */
	if(!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

        
        
/* 
take user's email and confirmation code 
then query person table using email to get customer's info
*/
        

if(isset($_POST["Reserve"]))
{    
    $resvlocation = mysqli_real_escape_string($conn,$_POST['loc']);
    $resvDate = mysqli_real_escape_string($conn,$_POST['pickDate']);
    $resvTime = mysqli_real_escape_string($conn,$_POST['pickTime']);
    $retDate = mysqli_real_escape_string($conn,$_POST['returnDate']);
    $retTime = mysqli_real_escape_string($conn,$_POST['returnTime']);
    $Age = mysqli_real_escape_string($conn,$_POST['age']);
    $returnLocation = mysqli_real_escape_string($conn,$_POST['returnLoc']);
    
    echo "Pickup Location: " . $resvlocation;
    echo "</br> Date: " . $resvDate;
    echo "</br> Time: " . $resvTime;
    echo "</br>-----------";
    echo "</br> Return Location: " . $returnLocation;
    echo "</br> Date: " . $retDate;
    echo "</br> Time: " . $retTime;
    
    
    
//--------------

mysqli_close($conn);
    
}  

?>
    </div>
</div>
        
<?php

include 'footer.php';

?>