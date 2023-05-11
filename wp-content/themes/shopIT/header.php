<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>shopIT</title>
    <?php wp_head(); ?>
</head>

<body>
    <?php
    $logo = get_template_directory_uri() . '/assets/logo.png';
    ?>
    <div class="Ncontainer">
        <nav>
            <div class="Nlogo">
                <a href="http://localhost/shopIT/home/"><img src="<?php echo $logo ?>" alt="bag"></a>
            </div>
            <!-- <a href="http://localhost/shopIT/book-v/">Book view</a> -->
            <a href="http://localhost/shopIT/book-reg/">Add product</a>
            <form action="<?php echo home_url('/') ?>" method="get" role="search">
                <div class="navSearch">
                    <ion-icon name="search-outline"></ion-icon>
                    <input class="navSearch" type="search" name="s" placeholder="Search" title="Search" value="<?php echo get_Search_query(); ?>">
                    <button>Search</button>

                </div>
            </form>
            <div class="nav-items">
                <div>
                    <a href="http://localhost/shopIT/products/">All products</a>
                </div>
                <div class="personalAccount">
                    <div class="Pdiv">
                        <ion-icon name="person-outline" size="large"></ion-icon>
                        <h2>Account</h2>
                        <ion-icon class="dropdown" name="chevron-down-outline"></ion-icon>
                    </div>
                    <div class="SSacount">
                        <a href="http://localhost/shopIT/sign-In/">Sign iiin</a>
                        <a href="http://localhost/shopIT/sign-up/">Sign up</a>
                    </div>
                </div>
                <div class="navCart">
                    <ion-icon name="cart-outline" size="large"></ion-icon>
                    <a href="http://localhost/shopIT/cart/">Cart</a>
                </div>
            </div>
        </nav>
    </div>