<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
	<h3>Fields</h3>
    <div class="row">
        <div class="form-group form-group-options col-xs-11 col-sm-8 col-md-4">
    		<div class="input-group input-group-option col-xs-12">
    			<input type="text" name="option[]" class="form-control" placeholder="Focus me">
    			<span class="input-group-addon input-group-addon-remove">
    				<span class="glyphicon glyphicon-remove"></span>
    			</span>
    		</div>
    	</div>
    </div>
</div>

<div class="container">
    <h3>Selects</h3>
    <div class="row">
        <div class="form-group form-group-multiple-selects col-xs-11 col-sm-8 col-md-4">
    		<div class="input-group input-group-multiple-select col-xs-12">
                <select class="form-control" name="values[]">
                    <option value="">Select one</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                    <option value="4">Option 4</option>
                </select>
    			<span class="input-group-addon input-group-addon-remove">
    				<span class="glyphicon glyphicon-remove"></span>
    			</span>
    		</div>
    	</div>
    </div>
</div>
<script type="text/javascript">
    
    /* 
    Text fields 
*/
$(function(){
    
    $(document).on('focus', 'div.form-group-options div.input-group-option:last-child input', function(){
        
        var sInputGroupHtml = $(this).parent().html();
        var sInputGroupClasses = $(this).parent().attr('class');
        $(this).parent().parent().append('<div class="'+sInputGroupClasses+'">'+sInputGroupHtml+'</div>');
        
    });
    
    $(document).on('click', 'div.form-group-options .input-group-addon-remove', function(){
        
        $(this).parent().remove();
        
    });
    
});

/* 
    Selects 
*/
$(function(){
        
    var values = new Array();
    
    $(document).on('change', '.form-group-multiple-selects .input-group-multiple-select:last-child select', function(){
        
        var selectsLength = $(this).parent().parent().find('.input-group-multiple-select select').length;
        var optionsLength = ($(this).find('option').length)-1;
        
        if(selectsLength < optionsLength){
            var sInputGroupHtml = $(this).parent().html();
            var sInputGroupClasses = $(this).parent().attr('class');
            $(this).parent().parent().append('<div class="'+sInputGroupClasses+'">'+sInputGroupHtml+'</div>');  
        }
        
        updateValues($(this).parent().parent());
        
    });
    
    $(document).on('change', '.form-group-multiple-selects .input-group-multiple-select:not(:last-child) select', function(){
        
        updateValues($(this).parent().parent());
        
    });
    
    $(document).on('click', '.input-group-addon-remove', function(){
        
        var oSelectContainer = $(this).parent().parent()
        $(this).parent().remove();
        updateValues(oSelectContainer);
        
    });
    
    function updateValues(oSelectContainer){
        
        values = new Array();
        $(oSelectContainer).find('.input-group-multiple-select select').each(function(){
            var value = $(this).val();
            if(value != 0 && value != ""){
                values.push(value);
            }
        });
        
        $(oSelectContainer).find('.input-group-multiple-select select').find('option').each(function(){
            var optionValue = $(this).val();
            var selectValue = $(this).parent().val();
            if(in_array(optionValue,values)!= -1 && selectValue != optionValue)
            {
                $(this).attr('disabled', 'disabled');
            }
            else
            {
                $(this).removeAttr('disabled');
            }
        });
        
    }
    
    function in_array(needle, haystack){
        
        var found = 0;
        for (var i=0, length=haystack.length;i<length;i++) {
            if (haystack[i] == needle) return i;
            found++;
        }
        return -1;
        
    }
    
    // Update all options for first use
    $('.form-group-multiple-selects').each(function(i, e){
        
        updateValues(e);
        
    });
});
</script>