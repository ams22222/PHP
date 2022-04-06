<!doctype html>
<html lang="es">

    <?php
        $title= "LOGIN";
        include('header.php'); 
    ?>


  <body>
  <?php
        if(isset($_COOKIE["Usuarin"])){
            $nombre = $_COOKIE["Usuarin"];
            $login = "<span style='font-weight: bolder;'>Login $nombre</span>";
        }else{
            $login = "<span style='font-weight: bolder;'>Login usuari no identificat</span>";
        }
        $index = "Index";
        $pagina1 = "Pagina1";
        $pagina2 = "Pagina2";
        $logout = "Logout";
        include('navbar.php');
    ?>
    <div style="margin-top: 170px; margin-left: 400px;" class="container">
        <form action='index.php' method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Login</label>
                <input type="text" required style="width: 637px" class="form-control" id="exampleInputEmail1" name="lognom" placeholder="Introdueix el nom del login">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nom del usuari</label>
                <input type="text" required style="width: 300px" class="form-control" id="exampleInputEmail1" name="nom" placeholder="Introdueix el nom">
            </div>
            <div class="form-group" style="float: right; margin-top: -61px; margin-right: 660px">
                <label for="exampleInputEmail1">Cognoms del usuari</label>
                <input type="text" required style="width: 300px" class="form-control" id="exampleInputEmail1" name="cognom" placeholder="Introdueix els cognoms">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" required style="width: 637px" class="form-control" id="exampleFormControlInput1" name="mail" placeholder="Introdueix el mail: name@example.com">
            </div>
            <button style="background:#6533FF" type="submit" class="btn btn-primary">Enviar</button>
        </form>
        </div>
    <?php
        include('footer.php'); 
    ?>
    </body>
</html>