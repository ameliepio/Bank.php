<?php
  include("template/header.php");
 ?>
   <html>


<class="responsive-table">
      <table>
        <thead>
          <tr>
              <th>NameAccount</th>

              <th>Amount</th>
          </tr>

          <form class="form"  method='post' action="payement.php">

              <a class="##82b1ff blue accent-1 btn"  href="payement.php">Add</a>

              </form>
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
<input value="edit" type="submit"class="#82b1ff blue accent-1 btn"name="update">
</form>

<form class="" action="transfer.php" method="post">
    <input type="hidden" name='addwithdrawal' value='<?php echo $account->getNameAccount();?>'/>
<input value="withdrawal" type="submit"class="#82b1ff blue accent-1 btn"name="withdrawal">
</form>

<form class="" action="transfer.php" method="post">
    <input type="hidden" name='transfer' value='<?php echo $account->getNameAccount();?>'/>
<input value="transfer" type="submit"class="#82b1ff blue accent-1 btn"name="transfer">
</form>

<form class="" action="index.php" method="post" >
  <input type="hidden" name='NameAccount' value='<?php echo $account->getNameAccount();?>'/>
 <input value="delete"type="submit"class="#f44336 red btn"  name="DeleteAccount">
  </form>


      </class>


  </tr>
          <?php }?>


  </tbody>
      </table>


       <!--Import jQuery before materialize.js-->
       <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
       <script type="text/javascript" src="assets/js/materialize.min.js"></script> -->
     </body>
   </html>

   <?php
     include ("template/footer.php");
    ?>
