<?php
include 'hooghddhana/has_ie_ratu/hasieratu.php';

if (logged_in()) {
  header('Location: profile.php?id='.$_SESSION['user_id']);
  exit();
}

$page_title = 'Forgot Password &bull; Literkunde';

include 'hooghddhana/template/header3.php'; 
?>

<div id="main4">

<h4 class="pg_heading">Forgot Password</h4>

<?php

if (isset($_POST['login_email'])) {
  $login_email = check_values($_POST['login_email']);
  
  $errors = array();

  if (empty($login_email)) {
    $errors[] = 'Email required!';
  } else {

    $email_check = email_check($login_email);
    
    if ($email_check === false) {
      $errors[] = 'Email is not registered.';
    }

  }

  if (!empty($errors)) {
    foreach ($errors as $error) {
      echo '<p class="red">', $error, '</p>';
    }
?>
	
	<form action="" method="post">
 		<p><input type="text" class="bigInput" name="login_email" size="49" placeholder="Email" value="<?php echo $login_email; ?>" /></p>
    	<p><input type="submit" class="button" value="Reset my password" /></p>
	</form>
    
<?php	
  } else {
	  	$users = user_email($login_email);
		
		foreach ($users as $user) {
			$user_id = $user['user_id'];
		}
		
		$time = time();
		$time_ex = time() + (15 * 60);
	  
	  	$key = md5($user_id.$time_ex.$login_email.$time);
		$user_key = user_key($login_email, $key, $time_ex);

		$to = $login_email;
		$subject = 'Literkunde - Reset Password';
		$message = 'Please click the link below to reset your password.<br/>
					<a href="https://www.literkunde.com/reset_password.php?id='.$user_id.'&key='.$key.'">https://www.literkunde.com/reset_password.php?id='.$user_id.'&key='.$key.
					'</a><br /><br />If you don\'t want to reset your password, ignore this email.<br /><br />Thank you,<br />Literkunde';
		$headers = array(
			'From: Literkunde <no-reply@literkunde.com>',
			'Content-Type: text/html'
		);
		
		if (mail($to, $subject, $message, implode("\r\n", $headers))) {
			echo '<p class="green">We\'ve sent you an email with a link to reset your password.</p>
					<p class="green">Make sure it doesn\'t go to your junk mail box.</p>';
		} else {
			echo '<p class="red">Unfortunately, we couldn\'t send you an email.</p>';
		}

  }

} else {

?>

  <form action="" method="post">
 	  <input type="text" class="bigInput" name="login_email" size="49" placeholder="Email" />
      <input type="submit" class="button" value="Reset my password" />
  </form>

<?php  
}
?> 
 
</div> 
 
<?php 
include 'hooghddhana/template/footer.php';
?>