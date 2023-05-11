<?php

/**
 * Template Name: Product Books
 */
get_header();
?>
<?php
    global $wpdb;
    $table = $wpdb->prefix . 'products';
if(isset($_GET['s'])){

    $search = $_GET['s'];
    
    
    $products = $wpdb->get_results("SELECT * FROM $table WHERE product_name LIKE %s");
    echo "jyf";
    
    // echo '<pre>';
    // var_dump($products);
    // echo '</pre>'
}else{
    $products = $wpdb->get_results("SELECT * FROM $table");
}


?>


<div class="Pheader">
    <div></div>
</div>


<div class="products-container">
    <div class="Cheader">
        <h2>Top picks</h2>
    </div>
    <hr>

    <div class="pcontainer">
        <?php
 
        foreach ($products as $product) {

        ?>
            <div class="item">
                <a href="<?php echo "/shopIT/product-description?id={$product->id}" ?>">
                    <div class="product">
                        <img src="<?php echo $product->main_img; ?>" alt="">
                        <p class="name"><?php echo $product->product_name; ?></p>
                        <h2 class="price"><?php echo $product->price; ?></h2>
                        <p class="discount"><?php echo $product->discount; ?></p>
                    </div>
                </a>
            </div>
        <?php } ?>
    </div>

</div>



<?php get_footer(); ?>