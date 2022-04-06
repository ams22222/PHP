<!doctype html>
<html lang="en">
    <?php

        include('usuari.php');
        
        print_r ($miUsuario);

        $title= "INDEX";
        include('header.php'); 
    ?>
    <body>
    <?php
        if(isset($_COOKIE["Usuarin"])){
            $nombre = $_COOKIE["Usuarin"];
            $login = "<span style='font-weight: bolder;'>Login $nombre</span>";
            setcookie("Usuarin", $nombre);
        }else{
            $login = "<span style='font-weight: bolder;'>Login usuari no identificat</span>";
            $nombre="usuari no identificat";
        }

        $index = "Index";
        $pagina1 = "Pagina1";
        $pagina2 = "Pagina2";
        $logout = "<span style='color: black;'>Logout</span>";
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

        session_destroy();
    ?></footer>
  </body>
</html>