<?php 
require 'koneksi.php';
$karyawan = query ("SELECT * FROM karyawan");
?>

<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin&family=Meow+Script&display=swap" rel="stylesheet">
    <title>Data Karyawan</title>
  </head>
  <body>
  <div class="">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="">
        <h1>Data Karyawan</h1>
      
      </div>
    </nav>
  </div>
  
    <div class="container">
      <table class="">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col">Gender</th>
            <th scope="col">Position</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

          <?php foreach ($karyawan as $row) : ?>
            <tr>
              <td><?= $row["id"]+1; ?></td>
              <td><?= $row['name']; ?></td>
              <td><?= $row['email']; ?></td>
              <td><?= $row['address']; ?></td>
              <td><?= $row['gender']; ?></td>
              <td><?= $row['position']; ?></td>
              <td><?= $row['status']; ?></td>
              <td>
                <a href="hapus.php?id=<?= $row['id']; ?>" onclick="return confirm('beneran neh???');">
                  <button type="button" class="button1 blue">Delete</button>
                </a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

<div style="text-align:center">
        <a href="tambah.php">
          <button class="button1 blue" type="button">Tambah Data</button>    
        </a>
</div>
   


  </body>
</html>

