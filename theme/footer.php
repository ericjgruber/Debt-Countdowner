<?php

/*
 * Array containing links for the footer.
 */
$links = array(
  'home' => array(
    "href" => "/index.php",
    "name" => "Home",
    "title" => "Debt Countdowner home",
  ),
  'blog' => array(
    "href" => "http://www.ericjgruber.com",
    "name" => "Eric J. Gruber",
    "title" => "Personal blog of Eric J. Gruber",
  ),
);

?>

<div class="footer row">
   <nav class="small-3 small-centered columns">
    <ul>
      <li>&copy; <?php echo date("Y"); ?></li>
      <?php foreach($links as $link) : ?>
        <li>
          <a href="<?php echo $link['href']; ?>" title="<?php echo $link['title']; ?>">
            <?php echo $link['name']; ?>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
    </nav>
</div>
</body>
</html>