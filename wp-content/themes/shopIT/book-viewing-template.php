<?php get_header();
/**
 * Template Name: View Books
 */
?>




<div class="Tcontainer">

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
    <div class="test-div">

        <?php
        foreach ($books as $book) {
        ?>
            <div class="item">
                <div>
                    <div>
                        <img src="<?php echo $book->main_img; ?>" alt="">
                    </div>
                    <p class="name"><?php echo $book->product_name; ?></p>
                    <h2 class="price"><?php echo $book->price; ?></h2>
                    <p class="discount"><?php echo $book->discount; ?></p>
                </div>
            <?php } ?>
            </div>
    </div>


</div>
<?php get_footer(); ?>
