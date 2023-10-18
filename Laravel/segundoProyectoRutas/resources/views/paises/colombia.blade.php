<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>Colombia</title>
</head>

<style>

    .contenedor{
        background-image:  url('{{ asset('img/medellin.jpg') }}');                
        background: cover;
    }

    .formulario{
        width: 100%;
        display: flex;
        justify-content: center;
    }

    .formulario .cuerpoFomulario{
        width: 20%;
        text-align: center;
        background-color: rgb(255, 255, 146);    
        padding: 30px;
        margin: 50px 0px;
        border-radius:10%;
    }

    .cuerpoFomulario .btn{
        background-color: black;
        font-size: 20px;
        color: white;
        border:none;
    }

    .cuerpoFomulario h2{
        font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        font-weight: bold;
    }

    .contenedorCartas{
        padding: 80px;
        background-color: rgb(236, 254, 255);
    }

</style>

<body>
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <i class="bi bi-flag-fill" style="color: rgb(0, 0, 0)"></i>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">        
              <li class="nav-item">
                <a class="nav-link" href="#">Cultura</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Lugares Turisticos</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Comida Tipica
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Bandeja Paisa</a></li>
                  <li><a class="dropdown-item" href="#">Lechona Tolimense</a></li>                  
                  <li><a class="dropdown-item" href="#">Empanadas</a></li>
                </ul>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
              <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
          </div>
        </div>
      </nav>
    
    <div class="contenedor">
      <div class="formulario">
        <form class="cuerpoFomulario" >
            <h2>Viaja a Colombia</h2>
            <br>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Ingresa tu nombre de usuario:</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">            
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Ingresa tu correo electronico:</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Ingresa tu contraseña:</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>  
            <button type="submit" class="btn btn-primary">ENVIAR</button>
          </form>
      </div>

      <div class="contenedorCartas">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
              <div class="card h-100">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Lugares Turisticos</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Cultura</h5>
                  <p class="card-text">La cultura de Colombia es el resultado de la mezcla de europeos o blancos, en especial aquellos llegados de España, los pueblos indígenas nativos y los africanos traídos por los blancos. Muchos aspectos de la cultura colombiana se originan en el siglo xvi con la llegada de los españoles y su interacción con las civilizaciones nativas, algunos como los Muiscas del centro y los Taironas al norte.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Comida Tipica</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>

      

      <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <i class="bi bi-flag-fill" style="color: rgb(0, 0, 0)">      Colombia</i>
          </a>
        </div>
      </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>