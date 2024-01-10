<?php
  require './class.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Case 3</title>
</head>
<body>
  <div class="part-1">
    <h3> <?= $content1->changeTitle() ?></h3>
    <h3> <?= $content2->changeTitle() ?></h3>
    <h3> <?= $content3->changeTitle() ?></h3>
  </div>
  <div>
    <?php 
      foreach ($articlesArray as $article) {
        echo '<h3>' . $article->changeTitle() . '</h3>';
        echo '<p> Text content: ' . $article->text . '</p>';
        echo '<br>';
      };
    ?>
  </div>
  
</body>
</html>