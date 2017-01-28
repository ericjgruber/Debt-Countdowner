<?php include('theme/header.php'); ?>

<?php

include('dbconnect.php');

$sql = "SELECT date, latest_amount FROM small_victories ORDER BY latest_amount DESC;";
$result = mysqli_query($connection, $sql);
?>

<div class="row">
  <div class="small-6 small-centered columns latest-amounts">
  <?php
  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      echo "Date: " . $row['date'] . " - Amount: " . $row['latest_amount'] . "<br>";
    }
  } else {
    echo "There are no amounts in the database yet.";
  }

  mysqli_close($connection);
  ?>
  </div>
</div>

<?php include('theme/footer.php'); ?>

