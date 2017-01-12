<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>files explorer</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="boostrap.css">
  </head>
  <body>
    <?php
      $adresse = "/home/quangb/";

          if (isset($_GET['dossier'])) {

            $adresse = $adresse.$_GET['dossier'];
           }

           $dirs = scandir($adresse);
           foreach ($dirs as $folder) {

            if (!is_dir($adresse.$folder)) {

              if (isset($_GET['dossier'])) {

               echo "<a href='index.php?dossier='".$_GET['dossier']."$folder/><img id='fich' src='images/file.png'>$folder</a><br>";

              }

            }

            else {

              if ($folder == ".."){


                  if (isset($_GET['dossier'])){
                      echo "<img src='images/prev.png'><a href='index.php?dossier=".$_GET['dossier'].$folder."/'>$folder</a><br>";
                      }

                  else{
                      echo "<img src='images/prev.png'><a href='index.php'>$folder</a><br>";
                  }
                }

                elseif ($folder == ".") {
                  echo "<a href='index.php'><img src='images/home.png'>HOME</a><br>";
                }

                else {
                  if (isset($_GET['dossier'])){
                      echo "<img src='images/folder.png'><a href='index.php?dossier=".$_GET['dossier'].$folder."/'>$folder</a><br>";
                      }
                  else {

                  echo "<a href='index.php?dossier=$folder/'><img src='images/folder.png'>$folder</a><br>";
                  }
                }

                }
                }

      ?>
  </body>
</html>
