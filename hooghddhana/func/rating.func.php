<?php
// Post rating
function post_rating($artcl_id, $type, $rating) {
	
	$artcl_id = (int)$artcl_id;
	$rating = (int)$rating;
	
	mysql_query("INSERT INTO `ratings` VALUES ('', '$artcl_id', '".$_SESSION['user_id']."', '$type', '$rating')");
  	return mysql_insert_id();
}

// Edit rating
function edit_rating($artcl_id, $type, $rating) {
	$artcl_id = (int)$artcl_id;
	$rating = (int)$rating;

	mysql_query("UPDATE `ratings` SET `rating`='$rating' WHERE `artcl_id`=$artcl_id AND `type`='$type' AND `user_id`=".$_SESSION['user_id']);
}

// Get rating
function get_ratings($artcl_id, $type) {
	$artcl_id = (int)$artcl_id;
	
	$ratings = array();
	
	$ratings_query = mysql_query("SELECT `rating_id`, `user_id`, SUM(`rating`) FROM `ratings` WHERE `artcl_id`=$artcl_id AND `type`='$type'");
	
  while ($ratings_row = mysql_fetch_assoc($ratings_query)) {
    $ratings[] = array(
	    'id' => $ratings_row['rating_id'],
        'user_id' => $ratings_row['user_id'],
		'sum' => $ratings_row['SUM(`rating`)']
    );
  }
  return $ratings;

}

// Get all ratings #
function get_all_n_ratings($artcl_id, $type) {
	$artcl_id = (int)$artcl_id;
	
	$all_n_ratings = array();
	
	$all_n_ratings_query = mysql_query("SELECT COUNT(`rating_id`) FROM `ratings` WHERE `artcl_id`=$artcl_id AND `type`='$type'");
	
  while ($all_n_ratings_row = mysql_fetch_assoc($all_n_ratings_query)) {
    $all_n_ratings[] = array(
		'count' => $all_n_ratings_row['COUNT(`rating_id`)']  
    );
  }
  return $all_n_ratings;

}

// Get rating by user_id
function get_ratings_byid($artcl_id, $type) {
	$artcl_id = (int)$artcl_id;
	
	$ratings = array();
	
	$ratings_query = mysql_query("SELECT `rating_id`,`rating` FROM `ratings` WHERE `artcl_id`=$artcl_id  AND `type`='$type' AND `user_id`=".$_SESSION['user_id']);
	
  while ($ratings_row = mysql_fetch_assoc($ratings_query)) {
    $ratings[] = array(
	    'id' => $ratings_row['rating_id'],
	    'rating' => $ratings_row['rating']
    );
  }
  return $ratings;

}

// Get rating # =/= GROUP BY `type`
function get_n_ratings($artcl_id, $type) {
	$artcl_id = (int)$artcl_id;
	
	$rating_ns = array();
	
	$rating_ns_query = mysql_query("SELECT COUNT(`rating`) FROM `ratings` WHERE `artcl_id`=$artcl_id AND `type`='$type'");
	
  while ($rating_ns_row = mysql_fetch_assoc($rating_ns_query)) {
    $rating_ns[] = array(
	    'count' => $rating_ns_row['COUNT(`rating`)']  
    );
  }
  return $rating_ns;

}

// Check rating
function rating_check($artcl_id, $type) {
  $artcl_id = (int)$artcl_id;
  $query = mysql_query("SELECT COUNT(`rating_id`) FROM `ratings` WHERE `artcl_id`=$artcl_id  AND `type`='$type' AND `user_id`=".$_SESSION['user_id']);
  return (mysql_result($query, 0) == 0) ? false : true;
}
?>