<!doctype html>
<html lang="en">
    <?php


        include('usuari.php');
        
        $title= "INDEX";
        include('header.php'); 
    
    ?>
    <body>
    <?php

        if(isset($_SESSION['user'])){
          $miUsuario = $_SESSION['user'];
          $miUsuario->afegirPaginaArr($_SERVER['REQUEST_URI']);
        }


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
      
    $miUsuario->imprimir();
    ?>
    <form method='POST'>
      <input name="sortir" type="submit" class="btn btn-primary" value="SORTIR" style="float:right;" onclick="alert('gràcies per la visita!')">
    </form>
    <?php
    echo "<h4>Historial de pàgines:</h4>";  
   
    foreach ($miUsuario->retornarPag() as $pagina) {
      $paginaRetallada = substr($pagina, 1);
      echo '<table class="table-bordered" style="margin-left:200px; width: 300px; text-align:center;">
      <tbody>
        <tr>
          <th>'.$paginaRetallada.'</th>
        </tr>
      </tbody>
      </table>';
      } 

      include('footer.php'); 

    ?>
    
  </body>

  <?php  
    if(isset($_POST['sortir'])){
        
      if (isset($_COOKIE['Usuarin'])) {
        unset($_COOKIE['Usuarin']); 
        setcookie('Usuarin', null, -1); 
      } 
          
      if(isset($_SESSION['user'])){

        unset($_SESSION['user']);
        session_destroy();
        echo '<script type="text/JavaScript"> window.location.assign("login.php"); </script>';
      }
    }
  ?>
</html>