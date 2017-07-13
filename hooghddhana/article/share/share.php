<?php
$current_url = 'https://literkunde.com/article.php?id='.$artcl['id'];
$encoded_url = urlencode($current_url);
?>
            
<div id="share_fb">
	<div class="fb-like" data-send="false" data-layout="button_count" data-width="100" data-show-faces="true" data-action="recommend" data-font="verdana"></div>
</div>
<div id="share_twitter">
	<a href="https://twitter.com/share" class="twitter-share-button" data-via="twitterapi" data-lang="en">Tweet</a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>		
</div>
<div id="share_google">
	<g:plusone size="medium"></g:plusone>
</div>
<div id="share_pin">
	<a href="http://pinterest.com/pin/create/button/?url=<?php echo $encoded_url; ?>&media=https%3A%2F%2Fliterkunde.com%2Fresources%2Fimages%2Flk_mini3.png" class="pin-it-button" count-layout="horizontal"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It" /></a>
</div>
        
		