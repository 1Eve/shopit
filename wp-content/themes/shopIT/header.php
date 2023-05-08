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
    <nav class="container">
        <div>
            <h1>Logo</h1>
        </div>
        <form action="">
            <div class="navSearch">
                <input type="text" placeholder="search for products">
                <button>Search</button>

            </div>
        </form>
        <div class="nav-items">
            <div class="personalAccount">
                <ion-icon name="person-outline" size="large"></ion-icon>
                <h2>Account</h2>
            </div>
            <div class="navCart">
                <ion-icon name="cart-outline" size="large"></ion-icon>
                <h2>Cart</h2>
            </div>
        </div>
    </nav>