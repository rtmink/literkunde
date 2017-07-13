<?php
include 'hooghddhana/has_ie_ratu/hasieratu.php';

if (!logged_in()) {
  header('Location: /');
  exit();
}

if (!isset($_GET['id']) || empty($_GET['id']) || artcl_check($_GET['id']) === false) {
  header('Location: profile.php?id='.$_SESSION['user_id']);
  exit();
}

// title baibey
if (isset($_GET['id']) && !empty($_GET['id'])) {
		
		$artcl_id = $_GET['id'];
		$artcls = get_artcls_id($artcl_id);
		
		if (empty($artcls)) {
			
			$page_title = 'Page Not Found &bull; Literkunde';
			
		} else {
			
			foreach ($artcls as $artcl) {	
		
					$page_title = 'Edit \''.$artcl['title'].'\' &bull; Literkunde';
			
			}
			
		}
		
	} else {
		
		$page_title = 'Page Not Found &bull; Literkunde';
		
	}

include 'hooghddhana/template/header.php';

if (isset($_GET['id']) && !empty($_GET['id']) && artcl_check($_GET['id']) === true) {
$artcl_id = $_GET['id'];
$artcl_data = artcl_data($artcl_id, 'title', 'type', 'topic', 'body', 'source');
}

?>

<script type="text/javascript" src="resources/js/js_edit_artcl.js" ></script>

<h4 class="pg_heading" >Edit Article</h4>

<form id="post_article">
	<input type="hidden" name="user_id" id="user_id" value="<?php echo $_SESSION['user_id']; ?>" />
    
    <input type="hidden" name="artcl_id" id="artcl_id" value="<?php echo $artcl_id; ?>" />
    <div class="error_msg" id="id_error_msg"></div>

	  <div class="highlight">
      <p><div class="equal"><b>Title:</b></div>
      <input type="text" name="artcl_title" class="input1" id="artcl_title" maxlength="255" size="107" value="<?php echo $artcl_data['title']; ?>" /></p>
      <div class="error_msg" id="title_error_msg"></div>
      </div>
	  

      <div class="highlight">
      <p><div class="equal"><b>Type of article:</b></div>
      <select name="artcl_type" id="artcl_type" >
      <option value="<?php echo $artcl_data['type']; ?>"><?php echo $artcl_data['type']; ?></option>
	  <option value="Encyclopedia">Encyclopedia</option>
      <option value="News">News</option>
	  <option value="Tutorial">Tutorial</option>
      <option value="How-to">How-to</option>
      <option value="Journal">Journal</option>
      <option value="Essay">Essay</option>
      <option value="Paper">Paper</option>
      <option value="Other">Other</option>
      </select></p>
      <div class="error_msg" id="type_error_msg"></div>
      </div>

      <div class="highlight">
      <p><div class="equal"><b>Topic:</b></div>
      <select name="artcl_topic" id="artcl_topic" >
      <option value="<?php echo $artcl_data['topic']; ?>"><?php echo $artcl_data['topic']; ?></option>
      <option value="Autos & Vehicles">Autos & Vehicles</option>
      <option value="Beauty & Fashion">Beauty & Fashion</option>
      <option value="Business & Finance">Business & Finance</option>
      <option value="Comedy">Comedy</option>
	  <option value="Culture & the Arts">Culture & the Arts</option>
      <option value="Environment">Environment</option>
      <option value="Food & Drink">Food & Drink</option>
      <option value="Gaming">Gaming</option>
	  <option value="Geography & Places">Geography & Places</option>
	  <option value="Health & Fitness">Health & Fitness</option>
	  <option value="History & Events">History & Events</option>
      <option value="Hobbies">Hobbies</option>
      <option value="Home & Garden">Home & Garden</option>
      <option value="Jobs & Careers">Jobs & Careers</option>
      <option value="Language & Literature">Language & Literature</option>
      <option value="Legal & Government">Legal & Government</option>
	  <option value="Mathematics & Logic">Mathematics & Logic</option>
      <option value="Movies & Entertainment">Movies & Entertainment</option>
      <option value="Music">Music</option>
	  <option value="Natural & Physical Sciences">Natural & Physical Sciences</option>
      <option value="Nonprofits & Activism">Nonprofits & Activism</option>
      <option value="People & Self">People & Self</option>
      <option value="Pets & Animals">Pets & Animals</option>
	  <option value="Philosophy & Thinking">Philosophy & Thinking</option>
      <option value="Politics">Politics</option>
      <option value="Psychology">Psychology</option>
      <option value="Relationships & Family">Relationships & Family</option>
	  <option value="Religion & Belief Systems">Religion & Belief Systems</option>
	  <option value="Society & Social Sciences">Society & Social Sciences</option>
      <option value="Sports & Outdoors">Sports & Outdoors</option>
	  <option value="Technology & Applied Sciences">Technology & Applied Sciences</option>
      <option value="Travel & Lifestyle">Travel & Lifestyle</option>
      </select></p>
      <div class="error_msg" id="topic_error_msg"></div>
      </div>

      <div class="highlight1 center" >
      <p><b>Content:</b>
      <script type="text/javascript">tinyMCE.init({theme : "advanced",theme_advanced_blockformats : "h2,h3,h4,h5",theme_advanced_buttons1 : "bold,italic,formatselect,|,bullist,numlist,|,link,unlink,image,|,sub,sup,charmap",theme_advanced_buttons2 : "",theme_advanced_buttons3 : "",theme_advanced_toolbar_location : "top",theme_advanced_toolbar_align : "center",valid_styles : "clear",extended_valid_elements: "a[href|target=_blank|class=underline]",mode : "exact",width : "100%",elements : "artcl_body"});</script>
      <textarea name="artcl_body" id="artcl_body" rows="40" cols="121" maxlength="16777215" ><?php echo $artcl_data['body']; ?></textarea>
      																							
      </p>
      <div class="error_msg" id="body_error_msg"></div>
      </div>

</form>

      <div class="highlight3 center">
      <p><b>Source</b></p>
      
      <?php include 'hooghddhana/post_artcls/srcx.php'; ?>
      
<form>
      
      <script type="text/javascript">tinyMCE.init({content_css : "css/src.css",theme : "advanced",theme_advanced_buttons1 : "",theme_advanced_buttons2 : "",theme_advanced_buttons3 : "",theme_advanced_toolbar_location : "",theme_advanced_toolbar_align : "left",valid_styles : "clear",extended_valid_elements: "a[href|target=_blank|class=underline],p[class=src_p]",mode : "exact",width : "100%",elements : "artcl_source"});</script>
      
      <div class="clear_comment"></div>

      <p><textarea name="artcl_source" id="artcl_source" rows="17" cols="147" maxlength="65535" ><?php echo $artcl_data['source']; ?></textarea></p>
      <div class="error_msg" id="source_error_msg"></div>
      </div>

      <span class="left"><p><input type="submit" class="button" id="artcl_submit" value="Republish" onclick="tinyMCE.triggerSave(true,true);" /></p></span>
      <span class="right"><p><input type="button" class="button3 button_nm" id="artcl_cancel" value="Cancel" /></p></span> 
      <div class="clear_comment"></div>
      
</form>

<input type="hidden" name="cancel_artcl" id="cancel_artcl" value="<?php echo $artcl_id; ?>" /></input>

<script type="text/javascript">var cancel_artcl = $('#cancel_artcl').val(); $('#artcl_cancel').click(function() {window.location = "article.php?id="+cancel_artcl;return true;});</script>

<?php
include 'hooghddhana/template/footer.php';
?>