<!doctype html>
<html lang="en">
    <?php
      include('usuari.php');

      $title= "INDEX";
      include('header.php'); 

        if(isset($_POST["lognom"])){
            $nombre=$_POST["lognom"];
            $login = "<span style='font-weight: bolder;'>Login $nombre</span>";
            setcookie("Usuarin", $nombre);
        }elseif(isset($_COOKIE["Usuarin"])){
            $nombre = $_COOKIE["Usuarin"];
            $login = "<span style='font-weight: bolder;'>Login $nombre</span>";
            setcookie("Usuarin", $nombre);
        }else{
            $login = "<span style='font-weight: bolder;'>Login usuari no identificat</span>";
            $nombre="usuari no identificat";
            setcookie("Usuarin", $nombre);
        }


        if(isset($_SESSION['user'])){
          $miUsuario = $_SESSION['user'];
          if(isset($_POST["lognom"])){ 
            $miUsuario->setUsername($_POST["lognom"]);

            $miUsuario->setName($_POST["nom"]);

            $miUsuario->setLastnames($_POST["cognom"]);

            $miUsuario->setMail($_POST["mail"]);

          }
          $miUsuario->afegirPaginaArr($_SERVER['REQUEST_URI']);
        }else{
          if(isset($_POST["lognom"])){
          $miUsuario = new USUARI($_POST["lognom"],$_POST["nom"],$_POST["cognom"],$_POST["mail"]);
          }else{
            $miUsuario = new USUARI();
          }
          
          $_SESSION['user']= $miUsuario;
        }
    ?>
    <body>
    <?php
        $index = "<span style='color: black;'>Index</span>";
        $pagina1 = "Pagina1";
        $pagina2 = "Pagina2";
        $logout = "Logout";
        include('navbar.php');
    ?>
    <?php
    if(isset($_COOKIE["Usuarin"])){
      $login = $_COOKIE["Usuarin"];
    }
      echo "<h4 style='margin-top:50px; margin-left:20px'>Benvolgut $nombre</h4><br>";
      $miUsuario->imprimir();
    ?>
    
    <?php
        include('footer.php');       
    ?>
  </body>
</html>