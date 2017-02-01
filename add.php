<?php include('theme/header.php'); ?>

<?php

include('dbconnect.php');

$payment_date = mysqli_real_escape_string($connection, $_POST['payment_date']);
$remaining_debt = mysqli_real_escape_string($connection, $_POST['remaining_debt']);


$sql = "INSERT INTO small_victories (date, latest_amount) VALUES ('$payment_date', '$remaining_debt');";


if (mysqli_query($connection, $sql)) {
  echo "The new amount was added.";
} else {
  echo "Oops! " . $sql . "<br>" . mysqli_error($connection);
}

mysqli_close($connection);

?>

<?php include('theme/footer.php'); ?>
