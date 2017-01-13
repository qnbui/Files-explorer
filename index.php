<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>files explorer</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"> </script>
  </head>
  <body>
<div class="container">
  <div class="row">

<div class="explorer" id="explorer">
    <?php
      $adresse = "/home/quangb/";

          if (isset($_GET['dossier'])) {

            $adresse = $adresse.$_GET['dossier'];
           }

           $dirs = scandir($adresse);
           foreach ($dirs as $folder) {

            if (!is_dir($adresse.$folder)) {

              if (isset($_GET['dossier'])) {


                echo "<div id='explorer'><div class='col-md-3 col-xs-3 col-sm-3'><a download='$folder' href=http://quangb.marmier.codeur.online/".$_GET['dossier'].$folder."><img src='images/file1.png' id='file'> $folder</a><br></div></div>";

             }

            }

           else {

              if ($folder == ".."){


                  if (isset($_GET['dossier'])){
                      echo "<div id='explorer'><div class='col-md-3 col-xs-3 col-sm-3'><img src='images/prev.png' id='prev'><a href='index.php?dossier=".$_GET['dossier'].$folder."/'>prev</a><br></div></div>";
                      }

                  else{
                      echo "<div id='explorer'><div class='col-md-3 col-xs-3 col-sm-3'><img src='images/prev.png' id='prev'><a href='index.php'>prev</a><br></div></div>";
                  }
                }

                elseif ($folder == ".") {
                  echo "<div id='explorer'><div class='col-md-3 col-xs-3 col-sm-3'><a href='index.php'><img src='images/home.png' id='home'>home</a><br></div></div>";
                }

                else {
                  if (isset($_GET['dossier'])){
                      echo "<div id='explorer'><div class='col-md-3 col-xs-3 col-sm-3'><img src='images/folder.png' id='folder'><a class='link' href='index.php?dossier=".$_GET['dossier'].$folder."/'>$folder</a><br></div></div>";
                      }
                  else {

                  echo "<div id='explorer'><div class='col-md-3 col-xs-3 col-sm-3'><a class='link' href='index.php?dossier=$folder/'><img src='images/folder.png' id='folder'>$folder</a><br></div></div>";
                  }
                }

                }
                }

      ?>

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

                  }
              });
          });
      });

      </script>
  </body>
</html>
