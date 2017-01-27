<?php

/*
 * Array containing links for the footer.
 */
$links = array(
  'home' => array(
    "href" => "/index.php",
    "name" => "Home",
  ),
  'blog' => array(
    "href" => "http://www.ericjgruber.com",
    "name" => "Eric J. Gruber",
  ),
);

?>

<div class="footer row">
   <nav class="small-3 small-centered columns">
    <ul>
      <li>&copy; <?php echo date("Y"); ?></li>
      <?php foreach($links as $link) : ?>
        <li>
          <a href="<?php echo $link['href']; ?>">
            <?php echo $link['name']; ?>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
    </nav>
</div>
</body>
</html>