<!doctype html>
<html lang="en">
    <?php
        include('usuari.php');

        $title= "INDEX";
        include('header.php'); 
    ?>
    <body>
    <?php
        if(isset($_COOKIE["Usuarin"])){
            $nombre = $_COOKIE["Usuarin"];
            $login = "<span style='font-weight: bolder;'>Login $nombre</span>";
        }else{x
            $login = "<span style='font-weight: bolder;'>Login usuari no identificat</span>";
            $nombre="usuari no identificat";
        }

        $index = "Index";
        $pagina1 = "<span style='color: black;'>Pagina1</span>";
        $pagina2 = "Pagina2";
        $logout = "Logout";
        include('navbar.php');
    ?>



    <h4 style='margin-top:50px; margin-left:20px'>pagina1</h4><br>



    <?php

      if(isset($_SESSION['user'])){
      $miUsuario = $_SESSION['user'];
      $miUsuario->afegirPaginaArr($_SERVER['REQUEST_URI']);  
       
      $miUsuario->imprimir();

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
    }

        include('footer.php'); 
    ?>
  </body>
</html>