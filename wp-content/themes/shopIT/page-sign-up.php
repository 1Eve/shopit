  <?php get_header(); ?>
<?php
  // Define user information
  if (isset($_POST['submit'])){

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    // Create new user
    // $user_id = wp_create_user( $fullname, $email, $phone, $password, $retypepassword);
    $user_id = wp_create_user( $fullname, $password, $email);
    
    // Add "Subscriber" role to new user
    // add_role( 'subscriber', 'Subscriber', array( 'read' => true, 'level_0' => true ) );
    wp_update_user( array( 'ID' => $user_id, 'role' => 'subscriber' ) );
  }
?>
  <form action="">
    <div class="s-up">
      <div class="sign-up">
        <div class="sheader1">
          <h2>Sign Up</h2>
        </div>
        <div class="input1">
          <label for="">Full Name</label>
          <div class="icons1">
            <ion-icon name="person-outline"></ion-icon>
            <input type="text" placeholder="Enter full name" name="fullname">
          </div>
        </div>
        <div class="input1">
          <label for="">Email Address</label>
          <div class="icons1">
            <ion-icon name="mail-outline"></ion-icon>
            <input type="text" placeholder="Enter email address" name="email">
          </div>
        </div>
        <div class="input1">
          <label for="">Phone Number</label>
          <div class="icons1">
            <ion-icon name="call-outline"></ion-icon>
            <input type="text" placeholder="Enter phone number" name="phone">
          </div>
        </div>
        <div class="input1">
          <label for="">Password</label>
          <div class="icons1">
            <ion-icon name="lock-open-outline"></ion-icon>
            <input type="password" placeholder="Enter password" name="password">
          </div>
        </div>
        <div class="input1">
          <label for="">Re-type Password</label>
          <div class="icons1">
            <ion-icon name="lock-open-outline"></ion-icon>
            <input type="password" placeholder="Re-type password">
          </div>
        </div>
        <button class="button2" name="submit">Continue</button>
        <div class="lower1">
          <p>Got an account?</p>
          <a href="">Login</a>
        </div>
      </div>
    </div>
  </form>
  <?php get_footer(); ?>
