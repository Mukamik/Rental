
<?php

include 'head.php';

// div tags here
?>



<div id="featured" class="container">
    <div class="boxB">
            
        <div class="alert alert-success">
         <h4 class="Rform">Reservation Summary</h4> 
            <?php include 'print.php';?>
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
        

if(isset($_POST["Submit"]) && $_POST["resv_email"] != null )
{ 
    $email = mysqli_real_escape_string($conn,$_POST['resv_email']);
    //$confirmCode = mysqli_real_escape_string($conn,$_POST['code']);

    echo "email is: ".$email. "<br />";
   
        
$getID_sql = $conn->query("SELECT * FROM person WHERE email = '$email'");
    
  // / if($getID_sql){
    
         while($row = mysqli_fetch_assoc($getID_sql)){
             
            $userID = $row['user_id'];
            $firstName = $row['fname'];
            $lastName = $row['lname'];
            $phone = $row['phone'];
            $dob = $row['DOB'];
            $disable = $row['disability']; // should be hidden
             
            echo "<p>Customer: " . $firstName . " " . $lastName . " </p>";
            echo "<p>Phone: " . $phone ." DOB: ".$dob ."</p>";
        
         }
    
   /* }
    else{ // die when no query found
        die("Your email is not found in our database");
    }*/
 
    
    
/* 
then query reservation table using userID to get reservation info
*/  

$result = $conn->query("SELECT * FROM reservation WHERE user_id = '$userID'");


    while($rows = mysqli_fetch_assoc($result)){
    
    $resID = $rows['resv_id'];
    $uID = $rows['user_id'];
    $resV = $rows['resv_vehicle_id'];
        
    $pickLoc = $rows['pick_location'];
    $returnLoc = $rows['return_location']; 
        
    $pickDate = $rows['pick_date'];
    $pickTime = $rows['pick_time'];
        
    $returnDate = $rows['return_date'];
    $returnTime = $rows['return_time'];
        
    //$uID = $rows['return_date'];
        

echo "<p>Pickup Location:". $pickLoc ." Return Location: ".$returnLoc ."</p>";
echo "<p>Pickup Date:". $pickDate ." Pickup Time: ".$pickTime ."</p>";
echo "<p>Return Date:". $returnDate ." Return Time: ".$returnTime ."</p>";
        


        
        

    }// end of 1st while loop


//--------------
    
/* 
then query vehicle table using reserved car id to get vehicle's info
*/
       
$result1 = $conn->query("SELECT * FROM vehicle WHERE vehicle_id = '$resV'");


 while($rows = mysqli_fetch_assoc($result1)){
     
     
    $Make = $rows['make'];
    $Model = $rows['model'];
    $Year = $rows['year'];
        
    $Type = $rows['type'];
    $Price = $rows['price']; 
        
    $Des = $rows['description'];
    $pic = $rows['pic_link'];
        

echo "<p>Make: ". $Make ."</br>Model: ".$Model ."</p>";
echo "<p>Year: ". $Year ."</br>Type: ".$Type ."</p>";
echo "<p></br> Description: ".$Des ."</p>";
echo "</br>";
    
//echo $pic;
?>
<img class="img-responsive" src="<?php echo $pic; ?>">
   
<?php     
    
 }



mysqli_close($conn);
  
    
}
else{
    echo "You should enter your Email";
     
    // redirect user here
}
       



?>
    </div>
</div>
        
<?php

include 'footer.php';

?>