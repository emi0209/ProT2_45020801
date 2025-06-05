<!-- barra navegacion -->
<nav class="navbar navbar-expand-lg bg-body-red">
  <div class="container-fluid">
    <!-- abre el <div class="navbar-header"> En esta seccion ira el boton
      con el logo de la empresa -->

    <a class="navbar-brand" href='principal'>
      <img src="assets\img\sabores del mundo logo.jpg" alt="Logo pagina"  width="120" height="120">
    </a> <!--aqui poner logo de marca para hacer boton al menu principal-->


    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

      <li class="nav-item">
          <a class="nav-link" href="principal">Principal</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="quienes_somos">Quiénes somos</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="acerca_de">Acerca de</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="registrarse">Registrarse</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="iniciar_sesion">Iniciar Sesión</a>
        </li>

        

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Recetas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Asia</a></li>
            <li><a class="dropdown-item" href="#">Europa</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Africa</a></li>
          </ul>
        </li>


      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="🔍" aria-label="Buscar"/>
        <button class="custom-buscar" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>