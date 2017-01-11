<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>files explorer</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php
  $adresse = "/home/quangb/";
  

  if (isset($_GET['dossier'])) {
    $adresse = $adresse.$_GET['dossier'];
   }

  $dirs = scandir($adresse);
  foreach ($dirs as $folder) {

   if (!is_dir("/home/quangb/$folder")) {

    if ($folder == ".."){

     echo "<img src='images/folder.png'><a href='index.php?dossier='".$_GET['dossier'].">$folder</a><br>";

    }
    else {

     if (isset($_GET['dossier'])) {

      echo "<img src='images/file.png'><a href='index.php?dossier='".$_GET['dossier']."$folder/>$folder</a><br>";

     }

     else {

      echo "<img src='images/file.png'><a href='index.php?dossier='".$_GET['dossier']."'$folder/>$folder</a><br>";

     }

    }
   }

   else {
    echo "<img src='images/folder.png'><a href='index.php?dossier=$folder/'>$folder</a><br>";
   }

  }
                  ?>
  </body>
</html>
