<?php get_header();
/**
 * Template Name: View products
 */
?>




<div class="Tcontainer">

    <?php

    global $wpdb;
    $table = $wpdb->prefix . 'products';

    $products = $wpdb->get_results("SELECT * FROM $table");

    // echo '<pre>';
    // var_dump($books);
    // echo '</pre>'


    ?>



    <div class="Pheader">
        <div></div>
    </div>
    <div class="test-div">

        <?php
        foreach ($products as $product) {
        ?>
            <div class="item">
                <div>
                    <div>
                        <img src="<?php echo $product->main_img; ?>" alt="">
                    </div>
                    <p class="name"><?php echo $product->product_name; ?></p>
                    <h2 class="price"><?php echo $product->price; ?></h2>
                    <p class="discount"><?php echo $product->discount; ?></p>
                </div>
            <?php } ?>
            </div>
    </div>


</div>
<?php get_footer(); ?>
