<?php

// Artcl data
function artcl_data($artcl_id) {
	$artcl_id = (int)$artcl_id;
	
  $args = func_get_args();
  unset($args[0]);
  $fields = '`'.implode('`, `', $args).'`';

  $query = mysql_query("SELECT $fields FROM `articles` WHERE `artcl_id`= $artcl_id AND `user_id`=".$_SESSION['user_id']);
  $query_result = mysql_fetch_assoc($query);
  foreach ($args as $field) {
    $args[$field] = $query_result[$field];
  }
  return $args;

}

function artcl_check($artcl_id) {
  $artcl_id = (int)$artcl_id;
  $query = mysql_query("SELECT COUNT(`artcl_id`) FROM `articles` WHERE `artcl_id`=$artcl_id AND `user_id`=".$_SESSION['user_id']);
  return (mysql_result($query, 0) == 0) ? false : true;
}

// Get all
function get_artcls($start, $per_page) {
	$start = (int)$start;
	$per_page = (int)$per_page;
		
	$artcls = array();
	
	$artcls_query = mysql_query("SELECT `artcl_id`, `user_id`, `ts_created`, `ts_updated`, `title`, `type`, `topic`, `body`, `source` FROM `articles` ORDER BY `ts_updated` DESC LIMIT $start, $per_page");
	while ($artcls_row = mysql_fetch_assoc($artcls_query)) {
		$artcls[] = array(
			'id' => $artcls_row['artcl_id'],
			'user_id' => $artcls_row['user_id'],
			'ts_created' => $artcls_row['ts_created'],
			'ts_updated' => $artcls_row['ts_updated'],
			'title' => $artcls_row['title'],
			'type' => $artcls_row['type'],
			'topic' => $artcls_row['topic'],
			'body' => htmlspecialchars_decode($artcls_row['body']),
			'source' => htmlspecialchars_decode($artcls_row['source'])  
		);
	 }
	 return $artcls;
}

// Get artcl by type
function get_artcls_type($type, $start, $per_page) {
	$type = mysql_real_escape_string(htmlentities($type));
	
	$start = (int)$start;
	$per_page = (int)$per_page;
	
	$artcls = array();
	
	$artcls_query = mysql_query("SELECT `artcl_id`, `user_id`, `ts_created`, `ts_updated`, `title`, `topic` FROM `articles` WHERE `type`= '$type' ORDER BY `ts_updated` DESC LIMIT $start, $per_page");
	while ($artcls_row = mysql_fetch_assoc($artcls_query)) {
    $artcls[] = array(
	    'id' => $artcls_row['artcl_id'],
		'user_id' => $artcls_row['user_id'],
	    'ts_created' => $artcls_row['ts_created'],
	    'ts_updated' => $artcls_row['ts_updated'],
        'title' => $artcls_row['title'],
	    'topic' => $artcls_row['topic'] 
    );
  }
  return $artcls;
	
}

// Get artcl by topic
function get_artcls_topic($topic, $start, $per_page) {
	$topic = mysql_real_escape_string(htmlentities($topic));
	
	$start = (int)$start;
	$per_page = (int)$per_page;
	
	$artcls = array();
	
	$artcls_query = mysql_query("SELECT `artcl_id`, `user_id`, `ts_created`, `ts_updated`, `title`, `type` FROM `articles` WHERE `topic`= '$topic' ORDER BY `ts_updated` DESC LIMIT $start, $per_page");
	while ($artcls_row = mysql_fetch_assoc($artcls_query)) {
    $artcls[] = array(
	    'id' => $artcls_row['artcl_id'],
		'user_id' => $artcls_row['user_id'],
	    'ts_created' => $artcls_row['ts_created'],
	    'ts_updated' => $artcls_row['ts_updated'],
        'title' => $artcls_row['title'],
	    'type' => $artcls_row['type'] 
    );
  }
  return $artcls;
	
}

// Get artcl by  artcl ID
function get_artcls_id($artcl_id) {
	$artcl_id = (int)$artcl_id;	

  	$artcls = array();

  $artcls_query = mysql_query("SELECT `artcl_id`, `user_id`, `ts_created`, `ts_updated`, `type`, `topic`, `title`, `body`, `source` FROM `articles` WHERE `artcl_id`=$artcl_id");
  while ($artcls_row = mysql_fetch_assoc($artcls_query)) {
    $artcls[] = array(
	    'id' => $artcls_row['artcl_id'],
        'user_id' => $artcls_row['user_id'],
	    'ts_created' => $artcls_row['ts_created'],
	    'ts_updated' => $artcls_row['ts_updated'],
        'title' => $artcls_row['title'],
	    'type' => $artcls_row['type'],
	    'topic' => $artcls_row['topic'],
	    'body' => htmlspecialchars_decode($artcls_row['body']),
	    'source' => htmlspecialchars_decode($artcls_row['source'])  
    );
  }
  return $artcls;
}

// Get artcl by user ID
function get_artcls_uid($user_id) {
	$user_id = (int)$user_id;	

  	$artcls = array();

  $artcls_query = mysql_query("SELECT `artcl_id`, `ts_created`, `ts_updated`, `title`, `type`, `topic` FROM `articles` WHERE `user_id`=$user_id ORDER BY `ts_updated` DESC");
  while ($artcls_row = mysql_fetch_assoc($artcls_query)) {
    $artcls[] = array(
	    'id' => $artcls_row['artcl_id'],
	    'ts_created' => $artcls_row['ts_created'],
	    'ts_updated' => $artcls_row['ts_updated'],
        'title' => $artcls_row['title'],
	    'type' => $artcls_row['type'],
	    'topic' => $artcls_row['topic'] 
    );
  }
  return $artcls;
}

// get number of artcls
function get_n_artcls() {
	$artcl_ns = array();
	
	$artcl_ns_query = mysql_query("SELECT COUNT(`artcl_id`) FROM `articles`");
	
  while ($artcl_ns_row = mysql_fetch_assoc($artcl_ns_query)) {
    $artcl_ns[] = array(
	    'count' => $artcl_ns_row['COUNT(`artcl_id`)']  
    );
  }
  return $artcl_ns;

}

// get number of artcls by user_id
function get_n_artcls_uid($user_id) {
	$user_id = (int)$user_id;
	
	$artcl_ns = array();
	
	$artcl_ns_query = mysql_query("SELECT COUNT(`artcl_id`) FROM `articles` WHERE `user_id`=$user_id");
	
  while ($artcl_ns_row = mysql_fetch_assoc($artcl_ns_query)) {
    $artcl_ns[] = array(
	    'count' => $artcl_ns_row['COUNT(`artcl_id`)']  
    );
  }
  return $artcl_ns;

}

// get number of artcls by type
function get_n_artcls_type($type) {
	$type = mysql_real_escape_string(htmlentities($type));
	
	$artcl_ns = array();
	
	$artcl_ns_query = mysql_query("SELECT COUNT(`artcl_id`) FROM `articles` WHERE `type`='$type'");
	
  while ($artcl_ns_row = mysql_fetch_assoc($artcl_ns_query)) {
    $artcl_ns[] = array(
	    'count' => $artcl_ns_row['COUNT(`artcl_id`)']  
    );
  }
  return $artcl_ns;

}

// get number of artcls by topic
function get_n_artcls_topic($topic) {
	$topic = mysql_real_escape_string(htmlentities($topic));
	
	$artcl_ns = array();
	
	$artcl_ns_query = mysql_query("SELECT COUNT(`artcl_id`) FROM `articles` WHERE `topic`='$topic'");
	
  while ($artcl_ns_row = mysql_fetch_assoc($artcl_ns_query)) {
    $artcl_ns[] = array(
	    'count' => $artcl_ns_row['COUNT(`artcl_id`)']  
    );
  }
  return $artcl_ns;

}

// Get artcl & sort by pages
function sort_artcl_by_pg ($per_page) {
	$pages_query = mysql_query("SELECT COUNT(`artcl_id`) FROM `articles`");
	$pages = ceil(mysql_result($pages_query, 0) / $per_page);
	
	return $pages;
}

// Get artcl by type & sort by pages
function sort_artcl_type_by_pg ($per_page, $type) {
	$type = mysql_real_escape_string($type);
	
	$pages_query = mysql_query("SELECT COUNT(`artcl_id`) FROM `articles` WHERE `type`= '$type'");
	$pages = ceil(mysql_result($pages_query, 0) / $per_page);
	
	return $pages;
}

// Get artcl by topic & sort by pages
function sort_artcl_topic_by_pg ($per_page, $topic) {
	$topic = mysql_real_escape_string(htmlentities($topic));
	
	$pages_query = mysql_query("SELECT COUNT(`artcl_id`) FROM `articles` WHERE `topic`= '$topic'");
	$pages = ceil(mysql_result($pages_query, 0) / $per_page);
	
	return $pages;
}

// Post artcl
function post_artcl($artcl_title, $artcl_type, $artcl_topic, $artcl_body, $artcl_source) {
	$search = array('<p class="MsoNormal" align="right">', '<p class="MsoNormal" align="center">', '<p class="MsoNormal" align="right"><span>&nbsp;</span></p>', 
		'<p class="MsoNormal" align="center"><span>&nbsp;</span></p>', '<p class="MsoNormal"><span><br /></span></p>', '<p class="MsoNormal"><span>&nbsp;</span></p>', '<p>&nbsp;</p>',); 
	$replace = array('<p class="MsoNormal">', '<p class="MsoNormal">', '', '', '', '', '');
	$artcl_body = str_replace($search, $replace, $artcl_body);
	
	$artcl_source = str_replace($search, $replace, $artcl_source);
	
  	$artcl_title = trim(mysql_real_escape_string(stripslashes(htmlspecialchars($artcl_title, ENT_QUOTES))));
  	$artcl_type = mysql_real_escape_string(htmlentities($artcl_type));
  	$artcl_topic = mysql_real_escape_string(htmlentities($artcl_topic));
  	$artcl_body = trim(mysql_real_escape_string(stripslashes(htmlspecialchars($artcl_body, ENT_QUOTES)))); 
  	$artcl_source  = trim(mysql_real_escape_string(stripslashes(htmlspecialchars($artcl_source, ENT_QUOTES))));
	
  mysql_query("INSERT INTO `articles` VALUES ('', '".$_SESSION['user_id']."', UNIX_TIMESTAMP(), UNIX_TIMESTAMP(), '$artcl_title', '$artcl_type', '$artcl_topic', '$artcl_body', '$artcl_source')");
  return mysql_insert_id();
}

// Edit artcl
function edit_artcl($artcl_id, $artcl_title, $artcl_type, $artcl_topic, $artcl_body, $artcl_source) {
	$artcl_id = (int)$artcl_id;	
	
	$search = array('<p class="MsoNormal" align="right">', '<p class="MsoNormal" align="center">', '<p class="MsoNormal" align="right"><span>&nbsp;</span></p>', 
		'<p class="MsoNormal" align="center"><span>&nbsp;</span></p>', '<p class="MsoNormal"><span><br /></span></p>', '<p class="MsoNormal"><span>&nbsp;</span></p>', '<p>&nbsp;</p>',); 
	$replace = array('<p class="MsoNormal">', '<p class="MsoNormal">', '', '', '', '', '');
	$artcl_body = str_replace($search, $replace, $artcl_body);
	
	$artcl_source = str_replace($search, $replace, $artcl_source);
	
	$artcl_title = trim(mysql_real_escape_string(stripslashes(htmlspecialchars($artcl_title, ENT_QUOTES))));
  	$artcl_type = mysql_real_escape_string(htmlentities($artcl_type));
  	$artcl_topic = mysql_real_escape_string(htmlentities($artcl_topic));
  	$artcl_body = trim(mysql_real_escape_string(stripslashes(htmlspecialchars($artcl_body, ENT_QUOTES)))); 
  	$artcl_source  = trim(mysql_real_escape_string(stripslashes(htmlspecialchars($artcl_source, ENT_QUOTES))));
	
	mysql_query("UPDATE `articles` SET `ts_updated`=UNIX_TIMESTAMP(), `title`='$artcl_title', `type`='$artcl_type', `topic`='$artcl_topic', `body`='$artcl_body', `source`='$artcl_source'    WHERE `artcl_id`=$artcl_id AND `user_id`=".$_SESSION['user_id']);
}

// Delete artcl
function delete_artcl($artcl_id) {
  $artcl_id = (int)$artcl_id;
  
  mysql_query("DELETE FROM `articles` WHERE `artcl_id`=$artcl_id AND `user_id`=".$_SESSION['user_id']);
  // counter
  mysql_query("DELETE FROM `counter` WHERE `artcl_id`=$artcl_id");
  // rec
  mysql_query("DELETE FROM `rec_buttons` WHERE `artcl_id`=$artcl_id");
  // rating
  mysql_query("DELETE FROM `ratings` WHERE `artcl_id`=$artcl_id");
  // comment
  mysql_query("DELETE FROM `comments` WHERE `artcl_id`=$artcl_id");
}


?>