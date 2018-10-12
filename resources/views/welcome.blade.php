<html lang="es">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Doors</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <style type="text/css">
    body {
          background-image: url('{{asset('img/wood2.jpg')}}');
          background-color: coral;
          background-size: cover;
         }
      .section1
      {
        background-image: url('{{asset('img/wood1.jpg')}}');
        background-color: coral;
        background-size: cover;
      }

      .section2
      {
        background-image: url('{{asset('img/wood1.jpg')}}');
        background-color: coral;
        background-size: cover;
      }
    </style>

 <body data-spy="scroll" data-target=".navbar" data-offset="50">
  
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Doors</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#QuienesSomos">Quienes Somos <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#NuestrosTrabajos">Nuestros Trabajos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Contactanos">Contáctanos</a>
            </li>
          </ul>
        </div>
    </nav>

    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center section1">
      <div class="row no-gutters">
        
        <div class="col-12 col-sm-6 col-md-8">
          <h1 class="display-4 font-weight-normal">Quienes Somos</h1>
        <p class="lead font-weight-normal">Aqui se debe poner un texto que explique la vision, el que hacemos ademas de lo que podemos hacer.</p>


        </div>

        <div class="col-6 col-md-4">
        <img src="{{asset('img/wood3.jpg')}}" class="card-img">  
        </div>
      
      </div>
    </div>

    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center">
      <div class="row row justify-content-between">
        
        <div class="col-4 section2">
          <h1 class="display-4 font-weight-normal">Nuestros Trabajos</h1>
        <p class="lead font-weight-normal">Aqui se debe poner todo lo refrente acera de como lo hacemos e incitamos al cliente de que nos elija en lugar de la competencia</p>
        </div>
        
         <div class="col-md-6">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="{{asset('img/wood5.jpg')}}" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{asset('img/wood6.jpg')}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{asset('img/screwdriver.jpg')}}" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
          </div>
        </div>

      </div>
    </div>

    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center section1">
      <div class="row justify-content-between">
         <div class="col-4 col-sm-6 col-md-8">
            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3736489.7218514383!2d90.21589792292741!3d23.857125486636733!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1506502314230" width="100%" height="315" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>

          <div class="col-6 col-md-4">
           <h4><strong>Contáctanos</strong></h4>
            <form>
              <div class="form-group">
                <input type="text" class="form-control" name="" value="" placeholder="Nombre">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="" value="" placeholder="Correo Electronico">
              </div>
              <div class="form-group">
                <input type="tel" class="form-control" name="" value="" placeholder="Telefono">
              </div>
              <div class="form-group">
                <textarea class="form-control" name="" rows="3" placeholder="Mensaje"></textarea>
              </div>
              <button class="btn btn-default" type="submit" name="button">
                Enviar
              </button>
            </form>
          </div>
      </div>
    </div>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  </body> 
</html>
</html>