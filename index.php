<?php
  include 'db_function.php';
  $tempat = getAllDataTempat();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Pemesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="assets\css\style.css">
  </head>
  <body>
    <?php include 'navbar.php'; ?>
    <br><br>
    <div class="container custom-container shadow p-3 mb-5 rounded">
      <div class="row mb-3">
        <h2 class="text-center">Daftar Wisata</h2>
      </div>
      <div class="row row-cols-1 row-cols-md-3 g-4">
      <?php foreach ($tempat as $tmp) : ?>
        <div class="col">
          <div class="card h-100">
            <img src="<?= $tmp['foto'] ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?= $tmp['nama_tempat'] ?></h5>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Rp. <?= number_format($tmp['harga']) ?></li>
            </ul>
            <div class="card-body text-center">
              <a href="pesan_tiket.php?id_tempat=<?= $tmp['id_tempat'] ?>" class="btn btn-primary">Pesan tiket</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
      </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
