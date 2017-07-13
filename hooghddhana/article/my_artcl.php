<?php $users = get_users($user_id);?>
    
    <h1><?php echo $artcl['title'];?>
        <div class="ed_del">
            <a class="ed_del2" href="edit_article.php?id=<?php echo $artcl['id'];?>"><img src="resources/images/pencil.gif" alt="" title="Edit"/></a><span></span>
            <a class="ed_del2" id="deleteArticle" href=""><img src="resources/images/trash.gif" alt="" title="Delete"/></a>
        </div>
    </h1>
	
	<?php include 'artcl_body/artcl_body.php';?>

	<ul>
		<li><?php include 'counter/counter_n/counter_n.php';?></li>
		
		<li><?php include 'recommend/rec.php';?></li>
		
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

<?php include 'comment/comment.php';?>

<input type="hidden" name="delete_artcl" id="delete_artcl" value="<?php echo $artcl['id']; ?>" /></input>

<script type="text/javascript">$('#deleteArticle').click(function() {var answer = confirm("Are you sure you want to delete this article?"); var delete_artcl = $('#delete_artcl').val(); if (answer){window.location = "dlt/dlt_artcl.php?id="+delete_artcl;}else{}return false;});</script>