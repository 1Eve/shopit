<?php wp_head(); ?>
<?php

if (isset($_POST['submit'])) : ?>
  <?php
  // sanitize user inputs
  $fullname = $_POST['fullname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];

  // validate user inputs
  $errors = array();

  if (empty($fullname)) {
    $errors['fullname'] = 'Please enter a username';
  }

  if (empty($email)) {
    $errors['email'] = 'Please enter an email address';
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Please enter a valid email address';
  }

  if (empty($phone)) {
    $errors['phone'] = 'Please enter a phone number';
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['phone'] = 'Please enter a valid phone number';
  }

  if (empty($password)) {
    $errors['password'] = 'Please enter a password';
  }

  if ($password !== $confirm_password) {
    $errors['confirm_password'] = 'Passwords do not match';
  }

  // create new user if there are no errors
  if (empty($errors)) {
    $user_id = wp_create_user($fullname, $password, $email);
    if (is_wp_error($user_id)) {
      var_dump($user_id);
      echo '<p class="signup-error">An error occurred while creating your account. Please try again later.</p>';
    } else {
      wp_update_user(array('ID' => $user_id, 'role' => 'subscriber'));
      // echo '<p class="signup-success">Your account has been created successfully. Please login using your credentials.</p>';
      echo("<script>location.href = 'http://localhost/shopit';</script>");
      // exit(wp_redirect("Location: /shopit/sign-in"));
    }
  } else {
    // display errors
    foreach ($errors as $error) {
      echo '<p class="signup-error">' . $error . '</p>';
    }
  }
  ?>
<?php endif; ?>

<form action="" method="post">
  <div class="s-up">
    <div class="sign-up">
      <div class="sheader1">
        <h2>Update Details</h2>
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
        <label for="">Confirm Password</label>
        <div class="icons1">
          <ion-icon name="lock-open-outline"></ion-icon>
          <input type="password" placeholder="Confirm password" name="confirm_password">
        </div>
      </div>
      <button style="margin-top: 40px;" class="button2" name="submit">Update</button>
    </div>
  </div>
</form>