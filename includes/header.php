<?php 

session_start();

    include("includes/db.php");
    include("functions/function.php")

?>

<?php 

if(isset($_GET['pro_id'])){
    
    $product_id = $_GET['pro_id'];
    
    $get_product = "select * from products where product_id='$product_id'";
    
    $run_product = mysqli_query($con,$get_product);
    
    $row_product = mysqli_fetch_array($run_product);
    
    $p_cat_id = $row_product['p_cat_id'];
    
    $pro_title = $row_product['product_title'];
    
    $pro_price = $row_product['product_price'];
    
    $pro_desc = $row_product['product_desc'];
    
    $pro_img1 = $row_product['product_img1'];
    
    $pro_img2 = $row_product['product_img2'];
    
    $pro_img3 = $row_product['product_img3'];
    
    $get_p_cat = "select * from product_categories where p_cat_id='$p_cat_id'";
    
    $run_p_cat = mysqli_query($con,$get_p_cat);
    
    $row_p_cat = mysqli_fetch_array($run_p_cat);
    
    $p_cat_title = $row_p_cat['p_cat_title'];
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>88th Street Bike Shop</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
   
   <div id="top"><!-- Top Begin -->

       <div class="container"><!-- Container Begin -->

           <div class="col-md-6 offer"><!-- col-md-6 offer Begin -->

               <a href="#" class="btn btn-success btn-sm"><?php 
                   
                   if(!isset($_SESSION['customer_email'])){
                       
                       echo "Welcome: Guest";
                       
                   }else{
                       
                       echo "Welcome: " . $_SESSION['customer_email'] . "";
                       
                   }
                   
                   ?>
                       
                   </a>
               <a href="checkout.php"><?php items(); ?> Items In Your Cart | Total Price: <?php total_price(); ?> </a>
               
           </div><!-- col-md-6 offer Finish -->

           <div class="col-md-6"><!-- col-md-6 Begin -->

                <ul class="menu"><!-- menu Begin -->

                    <li>
                        <a href="customer_register.php">Register</a>
                    </li>
                    <li>
                        <a href="customer/my_account.php">My Account</a>
                    </li>
                    <li>
                        <a href="cart.php">Go to Cart</a>
                    </li>
                    <li>
                        <?php 
                           
                           if(!isset($_SESSION['customer_email'])){
                       
                                echo "<a href='checkout.php'> Login </a>";

                               }else{

                                echo " <a href='logout.php'> Log Out </a> ";

                               }
                           
                           ?>
                    </li>
                    
                </ul><!-- menu Finish -->

           </div><!-- col-md-6 Finish -->

       </div><!-- Container Finish -->

   </div><!-- Top Finish -->

<!-- Navigation Bar -->

   <div id="navbar" class="navbar navbar-default"><!-- navbar navbar-default Begin -->

        <div class="container"><!-- container Begin -->

            <div class="navbar-header"><!-- navbar-header Begin -->
            
                <a href="index.php" class="navbar-brand home"><!-- navbar-brand home Begin -->
                    
                    <img src="images/logo.png" alt="Sample Logo" class="hidden-xs"><!-- Logo here -->

                </a><!-- navbar-brand home Finish -->

                <button class="navbar-toggle" data-toggle="collapse" data-target="#search">

                    <span class="sr-only">Toggle Search</span>
                    
                    <i class="fa fa-search"></i>

                </button>

            </div><!-- navbar-header Finish -->

            <div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse collapse Begin -->

                <div class="padding-nav"><!-- padding-nav Begin -->

                    <ul class="nav navbar-nav left"><!-- nav navbar-nav left Begin -->

                        <li class="<?php if($active=='Home') echo"active"; ?>">
                            <a href="index.php">Home</a>
                        </li>
                        <li class="<?php if($active=='Shop') echo"active"; ?>">
                            <a href="shop.php">Shop</a>
                        </li>
                        <li class="<?php if($active=='Account') echo"active"; ?>">
                                <?php 
                           
                           if(!isset($_SESSION['customer_email'])){
                               
                               echo"<a href='checkout.php'>My Account</a>";
                               
                           }else{
                               
                              echo"<a href='customer/my_account.php?my_orders'>My Account</a>"; 
                               
                           }
                           
                           ?>
                            </a>
                        </li>
                        <li class="<?php if($active=='Cart') echo"active"; ?>">
                            <a href="cart.php">Shopping Cart</a>
                        </li>
                        <li class="<?php if($active=='Contact') echo"active"; ?>">
                            <a href="contact.php">Contact Us</a>
                        </li>
                        
                    </ul><!-- nav navbar-nav left Finish -->
                    
                </div><!-- padding-nav Finish -->

                <a href="cart.php" class="btn navber-btn btn-primary right"><!-- btn navber-btn btn-primary right Begin -->
                    
                    <i class="fa fa-shopping-cart"></i>

                    <span><?php items(); ?> Items In Your Cart</span>

                </a><!-- btn navber-btn btn-primary right Finish -->

                <div class="collapse clearfix" id="search"><!-- collapse clearfix Begin -->
                    
                    <form method="get" action="result.php" class="navbar-form"><!-- navbar-form Begin -->

                        <div class="input-group"><!-- input-group Begin -->

                            <input type="text" class="form-control" placeholder="Search" name="user-query" required>
                            
                            <span class="input-group-btn"><!-- input-group-btn Begin -->

                                <button type="submit" name="search" value="Search" class="btn btn-primary"><!-- btn btn-primary Begin -->

                                    <i class="fa fa-search"></i>
                                    
                                </button><!-- btn btn-primary Finish -->

                            </span><!-- input-group-btn Finish -->

                        </div><!-- input-group Finish -->
                        
                    </form><!-- navbar-form Finish -->

                </div><!-- collapse clearfix Finish -->

            </div><!-- navbar-collapse collapse Finish -->

        </div><!-- container Finish -->
       
   </div><!-- navbar navbar-default Finish -->