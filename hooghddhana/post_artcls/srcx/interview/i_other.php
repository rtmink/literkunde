<?php
if (logged_in()) {
?>

<div class="src_div4" id="i_other" name="source2" >

<p>Medium:

<select onchange="window.location.href=this.options[this.selectedIndex].value">
	<option value="javascript:oneonly('i_website', 'source3');">From a website</option>
	<option value="javascript:oneonly('i_magazine', 'source3');">In a magazine</option>
    <option value="javascript:oneonly('i_newspaper', 'source3');">In a newspaper</option>
    <option value="javascript:oneonly('i_radiotv', 'source3');">On radio/TV</option>
</select>

</p>

<?php
include 'i_other/i_website.php'; 
include 'i_other/i_magazine.php';
include 'i_other/i_newspaper.php';
include 'i_other/i_radiotv.php'; 
?>

</div>

<?php
}
?>
