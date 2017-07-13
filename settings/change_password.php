<?php
include '../hooghddhana/has_ie_ratu/hasieratu2.php';

if (!logged_in()) {
  header('Location: /');
  exit();
}

$page_title = 'Change password &bull; Literkunde';

include '../hooghddhana/template/header4.php';
?>

<script type="text/javascript" src="../resources/js/jspswd.js" ></script>

<div id="main5">
	<div class="settings_menu">
        <ul>
            <li><a href="update_details"><h4>Update Details</h4></a></li>
            <li class="current"><a href="change_password"><h4>Change Password</h4></a></li>
            <li><a href="upload_profile_img"><h4>Upload Image</h4></a></li>
        </ul>
	</div>
    <div class="clear"></div>

<?php

if (isset($_POST['old_password'], $_POST['new_password'], $_POST['retype_new_password'])) {

 $old_password = $_POST['old_password'];
 $new_password = $_POST['new_password'];
 $retype_new_password = $_POST['retype_new_password'];

 $errors = array();

 if (empty($old_password) || empty($new_password) || empty($retype_new_password)) {
   $errors[] = 'All fields required!';
 } else {

   if (strlen($old_password) > 32 || strlen($new_password) > 32 || strlen($retype_new_password) > 32) {
     $errors[] = 'One or more fields contains too many characters';
   } else if(strlen($old_password) < 6 || strlen($new_password) < 6 || strlen($retype_new_password) < 6) {
	 $errors[] = 'Password must be at least 6 characters';  
   } else {
	 $old_password = md5($_POST['old_password']);
	 $new_password = md5($_POST['new_password']);
     $retype_new_password = md5($_POST['retype_new_password']);
	 
	 $user_data = user_data('password'); 
	 $old_password_db = $user_data['password']; 
	  
     if ($old_password != $old_password_db) {
       $errors[] = 'Current password doesn\'t match'; 
     } 
	 if ($new_password != $retype_new_password) {
       $errors[] = 'New passwords don\'t match';
     }    
   }

 }

 if (!empty($errors)) {
   foreach ($errors as $error) {
     echo '<p class="red" >', $error, '</p>';
   }
 } else {
   $change_password = change_password($new_password);
   echo '<p class="green" >Password has been changed.</p>';
 }

} 

?>

<form id="formPassword" action="" method="post">
	<label for="">Current Password:</label>
	<input type="password" class="bigInput" name="old_password" size="30" maxlength="32" autocomplete="off" />
    <label for="">New Password:</label>
    <input type="password" id="new_pswd" class="bigInput" name="new_password" size="30" maxlength="32" autocomplete="off" />
    <div id='password_error_msg'></div>
    <label for="">Retype New Password:</label>
    <input type="password" class="bigInput" name="retype_new_password" size="30" maxlength="32" autocomplete="off" />
    <input type="submit" class="button2" value="Change password" />
</form>

</div>

<?php
include '../hooghddhana/template/footer.php';
?>