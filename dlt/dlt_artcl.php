<?php
include '../hooghddhana/has_ie_ratu/hasieratu2.php';

if (!logged_in()) {
  header('Location: /');
  exit();
}

if (!isset($_GET['id']) || empty($_GET['id']) || artcl_check($_GET['id']) === false) {
  header('Location: ../profile.php?id='.$_SESSION['user_id']);
  exit();
}

if (isset($_GET['id']) && !empty($_GET['id']) && artcl_check($_GET['id']) === true) {
  $artcl_id = $_GET['id'];
  delete_artcl($artcl_id);
 
  header('Location: ../profile.php?id='.$_SESSION['user_id']);
  exit();
}

?>