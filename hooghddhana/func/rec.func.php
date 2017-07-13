<?php
// check counter
function rec_check($artcl_id) {
	$artcl_id = (int)$artcl_id;
  	$query = mysql_query("SELECT COUNT(`artcl_id`) FROM `rec_buttons` WHERE `artcl_id`=$artcl_id AND `user_id`=".$_SESSION['user_id']);
  	return (mysql_result($query, 0) == 0) ? false : true;
}

// Post rec
function post_rec($artcl_id, $type) {	
	$artcl_id = (int)$artcl_id;
	$type = mysql_real_escape_string($type);
 
	mysql_query("INSERT INTO `rec_buttons` VALUES ('', '$artcl_id', '".$_SESSION['user_id']."', '$type')");
  	return mysql_insert_id();
}

// Edit rec
function edit_rec($artcl_id, $type) {
	$artcl_id = (int)$artcl_id;	
	$type = mysql_real_escape_string($type);

	mysql_query("UPDATE `rec_buttons` SET `type`='$type' WHERE `artcl_id`=$artcl_id AND `user_id`=".$_SESSION['user_id']);
}

// Get all recs #
function get_all_n_recs($artcl_id) {
	$artcl_id = (int)$artcl_id;
	
	$all_n_recs = array();
	
	$all_n_recs_query = mysql_query("SELECT COUNT(`rec_id`) FROM `rec_buttons` WHERE `artcl_id`=$artcl_id");
	
  while ($all_n_recs_row = mysql_fetch_assoc($all_n_recs_query)) {
    $all_n_recs[] = array(
		'count' => $all_n_recs_row['COUNT(`rec_id`)']  
    );
  }
  return $all_n_recs;

}

// Get rec #
function get_recs($artcl_id, $type) {
	$artcl_id = (int)$artcl_id;
	
	$recs = array();
	
	$recs_query = mysql_query("SELECT COUNT(`rec_id`) FROM `rec_buttons` WHERE `artcl_id`=$artcl_id AND `type`='$type' GROUP BY `type`");
	
  while ($recs_row = mysql_fetch_assoc($recs_query)) {
    $recs[] = array(
		'count' => $recs_row['COUNT(`rec_id`)']  
    );
  }
  return $recs;

}

// Get all recs ID
function get_allrecs_id($artcl_id) {
	$artcl_id = (int)$artcl_id;
	
	$allrecs = array();
	
	$allrecs_query = mysql_query("SELECT `rec_id`, `type` FROM `rec_buttons` WHERE `artcl_id`=$artcl_id AND `user_id`=".$_SESSION['user_id']);
	
  while ($allrecs_row = mysql_fetch_assoc($allrecs_query)) {
    $allrecs[] = array(
		'id' => $allrecs_row['rec_id'],
		'type' => $allrecs_row['type'] 
    );
  }
  return $allrecs;

}
?>