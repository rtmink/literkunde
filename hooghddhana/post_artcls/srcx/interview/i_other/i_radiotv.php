<?php
if (logged_in()) {
?>

<div class="src_div4" id="i_radiotv" name="source3" >

    <div class="reset_i_view">
    
        <p>Interview type:
        <select name="iview_radiotv_itype" id="iview_radiotv_itype" >
            <option value="">Select</option>  
            <option value="Actual interview">Actual interview</option>
            <option value="A transcript">A transcript</option>
        </select></p>
        
        <p>Source Title:<br>
        <input type="text" name="iview_radiotv_title" class="input1" id="iview_radiotv_title" maxlength="" size="107" /></p>
        
        <p>
        <div class="div_left">
        Call:<br>
        <input type="text" name="iview_radiotv_call" class="input_yr" id="iview_radiotv_call" maxlength="" size="49" />
        </div>
        
        <div>
        Broadcasting network:<br>
        <input type="text" name="iview_radiotv_network" class="input_fn" id="iview_radiotv_network" maxlength="" size="50" />
        </div>
        </p>
        
        <p>
        <div class="div_left"> 
        City:<br>
        <input type="text" name="iview_radiotv_city" class="input_fn" id="iview_radiotv_city" maxlength="" size="25" />
        </div>
        
        <div>
        State:<br>
        <input type="text" name="iview_radiotv_state" class="input_d" id="iview_radiotv_state" maxlength="2" size="5" />
        </div>
        </p>
        
        <p>Date aired:<br>
        <input type="text" name="iview_radiotv_date_day" class="input_d" id="iview_radiotv_date_day" maxlength="2" size="4" />
        <select name="iview_radiotv_date_mo" id="iview_radiotv_date_mo" >
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
        <input type="text" name="iview_radiotv_date_yr" class="input_yr" id="iview_radiotv_date_yr" maxlength="4" size="10" />
        </p>
        
        <p>Program type:
        <select name="iview_radiotv_ptype" id="iview_radiotv_ptype" >
            <option value="">Select</option>
            <option value="Television">Television</option>
            <option value="Radio">Radio</option>
        </select></p>
        
        <div class="source_added" id="iview_rt_added" ><img class="added" src="resources/images/yes.png" alt=""/><span class="green">Source added.</span></div>
        <p><input type="button" name="" class="button2" id="iview_submit5" value="Add to the bibliography" />
        <input type="button" class="button3" value="Reset" onclick="clear_form_elements('.reset_i_view')" /></p>
    
    </div>

</div>

<?php
}
?>