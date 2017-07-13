<?php 
if (logged_in()) {
?>

<div id="src_menu">	
		<div id="src_nav">	
    	<ul class="nav">
                <li><a href="#website">Website</a></li>
                <li><a href="#newspaper">Newspaper</a></li>
                <li><a href="#book">Book</a></li>
                <li><a href="#journal">Journal</a></li>
                <li><a href="#magazine">Magazine</a></li>
                <li><a href="#film">Film</a></li>
                <li><a href="#interview">Interview</a></li>
                <li><a href="#lecture">Lecture</a></li>
                <li class="last"><a href="#radiotv">Radio / TV</a></li>
        </ul>
        </div>	
        
        <div class="src_content">
    		<div class="src_content_f" id="website" ><?php include 'srcx/website.php'; ?></div>
            <div class="src_content_f" id="newspaper" ><?php include 'srcx/newspaper.php'; ?></div>
            <div class="src_content_f" id="book" ><?php include 'srcx/book.php'; ?></div>
            <div class="src_content_f" id="journal" ><?php include 'srcx/journal.php'; ?></div>
            <div class="src_content_f" id="magazine" ><?php include 'srcx/magazine.php'; ?></div>
            <div class="src_content_f" id="film" ><?php include 'srcx/film.php'; ?></div>
            <div class="src_content_f" id="interview" ><?php include 'srcx/interview.php'; ?></div>
            <div class="src_content_f" id="lecture" ><?php include 'srcx/lecture.php'; ?></div>
            <div class="src_content_f" id="radiotv" ><?php include 'srcx/radiotv.php'; ?></div>
        </div>
</div>

<script type="text/javascript" src="resources/js/src/js_src.js" ></script>
<script type="text/javascript" src="resources/js/src/js_reset.js" ></script>
<script type="text/javascript" src="resources/js/jquery.idTabs.min.js" ></script>

<script type="text/javascript"> 
  $("#src_menu ul").idTabs(); 
</script>
    
<?php
}
?>

