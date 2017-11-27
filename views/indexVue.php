<?php
  include("template/header.php");
 ?>
   <html>
<div class="row">


     <form class="form"  method='post' action="payement.php">
         <a class="##82b1ff blue accent-1 btn"  href="payement.php">Add</a>
   </form>
   <form class="connect" method="post" action="user.php" >
   <input value="connect " type="submit"class="#82b1ff blue accent-1 btn connect"name="connect">

       </form>
   </div>
<class="responsive-table">
      <table>
        <thead>
          <tr>
              <th>NameAccount</th>

              <th>Amount</th>
          </tr>


        </thead>
        <tbody>
          <tr>

            <?php
            foreach ($accounts as $account)
            {
            ?>

                    <td><?php echo $account->getNameAccount();?></td>
                    <td><?php echo $account->getAmount();?></td>


      <class button>
        <td class="row .col-xs-4 .col-sm-6">


<form class="" action="edit.php" method="post">
    <input type="hidden" name='NameAccountUpdate' value='<?php echo $account->getNameAccount();?>'/>
<input value="edit" type="submit"class="#82b1ff blue accent-1 btn1"name="update">
</form>

<form class="" action="withdrawal.php" method="post">
    <input type="hidden" name='addwithdrawal' value='<?php echo $account->getNameAccount();?>'/>
<input value="-" type="submit"class="#82b1ff blue accent-1 btn1"name="withdrawal">
</form>

<form class="" action="transfer.php" method="post">
    <input type="hidden" name='addtransfer' value='<?php echo $account->getNameAccount();?>'/>
<input value="+" type="submit"class="#82b1ff blue accent-1 btn1"name="transfer">
</form>

<form class="" action="index.php" method="post" >
  <input type="hidden" name='NameAccount' value='<?php echo $account->getNameAccount();?>'/>
 <input value="delete"type="submit"class="#f44336 red btn1"  name="DeleteAccount">
  </form>


      </class>
  </tbody>

  </tr>
          <?php }?>

  </table>



       <!--Import jQuery before materialize.js-->
       <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
       <script type="text/javascript" src="assets/js/materialize.min.js"></script> -->
     </body>
   </html>

   <?php
     include ("template/footer.php");
    ?>
