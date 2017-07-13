<?php
include 'hooghddhana/has_ie_ratu/hasieratu.php';

if (logged_in()) {
  header('Location: profile.php?id='.$_SESSION['user_id']);
  exit();
}

$page_title = 'Log In &bull; Literkunde';

include 'hooghddhana/template/header3.php'; 
?>

<div id="main4">

<?php

if (isset($_POST['login_email'], $_POST['login_password'])) {
  $login_email = $_POST['login_email'];
  $login_password = $_POST['login_password'];

  $errors = array();

  if (empty($login_email) || empty($login_password)) {
    $errors[] = 'Email and password required.';
  } else {

    $login = login_check($login_email, $login_password);
    
    if ($login === false) {
      $errors[] = 'Email or password is incorrect.';
    }

  }

  if (!empty($errors)) {
    foreach ($errors as $error) {
      echo '<p class="red">', $error, '</p>';
    }
  } else {
    $_SESSION['user_id'] = $login;
    header('Location: profile.php?id='.$_SESSION['user_id']);
    exit();
  }

}

?>

  <form action="" method="post">
 	  <input type="text" class="bigInput" name="login_email" size="49" maxlength="255" placeholder="Email" />
	  <input type="password" class="bigInput" name="login_password" size="49" maxlength="35" autocomplete="off" placeholder="Password" />
      <input type="submit" class="button" value="Log In" /><span class="right"><a class="summary6 grey" href="forgot_password">Forgot your password?</a></span>
  </form>

</div>

<?php   
include 'hooghddhana/template/footer.php';
?>