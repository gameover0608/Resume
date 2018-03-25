<?php 
include("process.php");
?>
<!doctype html>

<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

  
  <title>Resume Creator</title>
</head>
<body>
  <form method="post" action="process.php">
  <div class="container">
    <div class="row">
      <h2><p class="text-center">Resume Maker</p></h2>
    </div>
  </br>


  <div class="row">
    <div class="col-md-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="">First and last name</span>
        </div>
        <input type="text" class="form-control" name="firstname">
        <input type="text" class="form-control" name="lastname">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-8">
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">Email</span>
        </div>
        <input type="email" class="form-control" placeholder="email" name="email">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-8">
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">Date of Birth</span>
        </div>
        <input type="date" class="form-control" name="dateofbirth">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-8">
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">Adress</span>
        </div>
        <input type="text" class="form-control" name="adress">
      </div>
    </div>
  </div>

  <div class="row">
    <div col-md-4>
      <p class="text-center"><h5>Experienta profesionala</h5></p>
    </div>
  </div>


  <div class="panel panel-default">

    <div class="panel-body">

      <div id="education_fields">

      </div>
      <div class="col-sm-3 nopadding">
        <div class="form-group">
          <input type="text" class="form-control" name="Company[]" value="" placeholder="Company">
        </div>
      </div>
      <div class="col-sm-3 nopadding">
        <div class="form-group">
          <input type="text" class="form-control"  name="JobTitle[]" value="" placeholder="Job Title">
        </div>
      </div>
      <div class="col-sm-3 nopadding">
        <div class="form-group">
          <input type="textarea" class="form-control" name="JobDescription[]" value="" placeholder="Job description">
        </div>
      </div>



      <div class="col-sm-3 nopadding">
        <div class="form-group">
          <div class="input-group">
            <select class="form-control" id="educationDate" name="startDate[]">

              <option value="">Start Date</option>
              <option value="2015">2015</option>
              <option value="2016">2016</option>
              <option value="2017">2017</option>
              <option value="2018">2018</option>
            </select>
            <select class="form-control" id="educationDate" name="endDate[]">

              <option value="">End Date</option>
              <option value="2015">2015</option>
              <option value="2016">2016</option>
              <option value="2017">2017</option>
              <option value="2018">2018</option>
            </select>
            <div class="input-group-btn">
              <button class="btn btn-success" type="button"  onclick="education_fields();"> <span class="glyphicon glyphicon-plus" aria-hidden="true">Add</span> </button>
            </div>
          </div>
        </div>
      </div>
      <div class="clear"></div>




      <div class="row">
        <div col-md-4>
          <p class="text-center"><h5>Educatie</h5></p>
        </div>
      </div>



      <div class="row">
        <div class="col-md-8">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Scoala generala</span>
            </div>
            <input type="text" class="form-control" name="scoala">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Specialitate</span>
            </div>
            <input type="text" class="form-control" name="specialitatescoala">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="">Perioada</span>
            </div>
            <input type="date" class="form-control" name="inceperescoala">
            <input type="date" class="form-control" name="terminarescoala">
          </div>
        </div>
      </div>
    </br>
  </br>
</br>

<div class="row">
  <div class="col-md-8">
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">Liceu</span>
      </div>
      <input type="text" class="form-control" name="liceu">
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-8">
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">Specialitate</span>
      </div>
      <input type="text" class="form-control" name="specialitateliceu">
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-8">
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text" id="">Perioada</span>
      </div>
      <input type="date" class="form-control">
      <input type="date" class="form-control">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">Am doar 10 clase</label>
    </div>
  </div>
</div>
</br>
</br>
</br>


<div class="row">
  <div class="col-md-8">
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">Facultate</span>
      </div>
      <input type="text" class="form-control" name="facultate">
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-8">
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">Specializare</span>
      </div>
      <input type="text" class="form-control" name="specializarefacultate">
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-8">
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text" id="">Perioada</span>
      </div>
      <input type="date" class="form-control">
      <input type="date" class="form-control">
    </div>
  </div>
</div>
</br>
</br>
</br>

<div class="row">
  <div col-md-4>
    <p class="text-center"><h5>Abilitati Generale</h5></p>
  </div>

</div>


<div class="row">
  <div class="form-group form-group-options col-xs-11 col-sm-8 col-md-4">
    <div class="input-group input-group-option col-xs-12">
      <input type="text" name="abilitati[]" class="form-control" placeholder="ex:PHP,Kinetoterapie...">
      <span class="input-group-addon input-group-addon-remove">
        <span class="glyphicon glyphicon-remove">Delete</span>
      </span>

    </div>
  </div>
</div>


<div class="row">
  <div col-md-4>
    <p class="text-center"><h5>Abilitati Dobandite la locul de munca</h5></p>
  </div>

</div>


<div class="row">
  <div class="form-group form-group-options col-xs-11 col-sm-8 col-md-4">
    <div class="input-group input-group-option col-xs-12">
      <input type="text" name="abilitatidobandite[]" class="form-control" placeholder="ex:teamwork">
      <span class="input-group-addon input-group-addon-remove">
        <span class="glyphicon glyphicon-remove">Delete</span>
      </span>

    </div>
  </div>
</div>

<div class="row">
  <div col-md-4>
    <p class="text-center"><h5>Limbi Straine</h5></p>
  </div>

</div>


<div class="row">
  <div class="form-group form-group-options col-xs-11 col-sm-8 col-md-4">
    <div class="input-group input-group-option col-xs-12">
      <input type="text" name="option[]" class="form-control" >
      <span class="input-group-addon input-group-addon-remove">
        <span class="glyphicon glyphicon-remove">Delete</span>
      </span>

    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-4 col-md-offser-2">
    <input type="submit" class="btn btn-primary btn-block" name="send"/>
  </div>
</div>

</div>
</form>







<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
<script type="text/javascript">
  var room = 1;
  function education_fields() {

    room++;
    var objTo = document.getElementById('education_fields')
    var divtest = document.createElement("div");
    divtest.setAttribute("class", "form-group removeclass"+room);
    var rdiv = 'removeclass'+room;
    divtest.innerHTML = '<div class="col-sm-3 nopadding"><div class="form-group"> <input type="text" class="form-control" id="Schoolname" name="Schoolname[]" value="" placeholder="School name"></div></div><div class="col-sm-3 nopadding"><div class="form-group"> <input type="text" class="form-control" id="Major" name="Major[]" value="" placeholder="Major"></div></div><div class="col-sm-3 nopadding"><div class="form-group"> <input type="text" class="form-control" id="Degree" name="Degree[]" value="" placeholder="Degree"></div></div><div class="col-sm-3 nopadding"><div class="form-group"><div class="input-group"> <select class="form-control" id="educationDate" name="educationDate[]"><option value="">Date</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option> </select><div class="input-group-btn"> <button class="btn btn-danger" type="button" onclick="remove_education_fields('+ room +');"> <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </button></div></div></div></div><div class="clear"></div>';
    
    objTo.appendChild(divtest)
  }
  function remove_education_fields(rid) {
   $('.removeclass'+rid).remove();
 }
</script>

<script type="text/javascript">
  $(document).ready(function(){
    var next = 1;
    $(".add-more").click(function(e){
      e.preventDefault();
      var addto = "#field" + next;
      var addRemove = "#field" + (next);
      next = next + 1;
      var newIn = '<input autocomplete="off" class="input form-control" id="field' + next + '" name="field' + next + '" type="text">';
      var newInput = $(newIn);
      var removeBtn = '<button id="remove' + (next - 1) + '" class="btn btn-danger remove-me" >-</button></div><div id="field">';
      var removeButton = $(removeBtn);
      $(addto).after(newInput);
      $(addRemove).after(removeButton);
      $("#field" + next).attr('data-source',$(addto).attr('data-source'));
      $("#count").val(next);  

      $('.remove-me').click(function(e){
        e.preventDefault();
        var fieldNum = this.id.charAt(this.id.length-1);
        var fieldID = "#field" + fieldNum;
        $(this).remove();
        $(fieldID).remove();
      });
    });
    

    
  });

</script>

</body>
</html>