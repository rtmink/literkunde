<?php

$imgs = show_profile_imgs($user_id);

foreach ($users as $user) {

if (empty($imgs)) {

    echo '<img id="profImg" src="resources/images/asas.gif" />';

  } else {
    foreach ($imgs as $img) {
    echo '<img id="profImg" src="resources/uploads/thumbnails/prof_img/', $img['id'], '.', $img['ext'], '" alt="" />'; 

    }
  }
echo '<h4>', $user['first_name'], ' ', $user['last_name'], '</h4>'; 

	if (empty($user['bio'])) {
		
		echo '<p class="grey">', $user['first_name'], ' ', $user['last_name'], ' hasn\'t written a short autobiography for other people to see yet.';
		
	} else {
	
	echo '<p>', clickable_link($user['bio']), '</p>';
	
	}

}

echo '<div class="clear_comment"></div>';

?>