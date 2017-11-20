
<?php
  include("template/header.php")
 ?>


    <form class="form"  method='post' action="../controllers/edit.php">
<div class="row">
   <div class="input-field col s6">
     <input id="first_name2" type="text" class="validate" name="NameAccount" value='<?php echo $account->getNameAccount()?>'>
     <label class="active" for="first_name2">NameAccount</label>
   </div>
 </div>

 <div class="row">
   <div class="input-field col s6">
     <input  id="first_name2" type="text" class="validate" name="Amount"value='<?php echo $account->getAmount()?>'>
     <label class="active" for="first_name2">Amount</label>
   </div>
 </div>
<input type="hidden" name="id"  value='<?php echo $account->getId()?>'>


   <button class="btn #e64a19 deep-orange darken-2" type="submit" name="editAccount">Submit
     <i class="material-icons right">send</i>

   </button>


   </form>

   </html>

   <?php
     include ("template/footer.php");
    ?>
