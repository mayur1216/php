<?php  include('includes/header.html'); ?>
<?php session_start();?>
<?php  if($_SERVER['REQUEST_METHOD'] == 'POST')
{require('mysqli_connect.php');
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$address = $_POST['address'];
$email=$_POST['email'];
$payment = $_POST['payment'];
   //check wether the informtion entered is validate                                                                                                                                                                                                         
 $error = false;   
    
    if(!$fname){
        $error = true;
        echo "<span class='error'>First Name is required</span>";
        echo "<br>";
    }
    if(!$lname){
        $error = true;
        echo "<span class='error'>Last Name is required</span>";
          echo "<br>";
    }
    
     if(!$address){
        $error = true;
        echo "<span class='error'>Address is required</span>";
           echo "<br>";
    }
    
    if(!$email){
        $error = true;
        echo "<span class='error'>Email is required</span>";
        echo "<br>";
    }
     
    
    
    
    
    if($error == false ){
         echo "<h1 color='white'>Our Team Will Contact You soon for the shipment</h1>";
     
    
    

        if(!$error && $fname && $lname && $address  && $email && $payment){
        
         $i = "INSERT INTO users (fname, lname, address,email, payment) VALUES ('".$fname."', '". $lname."','".$address."','".$email."','". $payment."');";
         $r = mysqli_query($dbc, $i);
         if($r){
            
         }else{
             echo $dbc->error;
         }
        }
                      }
    }
    ?>
 <?php session_destroy();?>
 <?php include('includes/footer.html'); 
?>