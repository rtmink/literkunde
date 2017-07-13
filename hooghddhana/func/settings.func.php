<?php

function change_password($new_password) {
  $new_password = mysql_real_escape_string(stripslashes($new_password));  

  mysql_query("UPDATE `users` SET `password`='$new_password' WHERE `user_id`=".$_SESSION['user_id']);
}

function change_details($email, $first_name, $last_name, $bio) {
	$email = mysql_real_escape_string($email);
	$first_name = mysql_real_escape_string($first_name);
	$last_name = mysql_real_escape_string($last_name);
	$bio = mysql_real_escape_string($bio);
		
	mysql_query("UPDATE `users` SET `email`='$email', `first_name`='$first_name', `last_name`='$last_name', `bio`='$bio' WHERE `user_id`=".$_SESSION['user_id']); 
}

function check_email($email) {
  $email = trim(mysql_real_escape_string(stripslashes(htmlentities($email))));
  $query = mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `email`='$email' AND `user_id` !=".$_SESSION['user_id']);
  return (mysql_result($query, 0) == 1) ? true : false;

}

?>