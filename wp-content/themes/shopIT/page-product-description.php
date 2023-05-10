<?php get_header() ?>

<?php
$bag = get_template_directory_uri() . '/assets/bag.jpg';
?>


<div class="container">
  <p class="p-2">Home > Fashion > Women’s Fashion > Hand bags & Wallets > Generic Classy Big Box Sling Bag
  </p>
  <div class="row mb-2 mt-2" style="background-color: #ffffff;">
    <div class="col-md-6">
      <!-- Product image and thumbnails -->
      <div class="card border-0 product-container">
        <div class="card-body">
          <!-- Product image -->
          <img src="<?php echo $bag ?>" alt="bag" class=" rounded mx-auto d-block img-fluid mb-3" style="width: 50%;">

          <!-- Thumbnails -->
          <div class="row">
            <div class="col-3">
              <img src="<?php echo $bag ?>" alt="bag" class="img-fluid border-1">
            </div>
            <div class="col-3">
              <img src="<?php echo $bag ?>" alt="bag" class="img-fluid">
            </div>
            <div class="col-3">
              <img src="<?php echo $bag ?>" alt="bag" class="img-fluid">
            </div>
            <div class="col-3">
              <img src="<?php echo $bag ?>" alt="bag" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <!-- Product details -->
      <div class="card border-0 product-container">
        <div class="card-body">
          <h5 class="card-title" style="font-size: 30px;">Generic Classy Big Box Sling Bag</h5>
          <p class="card-text">
            <small class="text-muted">Category: Accessories | Similar products from Accessories</small>
          </p>
          <p class="card-text font-weight-bold">(251 ratings)</p>
          <p class="card-text font-weight-bold" style="margin-top: 60px;font-size: 28px;">KSh 2,100</p>
          <p class="card-text font-weight-light discount">KSh 2,100</p>
          <p class="card-text font-weight-bold" style="color:#4ED02E; font-weight:700;">In stock</p>

          <button class="w-50 rounded border-0 " style="background-color:#F68B1E;margin-top: 50px;margin-bottom: 80px;">
            <p class="p-2" style="color:#ffffff;">Add to Cart</p>

          </button>

        </div>
      </div>
    </div>
  </div>



  <div class=" card row w-75  " style="background-color: #ffffff;">
    <p class="p-2  product-desc-title" style="font-weight:600;">About the Item</p>
    <hr>

      <li class="">Oversized PU leather tote bags CARRY ALL your needs</li>
      <li class="">Imported</li>
      <li class="">Top zipper closure</li>
      <li class="">A CARRY-ALL tote bag. Classy look and decent play of volumes characterize this tote handbag in vegan leather, with flat handles and braided detailing. Features a top zipper closure, spacious and organized inner space to fit your essentials, this shoulder bag is a new feminine and versatile must-have.</li>
      <li class="">4.5"D x 12.5"W x 11.5"H (12" Drop)</li>
      <li class="">Includes a side zippered pocket and two open pockets</li>
      <li class="">Soft Montana West printed fabric lining</li>
      <li class="mb-2">Essential for casual, work, and school use</li>
    

      <div class=" row   mb-2 " >
    <p class="p-2  product-desc-title" style="font-weight:600;">Customer Reviews</p>
    <hr>
    <ul style="list-style-type:none; font-size:18px;">
      <li class="">5 star</li>
      <li class="">4 star</li>
      <li class="">3 star</li>
      <li class="">2 star</li>
      <li class="">1 star</li>
      <hr>
      <p class="  product-desc-title" style="font-weight:600;">Review this product</p>
      <p class="pb-2">Share your thoughts with other customers</p>
      <button class="w-50 rounded border-0 " style="background-color:#282828;margin-bottom: 30px;">
        <p class="p-2" style="color:#ffffff;">Write a customer review</p>

      </button>
  </div>
  </div>

  <!-- Recommended items -->
  <div class=" card row w-100 mt-2  mb-2">
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

  <div class=" card row w-100  mb-2 h-25">
    <div style="background-color: #ffffff;">
      <p class="p-2  product-desc-title" style="font-weight:600;">Customer feedback</p>
      <hr>

    </div>
  </div>
</div>






<?php get_footer() ?>