<?php
if (logged_in()) {
?>

<div class="src_div">

<div class="error_msg2" id="lec_error_msg"></div>

<p>Medium:
<select onchange="window.location.href=this.options[this.selectedIndex].value">
	<option value="javascript:oneonly('l_seen', 'source4');">Seen</option>
    <option value="javascript:oneonly('l_book', 'source4');">In a book</option>
    <option value="javascript:oneonly('l_web', 'source4');">From a website</option>
</select>
</p>

<div class="reset_lec">

<p>Presentation title:<br>
<input type="text" name="lec_title" class="input1" id="lec_title" maxlength="" size="107" /></p>

<p>Type:
<select name="lec_type" id="lec_type" >
	<option value="">Select</option>
    <option value="Lecture">Lecture</option>
    <option value="Speech">Speech</option>
	<option value="Reading">Reading</option>
    <option value="Address">Address</option>
</select>
</p>

<p>
  <div class="div_left">
  Contributor(s)<br>
  <select name="lec_con" id="lec_con" >
      <option value="Speaker">Speaker</option>
  </select>
  </div>

  <div class="div_left">
  First name:<br />
  <input type="text" name="lec_fname" class="input_fn" id="lec_fname" maxlength="" size="31" />
  </div>

  <div>
  Last name:<br />
  <input type="text" name="lec_lname" class="input_ln" id="lec_lname" maxlength="" size="47" />
  </div>
</p>

<p>Event title:<br>
<input type="text" name="lec_etitle" class="input1" id="lec_etitle" maxlength="" size="107" /></p>

<p>
<div class="div_left">
City:<br>
<input type="text" name="lec_city" class="input_fn" id="lec_city" maxlength="" size="25" />
</div>

<div>
Location:<br>
<input type="text" name="lec_loc" class="input_fn" id="lec_loc" maxlength="" size="25" />
</div>
</p>

<p>Date viewed:<br>
<input type="text" name="lec_date_day" class="input_d" id="lec_date_day" maxlength="2" size="4" />
<select name="lec_date_mo" id="lec_date_mo" >
    <option value="">Select</option>
    <option value="January">January</option>
    <option value="February">February</option>
    <option value="March">March</option>
    <option value="April">April</option>    
    <option value="May">May</option>
    <option value="June">June</option>
    <option value="July">July</option>
    <option value="August">August</option>
    <option value="September">September</option>
    <option value="October">October</option>    
    <option value="November">November</option>
    <option value="December">December</option>
</select>
<input type="text" name="lec_date_yr" class="input_yr" id="lec_date_yr" maxlength="4" size="10" />
</p>

</div>

<?php
include'lecture/l_seen.php';
include'lecture/l_book.php'; 
include'lecture/l_web.php'; 
 
?>

</div>

<?php
}
?>