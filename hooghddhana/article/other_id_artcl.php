<?php $users = get_users($user_id);?>
    
    <h1><?php echo $artcl['title'];?></h1>
    
    <?php include 'artcl_body/artcl_body.php';?>
	
	<ul>
    	<li><?php include 'counter/counter.php';?></li>
        
        <li><?php include 'recommend/rec.php';?></li>
		
		<li><?php include 'rating/rating.php';?></li>
	</ul>
    
    <!-- End Div Comment -->
	</div>
    <div id="highlight6"><?php include 'share/share.php';?></div>
    <div class="clear"></div>

<?php include 'comment/comment.php';?>