<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="icon" type="image/x-icon" href="assets/icons/logo-petanikita_64.png">
  <title>
    <?= $title ?> &nbsp; | &nbsp; PetaniKita
  </title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>">

  <!-- CSS customs -->
  <link rel="stylesheet" href="<?= base_url('assets/css/styles.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/' . strtolower($title) . '.css') ?>">


  <!-- Font Google : Signika -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Signika:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-expand-md pb-3 pb-md-0">
    <div class="container container-fluid align-items-center">
      <a class="navbar-brand d-inline-flex align-items-baseline" href="/">
        <img class="logo-brand" src="assets/icons/logo-petanikita_128.png" alt="Logo PetaniKita">
        <p class="m-0 p-0">PetaniKita</p>
      </a>
      <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#mainnav" aria-controls="mainnav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="mainnav">
        <ul class="navbar-nav ms-auto mb-0">
          <!-- <li class="nav-item">
                        <a class="nav-link" href="/">Beranda</a>
                    </li> -->

          <li class="nav-item">
            <a class="nav-link <?= ($title === "Pasar") ? 'active-link' : '' ?>" href="/pasar">
              <img src="<?= base_url('assets/icons/logo-pasar.png') ?>" alt="">
              <p class="nav-name">Pasar</p>
            </a>
          </li>
          <li class="nav-item">
              <a class="nav-link <?= ($title === "Komunitas") ? 'active-link' : '' ?>" href="/komunitas">
                  <img src="<?= base_url('assets/icons/logo-komunitas.png') ?>" alt="">
                  <p class="nav-name">Komunitas</p>
              </a>
          </li>
        </ul>
        <form class="row g-2 mt-4 mt-md-0 ms-md-2">
          <div class="col-12 col-md-6 m-0 d-inline-flex align-self-center">
            <button class="btn-masuk w-100" type="button" onclick="location.href='/login'">Masuk</button>
          </div>
          <div class="col-12 col-md-6 mt-2 m-md-0 d-inline-flex align-self-center">
            <button class="btn-daftar w-100" type="button" onclick="location.href='/register'">Daftar</button>
          </div>
        </form>
      </div>
    </div>
  </nav>


  <?= $this->renderSection('content'); ?>



  <!-- Popper JS -->
  <script src="<?= base_url('assets/js/popper.js') ?>"></script>

  <!-- Bootstrap JS -->
  <script src="<?= base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>

  <!-- Ion Icons -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

  <!-- GSAP -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.0/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.0/ScrollTrigger.min.js"></script>

  <!-- Customs JS -->
  <script src="<?= base_url('assets/js/' . strtolower($title) . '.js') ?>"></script>
</body>

</html>