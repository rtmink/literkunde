<?php
if (logged_in()) {
?>

<div class="src_div">

<div class="error_msg2" id="rt_error_msg"></div>

<p>Medium:
<select onchange="window.location.href=this.options[this.selectedIndex].value">
	<option value="javascript:oneonly('rt', 'source5');">Radio / TV</option>
    <option value="javascript:oneonly('rt_online', 'source5');">Online</option>
</select>
</p>

    <div class="reset_rt">
    
        <p>Show / episode title:<br>
        <input type="text" name="rt_stitle" class="input1" id="rt_stitle" maxlength="" size="107" /></p>
        
        <p>Citing:
        <select name="rt_cite" id="rt_cite" >
            <option value="Full source">Full source</option>
            <option value="A transcript">A transcript</option>
        </select>
        </p>
        
        <p>
            <div class="div_left">
            Contributor(s)<br>
            <select name="rt_con" id="rt_con">
                <option value="">Select</option>
                <option value="Director">Director</option>
                <option value="Producer">Producer</option>
                <option value="Writer">Writer</option>
            </select>
            </div>
        
          <div class="div_left">
          First name:<br />
          <input type="text" name="rt_fname" class="input_fn" id="rt_fname" maxlength="" size="31" />
          </div>
        
          <div>
          Last name:<br />
          <input type="text" name="rt_lname" class="input_ln" id="rt_lname" maxlength="" size="47" />
          </div>
        </p>
        
        
        <p>Program title:<br>
        <input type="text" name="rt_title" class="input1" id="rt_title" maxlength="" size="107" /></p>
        
        <p>
        <div class="div_left">
        Call:<br>
        <input type="text" name="rt_call" class="input_yr" id="rt_call" maxlength="" size="49" />
        </div>
        
        <div>
        Broadcasting Network:<br>
        <input type="text" name="rt_net" class="input_fn" id="rt_net" maxlength="" size="50" />
        </div>
        </p>
        
        <p>
        <div class="div_left"> 
        City:<br>
        <input type="text" name="rt_city" class="input_fn" id="rt_city" maxlength="" size="25" />
        </div>
        
        <div>
        State:<br>
        <input type="text" name="rt_state" class="input_d" id="rt_state" maxlength="2" size="5" />
        </div>
        </p>
        
        <p>Date aired:<br>
        <input type="text" name="rt_date_day" class="input_d" id="rt_date_day" maxlength="2" size="4" />
        <select name="rt_date_mo" id="rt_date_mo">
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
        <input type="text" name="rt_date_yr" class="input_yr" id="rt_date_yr" maxlength="4" size="10" />
        </p>
    
    </div>

<?php 
include'radiotv/rt.php'; 
include'radiotv/rt_online.php'; 

?>

</div>

<?php
}
?>