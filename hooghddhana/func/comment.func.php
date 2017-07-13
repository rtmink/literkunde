<?php

// Post Comment
function post_com($artcl_id, $type, $com) {
	
	$artcl_id = (int)$artcl_id;
	$type = mysql_real_escape_string($type);
	$com = mysql_real_escape_string($com);
 
	mysql_query("INSERT INTO `comments` VALUES ('', '$artcl_id', '".$_SESSION['user_id']."', UNIX_TIMESTAMP(), '$type', '$com')");
	
	$com_id = mysql_insert_id();
	
	// Get Commment by Comment ID
	$com = array();
	
	$com_query = mysql_query("SELECT `user_id`, `timestamp`, `comment`  FROM `comments` WHERE `comment_id`=$com_id");
	
	while ($com_row = mysql_fetch_assoc($com_query)) {
    	$com[] = array(
			'id' => $com_id,
			'user_id' => $com_row['user_id'],
			'ts' => $com_row['timestamp'],
			'com' => $com_row['comment']
		);
	}
	return $com;
}

// Get comment
function get_comments($artcl_id) {
	$artcl_id = (int)$artcl_id;
	
	$comments = array();
	
	$comments_query = mysql_query("SELECT `comment_id`, `user_id`, `timestamp`, `comment` FROM `comments` WHERE `artcl_id`=$artcl_id ORDER BY `comment_id` DESC");
	
  while ($comments_row = mysql_fetch_assoc($comments_query)) {
    $comments[] = array(
	    'id' => $comments_row['comment_id'],
        'user_id' => $comments_row['user_id'],
	    'timestamp' => $comments_row['timestamp'],
        'comment' => $comments_row['comment']
    );
  }
  return $comments;

}

// Get comment by type
function get_comments_type($artcl_id, $type) {
	$artcl_id = (int)$artcl_id;
	
	$comments = array();
	
	$comments_query = mysql_query("SELECT `comment_id`, `user_id`, `timestamp`, `comment` FROM `comments` WHERE `artcl_id`=$artcl_id AND `type`='$type' ORDER BY `comment_id` DESC");
	
  while ($comments_row = mysql_fetch_assoc($comments_query)) {
    $comments[] = array(
	    'id' => $comments_row['comment_id'],
        'user_id' => $comments_row['user_id'],
	    'timestamp' => $comments_row['timestamp'],
        'comment' => $comments_row['comment']
    );
  }
  return $comments;

}

// Get comment #
function get_n_comments($artcl_id) {
	$artcl_id = (int)$artcl_id;
	
	$comment_ns = array();
	
	$comment_ns_query = mysql_query("SELECT COUNT(comment) FROM `comments` WHERE `artcl_id`=$artcl_id");
	
  while ($comment_ns_row = mysql_fetch_assoc($comment_ns_query)) {
    $comment_ns[] = array(
	    'count' => $comment_ns_row['COUNT(comment)']  
    );
  }
  return $comment_ns;

}

// Get comment # by type
function get_n_comments_type($artcl_id, $type) {
	$artcl_id = (int)$artcl_id;
	
	$comment_ns = array();
	
	$comment_ns_query = mysql_query("SELECT COUNT(comment) FROM `comments` WHERE `artcl_id`=$artcl_id AND `type`='$type' GROUP BY `type`");
	
  while ($comment_ns_row = mysql_fetch_assoc($comment_ns_query)) {
    $comment_ns[] = array(
	    'count' => $comment_ns_row['COUNT(comment)']  
    );
  }
  return $comment_ns;

}

// Check comment
function comment_check($comment_id) {
  $comment_id = (int)$comment_id;
  $query = mysql_query("SELECT COUNT(`comment_id`) FROM `comments` WHERE `comment_id`=$comment_id AND `user_id`=".$_SESSION['user_id']);
  return (mysql_result($query, 0) == 0) ? false : true;
}

// Delete comment by ID
function delete_comment($comment_id) {
  $comment_id = (int)$comment_id;
  
  mysql_query("DELETE FROM `comments` WHERE `comment_id`=$comment_id AND `user_id`=".$_SESSION['user_id']);
}
?>