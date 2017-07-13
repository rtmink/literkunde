<?php
include 'hooghddhana/has_ie_ratu/hasieratu.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {
		
		$artcl_id = $_GET['id'];
		$artcls = get_artcls_id($artcl_id);
		
		if (empty($artcls)) {
			
			$page_title = 'Page Not Found &bull; Literkunde';
			
		} else {
			
			foreach ($artcls as $artcl) {	
		
					$page_title = $artcl['title'].' &bull; Literkunde';
			
			}
			
		}
		
	} else {
		
		$page_title = 'Page Not Found &bull; Literkunde';
		
	}
	
include 'hooghddhana/template/header.php';

if (!logged_in()) {
	
	if (isset($_GET['id']) && !empty($_GET['id'])) {
	
		$artcl_id = $_GET['id'];
		$artcls = get_artcls_id($artcl_id);
		
		if (empty($artcls)) {
			
			include 'hooghddhana/article/page_not_found.php';
			
		} else {
			
			include 'hooghddhana/article/other_nid_artcl.php';
			
		}	
	} else {
	
		include 'hooghddhana/article/page_not_found.php';
	
	}
	
} else {
	
	if (isset($_GET['id']) && !empty($_GET['id'])) {
		
		$artcl_id = $_GET['id'];
		$artcls = get_artcls_id($artcl_id);
		
		if (empty($artcls)) {
			
			include 'hooghddhana/article/page_not_found.php';
			
		} else {
			
			foreach ($artcls as $artcl) {
			$user_id = $artcl['user_id'];	
		
				if ($user_id == $_SESSION['user_id']) {
					
					include 'hooghddhana/article/my_artcl.php';
			
				} else {
			
					include 'hooghddhana/article/other_id_artcl.php';
			
				}
	
			}
			
		}
		
	} else {
		
		include 'hooghddhana/article/page_not_found.php';
		
	}
	
}

include 'hooghddhana/template/footer.php';
?>

<script type="text/javascript" src="resources/js/rev/js_rev.js" ></script>
