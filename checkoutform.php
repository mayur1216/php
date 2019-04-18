
<?php  include('includes/header.html'); ?>
<!-- Simple form to fill up for the users-->
<div class="bk">
  <h2>Customer's Information</h2>
  <form action="success.php" method="post">
    <div class="form-group">
      <label for="fname">First Name</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="fname">
       
    </div>
       <div class="form-group">
      <label for="lname">Last Name</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="lname">

    </div>
    <div class="form-group">
      <label for="address">Address</label>
      <input type="text" class="form-control" id="address" placeholder="Address" name="address">
    </div>
        <div class="form-group">
      <label for="address">Email</label>
      <input type="text" class="form-control" id="email" placeholder="Email" name="email">
    </div>
    <div class="form-group">
        <label for="gender">Gender </label><br/>
      <input type="radio" name="gender" value="female">Female
      <input type="radio" name="gender" value="male">Male
      <input type="radio" name="gender" value="other">Other

    </div>
<!-- radio button-->
    
      <div class="form-group">
        <label for="payment">Payment Method </label><br/>
      <input type="radio" name="payment" value="PayPal">  <img src="images/paypal.png" height=50px width="70px">
      <input type="radio" name="payment" value="Debit">  <img src="images/debit.png" height=50px width="70px">
      <input type="radio" name="payment" value="Visa">  <img src="images/visa.png" height=50px width="70px">
      <input type="radio" name="payment" value="Visa">  <img src="images/cash.jpg" height=50px width="70px">

    </div>
          
    
    
    <button type="submit"  name="submit"class="btn btn-success">Submit</button>
     
  </form>

</div>



