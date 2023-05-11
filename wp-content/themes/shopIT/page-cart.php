<?php get_header() ?>
<?php
$bag = get_template_directory_uri() . '/assets/bag.jpg';
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
<div class="container">
  <div class="row d-flex">
    <div class=" row mb-2 mt-2 " style="background-color: #ffffff;width:80%;">
      <p class="p-2  product-desc-title" style="font-weight:700;">CART(2)</p>
      <hr>

      <div class="col-md-2">
        <div class="card  border-0 product-container">
          <div class="d-block mx-auto card-body">
            <!-- Product image -->
            <img src="<?php echo $bag ?>" alt="bag" class=" rounded  img-fluid">
            <div class="row">

            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <!-- Product details -->
        <div class="card border-0 product-container">
          <div class="card-body">
            <h5 class="card-title" style="font-size: 20px;">Generic Classy Big Box Sling Bag</h5>

            <p class="card-text font-weight-bold" style="margin-top: 10px;font-size: 18px;">KSh 2,100</p>
            <p class="card-text font-weight-light discount">KSh 2,100</p>
            <p class="card-text font-weight-bold" style="color:#4ED02E; font-weight:700;">In stock</p>


          </div>

        </div>


      </div>

      <div class="col">
        <!-- Product details -->
        <div class="card border-0">
          <div class="d-flex row justify-content-end p-2">

            <div class=" mb-3 ">
              <button class=" minus-btn border-0 rounded p-3" style="background-color: #F68B1E;font-weight:600" type="button">-</button>
              <input type="text" style="margin-left:1px;font-weight:600;padding: 0 1px;" class=" text-center border-0  counter" value="1" readonly>
              <button class=" plus-btn border-0 rounded p-3" style="background-color: #F68B1E;font-weight:600" type="button">+</button>

              <?php echo "<script>
  
  let counterInput = document.querySelector('.counter');

  
  let minusBtn = document.querySelector('.minus-btn');
  let plusBtn = document.querySelector('.plus-btn');


  minusBtn.addEventListener('click', function() {
    var value = parseInt(counterInput.value);
    if (value > 1) {
      counterInput.value = value - 1;
    }
  });

  plusBtn.addEventListener('click', function() {
    let value = parseInt(counterInput.value);
    counterInput.value = value + 1;
  });
</script> "  ?>

            </div>
            <button class="border-0 bg-white"><ion-icon name="trash" size="large" style="color:red;"></ion-icon></button>

          </div>

        </div>
      </div>


      <hr>
    </div>


  </div>

  <div class=" card row w-100  mb-2">
    <div class="" style="background-color: #ffffff;">
      <p class="" style="font-size:20px; font-weight: 600;">You may also like</p>
    </div>
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

  <?php get_footer() ?>