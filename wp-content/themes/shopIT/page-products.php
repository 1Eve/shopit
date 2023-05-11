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
        foreach ($books as $book) {
        ?>
            <div class="item">
                <a href="">
                    <div class="product">
                        <img src="<?php echo $book->main_img; ?>" alt="">
                        <p class="name"><?php echo $book->product_name; ?></p>
                        <h2 class="price"><?php echo $book->price; ?></h2>
                        <p class="discount"><?php echo $book->discount; ?></p>
                    </div>
                </a>
            </div>
        <?php } ?>
    </div>

</div>



<?php get_footer(); ?>