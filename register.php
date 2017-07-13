<?php
include 'hooghddhana/has_ie_ratu/hasieratu.php';

if (logged_in()) {
  header('Location: profile.php?id='.$_SESSION['user_id']);
  exit();
}

$page_title = 'Register &bull; Literkunde';

include 'hooghddhana/template/header3.php'; 
?>

<div id="main4">

<?php
if (isset($_POST['register_email'], $_POST['register_first_name'], $_POST['register_last_name'], $_POST['register_password'])) {
  $register_email = check_values($_POST['register_email']);
  $register_first_name = check_values($_POST['register_first_name']);
  $register_last_name = check_values($_POST['register_last_name']);
  $register_password = $_POST['register_password'];

  $errors = array();

  if (empty($register_email) || empty($register_first_name) || empty($register_last_name) || empty($register_password)) {
    $errors[] = 'All fields required!';
  } else {

    if (filter_var($register_email, FILTER_VALIDATE_EMAIL) === false) {
      $errors[] = 'Email address not valid.';
    } 

    if (strlen($register_email) > 255 || strlen($register_first_name) > 15 || strlen($register_last_name) > 20 || strlen($register_password) > 35) {
      $errors[] = 'One or more fields contains too many characters.';
    }

    if (user_exists($register_email) === true) {
      $errors[] = 'Desired email address is already in use.';
    }
	
    if (strlen($register_password) < 6) {
      $errors[] = 'Password must be at least 6 characters.';
    }

  }

  if (!empty($errors)) {
    foreach ($errors as $error) {
      echo '<p class="red" >', $error, '</p>';
    }
  } else {
    $register = user_register($register_email, $register_first_name, $register_last_name, $register_password);
    $_SESSION['user_id'] = $register;
    header('Location: profile.php?id='.$_SESSION['user_id']);
    exit();
  }

?>

	<form action="" method="post">
  		<input type="text" class="bigInput" name="register_email" maxlength="255" placeholder="Email" value="<?php echo $register_email; ?>" />
        <input type="text" class="bigInput" name="register_first_name" maxlength="15" placeholder="First Name" value="<?php echo $register_first_name; ?>" />
        <input type="text" class="bigInput" name="register_last_name" maxlength="20" placeholder="Last Name" value="<?php echo $register_last_name; ?>" />
        <input type="password" class="bigInput" name="register_password" maxlength="35" autocomplete="off" placeholder="Password" />
        <input type="submit" class="button" value="Sign Up" />
  	</form>

<?php   

} else {

?>

<form action="" method="post">
	<input type="text" class="bigInput" name="register_email" maxlength="255" placeholder="Email" />
    <input type="text" class="bigInput" name="register_first_name" maxlength="15" placeholder="First Name" />
    <input type="text" class="bigInput" name="register_last_name" maxlength="20" placeholder="Last Name" />
    <input type="password" class="bigInput" name="register_password" maxlength="35" autocomplete="off" placeholder="Password" />
    <input type="submit" class="button" value="Sign Up" />
</form>

<?php

}
?>

</div>

<?php
include 'hooghddhana/template/footer.php';
?>