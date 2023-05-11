<?php get_header()?>
<?php 
    $bag = get_template_directory_uri().'/assets/bag.jpg';
?>


<div class="carousel">
  <img src="/assets/bag.jpg" alt="Image 1">
  <img src="image2.jpg" alt="Image 2">
  <img src="image3.jpg" alt="Image 3">
</div>


<style>
    .carousel {
  width: 100%;
  max-width: 800px;
  margin: 0 auto;
  position: relative;
  overflow: hidden;
}

.carousel img {
  width: 100%;
  height: auto;
  display: none;
  position: absolute;
  top: 0;
  left: 0;
}

.carousel img:first-child {
  display: block;
}

.carousel img.active {
  display: block;
}

.carousel button {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  width: 30px;
  height: 30px;
  background-color: transparent;
  border: none;
  cursor: pointer;
}

.carousel button.prev {
  left: 10px;
}

.carousel button.next {
  right: 10px;
}

.carousel button:before {
  content: "";
  display: block;
  width: 100%;
  height: 100%;
  background-image: url('https://cdn.jsdelivr.net/gh/solodev/carousel-arrow.svg');
  background-size: cover;
}

.carousel button.prev:before {
  transform: rotate(180deg);
}

.carousel-indicators {
  position: absolute;
  bottom: 10px;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
}

.carousel-indicators li {
  width: 10px;
  height: 10px;
  border-radius: 50%;
  background-color: #999;
  margin-right: 5px;
  cursor: pointer;
}

.carousel-indicators li.active {
  background-color: #333;
}

</style>








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
    <div style="height: 50%;" class="carousel-item" data-bs-interval="2000">
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
$men = $wpdb->get_results("SELECT * FROM $table WHERE product_category = 'men'");
$kids = $wpdb->get_results("SELECT * FROM $table WHERE product_category = 'kids'");
$women = $wpdb->get_results("SELECT * FROM $table WHERE product_category = 'women'");

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
        foreach ($kids as $book) {
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


<div class="products-container">
    <div class="Cheader">
        <h2>Men</h2>
    </div>
    <hr>
    <div class="pcontainer">
        <?php
        foreach ($men as $book) {
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


<div class="products-container">
    <div class="Cheader">
        <h2>women</h2>
    </div>
    <hr>
    <div class="pcontainer">
        <?php
        foreach ($women as $book) {
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