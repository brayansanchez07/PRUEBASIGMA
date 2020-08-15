<!DOCTYPE html>
<html lang="es">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <script src="js/jquery-3.5.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
  <script src="js/importar.js"></script>
  <link rel="stylesheet" href="css/estilos.css">
  
</head>
<body>
  <div class="container col-8">

    <header>
      <img src="img/sigma-logo.png" class="mx-auto d-block mt-5">
      <div class="container text-center mt-4" >
        <h3 class=" font-weight-bold">Prueba de desarrollo Sigma</h3>
      </div>
      <div class="row mt-4 justify-content-center text-center">
        <p class="col-10 text-titulo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto quaerat consequuntur nesciunt dolore vero temporibus possimus, voluptatum quis adipisci, nobis dolorem fugit corrupti et alias inventore dolores vitae eligendi optio.</p>
      </div>
    </header>
    
    <section class="row mt-4">
      <div class="col- col-sm-12 col-md-6 col-lg-6 col-xl-6">
        <img src="img/sigma-image.png" class="img-fluid">
      </div>
      <div class="col- col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
        <form method="POST" action="registro.php" class="form-datos">
          <div class="form-group">       
            <label>Departamento*</label>
            <select id="state" class="form-control font-weight-bold" name="state" required>
            <option value="" ></option>
            </select>
          </div>
          <div class="form-group">
            <label>Ciudad*</label>
            <select id="city" class="form-control font-weight-bold" name="city" required>
            <option value="" ></option>
            </select>
          </div> 
          <div class="form-group">
            <label>Nombre*</label>
            <input type="text" class="form-control font-weight-bold" name="name" placeholder="Nombre..." maxlength="50" required>
          </div>
          <div class="form-group">
            <label>Email*</label>
            <input type="email" class="form-control font-weight-bold" name="email" placeholder="Correo..." maxlength="30" minlegth="5" required>

            <div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">“Tu información ha sido recibida satisfactoriamente”</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center text-sm">
        <button type="submit" id="btn-enviar"  class="btn btn-light mt-3 px-5 py-3" data-toggle="modal" data-target="#miModal">
              ENVIAR
              </button>
            </div>
      </form>

      </div>
    </section>

    <footer>
      <br>
      <br>
    </footer>

  </div>
</body>
</html>