<?php
  include 'db_function.php';
  $tiket = getAllDataTiket();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Tiket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="assets\css\style.css">
  </head>
  <body>
    <?php include 'navbar.php'; ?>
    <br><br>
    <div class="container custom-container shadow p-3 mb-5 rounded">
      <div class="row mb-3">
        <h2 class="text-center">Daftar Tiket</h2>
      </div>
      <table class="table align-middle">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Nama Pemesan</th>
            <th scope="col">Tempat Wisata</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($tiket as $iter) : ?>
            <tr>
              <th scope="row"><?= $iter['id_tiket'] ?></th>
              <td><?= $iter['nama'] ?></td>
              <td><?= $iter['nama_tempat'] ?></td>
              <td><a href="tiket.php?id=<?= $iter['id_tiket'] ?>" class="btn btn-primary btn-sm" style="width:100%">Lihat</a></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
