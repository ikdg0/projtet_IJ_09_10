<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <title>IJ_Motors</title>
    <script>
      // On page load or when changing themes, best to add inline in `head` to avoid FOUC
      if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
          document.documentElement.classList.add('dark');
      } else {
          document.documentElement.classList.remove('dark')
      }
  </script>
</head>
<body class="light">

<header class="light">
  <!-- NAVBAR -->

  <nav class="navbar bg-body-tertiary">

    <div class="container-fluid">
      <a class="navbar-brand"><img src="./img/IJ.png" style="width: 80px;" alt=""></a>
      <form class="d-flex" role="search">
        <input id="searchInput" class="form-control me-2" type="text" placeholder="Search" aria-label="Search">
        <div class="btn-toggle"> Dark mode</div>

      </form>
    </div>
  </nav>
<!-- PAGE D'ACCEUIL -->

<ul class="nav bg-body-tertiary justify-content-center">
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="index.php">Acceuil</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="cars.php">Cars</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="piece.php">Piece</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#contact">About us</a>
    </li>
  </ul>

  </header>