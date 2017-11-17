
<?php
  include("template/header.php")
 ?>


    <form class="form"  method='post' action="edit.php">
<div class="row">
   <div class="input-field col s6">
     <input value="" id="first_name2" type="text" class="validate" name="NameAccount">
     <label class="active" for="first_name2">NameAccount</label>
   </div>
 </div>

 <div class="row">
   <div class="input-field col s6">
     <input value="" id="first_name2" type="text" class="validate" name="Amount">
     <label class="active" for="first_name2">Amount</label>
   </div>
 </div>
<input type="hidden" name="id" value=" <?php $_POST['id']?>">


   <button class="btn waves-effect waves-light" type="submit" name="addAccount">Submit
     <i class="material-icons right">send</i>

   </button>


   </form>

   </html>

   <?php
     include ("template/footer.php");
    ?>
