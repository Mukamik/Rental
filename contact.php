<div id="contact">
    <h2>Contact</h2>
    <p>Contact us with the form below!<br></p>
    <form name="contactform" method="post" action="sendmail.php">
        <label for="first_name">First Name *</label>

        <input type="text" name="first_name" maxlength="50" size="30">
        <br>
        <label for="last_name">Last Name *</label>

        <input type="text" name="last_name" maxlength="50" size="30">
        <br>
        <label for="email">Email Address *</label>

        <input type="text" name="email" maxlength="80" size="30">

        <label for="telephone">Telephone Number</label>

        <input type="text" name="telephone" maxlength="30" size="30">

        <label for="comments">Comments *</label>
        <br>
        <textarea name="comments" maxlength="1000" cols="25" rows="6"></textarea>
        <br>
        <input type="submit" value="Submit">
</div>