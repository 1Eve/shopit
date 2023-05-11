<?php get_header()?>
<?php 
    $bag = get_template_directory_uri().'/assets/bag.jpg';
?>


<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://media.istockphoto.com/id/1144368446/photo/men-formal-wear-classy-outfit-business-suit.jpg?s=612x612&w=0&k=20&c=9ohd6ub6gdLTNdYtW2Cc64zTVHj0eX_eknN_lQGs4DE=" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://www.shutterstock.com/image-vector/set-6-retro-pinup-cute-260nw-260897675.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://media.istockphoto.com/id/477001758/photo/dressing-closet-with-baby-clothes-arranged-on-hangers.jpg?s=612x612&w=0&k=20&c=Z8V20-BFX9tnN-9bNjbXPYPG7N8aAdxsStsv2XHrJak=" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>



<?php

global $wpdb;
$table = $wpdb->prefix . 'products';

$books = $wpdb->get_results("SELECT * FROM $table");
$men = $wpdb->get_results("SELECT * FROM $table WHERE product_category = 'men'");
$kids = $wpdb->get_results("SELECT * FROM $table WHERE product_category = 'kids'");
$women = $wpdb->get_results("SELECT * FROM $table WHERE product_category = 'women'");

// echo '<pre>';
// var_dump($books);
// echo '</pre>'


?>


<div class="products-container">
<div class="Cheader" style="display: flex; justify-content:space-between;">
        <h2>Men</h2>
        <div style="margin-top: 10px; margin-right: 10px;"><h3><a href="/shopIT/products">SEE ALL</a></h3></div>
        
    </div>
    <hr>
    <div class="pcontainer">
        <?php
        for ($i = 0; $i < min(count($men), 4); $i++) {
            $book = $men[$i];
        ?>
            <div class="item">
            <a href="<?php echo "/shopIT/product-description?id={$product->id}" ?>">

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



<div class="products-container">
<div class="Cheader" style="display: flex; justify-content:space-between;">
        <h2>Women</h2>
        <div style="margin-top: 10px; margin-right: 10px;"><h3><a href="/shopIT/products">SEE ALL</a></h3></div>
        
    </div>
    <hr>
    <div class="pcontainer">
        <?php
        for ($i = 0; $i < min(count($women), 4); $i++) {
            $book = $women[$i];
        ?>
            <div class="item">
            <a href="<?php echo "/shopIT/product-description?id={$product->id}" ?>">

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


<div class="products-container">
    <div class="Cheader" style="display: flex; justify-content:space-between;">
        <h2>Kids</h2>
        <div style="margin-top: 10px; margin-right: 10px;"><h3><a href="/shopIT/products">SEE ALL</a></h3></div>
        
    </div>
    <hr>
    <div class="pcontainer">
        <?php
        for ($i = 0; $i < min(count($kids), 4); $i++) {
            $book = $kids[$i];
        ?>
            <div class="item">
            <a href="<?php echo "/shopIT/product-description?id={$product->id}" ?>">

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








<script>
    const carousel = document.querySelector(".carousel");
const images = carousel.querySelectorAll("img");
const prevButton = carousel.querySelector(".prev");
const nextButton = carousel.querySelector(".next");
const indicators = carousel.querySelector(".carousel-indicators");

let index = 0;
let timer;

function showImage(n) {
  images[index].classList.remove("active");
  indicators.children[index].classList.remove("active");
  index = (n + images.length) % images.length;
  images[index].classList.add("active");
  indicators.children[index].classList.add("active");
}

function prevImage() {
  showImage(index - 1);
}

function nextImage() {
  showImage(index + 1);
}

function startTimer() {
  timer = setInterval(nextImage, 5000);
}

function stopTimer() {
  clearInterval(timer);
}

prevButton.addEventListener("click", () => {
  stopTimer();
  prevImage();
  startTimer();
});

nextButton.addEventListener("click", () => {
  stopTimer();
  nextImage();
  startTimer();
});

for (let i = 0; i < images.length; i++) {
  const indicator = document.createElement("li");
  if (i === index) {
    indicator.classList.add("active");
  }
  indicator.addEventListener("click", () => {
    stopTimer();
    showImage(i);
    startTimer();
  });
  indicators.appendChild(indicator);
}

startTimer();

</script>

<?php get_footer(); ?>