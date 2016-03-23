<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<form class="form" id="form1">
Text : <input type="text" name="ttext" id="text"/>
<br />
Result : <input type="text" id="result"/>
</form>
<script>
$("#text").keyup(function(){
//alert(textinput);
$("#result").val("Translating... Plese Wait!");
  $.ajax({
     type: "POST",
     url: "translate.php",
     data: $("#form1").serialize(), // serializes the form's elements.
     success: function(data)
     {
      $("#result").val(data);
      }});
      });
</script>
