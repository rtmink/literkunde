<?php
$comments = get_comments_type($artcl_id, $type);
        
if (empty($comments)) {
	if ($type == 'pos') {
		echo '<h6>Positive (0)</h6>';
	} else if ($type == 'neg') {
		echo '<h6>Negative (0)</h6>';
	}    
	   
} else {
          
	$comment_ns = get_n_comments_type($artcl_id, $type);
            
    foreach ($comment_ns as $comment_n) {
		if ($type == 'pos') {
			echo '<h6>Positive (', $comment_n['count'],')</h6>';
		} else if ($type == 'neg') {
			echo '<h6>Negative (', $comment_n['count'],')</h6>';
		}    
	}
}
?>
     
	<div id="pg_<?php echo $type;?>" class="container">
        
    <ul class="content" id="<?php echo $type;?>_com_box">
        
<?php
	if (!empty($comments)) {        
		foreach ($comments as $comment) {
				
			$user_id = $comment['user_id'];
			$users = get_users($user_id);
			
			echo '<li id="com_', $comment['id'],'"><p class="summary2 summary4" >', nl2br(clickable_link($comment['comment'])), '</p>';
				
			foreach ($users as $user) {
				echo '<p class="summary2 summary5" ><a class="grey_color" href="profile.php?id=', $user_id, '">', $user['first_name'], ' ', $user['last_name'] , 
						'</a> &bull; ';
			}	
				
			include 'com_dlt.php';
				
		}
	}
?>
        
	</ul>
            
    <div class="pg_navigation"></div>	
	<div class="info_text"></div>
            
    </div>