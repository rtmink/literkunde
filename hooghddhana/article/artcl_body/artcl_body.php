<div class="highlight4">

<?php
foreach ($users as $user) {
    echo '<p class="summary summary7" >by <a href="profile.php?id=', $user_id, '">', $user['first_name'], ' ', $user['last_name'], '</a></p>';
}
 
    if ($artcl['ts_updated'] == $artcl['ts_created']) {
		echo '<p class="summary summary7" >Published ', date('d F Y', $artcl['ts_created']), '</p>';
	} else {
		echo '<p class="summary summary7" >Published ', date('d F Y', $artcl['ts_created']), ' | Updated ', date('d F Y', $artcl['ts_updated']), '</p>';	
	}
	
	$topic_link = str_replace(" ","_",$artcl['topic']);
	
	echo '<p class="summary summary7" >Type: <a href="', strtolower($artcl['type']), '">', $artcl['type'], '</a> | Topic: <a href="topic/', strtolower($topic_link), '">', $artcl['topic'], '</a></p>';
	
	echo '<p class="summary summary7" ><a href="#review_box">Reviews: </a>';
	
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
		echo '<a href="#comment_box">0 comments</a></p>';	
		} else {
			$comment_ns = get_n_comments($artcl_id);
			
			foreach ($comment_ns as $comment_n) {
				if ($comment_n['count'] == 1) {
					echo '<a href="#comment_box">', $comment_n['count'],' comment</a></p>';
				} else {
					echo '<a href="#comment_box">', $comment_n['count'],' comments</a></p>';
				}
			}
		}	
?>
	
	</div>
    
<?php echo $artcl['body'];?>
	
	<div class="clear"></div>
    <h2>Source</h2>
    
<?php echo $artcl['source'];?>	

	<h5 id="review_box">Reviews</h5>
    <div class="highlight5">