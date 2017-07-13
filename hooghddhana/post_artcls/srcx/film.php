<?php
if (logged_in()) {
?>

<div class="src_div">

	<form>

        <div id="reset_film">
        
            <div class="error_msg2" id="film_error_msg"></div>
            
            <p>Film Title:<br>
            <input type="text" name="film_title" class="input1" id="film_title" maxlength="" size="107" /></p>
            
            <p>Main Performers:<br>
            <input type="text" name="film_mp" class="input1" id="film_mp" maxlength="" size="107" /></p>
            
            <p>
              <div class="div_left">
              Contributor(s)<br>
              <select name="film_con" id="film_con" >
                  <option value="Director">Director</option>
                  <option value="Producer">Producer</option>
                  <option value="Writer">Writer</option>        
                  <option value="Screenwriter">Screenwriter</option>
                  <option value="Adapter">Adapter</option>
              </select>
              </div>
            
              <div class="div_left">
              First name:<br />
              <input type="text" name="film_fname" class="input_fn" id="film_fname" maxlength="" size="29" />
              </div>
            
              <div>
              Last name:<br />
              <input type="text" name="film_lname" class="input_ln" id="film_lname" maxlength="" size="46" />
              </div>
            </p>
            
            
            <p>Studio / Distributor:<br>
            <input type="text" name="film_dis" class="input1" id="film_dis" maxlength="" size="107" /></p>
            
            <p>Media Type:
            <select name="film_mt" id="film_mt" >
                  <option value="">Select</option>
                  <option value="Seen in theater">Film seen in theater</option>
                  <option value="DVD">DVD</option>
                  <option value="Laser disc">Laser disc</option>        
                  <option value="VHS">VHS</option>
                  <option value="Transcript">Transcript</option>
                  <option value="Other">Other</option>
              </select>
            
            <p>Year:<br>
            <input type="text" name="film_yr" class="input_yr" id="film_yr" maxlength="4" size="10" /></p>
            
            <p>URL:<br>
            <input type="text" name="film_url" class="input1" id="film_url" maxlength="" size="107" /></p>
            
            <div class="source_added" id="film_added"><img class="added" src="resources/images/yes.png" alt=""/><span class=green>Source added.</span></div>
            <p>
            <input type="button" name="" class="button2" id="film_submit" value="Add to the bibliography" />
            <input type="button" class="button3" value="Reset" onclick="clear_form_elements('#reset_film')" />
            </p>
        
        </div>
        
    </form>

</div>

<?php
}
?>