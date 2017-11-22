
<?php
  include("template/header.php")
 ?>

 <form class="form"  method='post' action="../controllers/withdrawal.php">
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
  <input type="hidden" name="NameAccount"  value='<?php echo $account->getNameAccount()?>'>


     <button class="btn #e64a19 deep-orange darken-2" type="submit" name="withdrawalAccount">Submit
       <i class="material-icons right">send</i>

     </button>

     </form>

 <?php
   include ("template/footer.php");
  ?>
