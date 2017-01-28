<?php

/*
 * Array containing links for the footer.
 */
$links = [
  "home" => [
    "href" => "/index.php",
    "name" => "Home",
    "title" => "Debt Countdowner home",
  ],
  "blog" => [
    "href" => "http://www.ericjgruber.com",
    "name" => "Eric J. Gruber",
    "title" => "Personal blog of Eric J. Gruber",
  ],
  "add" => [
    "href" => "/add.php",
    "name" => "Add",
    "title" => "Add an Entry",
  ],
  "view" => [
    "href" => "/view.php",
    "name" => "View",
    "title" => "View All Entries",
  ],
];

?>

<div class="footer row">
   <nav class="small-4 small-centered columns">
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