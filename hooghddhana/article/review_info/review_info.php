<?php

echo '<p class="summary summary3">';
	// counter
	$counter_ns = get_ns_counter($artcl_id);
	
	foreach ($counter_ns as $counter_n) {
		if ($counter_n['count'] == 1) {
			echo $counter_n['count'],' member view | ';		
		} else {
			echo $counter_n['count'],' member views | ';	
		}
	}
	
	// recommend
	$get_all_n_recs = get_all_n_recs($artcl_id);	
	$get_recs = get_recs($artcl_id, 'rec');
	
	if (empty($get_all_n_recs)) {
		
		echo '0% recommend this article  | ';
		
	} else {
		
		foreach ($get_all_n_recs as $get_all_n_rec) {
			
			if (empty($get_recs)) {
			
				echo '0% recommend this article | ';
			
			} else {
			
				foreach ($get_recs as $get_rec) {
			
				$percentage = ($get_rec['count'] / $get_all_n_rec['count']) * 100;
				$percentage = round($percentage, 3);
				echo $percentage,'% recommend this article | ';
			
				}
			
			}
	
		}
		
	}
	
	//comments #comment_box
	$comments = get_comments($artcl_id);
	
	if (empty($comments)) {
		echo '0 comments</p>';	
	} else {
		$comment_ns = get_n_comments($artcl_id);
			
		foreach ($comment_ns as $comment_n) {
			if ($comment_n['count'] == 1) {
				echo $comment_n['count'],' comment';	
			} else {
				echo $comment_n['count'],' comments';	
			}			
		}
	}

echo '</p>';
?>