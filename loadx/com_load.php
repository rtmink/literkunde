<?php
include '../hooghddhana/has_ie_ratu/hasieratu2.php';

if (logged_in()) {

if (isset ($_POST['artcl_id'], $_POST['type'], $_POST['com'])) {
	$artcl_id = $_POST['artcl_id'];
  	$type = $_POST['type'];
  	$com = $_POST['com'];
  
  	$com = check_values($com);
	
	if ($com == '') {
		
	} else {
		$post_com = post_com($artcl_id, $type, $com);	
		
		// Showing Comment -----------------------------------------------------------------------------------------------------------------
		$com_infos = $post_com;
		
		foreach ($com_infos as $com_info) {
			echo '<li id="com_', $com_info['id'],'"><p class="summary2 summary4" >', nl2br(clickable_link($com_info['com'])), '</p>';
			
			$users = get_users($com_info['user_id']);
			
			foreach ($users as $user) {
            echo '<p class="summary2 summary5" ><a class="grey_color" href="profile.php?id=', $com_info['user_id'], '">', $user['first_name'], ' ', $user['last_name'] , 
                    '</a> &bull; ';
                }	
            
			echo time_posted($com_info['ts']), '<span class="right"><img class="dlt_com" id="dlt_com_', $com_info['id'],'" src="resources/images/trash.gif" /></span></p></li>';	
		}
		
		echo '<script type="text/javascript" src="resources/js/rev/dlt_com.js"></script>';
		    
	}	
}

}

?>