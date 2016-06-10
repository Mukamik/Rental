
<?php

include 'head.php';


//TODO: condition to check if user is logged in to continue with the process.

// div tags here

?>


<div id="featured" class="container">
    <div class="ResvBox">
            
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


    
}  

        
?>    
        
    </div>

    <div class="VehicleBox">
            
        <div class="alert alert-success">
         <h4 class="Rform">Choose a vehicle</h4> 
        </div>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Choice</th>
        <th>Vehicle</th>
        <th>Type</th>
        <th>Rate</th>
        <th></th>
      </tr>
    </thead>
      
    <tbody>


<?php




$getVehicle_sql = $conn->query("SELECT * FROM vehicle");

$conn = mysqli_connect("localhost", "root", "root", "db1") or die("database connection is not working");
	/* check connection */
	if(!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

        // use while loop to list the vehicles
       // echo each column inside of <td> tags in the table below

      while($row = mysqli_fetch_assoc($getVehicle_sql)){
             
            $veh_ID = $row['vehicle_id'];
            $Make = $row['make'];
            $Model = $row['model'];
            $Year = $row['year'];
            $Type = $row['type'];
            $Price = $row['price'];
            $Desc = $row['description'];
            $img = $row['pic_link'];
          
?>

        <!-- for all vehicles to be in one table, only <tr> tags should be inside the while loop -->
        
      <tr>
        <td> <input type="radio" id="vChoice" name="vChoice"></td>
        <td> <?php echo $Year." ". $Make . " " . $Model; ?> </td>
        <td> <?php echo $Type; ?> </td>
        <td> <h3><?php echo "$".$Price; ?> </h3></td>
        <td> <img class="img-responsive" src="<?php echo $img; ?>"> </td>
      </tr>


<?php
          
          
      //end of while loop
         }


?>

            </tbody>
      
        </table>
    </div>
</div>




        
<?php
mysqli_close($conn);
include 'footer.php';

?>