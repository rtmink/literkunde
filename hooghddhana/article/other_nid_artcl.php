<?php
foreach ($artcls as $artcl) {
    $user_id = $artcl['user_id'];
    $users = get_users($user_id);
	?>
    
    <h1><?php echo $artcl['title'];?></h1>
    
    <?php include 'artcl_body/artcl_body.php';?>
	
	<ul>
		<li><?php include 'counter/counter_n/counter_n.php';?></li>
        
        <li><?php include 'recommend/body/rec_body.php';?><div class="clear"></div></li>
		<li>
            <div class="ratingBox">
			
            <?php
			include 'rating/header/rating_header.php';
			include 'rating/body/ww.php';
			?>
			
			</div>
			
			<div class="ratingBox">
			
            <?php
			include 'rating/header/rating_header2.php';
			include 'rating/body/ae.php';
			?>
			
			</div>
			<div class="clear"></div>		
		</li>
	</ul>
    
    <!-- End Div Comment -->
	</div>
    <div id="highlight6"><?php include 'share/share.php';?></div>
    <div class="clear"></div>

<?php
	include 'comment/comment2.php';
}
?>