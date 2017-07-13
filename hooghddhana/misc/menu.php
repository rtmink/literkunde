<?php
if (!logged_in()) {
?>

<div class="menu">
    <ul>
    	<li><a href="about">About</a></li>
        <li><a href="login">Log in</a></li>
        <li><a href="register">Sign Up!</a></li>
    </ul>
</div>

<?php
} else {
	
$user_data = user_data('first_name', 'last_name');
?>
<div class="menu">
    <ul>
    	<li><a class="img_menu" id="userMenu" href=""><img src="resources/images/person.gif" alt="" title="<?php echo $user_data['first_name'], ' ', 
			$user_data['last_name'];?>" /><span></span></a>
        	<ul>
            	<li><a href="profile.php?id=<?php echo $_SESSION['user_id'];?>">View Profile</a></li>
                <li><a href="publish_article">Publish Article</a></li>
                <li><a href="../settings/update_details">Settings</a></li>
                <li><a href="about">About</a></li>
                <li><a href="contact">Contact</a></li>
                <li><a href="logout.php">Log Out</a></li>
            </ul>    
        </li>
		<li><a class="img_menu" href="publish_article"><img src="resources/images/book.gif" alt="" title="Publish Article" /></a></li>
    </ul>
</div>

<script type="text/javascript">
	$('.menu ul li a#userMenu').click(function() {
		$('.menu li ul').toggle();	
		return false;
	});
</script>

<?php
}
?>