<?php
  include("template/header.php");
 ?>

<p>This is the index view</p>

  <!-- <!DOCTYPE html> -->
   <html>


<class="responsive-table">
      <table>
        <thead>
          <tr>
              <th>NameAccount</th>

              <th>Amount</th>
          </tr>

          <form class="form"  method='post' action="payement.php">

              <a class="#ffff00 yellow accent-2 btn-large"  href="payement.php">Add</a>

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

<form class="" action="index.php" method="post">
 <input value="delete"  class="#d50000 red accent-4 btn" type="text"  name="DeleteAccount">
  </form>


<form class="" action="index.html" method="post">
<input value="transfere" type="text"class="#a5d6a7 green lighten-3 btn-large"name="Transfer">
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
