<?php include ('theme/header.php'); ?>

<?php
$sql = '"CREATE TABLE small_victories (date DATE, latest_amount DECIMAL(8,2));"';
?>

<div class="row install-wrapper">
  <div class="small-3 small-centered columns install-form">
    <h1>Installation</h1>
    <form action="install.php">
      <legend>Database Name</legend>
      <input type="text" name="dbname">

      <legend>Database Username</legend>
      <input type="text" name="dbusername">

      <legend>Database Password</legend>
      <input type="password" name="dbpassword">

      <input type="submit" name="submit" value="Submit" class="success button">
    </form>
  </div>
</div>

<?php include('theme/footer.php'); ?>