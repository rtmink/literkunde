<?php

if (empty($artcls)) {

echo '<p class="summary summary3" >There are no articles</p>';
  
} else {

foreach ($artcls as $artcl) {
    $user_id = $artcl['user_id'];
	$artcl_id = $artcl['id'];

    $users = get_users($user_id);

    echo '<h5><a href="../article.php?id=', $artcl['id'], '">', $artcl['title'], '</a></h5>';
    
    foreach ($users as $user) {
    echo '<p class="summary summary3" >by <a href="../profile.php?id=', $user_id, '">', $user['first_name'], ' ', $user['last_name'], '</a></p>';

    }
 
    if ($artcl['ts_updated'] == $artcl['ts_created']) {
		echo '<p class="summary summary3" >Published ', date('d F Y', $artcl['ts_created']), '</p>';
	} else {
		echo '<p class="summary summary3" >Published ', date('d F Y', $artcl['ts_created']), ' | Updated ', date('d F Y', $artcl['ts_updated']), '</p>';	
	}
	echo '<p class="summary summary3" >Type: <a href="../', strtolower($artcl['type']),'">', $artcl['type'],'</a> | Topic: ', $topic, '</p>';
	
	include '../hooghddhana/article/review_info/review_info.php';

	echo '<br />';    
  }

}

?>