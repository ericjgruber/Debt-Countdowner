<?php include('theme/header.php'); ?>

<?php

include('dbconnect.php');

$sql = "SELECT date, latest_amount FROM small_victories ORDER BY latest_amount ASC;";
$result = mysqli_query($connection, $sql);
?>

<div class="row">
  <div class="small-6 small-centered columns latest-amounts">
    <table class="hover">
      <thead>
      <tr>
        <th width="200">Payment Received</th>
        <th width="200">Remaining Debt</th>
      </tr>
      </thead>
      <tbody>
      <?php
      if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
          echo "<tr><td>" . $row['date'] . "</td><td>" . $row['latest_amount'] . "</td></tr>";
        }
      } else {
        echo "There are no amounts in the database yet.";
      }
      mysqli_close($connection);
      ?>
      </tbody>
    </table>

  </div>
</div>

<?php include('theme/footer.php'); ?>

