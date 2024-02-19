<?php 

    $active='Home';
    include("includes/header.php");

?>

<!-- Product -->
    <div id="hot"><!-- hot Begin -->

        <div class="box"><!-- box Begin -->
    
            <div class="container"><!-- container Begin -->

                <div class="col-md-12"><!-- col-md-12 Begin -->

                    <h2>Our Latest Products</h2>
                    
                </div><!-- col-md-12 Finish -->
                
            </div><!-- container Finish -->

        </div><!-- box Finish -->

    </div><!-- hot Finish -->

    <div id="content" class="container"><!-- container Begin -->

        <div class="row"><!-- row Begin -->

            <?php

                getPro();

            ?>
            
        </div><!-- row Finish -->
        
    </div><!-- container Finish -->

    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    

<?php
    include("includes/footer.php");
?>
    
</body>
</html>