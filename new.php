<?php include('theme/header.php'); ?>

  <div class="row">
    <div class="small-6 small-centered columns latest-amounts">
  <form action="add.php" method="post">
    <p>
      <label for="paymentDate">Payment Date</label>
      <input type="date" name="payment_date" id="paymentDate">
    </p>

    <p>
      <label for="remainingDebt">Remaining Debt</label>
      <input type="number" name="remaining_debt" id="remainingDebt">
    </p>
    <input type="submit" value="Submit">
  </form>
    </div>
  </div>

<?php include ('theme/footer.php'); ?>