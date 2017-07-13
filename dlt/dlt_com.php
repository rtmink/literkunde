<?php
include '../hooghddhana/has_ie_ratu/hasieratu2.php';

if (logged_in()) {
	
	if (!isset($_GET['id']) || empty($_GET['id']) || comment_check($_GET['id']) === false) {
	 
	}
	
	if (isset($_GET['id']) && !empty($_GET['id']) && comment_check($_GET['id']) === true) {
	  $comment_id = $_GET['id'];
	  delete_comment($comment_id);
	}

}
?>