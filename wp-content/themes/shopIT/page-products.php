<?php

/**
 * Template Name: Product Books
 */
get_header();
?>
<?php

global $wpdb;
$table = $wpdb->prefix . 'books';

$books = $wpdb->get_results("SELECT * FROM $table");

// echo '<pre>';
// var_dump($books);
// echo '</pre>'


?>
<div class="container-grid">

    <div class="Pheader">
        <div></div>
    </div>
    
    <div class="Products-container">
        <!-- <div>
            <div class="Cheader">
                <h2>Top Picks</h2>
            </div>
            <hr>
            <?php 
            // foreach ($books as $book) 
            {
            ?>
            <div class="product">
                <div class="item">
                    <img src="<?php //echo $book->main_img; ?>" alt="">
                    <p class="name"><?php //echo $book->product_name; ?></p>
                    <h2 class="price"><?php //echo $book->price; ?></h2>
                    <p class="discount"><?php //echo $book->discount; ?></p>
                </div>
            <?php } ?>
        </div> -->
    
        <div class="Pcontainer">
            <?php
            foreach ($books as $book) {
            ?>
            <div class="product">
                <div class="item">
                    <img src="<?php echo $book->main_img; ?>" alt="">
                    <p class="name"><?php echo $book->product_name; ?></p>
                    <h2 class="price"><?php echo $book->price; ?></h2>
                    <p class="discount"><?php echo $book->discount; ?></p>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<div class="Cfooter">
    <?php get_footer(); ?>
</div>

