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
              <th>BankOperation</th>
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
                    <td><?php echo $account->getBankOperation();?></td>
                    <td><?php echo $account->getAmount();?></td>

          <?php }?>
          </tr>

        </tbody>
      </table>
    </class><br>

<class button>

<!-- <a class="waves-effect waves-light btn-large">Add</a> -->

<a class="#ffff00 yellow accent-2 btn-large" href="payement.php">Add</a>

<a class="#d50000 red accent-4 btn-large">Delete</a>

<a class="#a5d6a7 green lighten-3 btn-large">transfer</a>




</class>

       <!--Import jQuery before materialize.js-->
       <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
       <script type="text/javascript" src="assets/js/materialize.min.js"></script> -->
     </body>
   </html>

   <?php
     include ("template/footer.php");
    ?>
