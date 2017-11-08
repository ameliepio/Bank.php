
<?php
  include("template/header.php")
 ?>
    <form class="form"  method='post' action="payement.php">
<div class="row">
   <div class="input-field col s6">
     <input value="Alvin" id="first_name2" type="text" class="validate">
     <label class="active" for="first_name2">name account</label>
   </div>
 </div>
 <div class="row">
   <div class="input-field col s6">
     <input value="Alvin" id="first_name2" type="text" class="validate">
     <label class="active" for="first_name2">bank operation</label>
   </div>
 </div>
 <div class="row">
   <div class="input-field col s6">
     <input value="Alvin" id="first_name2" type="text" class="validate">
     <label class="active" for="first_name2">amount</label>
   </div>
 </div>

   <button class="btn waves-effect waves-light" type="submit" name="action">Submit
     <i class="material-icons right">send</i>
   </button>

   
   </form>

   <?php
     include("template/footer.php")
    ?>
