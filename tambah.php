<?php 
require 'koneksi.php';

if (isset ($_POST["submit"])) {
    if (tambah($_POST) > 0) {
        echo "
        <script>
            alert('Berhasil!');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Gagal!');
            document.location.href = 'index.php';
        </script>
        ";
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin&family=Meow+Script&display=swap" rel="stylesheet">
    <title>Tambah Data</title>
    
  </head>
  <body>
  <div class="formdata">        
    <div class="">
    
        <div class="">
            <h1>Tambah Data Karyawan</h1>
        </div>
    
    </div>

    <div class="container">
        <form action="" method="post">
            <div class="">
                <label for="name" class="font">Name</label>
                <div class="">
                <input type="text" class="form-control" id="name" name="name" Required>
                </div>
            </div>
            <div class="">
                <label for="email" class="font">Email</label>
                <div class="col-sm-6">
                <input type="email" class="form-control" id="email" name="email" Required>
                </div>
            </div>
            <div class="">
                <label for="address" class="font">Address</label>
                <div class="col-sm-6">
                <input type="text" class="" id="address" name="address">
                </div>
            </div>
            <div class="">
                <label for="gender" class="font">Gender</label>
                <div class="col-sm-6">
            
                <select name="gender" id="gender">
                    <option selected value="">-</option>
                    <option value="Male" >Male</option>
                    <option value="Female">Female</option>
                </select>

                </div>
            </div>
            <div class="">
                <label for="position" class="font">Position</label>
                <div class="col-sm-6">
                <input type="text" class="" id="position" name="position" Required>
                </div>
            </div>
            <div class="">
                <label for="status" class="font">Status</label>
                <div class="col-sm-6">
                <select name="status" id="status">
                    <option selected value="">-</option>
                    <option value="Fulltime" >Fulltime</option>
                    <option value="Parttime">Parttime</option>
                </select>

                </div>
            </div>
            <br>
            <div style="text-align: center;" class="">
                <button type="submit" class="button1 blue" name="submit">Submit</button>
            
            </div>
        </form>
    </div>
</div>

 
  </body>
</html>

