<?php
if (logged_in()) {
?>

<div class="src_div">

    <form>
    
            <div class="error_msg2" id="iview_error_msg"></div>
            
            <p>Method:
            <select onchange="window.location.href=this.options[this.selectedIndex].value">
                <option value="javascript:oneonly('i_you', 'source2'); ">Personal interview</option>
                <option value="javascript:oneonly('i_other', 'source2'); ">Other</option>
            </select>
            </p>
            
		<div class="reset_i_view">
            
            <p>Interview Title:<br>
            <input type="text" name="iview_title" class="input1" id="iview_title" maxlength="" size="107" /></p>
            
            <p>
                <div class="div_left">
                Contributor(s)<br>
                <select name="iview_con" id="iview_con" >
                <option value="">Select</option>
                <option value="Interviewer">Interviewer</option>
                <option value="Interviewee">Interviewee</option>
                </select>
                </div>
            
              <div class="div_left">
              First name:<br />
              <input type="text" name="iview_fname" class="input_fn" id="iview_fname" maxlength="" size="31" />
              </div>
            
              <div>
              Last name:<br />
              <input type="text" name="iview_lname" class="input_ln" id="iview_lname" maxlength="" size="46" />
              </div>
            </p>
            
		</div>

<?php 

include 'interview/i_you.php';
include 'interview/i_other.php';
 
?>
    
    </form>

</div>

<?php
}
?>