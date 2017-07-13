<?php

// check counter
function counter_check($artcl_id) {
  $artcl_id = (int)$artcl_id;
  $query = mysql_query("SELECT COUNT(`artcl_id`) FROM `counter` WHERE `artcl_id`=$artcl_id AND `user_id`=".$_SESSION['user_id']);
  return (mysql_result($query, 0) == 0) ? false : true;
}


// Post counter
function post_counter($artcl_id) {
	
	$artcl_id = (int)$artcl_id;
 
  mysql_query("INSERT INTO `counter` VALUES ('', '$artcl_id', '".$_SESSION['user_id']."')");
  return mysql_insert_id();
}

// Get counter #
function get_ns_counter($artcl_id) {
	$artcl_id = (int)$artcl_id;
	
	$counter_ns = array();
	
	$counter_ns_query = mysql_query("SELECT COUNT(counter_id) FROM `counter` WHERE `artcl_id`=$artcl_id");
	
  while ($counter_ns_row = mysql_fetch_assoc($counter_ns_query)) {
    $counter_ns[] = array(
	    'count' => $counter_ns_row['COUNT(counter_id)']  
    );
  }
  return $counter_ns;

}
?>