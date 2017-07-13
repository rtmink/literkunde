<?php
// search content baby
function search_for($any, $all, $none, $type, $topic) {
	
	$any = mysql_real_escape_string(htmlentities($any));
	$all = mysql_real_escape_string(htmlentities($all));
	$none = mysql_real_escape_string(htmlentities($none));
	$type = mysql_real_escape_string(htmlentities($type));
	$topic = mysql_real_escape_string(htmlentities($topic));
	
	$artcls = array();
	
	if ($type == '' && $topic == '') {
		
		$artcls_query = mysql_query("SELECT *, MATCH(`title`, `body`) AGAINST ('$all $none $any' IN BOOLEAN MODE) AS score FROM `articles` WHERE MATCH(`title`, `body`) 
				AGAINST ('$all $none $any' IN BOOLEAN MODE) ORDER BY score DESC, ts_updated DESC");
		
	} else if ($type != '' && $topic == '') {
		
		$artcls_query = mysql_query("SELECT *, MATCH(`title`, `body`) AGAINST ('$all $none $any' IN BOOLEAN MODE) AS score FROM `articles` WHERE MATCH(`title`, `body`) 
				AGAINST ('$all $none $any' IN BOOLEAN MODE) && `type`='$type' ORDER BY score DESC, ts_updated DESC");
		
	} else if ($type == '' && $topic != '') {
		
		$artcls_query = mysql_query("SELECT *, MATCH(`title`, `body`) AGAINST ('$all $none $any' IN BOOLEAN MODE) AS score FROM `articles` WHERE MATCH(`title`, `body`) 
				AGAINST ('$all $none $any' IN BOOLEAN MODE) && `topic`='$topic' ORDER BY score DESC, ts_updated DESC");
		
	} else if ($type != '' && $topic != '') {
		
		$artcls_query = mysql_query("SELECT *, MATCH(`title`, `body`) AGAINST ('$all $none $any' IN BOOLEAN MODE) AS score FROM `articles` WHERE MATCH(`title`, `body`) 
				AGAINST ('$all $none $any' IN BOOLEAN MODE) && `type`='$type' && `topic`='$topic' ORDER BY score DESC, ts_updated DESC");
				
	}
					
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
			'source' => $artcls_row['source'],
			'score' => $artcls_row['score']  
		);
	 }
	 return $artcls;
	
}

// get number of searches
function get_n_searches($any, $all, $none, $type, $topic) {
	
	$any = mysql_real_escape_string(htmlentities($any));
	$all = mysql_real_escape_string(htmlentities($all));
	$none = mysql_real_escape_string(htmlentities($none));
	$type = mysql_real_escape_string(htmlentities($type));
	$topic = mysql_real_escape_string(htmlentities($topic));
	
	$artcl_ns = array();
	
	if ($type == '' && $topic == '') {
		
		$artcl_ns_query = mysql_query("SELECT COUNT(`artcl_id`) FROM `articles` WHERE MATCH(`title`, `body`) AGAINST ('$all $none $any' IN BOOLEAN MODE)");
		
	} else if ($type != '' && $topic == '') {
		
		$artcl_ns_query = mysql_query("SELECT COUNT(`artcl_id`) FROM `articles` WHERE MATCH(`title`, `body`) AGAINST ('$all $none $any' IN BOOLEAN MODE) && `type`='$type'");
		
	} else if ($type == '' && $topic != '') {
		
		$artcl_ns_query = mysql_query("SELECT COUNT(`artcl_id`) FROM `articles` WHERE MATCH(`title`, `body`) AGAINST ('$all $none $any' IN BOOLEAN MODE) && `topic`='$topic'");
		
	} else if ($type != '' && $topic != '') {
		
		$artcl_ns_query = mysql_query("SELECT COUNT(`artcl_id`) FROM `articles` WHERE MATCH(`title`, `body`) AGAINST ('$all $none $any' IN BOOLEAN MODE) && `type`='$type' && `topic`='$topic'");
		
	}
	
  while ($artcl_ns_row = mysql_fetch_assoc($artcl_ns_query)) {
    $artcl_ns[] = array(
	    'count' => $artcl_ns_row['COUNT(`artcl_id`)']  
    );
  }
  return $artcl_ns;

}

?>