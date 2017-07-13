<?php

function upload_profile_img($img_temp, $img_ext) {

  mysql_query("INSERT INTO `profile_img` VALUES ('', '".$_SESSION['user_id']."', UNIX_TIMESTAMP(), '$img_ext')");

  $img_id = mysql_insert_id();
  $img_file = $img_id.'.'.$img_ext;
  move_uploaded_file($img_temp, '../resources/uploads/prof_img/'.$img_file);

  create_profile_img_thumb('../resources/uploads/prof_img/', $img_file, '../resources/uploads/thumbnails/prof_img/');

}

function get_profile_imgs() {
  $imgs = array();

  $img_query = mysql_query("SELECT `img_id`, `timestamp`, `ext` FROM `profile_img` WHERE `user_id`=".$_SESSION['user_id']);
  while ($imgs_row = mysql_fetch_assoc($img_query)) {
    $imgs[] = array(
	      'id' => $imgs_row['img_id'],
	      'timestamp' => $imgs_row['timestamp'],
	      'ext' => $imgs_row['ext']
    );

  }
  return $imgs;

}

function show_profile_imgs($user_id) {
  $user_id = (int)$user_id;  

  $imgs = array();

  $img_query = mysql_query("SELECT `img_id`, `timestamp`, `ext` FROM `profile_img` WHERE `user_id`=$user_id");
  while ($imgs_row = mysql_fetch_assoc($img_query)) {
    $imgs[] = array(
	      'id' => $imgs_row['img_id'],
	      'timestamp' => $imgs_row['timestamp'],
	      'ext' => $imgs_row['ext']
    );

  }
  return $imgs;

}

function profile_img_check($img_id) {
  $img_id = (int)$img_id;
  $query = mysql_query("SELECT COUNT(`img_id`) FROM `profile_img` WHERE `img_id`=$img_id AND `user_id`=".$_SESSION['user_id']);
  return (mysql_result($query, 0) == 0) ? false : true;
}

function delete_profile_img($img_id) {
  $img_id = (int)$img_id;

  $img_query = mysql_query("SELECT `ext` FROM `profile_img` WHERE `img_id`=$img_id AND `user_id`=".$_SESSION['user_id']);
  $img_result = mysql_fetch_assoc($img_query);

  $img_ext = $img_result['ext'];

  unlink('../resources/uploads/prof_img/'.$img_id.'.'.$img_ext);
  unlink('../resources/uploads/thumbnails/prof_img/'.$img_id.'.'.$img_ext);

  mysql_query("DELETE FROM `profile_img` WHERE `img_id`=$img_id AND `user_id`=".$_SESSION['user_id']);
}

?>