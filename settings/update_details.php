<?php
include '../hooghddhana/has_ie_ratu/hasieratu2.php';

if (!logged_in()) {
  header('Location: /');
  exit();
}

$page_title = 'Update details &bull; Literkunde';

include '../hooghddhana/template/header4.php';
?>

<script type="text/javascript" src="../resources/js/js_char.js" ></script>

<div id="main5">
	<div class="settings_menu">
        <ul>
            <li class="current"><a href="update_details"><h4>Update Details</h4></a></li>
            <li><a href="change_password"><h4>Change Password</h4></a></li>
            <li><a href="upload_profile_img"><h4>Upload Image</h4></a></li>
        </ul>
	</div>
    <div class="clear"></div>

<?php
$user_data = user_data('email', 'first_name', 'last_name', 'bio');

if (isset($_POST['change_email'], $_POST['change_first_name'], $_POST['change_last_name'], $_POST['bio'])) {
  $change_email = check_values($_POST['change_email']);
  $change_first_name = check_values($_POST['change_first_name']);
  $change_last_name = check_values($_POST['change_last_name']);
  $bio = check_values($_POST['bio']);
  
  $errors = array();

  if (empty($change_email) || empty($change_first_name) || empty($change_last_name)) {
    $errors[] = 'All fields except \'Bio\' required!';
  } else {

    if (filter_var($change_email, FILTER_VALIDATE_EMAIL) === false) {
      $errors[] = 'Email address not valid.';
    } 

    if (strlen($change_email) > 255 || strlen($change_first_name) > 25 || strlen($change_last_name) > 30 || strlen($bio) > 699) {
      $errors[] = 'One or more fields contains too many characters.';
    }

    if (check_email($change_email) === true) {
      $errors[] = 'Desired email address is already in use.';
    }

  }

  if (!empty($errors)) {
    foreach ($errors as $error) {
      echo '<p class="red" >', $error, '</p>';
    }
  } else {
    $change_details = change_details($change_email, $change_first_name, $change_last_name, $bio);
    echo '<p class="green">Details have been updated.</p>';
  }

?>

  <form id="formDetails" action="" method="post">
      <label>Email:</label>
      <input type="text" class="bigInput" name="change_email" maxlength="255" value="<?php echo $change_email; ?>" />
      <label>First Name:</label>
      <input type="text" class="bigInput" name="change_first_name" maxlength="15" value="<?php echo $change_first_name; ?>" />
      <label>Last Name:</label>
      <input type="text" class="bigInput" name="change_last_name" maxlength="20" value="<?php echo $change_last_name; ?>" />
      <label>Bio:</label>
      <textarea id="bio" name="bio" rows="15" cols="99" maxlength="699"><?php echo $bio; ?></textarea>
      <div id="disply_count" class="margin"></div>
      <input type="submit" class="button2" value="Update my details" />
  </form>

<?php

} else {
 
?>

<form id="formDetails" action="" method="post">
	<label>Email:</label>
    <input type="text" class="bigInput" name="change_email" maxlength="255" value="<?php echo $user_data['email']; ?>" />
    <label>First Name:</label>
    <input type="text" class="bigInput" name="change_first_name" maxlength="15" value="<?php echo $user_data['first_name']; ?>" />
    <label>Last Name:</label>
    <input type="text" class="bigInput" name="change_last_name" maxlength="20" value="<?php echo $user_data['last_name']; ?>" />
    <label>Bio:</label>
    <textarea id="bio" name="bio" rows="15" cols="99" maxlength="699"><?php echo $user_data['bio']; ?></textarea>
    <div id="disply_count" class="margin"></div>
    <input type="submit" class="button2" value="Update details" />
</form>

<?php

}
?>

</div>

<?php
include '../hooghddhana/template/footer.php';
?>