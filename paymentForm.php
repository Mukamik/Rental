<?php

include 'head.php';
include 'connect.php';
// user should be logged in to view this page

?>

<div class="container">
  <form class="form-horizontal" role="form" method="post" action="invoice.php">
    <fieldset>
      <legend>Payment</legend>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="card-holder-name">Name on Card</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="card-holder-name" id="card-holder-name" placeholder="Card Holder's Name" required>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="card-number">Card Number</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="card-number" id="card-number" placeholder="Credit Card Number" required>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="expiry-month">Expiration Date</label>
        <div class="col-sm-9">
          <div class="row">
              
             <div class="col-sm-3">
                   <input type="number" maxlength="4" placeholder="format: MMYY" required>
             </div>
              
                <label class="col-sm-3 control-label" for="cvv">Card CVV</label>
            <div class="col-sm-3">
            <input type="text" class="form-control" name="cvv" id="cvv" placeholder="Security Code" required>
            </div>
              
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">

          <input type="submit" class="btn btn-success" data-inline="true" value="Pay Now" name="pay">
            <?php include 'goBack.php'; ?>
        </div>
      </div>
    </fieldset>
  </form>
</div>

<?php

include 'footer.php';


?>