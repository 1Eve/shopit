<?php get_header()?>
<?php 
    $bag = get_template_directory_uri().'/assets/bag.jpg';
?>



<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://via.placeholder.com/800x400?text=ShopIT+Item+1" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://via.placeholder.com/800x400?text=ShopIT+Item+2" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://via.placeholder.com/800x400?text=ShopIT+Item+3" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>



<div class="container-1">
    <div class="Cheader">
        <p>Top picks</p>
        <p>SEE MORE</p>
    </div>
    <div class="product">
        <div class="item">
            <img src="<?php echo $bag ?>" alt="bag">
            <p class="name">Generic outfit</p>
            <p class="price">Ksh 2,500</p>
            <p class="discount">Ksh 5,000</p>
        </div>
        <div class="item">
        <img src="<?php echo $bag ?>" alt="bag">
            <p class="name">Generic outfit</p>
            <p class="price">Ksh 2,500</p>
            <p class="discount">Ksh 5,000</p>
        </div>
        <div class="item">
            <img src="<?php echo $bag ?>" alt="bag">
            <p class="name">Generic outfit</p>
            <p class="price">Ksh 2,500</p>
            <p class="discount">Ksh 5,000</p>
        </div>
        <div class="item">
            <img src="<?php echo $bag ?>" alt="bag">
            <p class="name">Generic outfit</p>
            <p class="price">Ksh 2,500</p>
            <p class="discount">Ksh 5,000</p>
        </div>
    </div>
</div>

<div class="container-2">
    <div class="Cheader">
        <p>Top picks</p>
        <p>SEE MORE</p>
    </div>
    <div class="product">
        <div class="item">
            <img src="<?php echo $bag ?>" alt="bag">
            <p class="name">Generic outfit</p>
            <p class="price">Ksh 2,500</p>
            <p class="discount">Ksh 5,000</p>
        </div>
        <div class="item">
        <img src="<?php echo $bag ?>" alt="bag">
            <p class="name">Generic outfit</p>
            <p class="price">Ksh 2,500</p>
            <p class="discount">Ksh 5,000</p>
        </div>
        <div class="item">
            <img src="<?php echo $bag ?>" alt="bag">
            <p class="name">Generic outfit</p>
            <p class="price">Ksh 2,500</p>
            <p class="discount">Ksh 5,000</p>
        </div>
        <div class="item">
            <img src="<?php echo $bag ?>" alt="bag">
            <p class="name">Generic outfit</p>
            <p class="price">Ksh 2,500</p>
            <p class="discount">Ksh 5,000</p>
        </div>
    </div>
</div>


<?php get_footer(); ?>