<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>files explorer</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php
    $scan = scandir('/home/quangb/ACS-PROJETS/');
                  foreach($scan as $file)
                {
                    if (!is_dir("/home/quangb/ACS-PROJETS/'$file"))
                    {
                        echo $file.'<br>';
                    }
                    else{
                      echo $file.'<br>';
                    }
                }
    ?>
  </body>
</html>
