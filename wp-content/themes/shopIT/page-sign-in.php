<?php
// Start session to store logged in user
// session_start();

// Check if user is already logged in
if (is_user_logged_in()) {
    wp_redirect('/shopit/home'); // Redirect to dashboard if already logged in
    exit;
}

// Check if form was submitted
if (isset($_POST['submit'])) {
    // Verify user credentials
    $user_email = $_POST['email'];
    $user_password = $_POST['password'];
    $creds = array(
        'user_login' => $user_email,
        'user_password' => $user_password,
        'remember' => true
    );
    $user = wp_signon($creds, false);

    
    if (!is_wp_error($user)) {
        // Display error message if authentication failed
        wp_set_current_user($user->ID);
        wp_set_auth_cookie($user->ID);
        do_action('wp_login', $user->user_login, $user);

        wp_redirect('/shopit/home');
        exit;
      }
      echo "server error";
    }
?>
<?php wp_head(); ?>


<div class="s-in">
  <div class="sign-in">
    <div class="sheader">
      <h2>Sign In</h2>
    </div>
    <div class="sinputs">
      <form action="" method="POST">
        <div class="input">
          <label for="">Email address</label>
          <div class="in1">
            <input type="text" placeholder="Enter Email address" name="email">
          </div>
        </div>
        <div class="input">
          <label for="">Password</label>
          <div class="in1">
            <input type="password" placeholder="Enter password" name="password">
          </div>
        </div>
        <a href="">Forgot password?</a>
        <div class="input">
          <button class="button1" name="submit">Continue</button>
        </div>
        <div class="lower">
          <p>New to shopIT?</p>
          <a href="">Create account</a>
        </div>
      </form>
    </div>
  </div>
</div>