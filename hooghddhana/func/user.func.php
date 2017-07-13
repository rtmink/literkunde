<?php
function logged_in() {
  return isset($_SESSION['user_id']);
}

function login_check($email, $password) {
  $email = trim(mysql_real_escape_string(stripslashes(htmlentities($email))));
  $password = mysql_real_escape_string(stripslashes($password));
  $login_query = mysql_query("SELECT COUNT(`user_id`) as `count`, `user_id` FROM `users` WHERE `email`='$email' AND `password`='".md5($password)."'");
  return (mysql_result($login_query, 0) == 1) ? mysql_result($login_query, 0, 'user_id') : false;

}

function email_check($email) {
  $email = trim(mysql_real_escape_string(stripslashes(htmlentities($email))));
  $login_query = mysql_query("SELECT COUNT(`user_id`) as `count`, `user_id` FROM `users` WHERE `email`='$email'");
  return (mysql_result($login_query, 0) == 1) ? mysql_result($login_query, 0, 'user_id') : false;

}

function user_data() {
  $args = func_get_args();
  $fields = '`'.implode('`, `', $args).'`';

  $query = mysql_query("SELECT $fields FROM `users` WHERE `user_id`=".$_SESSION['user_id']);
  $query_result = mysql_fetch_assoc($query);
  foreach ($args as $field) {
    $args[$field] = $query_result[$field];
  }
  return $args;

}

function get_users($user_id) {
  $user_id = (int)$user_id;  

  $users = array();

  $user_query = mysql_query("SELECT `first_name`, `last_name`, `bio` FROM `users` WHERE `user_id`=$user_id");
  while ($users_row = mysql_fetch_assoc($user_query)) {
    $users[] = array(
	      'first_name' => $users_row['first_name'],
	      'last_name' => $users_row['last_name'],
	      'bio' => $users_row['bio']
    );

  }
  return $users;

}

function user_register($email, $first_name, $last_name, $password) {
	$email = mysql_real_escape_string($email);
	$first_name = mysql_real_escape_string($first_name);
	$last_name = mysql_real_escape_string($last_name);  
  	$password = mysql_real_escape_string(stripslashes($password));
  	mysql_query("INSERT INTO `users` VALUES ('', '$email', '$first_name', '$last_name', '".md5($password)."', '', '', '')");
  	return mysql_insert_id(); 
}

function user_exists($email) {
  $email = trim(mysql_real_escape_string(stripslashes(htmlentities($email))));
  $query = mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `email`='$email'");
  return (mysql_result($query, 0) == 1) ? true : false;
}

//reset password

function user_key($email, $key, $time_ex) {
	$email = trim(mysql_real_escape_string(stripslashes(htmlentities($email))));
	
	mysql_query("UPDATE `users` SET `key`='$key', `time_ex`='$time_ex' WHERE `email`='$email'");
}

function user_email($email) {
	$email = trim(mysql_real_escape_string(stripslashes(htmlentities($email))));
	
	$users = array();

  	$user_query = mysql_query("SELECT `user_id` FROM `users` WHERE `email`='$email'");
  	while ($users_row = mysql_fetch_assoc($user_query)) {
    	$users[] = array(
	      'user_id' => $users_row['user_id']
    	);
  	}
  	return $users;
}

function key_check($user_id, $key) {
	$user_id = (int)$user_id;
	$key = mysql_real_escape_string($key);
	
  	$key_query = mysql_query("SELECT COUNT(`user_id`) as `count` FROM `users` WHERE `user_id`='$user_id' AND `key`='$key'");
  	return (mysql_result($key_query, 0) == 1) ? true : false;	
}

function time_check($user_id, $key) {
	$user_id = (int)$user_id;
	$key = mysql_real_escape_string($key);
	
	$times = array();

  	$time_query = mysql_query("SELECT `time_ex` FROM `users` WHERE `user_id`='$user_id' AND `key`='$key'");
  	while ($times_row = mysql_fetch_assoc($time_query)) {
    	$times[] = array(
	      'time_ex' => $times_row['time_ex']
    	);

  	}
  	return $times;
}

function get_u_email($user_id, $key) {
	$user_id = (int)$user_id;
	$key = mysql_real_escape_string($key);
	
	$users = array();

  	$user_query = mysql_query("SELECT `email` FROM `users` WHERE `user_id`='$user_id' AND `key`='$key'");
  	while ($users_row = mysql_fetch_assoc($user_query)) {
    	$users[] = array(
	      'email' => $users_row['email']
    	);

  	}
  	return $users;
}

function reset_password($user_id, $key, $reset_password) {
	$user_id = (int)$user_id;
	$key = mysql_real_escape_string($key);
  	$reset_password = mysql_real_escape_string(stripslashes($reset_password));  

  	mysql_query("UPDATE `users` SET `password`='$reset_password' WHERE `user_id`='$user_id' AND `key`='$key'");
}
?>