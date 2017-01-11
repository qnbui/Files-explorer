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

              if (isset($_GET['dossier'])) {

               echo "<a href='index.php?dossier='".$_GET['dossier']."$folder/><img id='fich' src='images/file.png'>$folder</a><br>";

              }
              else {

               echo "<a href='index.php?dossier='".$_GET['dossier']."'$folder/><img id='fich' src='images/file.png'>$folder</a><br>";

              }
            }

            else {
              if
                if ($folder == ".."){

              echo "<a href='index.php?dossier=".dirname($_GET['dossier'])."'><img id='doss' src='images/file.png'>$folder</a><br>";

             }
             else {
             echo "<a href='index.php?dossier=$folder/'><img id='doss' src='images/folder.png'>$folder</a><br>";
            }
             }

           }

      ?>
  </body>
</html>
