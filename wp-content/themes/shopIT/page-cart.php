<?php get_header() ?>
<?php
$bag = get_template_directory_uri() . '/assets/bag.jpg';
?>

<div class="container-fluid">

    <div class=" row mb-2 mt-2 " style="background-color: #ffffff;">
        <p class="p-2  product-desc-title" style="font-weight:700;">CART(2)</p>
        <hr>
        <div class="col-md-4">
        <div class="card  border-0 product-container" >
            <div class="d-block mx-auto card-body">
                <!-- Product image -->
                <img src="<?php echo $bag ?>" alt="bag" class=" rounded  img-fluid mb-0">
                <div class="row">
                    <div >
                    <button class="  " style="background-color:#000000;margin-bottom: 30px;width:50%;">
        <p class="p-2" style="color:#ffffff;">REMOVE</p>

      </button>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="col-md-6">
      <!-- Product details -->
      <div class="card border-0 product-container">
        <div class="card-body">
          <h5 class="card-title" style="font-size: 25px;">Generic Classy Big Box Sling Bag</h5>

          <p class="card-text font-weight-bold" style="margin-top: 20px;font-size: 28px;">KSh 2,100</p>
          <p class="card-text font-weight-light discount">KSh 2,100</p>
          <p class="card-text font-weight-bold" style="color:#4ED02E; font-weight:700;">In stock</p>


        </div>
      </div>

      
    </div>




    </div>

    <div class=" card row w-100  mb-2">
    <div class="" style="background-color: #ffffff;">
      <p class="" style="font-size:20px; font-weight: 600;">You may also like</p>
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




</div>

<?php get_footer() ?>