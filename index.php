<?php 
include 'head.php';
include 'contact.php';
include 'rating.php';
?>
    
<div id="featured" class="container">
    
    <div class="boxB">
        
    <h4 class="Rform">Rent A Car</h4>
        
    <form action="process.php" method="POST" enctype="multipart/form-data" class="centerform">
        
     Choose a pickup location<br>
        <select id="loc" name="loc">
            <option>118 Broad ST, Regina, SK</option>
            <option>Regina Airport Counter, Regina, SK (YQR)</option>
            <option>John G Diefenbaker Airport, Saskatoon, SK (YXE)</option>
            <option>600 1st Avenue, Saskatoon, SK</option>
        </select><br><br>
        
     Dates and Times:<br>
        
        Pickup date:
        

        <input class="form-control0" data-provide="datepicker" name="pickDate" id="pickDate"  required /><p id="date_error"></p> at 
        <select id="pickTime" name="pickTime">
        <option>Between 7:00 am and 11:59 AM</option>
        <option>Between 12:00 PM and 4:30 PM</option>
        <option>Between 5:00 and 10:30 PM</option>
        <option>Between 12:00 AM and 6:00 AM</option>
        </select> <br><br>
        

        Return date:
        <input class="form-control0" data-provide="datepicker" name="returnDate" id="returnDate"  required /><p id="date_error"></p> at 
        <select id="returnTime" name="returnTime">
        <option>Between 7:00 am and 11:59 AM</option>
        <option>Between 12:00 PM and 4:30 PM</option>
        <option>Between 5:00 and 10:30 PM</option>
        <option>Between 12:00 AM and 6:00 AM</option>
        </select> <br><br>
        
        Age:
        <select id="age" name="age">
        <option>+25</option>
        <option>24</option>
        <option>23</option>
        <option>22</option>
        <option>21</option>
        <option>20</option>
        <option>19</option>
        <option>18</option>
        </select> <br><br>
        
         Choose a return location:<br>
        <select id="returnLoc" name="returnLoc">
            <option>118 Broad ST, Regina, SK</option>
            <option>Regina Airport Counter, Regina, SK (YQR)</option>
            <option>John G Diefenbaker Airport, Saskatoon, SK (YXE)</option>
            <option>600 1st Avenue, Saskatoon, SK</option>
        </select><br><br>

        <input type="submit" class="btn btn-success" name="Reserve" value="Reserve Now"/>   
        <input type="reset" class="btn btn-info" value="Reset">
    </form>
    
    
    </div>	
    
    
    

<!--########################
Customers should be able to check their reservations on this form
they can input confirmation number and their email 
(confirmation number should be generated randomly by rand())
###############################
--> 
   
    <div class="ResvBox">
        
    <h4 class="Rform">I already have a reservation</h4>
        
        
        
    <form action="view2.php" method="POST" name="check" id="check" enctype="multipart/form-data" class="centerform">
        
    Email:<input type="email" id="resv_email" name="resv_email" placeholder="example@email.com" required> <br>
    Confirmation Code:<input type="text" id="code" name="code" placeholder="your confirmation code" required><br><br>
    
    <input type="submit" class="btn btn-success" name="Submit" value="Check / View"/>   
    
    </form> 
       <script type="text/javascript" src="index_validation.js"></script> 
    </div>	
    
</div>
        
    
<?php 

include 'footer.php';

?>