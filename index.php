<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>files explorer</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php
      $scan = scandir('/home/quangb/');

      foreach($scan as $file)
      {
          if (is_dir("/home/quangb/$file"))
          {
              echo $file.'<br>';
          }
      }
    ?>
  </body>
</html>
