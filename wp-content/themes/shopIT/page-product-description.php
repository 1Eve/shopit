<?php get_header() ?>

<?php
$bag = get_template_directory_uri() . '/assets/bag.jpg';
?>

<?php

global $wpdb;
$table = $wpdb->prefix . 'products';
$id = $_GET['id'];
$data = $wpdb->get_results("SELECT * FROM $table WHERE id=$id");



?>
<div class="container">
  <p class="p-2"><?php echo "shopIT/product-description/{$data[0]->product_name}" ?>
  </p>
  <div class="row mb-2 mt-2" style="background-color: #ffffff;">
    <div class="col-md-6">
      <!-- Product image and thumbnails -->
      <div class="card border-0 product-container">
        <div class="card-body">

          <!-- Product image -->
          <img src="<?php echo $data[0]->main_img; ?> " alt="bag" class=" rounded mx-auto d-block img-fluid mb-5" style="width: 50%;">

          <!-- Thumbnails -->
          <div class="row">
            <div class="col-3">
              <img src="<?php echo $data[0]->image2; ?>" alt="bag" class="img-fluid border-1" style="width: 75%;">
            </div>
            <div class="col-3">
              <img src="<?php echo $data[0]->image3; ?>" alt="bag" class="img-fluid" style="width: 75%;">
            </div>
            <div class="col-3">
              <img src="<?php echo $data[0]->image4; ?>" alt="bag" class="img-fluid" style="width: 75%;">
            </div>
            <div class="col-3">
              <img src="<?php echo $data[0]->image5; ?>" alt="bag" class="img-fluid" style="width: 75%;">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <!-- Product details -->
      <div class="card border-0 product-container">
        <div class="card-body">
          <h5 class="card-title" style="font-size: 30px;"><?php echo $data[0]->product_name; ?></h5>
          <p class="card-text">
            <small class="text-muted">Category: Accessories | <?php echo $data[0]->product_category; ?></small>
          </p>
          <p class="card-text font-weight-bold">(251 ratings)</p>
          <p class="card-text font-weight-bold" style="margin-top: 60px;font-size: 28px;"><?php echo $data[0]->price; ?></p>
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

    <p><?php echo $data[0]->product_description; ?></p>


    <div class=" row   mb-2 ">
      <p class="p-2  product-desc-title" style="font-weight:600;">Customer Reviews</p>
      <hr>
      <div class="">
        <p>5 stars &nbsp; <button class="btn btn-secondary w-75" type="button"></button></p>
        <p>4 stars &nbsp;<button class="btn btn-secondary w-0" type="button"></button></p>
        <p>3 stars &nbsp;<button class="btn btn-secondary w-0" type="button"></button></p>
        <p>2 stars &nbsp;<button class="btn btn-secondary w-0" type="button"></button></p>
        <p>1 star &nbsp; &nbsp;<button class="btn btn-secondary w-0" type="button"></button></p>
      </div>
      <hr>
      <p class="  product-desc-title" style="font-weight:600;">Review this product</p>
      <p class="pb-2">Share your thoughts with other customers</p>
      <button class="w-50 rounded border-0 " style="background-color:#535357;margin-bottom: 30px;">
        <p class="p-2" style="color:#ffffff;">Write a customer review</p>

      </button>

    </div>
  </div>

  <!-- Recommended items -->
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




<div class="w-100 mt-3 mr-2" style="background-color: #ffffff;">
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


</div>

<div class=" card row w-100  mb-2 h-25">
  <div style="background-color: #ffffff;">
    <p class="p-2  product-desc-title" style="font-weight:600;">Customer feedback</p>
    <hr>

  </div>
</div>
</div>






<?php get_footer() ?>