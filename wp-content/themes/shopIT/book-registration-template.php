<?php
/**
 * Template Name: product Registration
 */

 get_header(); 
?>




<div class="d-flex flex-column justify-content-center align-items-center">
    <!-- Success message popup -->
    <?php
        echo '<div class="alert alert-success" role="alert" id="successmsg">
                product Registered Successfully
             </div>';

        echo '<script> document.getElementById("successmsg").style.display = "none"; </script>';

        // var_dump($successmessage);

        if ($successmessage == true){
            echo '<script> document.getElementById("successmsg").style.display = "flex"; </script>';

            echo    '<script> 
                        setTimeout(function(){
                            document.getElementById("successmsg").style.display ="none";
                        }, 3000);
                    </script>';

            // $successmessage = false;
        }

    ?>

    <!-- Error message popup -->
    <?php
        echo '<div class="alert alert-danger" role="alert" id="errormsg">
                product not registered, an error occured
             </div>';

        echo '<script> document.getElementById("errormsg").style.display = "none"; </script>';

        if($errormessage == true){
            echo '<script> document.getElementById("errormsg").style.display = "flex"; </script>';

            echo    '<script> 
                        setTimeout(function(){
                            document.getElementById("errormsg").style.display ="none";
                        }, 3000);
                    </script>';
        }
    ?>

    <div class="input-grid-container row justify-content-center">
        <form action="" method="post" style="width:50vw; box-shadow: 3px 3px 3px 3px grey; padding:30px; ">
            <div class="form-group">
                <input type="text" name="main_img" id="main_img" class="form-control input-sm mb-3" placeholder="input main img url" required>
            </div>
            <div class="input-thumbnail">
                <div class="form-group">
                    <input type="text" name="image2" id="image2" class="form-control input-sm mb-3" placeholder="thumbnail url" required>
                </div>
                <div class="form-group">
                    <input type="text" name="image3" id="image3" class="form-control input-sm mb-3" placeholder="thumbnail url" required>
                </div>
                <div class="form-group">
                    <input type="text" name="image4" id="image4" class="form-control input-sm mb-3" placeholder="thumbnail url" required>
                </div>
                <div class="form-group">
                    <input type="text" name="image5" id="image5" class="form-control input-sm mb-3" placeholder="thumbnail url" required>
                </div>
            </div>
            <div class="form-group">
                <input type="text" name="price" id="price" class="form-control input-sm mb-3" placeholder="price" required>
            </div>
            <div class="form-group">
                <input type="text" name="discount" id="discount" class="form-control input-sm mb-3" placeholder="discount" required>
            </div>
            <div class="form-group">
                <input type="text" name="product_name" id="product_name" class="form-control input-sm mb-3" placeholder="product name" required>
            </div>
            <div class="form-group">
                <input type="text" name="product_description" id="product_description" class="form-control input-sm mb-3" placeholder="product description" required>
            </div>
            <div class="form-group">
                <input type="text" name="product_category" id="product_category" class="form-control input-sm mb-3" placeholder="product category" required>
            </div>

            <div class="row justify-content-center">
                <div class="col-xs-4 col-sm-4 col-md-4">
                    <input type="submit" value="Add product" name="submitbtn" class="btn btn-color">
                </div>
            </div>
        </form>
    </div>
</div>

<?php get_footer(); ?>