
<?php
  include("template/header.php")
 ?>

 <?php
 // foreach ($account as $accounts) {
 //   echo "<p>" . $accounts->getAccount() ."</p>";
 // }
  ?>


    <form class="form"  method='post' action="payement.php">
<div class="row">
   <div class="input-field col s6">
     <input value="" id="first_name2" type="text" class="validate" name="NameAccount">
     <label class="active" for="first_name2">NameAccount</label>
   </div>
 </div>
 <!-- <div class="row">
   <div class="input-field col s6">
     <input value="Alvin" id="first_name2" type="text" class="validate"name="BankOperation">
     <label class="active" for="first_name2">BankOperation</label>
   </div>
 </div> -->
 <div class="row">
   <div class="input-field col s6">
     <input value="" id="first_name2" type="text" class="validate" name="Amount">
     <label class="active" for="first_name2">Amount</label>
   </div>
 </div>

   <button class="btn waves-effect waves-light" type="submit" name="addAccount">Submit
     <i class="material-icons right">send</i>

   </button>


   </form>

   <?php
     include("template/footer.php")
    ?>
