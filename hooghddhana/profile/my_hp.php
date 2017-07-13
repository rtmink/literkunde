<?php

$imgs = get_profile_imgs();

echo '<a href="settings/upload_profile_img">';

if (empty($imgs)) {

    echo '<img id="profImg" src="resources/images/asas.gif" title="Upload a profile picture" />';

  } else {
    foreach ($imgs as $img) {
    echo '<img id="profImg" src="resources/uploads/thumbnails/prof_img/', $img['id'], '.', $img['ext'], '" alt="" />'; 

    }
  }
  
echo '</a>';

echo '<h4>', $user_data['first_name'], ' ', $user_data['last_name'], '</h4>'; 

if (empty($user_data['bio'])) {
	
	echo '<p class="grey">You haven\'t written a short autobiography for other people to see yet. <a class="blue" href="settings/update_details">Click here to start writing your bio.</a></p>';
	
} else {

	echo '<p>', clickable_link($user_data['bio']), '</p>';

}

echo '<div class="clear"></div>';

?>




