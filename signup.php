

<?php 
include 'head.php';

?>
    
<div id="featured" class="container">
    
    <div class="boxB">
        
    <form method="POST" action="register_user.php" enctype="multipart/form-data">
    <h4 class="Rform">Signup Information</h4>
        
        <b>Email:</b><br>
        <input type="email" name="email" id="email" placeholder="Email" required><br>
        <b>First Name:</b><br>
        <input type="text" name="fname" id="fname" maxlength="10" placeholder="Firstname" required><br>
        <b>Last Name:</b><br>
        <input type="text" name="lname" id="lname" maxlength="10" placeholder="Lastname" required><br>
        <b>Date of Birth:</b><br>
        <input type="date" name="DOB" id="DOB" placeholder="Date of Birth" required><br>
        <b>Phone Number:</b><br>
        <input type="tel" name="pNumber" id="pNumber" placeholder="Phone Number" required><br>
        <b>Address:</b><br>
        <input type="text" name="location" id="location" placeholder="#, Street, City, Prov."><br>
        <b>Password:</b><br>
        <input type="password" name="passw" id="passw" maxlength="6" placeholder="Password" required><br>
        <b>Confirm Password: </b><br>
        <input type="password" name="passconf" id="passconf" maxlength="6" placeholder="Confirm Password" required><br>
        
        <input type="checkbox" name="checkBox" id="checkBox" required>
        <br><br><b>I agree on the terms of use. (please check the box if you agree)</b>
        <br>
        
        <input type="submit" name="Signup" class="btn btn-success" value="Signup">
        <input type="reset" class="btn btn-success" data-inline="true" value="Reset">
    </form>
  </div>
</div>

<?php 
include 'footer.php';

?>
  