<?php
$moneda = isset($_GET['moneda']) && $_GET['moneda'] === 'peso' ? 'peso' : 'dolar';
$cotizacion = 1500;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>1er Desempeño</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
      <a href="https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/" target="_blank"
        class="logo d-flex align-items-center" title="puedes descargar la template original desde aqui">
        <img src="assets/img/logo.png" alt="2025">
        <span class="d-none d-lg-block">NiceAdmin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        <li class="nav-item dropdown pe-3">
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/<?php echo $moneda === 'peso' ? 'ar.png' : 'en.jpg'; ?>" alt="lang" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $moneda === 'peso' ? 'PESO ARGENTINO' : 'DÓLARES'; ?></span>
          </a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li>
              <a class="dropdown-item d-flex align-items-center <?php echo $moneda === 'dolar' ? 'active' : ''; ?>" href="listado.php?moneda=dolar">
                <i class="bi bi-currency-dollar"></i>
                <span>Dólar Estadounidense</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center <?php echo $moneda === 'peso' ? 'active' : ''; ?>" href="listado.php?moneda=peso">
                <i class="bi bi-currency-dollar"></i>
                <span>Peso Argentino</span>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav><!-- End Currency -->
  </header><!-- End Header -->
