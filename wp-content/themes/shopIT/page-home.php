<?php get_header()?>
<?php 
    $bag = get_template_directory_uri().'/assets/bag.jpg';
?>

<style>
  #carouselExampleDark {
    height: 20vh;
    max-height: 200px; /* Set a maximum height in case the screen height is smaller than 1000px */
  }
  .carousel-item img {
    max-height: 100%;
  }
</style>

<div style="height:20vh;">
<div id="carouselExampleDark" class="carousel carousel-dark slide">
  <!-- carousel content -->

  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="..." class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="https://media.istockphoto.com/id/1041286698/photo/row-of-mens-shirts-in-blue-colors-on-hanger.jpg?s=612x612&w=0&k=20&c=6Id24qoPNg4LSaovnOMJCE540ZcPllWaLNLLIoHBgls=" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


</div>

<?php

global $wpdb;
$table = $wpdb->prefix . 'books';

$books = $wpdb->get_results("SELECT * FROM $table");

// echo '<pre>';
// var_dump($books);
// echo '</pre>'


?>


<div class="Pheader">
    <div>
        
    </div>
</div>

<div class="products-container">
    <div class="Cheader">
        <h2>Kids</h2>
    </div>
    <hr>
    <div class="pcontainer">
        <?php
        foreach ($books as $book) {
        ?>
            <div class="item">
                <div class="product">
                    <img src="<?php echo $book->main_img; ?>" alt="">
                    <p class="name"><?php echo $book->product_name; ?></p>
                    <h2 class="price"><?php echo $book->price; ?></h2>
                    <p class="discount"><?php echo $book->discount; ?></p>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<?php get_footer(); ?>