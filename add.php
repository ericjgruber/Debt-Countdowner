<?php include('theme/header.php'); ?>

<?php

include('dbconnect.php');

$sql = "INSERT INTO small_victories (date, latest_amount) VALUES ('2017-01-25', '31945.78');";

if (mysqli_query($connection, $sql)) {
  echo "The new amount was added.";
} else {
  echo "Oops! " . $sql . "<br>" . mysqli_error($connection);
}

mysqli_close($connection);

?>

<?php include('theme/footer.php'); ?>
