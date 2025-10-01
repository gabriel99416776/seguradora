<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <title>Formulário Multistep</title>
  <style>
    .step {
      display: none;
    }

    .step.active {
      display: block;
    }

    button {
      margin-top: 10px;
    }
  </style>
</head>

<body>
  <nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="./logo.png" alt=""></a>

      <!-- Botão só aparece em telas menores -->
      <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Menu normal em telas grandes -->
      <div class="d-none d-lg-flex align-items-center flex-grow-1">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 flex-row">
          <li class="nav-item"><a class="nav-link active px-3" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link px-3" href="#">Link</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle px-3" href="#" role="button" data-bs-toggle="dropdown">Dropdown</a>

          </li>
        </ul>
      </div>


    </div>

    <!-- Offcanvas só aparece em telas menores -->
    <div class="offcanvas offcanvas-end d-lg-none" tabindex="-1" id="offcanvasNavbar">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title">Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Dropdown</a>

          </li>
        </ul>

      </div>
    </div>
    </div>
  </nav>

  <section>

    <div id="carouselExampleCaptions" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>

      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="carousel2.png" class="d-block w-100" alt="img1.jpg">
          <div class="carousel-caption d-none d-md-block">
            <a href="">Conheça Nossa Seguradora</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="carousel1.png" class="d-block w-100" alt="img1.jpg">
          <div class="carousel-caption d-none d-md-block">
            <a href="">Visite Nossos Parceiros</a>
          </div>
        </div>

      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="container mt-5 cards">
      <hr class="linha">
      <h1>Faça Seu Orçamento Agora.</h1>
      <span><strong>Orçamentos</strong> marcados com <i class="bi bi-clock-history"></i> terão respostas <strong>imediatas</strong> </span>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card">
            <img src="./imagem3.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Seguradora <i class="bi bi-clock-history" style="color: #155f1fff;"></i></h5>
              <p class="card-text">Faça seu orçamento imediato.</p>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Launch demo modal
              </button>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card">
            <img src="./imagem2.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Rastreamento Carro/Moto </h5>
              <p class="card-text">Faça seu orçamento com nossa equipe via WhatsApp.</p>
              <a href="#" class="btn btn-primary">Fazer Orçamento</a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card">
            <img src="./imagem1.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Reboque 24hrs</h5>
              <p class="card-text">Faça seu resgate com nossos <strong>parceiros</strong>.</p>
              <a href="#" class="btn btn-primary">Entrar Em Contato</a>
            </div>
          </div>
        </div>
      </div>


      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
    </div>


  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  <script>
    let currentStep = 0;
    const steps = document.querySelectorAll(".step");

    function showStep(n) {
      steps.forEach((step, i) => step.classList.toggle("active", i === n));
    }

    function nextStep() {
      if (currentStep < steps.length - 1) {
        currentStep++;
        showStep(currentStep);
      }
    }

    function prevStep() {
      if (currentStep > 0) {
        currentStep--;
        showStep(currentStep);
      }
    }
  </script>

</body>

</html>