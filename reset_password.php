<?php
include 'hooghddhana/has_ie_ratu/hasieratu.php';

if (logged_in()) {
  header('Location: profile.php?id='.$_SESSION['user_id']);
  exit();
}

if (!isset($_GET['id']) || !isset($_GET['key']) || empty($_GET['id']) || empty($_GET['key']) || key_check($_GET['id'], $_GET['key']) === false) {
  header('Location: forgot_password');
  exit();
}

$page_title = 'Reset Password &bull; Literkunde';

include 'hooghddhana/template/header3.php'; 

if (isset($_GET['id']) && isset($_GET['key']) && !empty($_GET['id']) && !empty($_GET['key']) && key_check($_GET['id'], $_GET['key']) === true) {
	$user_id = $_GET['id'];
	$key = $_GET['key'];
	
	$current_time = time();
	$times = time_check($user_id, $key);
	
	foreach ($times as $time) {
		$time_ex = $time['time_ex'];
	}

	if ($current_time > $time_ex) {
	echo '<p class="red">This link is out of date and has expired.</p>';
	} else {
	
	$users = get_u_email($user_id, $key);
	foreach ($users as $user) {
		$email = $user['email'];
	}   
?>
	<div id="main4">

	<h4 class="pg_heading" >Reset Password</h4>

<?php

	if (isset($_POST['reset_password'])) {
	  $reset_password = $_POST['reset_password'];
	
	  $errors = array();
	
	  if (empty($reset_password)) {
		$errors[] = 'Password required.';
	  } else {
		if (strlen($reset_password) < 6) {
			$errors[] = 'Password must be at least 6 characters.';
		}
		if (strlen($reset_password) > 35) {
			$errors[] = 'Password contains too many characters.';
		}
	  }
	
	  if (!empty($errors)) {
		foreach ($errors as $error) {
		  echo '<p class="red">', $error, '</p>';
		}
	  } else { 
		  $reset_password = md5($reset_password);
		  
		  reset_password($user_id, $key, $reset_password);
		  
		  $_SESSION['user_id'] = $user_id;
		  header('Location: profile.php?id='.$_SESSION['user_id']);
		  exit();
	  }
	
	}

?>

      <form action="" method="post">
          <p>Email:<br /><input type="text" size="49" maxlength="35" readonly="readonly" value="<?php echo $email; ?>" /></p>
          <p>New password:<br /><input type="password" name="reset_password" size="49" autocomplete="off" /></p>
          <p><input type="submit" class="button" value="Reset my password" /></p>
      </form>

<?php   
	}

}
?>

</div>

<?php
include 'hooghddhana/template/footer.php';
?>