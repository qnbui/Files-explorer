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
                    if (!is_dir("$file"))
                    {
                      echo "<img src='images/folder.png'><a href='../home/quangb/$file/'>$file</a><br>";
                    }
                    else{
                      echo "<img src='images/file.png'><a href='../home/quangb/$file/'>$file</a><br>";
                    }
                }
    ?>
  </body>
</html>
