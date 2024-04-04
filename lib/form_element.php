<?php

    function form_element($element_type,$label, $input_name,$label_class = null, $type=null,  $input_id = null, $input_class = null, $input_value = null, $div_class = null,$div_id=null,$option=array('saving','current'))
    {
        // echo $element_type;
        switch ($element_type) {
            case 'input':
                echo "
                <div class='$div_class' id='$div_id'> 
                    <label for='' class='$label_class'>$label</label>
                    <input type='$type' name='$input_name' id='$input_id' value='$input_value' class='form-control $input_class' required>
                </div>";
                break;
           
                
            case 'select':
                echo "
                <div>
                    <label for=''>$label</label>
                    <select name='$input_name' id='$input_id' class='$input_class' required>
                        <option value=' disabled selected>Select Value</option>
                        ";for ($i=0; $i < count($option); $i++) { 
                            "<option value='$option'>$option</option>";
                        }"
                        <option value='saving'>Saving Account</option>
                        <option value='current'>Current Account</option>
                    </select>
                </div>";
            
           
        }
       
    }


?>