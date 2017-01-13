<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>files explorer</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js">  </script>
  </head>
  <body>
<div class="container">


<div class="explorer">
    <?php
      $adresse = "/home/quangb/";

          if (isset($_GET['dossier'])) {

            $adresse = $adresse.$_GET['dossier'];
           }

           $dirs = scandir($adresse);
           foreach ($dirs as $folder) {

            if (!is_dir($adresse.$folder)) {

              if (isset($_GET['dossier'])) {


                echo "<a download='$folder' href=http://quangb.marmier.codeur.online/".$_GET['dossier'].$folder."><img src='images/file.png'> $folder</a><br>";

             }

            }

           else {

              if ($folder == ".."){


                  if (isset($_GET['dossier'])){
                      echo "<img src='images/prev.png'><a href='index.php?dossier=".$_GET['dossier'].$folder."/'>prev</a><br>";
                      }

                  else{
                      echo "<img src='images/prev.png'><a href='index.php'>prev</a><br>";
                  }
                }

                elseif ($folder == ".") {
                  echo "<a href='index.php'><img src='images/home.png'>HOME</a><br>";
                }

                else {
                  if (isset($_GET['dossier'])){
                      echo "<img src='images/folder.png'><a class='link' href='index.php?dossier=".$_GET['dossier'].$folder."/'>$folder</a><br>";
                      }
                  else {

                  echo "<a class='link' href='index.php?dossier=$folder/'><img src='images/folder.png'>$folder</a><br>";
                  }
                }

                }
                }

      ?>

      <div id="ajaxx">
      </div>
</div>
</div>
      <script type="text/javascript">

      $(document).ready(function() {
          $(".link").on("click", function(e){
              e.preventDefault();
              var $a = $(this);
              var adresse = $a.attr("href");
              var arr = adresse.split('?')[1];
              $.ajax({
                  type : "GET",
                  data: arr,
                  url : "",
                  success : function(data){
                      $(".explorer").html(data);
                      console.log("coucou");
                  }
              });
          });
      });

      </script>
  </body>
</html>
