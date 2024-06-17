<?php
session_start();

?>

<div class="announcement-section">
  <h2>Announcements</h2>
  <div class="announcement-list">
    <?php
    $announcement_titles = explode(", ", $_SESSION['announcement_titles']);
    $announcement_dates = explode(", ", $_SESSION['announcement_dates']);

    for ($i = 0; $i < count($announcement_titles); $i++) {
      echo "<div class='announcement-item'>";
      echo "<h3>" . $announcement_titles[$i] . "</h3>";
      echo "<p>Posted on: " . $announcement_dates[$i] . "</p>";
      echo "</div>";
    }
    ?>
  </div>
</div>