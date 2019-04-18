
<?php  include('includes/header.html'); ?>


<?php
//session stat
session_start();
//initialised with zero
 $total=0;

?>
<div class="bk">
<table class="table">
<!--    table to display the data in cart-->
    <tr><th><h4>ORDER DETAILS</h4></th></tr>
    <tr>
    <th>Product ID</th>
    <th>Product Name</th>
    <th>Product Price($)</th>
    <th>Quantity</th>
    <th>Remove</th>
    </tr>
    <?php
   
    foreach($_SESSION["shoppingcart"] as $keys => $values)
    {
    ?>
    <tr>
    <td><?php echo $values['productID'];?></td>
    <td><?php echo $values['pName'];?></td>
    <td><?php echo $values['price'];?></td>
    <td><?php echo $values['quantity'];?></td>
    <td><a href="cart.php?action=delete&id="<?php echo $values['productID']?>><img src="images/bin.jpg" height="30px" width="40px"></a></td>
        
    </tr>
 <?php $total = $total + ($values["quantity"] * $values["price"]);}?>
</table>
    <h3>Total: <?php echo "$total $"?></h3>
    <a href="checkoutform.php"><button class="btn btn-success">Checkout</button></a>
   
</div>

 <?php include('includes/footer.html'); 
?>