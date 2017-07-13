<?php
include '../hooghddhana/has_ie_ratu/hasieratu2.php';
if (!logged_in()) {
  header('Location: /');
  exit();
}

$page_title = 'Upload profile image &bull; Literkunde';

include '../hooghddhana/template/header4.php';
?>

<div id="main5">
	<div class="settings_menu">
        <ul>
            <li><a href="update_details"><h4>Update Details</h4></a></li>
            <li><a href="change_password"><h4>Change Password</h4></a></li>
            <li class="current"><a href="upload_profile_img"><h4>Upload Image</h4></a></li>
        </ul>
	</div>
    <div class="clear"></div>

<?php

if (isset($_FILES['profile_img'])) {
  $img_name = $_FILES['profile_img']['name']; 
  $img_size = $_FILES['profile_img']['size'];
  $img_temp = $_FILES['profile_img']['tmp_name'];

  $allowed_ext = array('jpg', 'jpeg', 'png', 'gif');
  $tmp = explode('.', $img_name);
  $img_ext = strtolower(end($tmp));

  $errors = array();

  if (empty($img_name)) {
    $errors[] = 'Please select a file.';
  } else {
    
     if (in_array($img_ext, $allowed_ext) === false) {
       $errors[] = 'File type not allowed.';
     }

     if ($img_size > 2097152) {
       $errors[] = 'Maximum file size is 2 MB.';
     }

  }

  if (!empty($errors)) {
    foreach ($errors as $error) {
      echo '<p class="red" >', $error, '</p>';
    }
  } else {
    $imgs = get_profile_imgs();

    if (empty($imgs)) {
      upload_profile_img($img_temp, $img_ext);
      header('Location: '.$_SERVER['HTTP_REFERER']);
      exit();

    } else {
      foreach ($imgs as $img) {
      $img_id = $img['id'];
      }

      delete_profile_img($img_id);      

      upload_profile_img($img_temp, $img_ext);
      header('Location: '.$_SERVER['HTTP_REFERER']);
      exit();
    }
    
  }
}

$imgs = get_profile_imgs();

if (empty($imgs)) {
    echo '<img id="profImg" src="../resources/images/asas.gif" />';
  } else {
    foreach ($imgs as $img) {
    echo '<img id="profImg" src="../resources/uploads/thumbnails/prof_img/', $img['id'], '.', $img['ext'], '" alt="" />'; 

    }
  } 

?>

<form action="" method="post" enctype="multipart/form-data">
	<?php
		if (!empty($imgs)) {
			echo '<p><a href="../dlt/dlt_prof_img.php?img_id=', $img['id'],'"><input type="button" class="button3" value="Delete" /></a></p>';
		}
	?>
    <p><input type="file" name="profile_img" /></p> 
	<p><input type="submit" class="button2" value="Upload" /></p>
</form>

</div>

<?php
include '../hooghddhana/template/footer.php';
?>