<?php  include('includes/header.html'); ?>
 <?php   


session_start();
if(isset($_POST["submit"]))
{//checking the session
    if(isset($_SESSION["shoppingcart"]))
    {
        $item_array_id = array_column($_SESSION["shoppingcart"], "productID");
        if(!in_array($_GET["productID"],$item_array_id))
        {
            $count = count($_SESSION["shoppingcart"]);
            $item_array= array(
        
        'productID'   => $_GET["productID"],
        'pName'     => $_POST["pNamehidden"],
        'price'     => $_POST["pricehidden"],
        'quantity' => $_POST["quantity"]
        
        
        );
             $_SESSION["shoppingcart"][$count]= $item_array;
        }
        
        else
        {
//            echo "<script>alert('Item already added')</script>";
            echo "<script>window.location-'shirts.php'</script>";
        }
    }
    else
    {
        $item_array= array(
        
        'productID'   => $_GET["productID"],
        'pName'     => $_POST["pNamehidden"],
        'price'     => $_POST["pricehidden"],
        'quantity' => $_POST["quantity"]
        
        
        );
        $_SESSION["shoppingcart"][0]= $item_array; //storing data in to session in form of array
    }
}
     if(isset($_GET["action"]))
        {
            if($_GET["action"] == "delete")
            {
                foreach($_SESSION["shoppingcart"] as $keys => $values)
                {
                    if($values["productID"] == $_GET["productID"])
                    {
                        unset($_SESSION["shoppingcart"][$keys]);
                        echo '<script>alert("Item has been Removed")</script>';
                        echo '<script>window.location="cart.php"</script>';
                    }
                }
            }
        }require('mysqli_connect.php');
 $q = "SELECT * FROM Inventory WHERE category='shoes';";
    $r = mysqli_query($dbc, $q);

while($res = mysqli_fetch_array($r))
{
    $productID= $res['productID'];
	$pName = $res['pName'];
    $image= $res['photo'];
    $price = $res['price'];
  
    $description = $res['description'];
?>
<form name="form" method="post" action="shoes.php?action=add&productID=<?php echo $res['productID'];?>">
    <?php
                                echo" <div class='col-md-4'>";
							    echo "<div class='panel panel-info'>";
								echo "<div class='panel-heading'><h4>$pName</h4></div>";
								echo "<div>";
                                echo '<img  height=400px width=100% src="data:images/jpeg;base64,'.base64_encode( ($image) ).'"/>';
                                echo "</div>";
                                echo "<div width=300px height= 250px><strong>Description: </strong>$description";
                                echo "</div>";
 
								echo "<div><strong>Price:$ </strong>$price";
                                echo "<br>";
                                echo "<strong>Product ID: </strong>$productID";
                                echo "<br>";
    ?>
                                <strong> Quantity</strong> <input type="text" value="1" name=quantity>
                                <input type='hidden' name='pNamehidden' value="<?php echo "$pName";?>"/ >
                                <input type='hidden' name='pricehidden' value="<?php echo "$price";?>"/ >
<?php
                                echo "<br>";
                                echo "<br>";
								echo "<button class='btn btn-danger btn-xs'type='submit' name='submit'>AddToCart</button>";
								echo "</div>";
							    echo "</div>";
						        echo "</div> ";
}
    ?>

 <?php include('includes/footer.html'); ?>