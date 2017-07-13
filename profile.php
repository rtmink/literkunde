<?php
include 'hooghddhana/has_ie_ratu/hasieratu.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {

    $user_id = $_GET['id'];
    $users = get_users($user_id);
 
    if (empty($users)) {

      $page_title = 'Page Not Found &bull; Literkunde';

    } else {
		
	  foreach ($users as $user) {
		  
		  $page_title = $user['first_name'].' '.$user['last_name'].' &bull; Literkunde';
		  
		}	
    } 

  } else {
	  
	  $page_title = 'Page Not Found &bull; Literkunde';
	  
  }

include 'hooghddhana/template/header.php';

if (!logged_in()) {

  if (isset($_GET['id']) && !empty($_GET['id'])) {

    $user_id = $_GET['id'];
    $users = get_users($user_id);
 
    if (empty($users)) {

      include 'hooghddhana/profile/page_not_found.php';

    } else {

      include 'hooghddhana/profile/other_hp.php';

    } 

  } else {

    header('Location: /');
    exit();

  }


} else {

  $user_data = user_data('first_name', 'last_name', 'bio');

  if (isset($_GET['id']) && !empty($_GET['id'])) {
    
    $user_id = $_GET['id'];
    $users = get_users($user_id);

    if ($user_id == $_SESSION['user_id']) {
 
      include 'hooghddhana/profile/my_hp.php';

    } elseif (empty($users)) {

      include 'hooghddhana/profile/page_not_found.php'; 

    } else {

      include 'hooghddhana/profile/other_hp.php';

    }

  } else {
        
    include 'hooghddhana/profile/page_not_found.php';
  }

}

?>

</div>

<div class="main2">

<?php

if (!logged_in()) {
	
	if (isset($_GET['id']) && !empty($_GET['id'])) {
	
	$user_id = $_GET['id'];
    $users = get_users($user_id);
	
	if (empty($users)) {
		
	} else {
		
		include 'hooghddhana/profile/artcl_hp.php';
		
	}
	
	} else {
	
	}
	
} else {

	if (isset($_GET['id']) && !empty($_GET['id'])) {
	
	$user_id = $_GET['id'];
    $users = get_users($user_id);
	
	if ($user_id == $_SESSION['user_id']) {
 
      include 'hooghddhana/profile/my_artcl_hp.php';

    } elseif (empty($users)) {
		
	} else {
		
		include 'hooghddhana/profile/artcl_hp.php';
		
	}
	
	} else {
	
	}
	
}

include 'hooghddhana/template/footer.php';
?>