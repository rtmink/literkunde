<script type="text/javascript" src="resources/js/pg/js_pg.js"></script>
<script type="text/javascript">$(document).ready(function(){$('#pg_pos').pajinate({nav_label_prev : '<',nav_label_next : '>'});});</script>
<script type="text/javascript">$(document).ready(function(){$('#pg_neg').pajinate({nav_label_prev : '<',nav_label_next : '>'});});</script>

<div id="com_box" >

    <div id="comment_space" >
         
     <?php
		$type = 'pos';
		
		include 'body/com_type.php';
	?>
        
    </div>
  
    <div id="comment_space2" >
    
    <?php
		$type = 'neg';
		
		include 'body/com_type.php';
	?>
   
    </div>
    
    <div class="clear"></div>
             
</div>