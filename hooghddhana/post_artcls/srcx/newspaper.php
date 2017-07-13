<?php
if (logged_in()) {
?>

<div class="src_div">

    <form>
    
        <div id="reset_newspaper">
        
            <div class="error_msg2" id="news_error_msg"></div>
            
            <p>Article Title:<br>
            <input type="text" name="news_atitle" class="input1" id="news_atitle" maxlength="" size="107" /></p>
            
            <p>
            <div class="div_left">
            Newspaper Title:<br>
            <input type="text" name="news_title" class="input2" id="news_title" maxlength="" size="77" />
            </div>
            
            <div>
            City:<br>
            <input type="text" name="news_city" class="input_fn" id="news_city" maxlength="" size="22" />
            </div>
            </p>
            
            <p>
              <div class="div_left">
              Contributor(s)<br>
              <select name="news_con" id="news_con" >
                  <option value="Author">Author</option>
                  <option value="Editor">Editor</option>
                  <option value="Translator">Translator</option>
              </select>
              </div>
            
              <div class="div_left">
              First name:<br />
              <input type="text" name="news_fname" class="input_fn" id="news_fname" maxlength="" size="31" />
              </div>
            
              <div>
              Last name:<br />
              <input type="text" name="news_lname" class="input_ln" id="news_lname" maxlength="" size="47" />
              </div>
            </p>
            
            <p>Date published:<br>
            <input type="text" name="news_dpub_day" class="input_d" id="news_dpub_day" maxlength="2" size="4" />
            <select name="news_dpub_mo" id="news_dpub_mo" >
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
            <input type="text" name="news_dpub_yr" class="input_yr" id="news_dpub_yr" maxlength="4" size="10" />
            </p>
            
            <p>Page(s):<br>
            <input type="text" name="news_pgs" class="input_yr" id="news_pgs" maxlength="" size="10" /></p>
            
            <p>
              <div class="div_left" >
              Edition:<br />
              <input type="text" name="news_ed" class="input_yr" id="news_ed" maxlength="" size="10" />
              </div>
            
              <div>
              Section:<br />
              <input type="text" name="news_sec" class="input_yr" id="news_sec" maxlength="" size="10" />
              </div>
            </p>
            
            <p>URL:<br>
            <input type="text" name="news_url" class="input1" id="news_url" maxlength="" size="107" /></p>
            
            <div class="source_added" id="news_added" ><img class="added" src="resources/images/yes.png" alt=""/><span class=green>Source added.</span></div>
            <p><input type="button" name="" class="button2" id="news_submit" value="Add to the bibliography" />
            <input type="button" class="button3" value="Reset" onclick="clear_form_elements('#reset_newspaper')" /></p>
        
        </div>
    
    </form>

</div>

<?php
}
?>