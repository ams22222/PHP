<!doctype html>
<html lang="en">
    <?php

        include('usuari.php');

        session_start();

        if(isset($_SESSION['user'])){
          $miUsuario = $_SESSION['user'];
        }else{
          $miUsuario = new USUARI();
        }

        if(isset($_POST["lognom"])){
            $_SESSION["lognom"]=$_POST["lognom"];
            $nombre=$_POST["lognom"];
            $miUsuario->setUsername($nombre);
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
        
        print_r ($miUsuario);

        $title= "INDEX";
        include('header.php'); 
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
      echo "Benvolgut $nombre";
    
    ?>
    <footer class="fixed-bottom"><?php
        include('footer.php'); 
    ?></footer>
  </body>
</html>