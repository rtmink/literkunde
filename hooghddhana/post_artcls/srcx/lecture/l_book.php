<?php
if (logged_in()) {
?>

<div class="src_div4" id="l_book" name="source4" >

    <div class="reset_lec">
    
        <p>Source title:<br>
        <input type="text" name="lec_book_title" class="input1" id="lec_book_title" maxlength="" size="107" /></p>
        
        <p>
        <div class="div_left">
        Vol.:<br>
        <input type="text" name="lec_book_vol" class="input_yr" id="lec_book_vol" maxlength="" size="10" />
        </div>
        
        <div class="div_left">
        Edition:<br>
        <input type="text" name="lec_book_ed" class="input_yr" id="lec_book_ed" maxlength="" size="10" />
        </div>
        
        <div>
        Series:<br>
        <input type="text" name="lec_book_se" class="input_yr" id="lec_book_se" maxlength="" size="10" />
        </div>
        </p>
        
        <p>
        <div class="div_left">
        Publisher:<br>
        <input type="text" name="lec_book_pub" class="input_ln" id="lec_book_pub" maxlength="" size="43" />
        </div>
        
        <div class="div_left">
        City:<br>
        <input type="text" name="lec_book_city" class="input_fn" id="lec_book_city" maxlength="" size="25" />
        </div>
        
        <div>
        Year:<br>
        <input type="text" name="lec_book_yr" class="input_yr" id="lec_book_yr" maxlength="4" size="10" />
        </div>
        </p>
        
        <p>Page(s):<br>
        <input type="text" name="lec_book_pgs" class="input_yr" id="lec_book_pgs" maxlength="" size="10" /></p>
        
        <div class="source_added" id="lec_book_added" ><img class="added" src="resources/images/yes.png" alt=""/><span class="green">Source added.</span></div>
        <p><input type="button" name="" class="button2" id="lec_submit2" value="Add to the bibliography" />
        <input type="button" class="button3" value="Reset" onclick="clear_form_elements('.reset_lec')" /></p>
    
    </div>

</div>

<?php
}
?>