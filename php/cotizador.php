<!doctype html>
<html lang="en">
  <head>
    <title>Inicio</title>
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
              <a data-text="Cotizador" href="#">Cotizador</a>
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
        <h1 class="titulos">Cotizador</h1>
        <h4 class="textos">Verifique el precio de envio de sus productos</h4>
      </div>
    </div>
  </div>
</div>

    </section>

</header>
    <div class="container-fluid">
   
        <section>
        <br><br><br>
        <div class="col-13 " id="body">
        <div class="row d-flex justify-content-center">
              <h1 class="titu">Ingrese sus <span style="color:red">Datos</span></h1> 
            </div>
  <center><svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-file-earmark-arrow-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M4 0h5.5v1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h1V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z"/>
  <path d="M9.5 3V0L14 4.5h-3A1.5 1.5 0 0 1 9.5 3z"/>
  <path fill-rule="evenodd" d="M8 6a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 10.293V6.5A.5.5 0 0 1 8 6z"/>
</svg>    </center>

        <div class="row d-flex justify-content-center">
      <div class="card">
       
        <form action="" method="POST" class="llevamos">
        <h5 class="parrafoss">El precio por libra es de Q20.00</h5>
            <div class="form-group" >
              <label >Origen</label>
              <select name="origen" id="origen" class="form-control form-control-sm" required>
             <option value="">-</option>
              <option value="16000">Alta Verapaz</option>
              <option value="01000">Guatemala</option>
              <option value="13000">Huehuetenango</option>
              <option value="22000">Jutiapa</option>
              <option value="17000">Petén</option>
              <option value="11000">Retalhuleu</option>
              <option value="19000">Zacapa</option>

            </select>
            </div>
            <div class="form-group" >
              <label>Destino</label>
              <select name="destino" id="destino" class="form-control form-control-sm" required>
             <option value="">-</option>
              <option value="16000">Alta Verapaz</option>
              <option value="15000">Baja Verapaz</option>
              <option value="04000">Chimaltenango</option>
              <option value="20000">Chiquimula</option>
              <option value="02000">El Progreso</option>
              <option value="05000">Escuintla</option>
              <option value="01000">Guatemala</option>
              <option value="13000">Huehuetenango</option>
              <option value="18000">Izabal</option>
              <option value="21000">Jalapa</option>
              <option value="22000">Jutiapa</option>
              <option value="17000">Petén</option>
              <option value="09000">Quetzaltenango</option>
              <option value="14000">Quiché</option>
              <option value="11000">Retalhuleu</option>
              <option value="03000">Sacatepéquez</option>
              <option value="12000">San Marcos</option>
              <option value="06000">Santa Rosa</option>
              <option value="07000">Sololá</option>
              <option value="10000">Suchitepéquez</option>
              <option value="08000">Totonicapán</option>
              <option value="19000">Zacapa</option>

            </select>
            </div>
            <div class="form-group">
              <label >Peso en libras</label>
              <input type="number" class="form-control" name="cantidad"  id="myInput"required/>
            </div>
           <center> <button type="submit" name="submit"  class="btn btn-primary">Generar cotizacion</button> </center>
          </form>
</div>
    </div>
</div>

<?php

    if(isset($_POST['submit'])){
    $origen = $_POST['origen'];
    $destino = $_POST['destino'];
    $cantidad = $_POST['cantidad'];
    
    

    $precio = 20 * intval($cantidad);
    $prec = number_format($precio); //precio formateado para imprimirlo
    
?>


<div class="jumbotron">
  <h1 class="display-4"><h1 class="textos">Resultado de cotización</h1></h1>
  <h4 class="parrafos">El precio por el envío de <?php echo $cantidad ?> libras es:<h4>
  <h3 class="textos"> Q<?php echo $prec ?>.00<h3>
  <hr class="my-4">
  <a class="btn btn-primary btn-lg" href="Enviar.php?destino=<?php echo $destino ?>" role="button">Realizar envio</a>
</div>


<?php


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