<!doctype html>
<html lang="en">
  <head>
    <title>Envio</title>
    <link  rel="icon"   href="../Img/truck.png" type="image/png" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;500;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
  </head>
  <body>
      <header>
    <section>
        <nav class="navbar navbar-light bg-light fixed-top">
            <h4 class="textos">Bienvenido</h4>
            <form class="form-inline" action="tracker.php" method="POST">
              <input class="form-control mr-sm-2" type="search" placeholder="Número de envio" aria-label="Search" name="codigo" required>
              <button class="btn btn-outline-dark my-2 my-sm-0" type="submit"><h6 class="textos">Enviar</h6></button>
            </form>
          </nav>

    </section>
    <section>
      <nav class="navbar navbar-expand-lg  fixed-top" >&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
        <a class="navbar-brand" href="#">
          <img src="../Img/Logo.jfif" width="200" height="145" alt="" loading="lazy">&nbsp;
        </a>
        <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a  data-text="Inicio" href="../index.html">Inicio</a>
            </li> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
            <li class="nav-item">
              <a data-text="Historia" href="../somos.html">Historia</a>
            </li>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
            <li class="nav-item">
              <a data-text="Cotizador" href="cotizador.php">Cotizador</a>
            </li>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
            <li class="nav-item">
            <a data-text="Portal" href="http://localhost/Admin" >Portal</a>
            </li>
          </ul>
        </div>
      </nav>
        
        
    </section>

    
<section>
          

     <div class="Header6" >
     <div class="container h-100">
    <div class="d-flex h-100 text-center align-items-center">
      <div class="w-100 text-white">
        <h1 class="titulos">Envio</h1>
        <h4 class="textos">Realización de envio</h4>
      </div>
    </div>
  </div>
            </div>

    </section>

</header>
    <div class="container-fluid">
        <section>
        <br><br><br>
        <div class="row d-flex justify-content-center">
              <h1 class="titu">Ingrese los ultimos<span style="color:red">Datos</span></h1> 
            </div>
            <center>  <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-file-earmark-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M4 0h5.5v1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h1V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z"/>
  <path d="M9.5 3V0L14 4.5h-3A1.5 1.5 0 0 1 9.5 3z"/>
  <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
</svg>       </center>
        <div class="row d-flex justify-content-center">
        
      <div class="card">
        <form action="" method="POST" class="llevamos">
            <div class="form-group">
              <label >Destinatario</label>
              <input type="text" class="form-control" name="destinatario"  id="myInput"required/>
            </div>
            <div class="form-group">
              <label >Direccion</label>
              <input type="text" class="form-control" name="direccion"  id="myInput"required/>
            </div>
           <center> <button type="submit" name="submit"  class="btn btn-primary">Enviar producto</button> </center>
          </form>
    </div>
</div>

<?php
    $destino = $_GET['destino'];
    if(isset($_POST['submit'])){
    $destinatario = $_POST['destinatario'];
    $direccion = $_POST['direccion'];
    $un= strval(mt_rand(0,9));
    
    for($i = 0; $i < 9; $i++){
        $un = $un.strval(mt_rand(0,9));

    }

    $con = pg_connect("host=localhost dbname=Proyecto1CC6 user=postgres password=12345");

    if(!$con){
    die("Connection failes: ". pg_last_error());
    }
    $query = "SELECT * FROM Envio WHERE codigo='$un' AND tienda='mcqueen'";
    $result = pg_query($query);
    if(pg_num_rows($result) > 0){
        $un = "";

        for($i = 0; $i < 10; $i++){
            $un = $un.strval(mt_rand(0,9));
    
        }
    }else{
       
        $quer = "INSERT INTO Envio Values('$un','$destinatario','$direccion',1,'mcqueen','$destino')";
        $result = pg_query($quer);
        if(!$result){
        


        }else{
?>

<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong><h1 class="textos">Aviso</h1></strong><h3 class="parrafos"> Envio satisfactorio, codigo:  <?php   echo $un ?> </h3>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>        


<?php



        }

    }

}
?>













</section>
<br><br><br><br>
      <section>
        <footer>
          <div class="row d-flex justify-content-center" id= "final">
            
            
            <p class="fin">&copy; 2020  McQueen </p>
          
          </div>
    
    
        </footer>

        </section>
    </div>

   

      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>