<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Homepage</title>


<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="style0.css" rel="stylesheet" type="text/css" media="all" />
    
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>


    
<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->


    
<header id="header" class="container">
	
	
    
<!--
<h2 class="Rform">Car Rental Service Portal</h2>
<nav>
	<div class="btn-group">
  <button type="button" class="btn btn-primary">Apple</button>
  <button type="button" class="btn btn-primary">Samsung</button>
  <div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
    Sony <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu">
      <li><a href="#">Tablet</a></li>
      <li><a href="#">Smartphone</a></li>
    </ul>
  </div>
</div>
	</nav> -->
	
    <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Car Rental Service Portal</a>
    </div>
    
    <ul class="nav navbar-nav">
      <li><a href="#">Home</a></li>
      <li><a href="#">Services</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
     
      <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#myPopup" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all ui-icon-check ui-btn-icon-left" ><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
        </ul>

        
      
        </div>
        

 
        
</nav>
    
    
</header>

</head>

<body>
    
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
        

        <input type="date" class="RDates" id="pickDate" name="pickDate"> at 
        <select id="pickTime" name="pickTime">
        <option>Between 7:00 am and 11:59 AM</option>
        <option>Between 12:00 PM and 4:30 PM</option>
        <option>Between 5:00 and 10:30 PM</option>
        <option>Between 12:00 AM and 6:00 AM</option>
        </select> <br><br>
        

        Return date:
        <input type="date" class="returnDate" id="returnDate" name="returnDate"> at 
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
        
    </form>
    
    
    </div>	
    
</div>
    
    
    

<!--########################
Customers should be able to check their reservations on this form
they can input confirmation number and their email 
(confirmation number should be generated randomly by rand())
###############################
--> 
<div id="featured" class="container">
    
    <div class="boxB">
        
    <h4 class="Rform">I already have a reservation</h4>
        
    <form action="view2.php" method="POST" name="check" id="check" enctype="multipart/form-data" class="centerform">
        
    Email:<input type="email" id="resv_email" name="resv_email" placeholder="example@email.com"> <br>
    Confirmation Code:<input type="text" id="code" name="code" placeholder="your confirmation code"><br><br>
    
    <input type="submit" class="btn btn-success" name="Submit" value="Check / View"/>   
        
    </form>
    
    
    </div>	
    
</div>
        
    
    

</body>
    <?php include "contact.php"?>
<?php include "footer.php"?>


</html>