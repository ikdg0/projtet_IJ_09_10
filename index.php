<?php require ('./components/header.php');?>

  
<!-- CAROUSEL ACCEUIL -->
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" style="z-index: -1;">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/cars/automobile-5330343_1280.jpg" class="d-block w-100" alt="De belles voitures">
      </div>
      <div class="carousel-item">
        <img src="img/cars/mclaren-4223024_1280.jpg" class="d-block w-100" alt="Des prix incroyables">
      </div>
      <div class="carousel-item">
        <img src="img/cars/lamborghini-2137815_1280.jpg" class="d-block w-100" alt="Votre prochain bolide">
      </div>
      <div class="carousel-item">
        <img src="img/piece/p7.jpg" class="d-block w-100" alt="Votre prochain bolide">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
<!-- FIN ACCEUIL -->
<h2 style="text-align: center;"><strong>Products</strong> </h2><br><Br>

<?php require ('prod.php');?>

<?php require ('./components/footer.php');?>