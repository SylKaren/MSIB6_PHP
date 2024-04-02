<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Membaca data yang dikirimkan dari form
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $kuliah = $_POST["kuliah"];
    $matkul = $_POST["matkul"];
    $nilai = $_POST["nilai"];
    
    // Sertakan file classnya
    require_once 'mahasiswa.php';
    
    // Buat objek mahasiswa dengan data yang diterima dari form
    $ns1 = new mahasiswa($nim, $nama, $kuliah, $matkul, $nilai);
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h2 align="center">Daftar Nilai mahasiswa</h2>
        <hr>
        <a href="form_objMahasiswa.php" class="btn btn-primary" style="margin-bottom: 10px;"> <- Kembali</a>
      <table class="table table-dark table-striped" width="50%" align="center">
          <thead>
              <tr>
                  <th>NIM</th>
                  <th>Nama</th>
                  <th>Kuliah</th>
                  <th>Mata Kuliah</th>
                  <th>Nilai</th>
                  <th>Grade</th>
                  <th>Predikat</th>
                  <th>Status</th>
              </tr>
          </thead>
          <tbody>
          <?php
                echo '<tr>';
                echo '<td>'. $ns1->nim .'</td>';
                echo '<td>'. $ns1->nama.'</td>';
                echo '<td>'. $ns1->kuliah .'</td>';
                echo '<td>'. $ns1->matkul .'</td>';
                echo '<td>'. $ns1->nilai .'</td>';
                echo '<td>'. $ns1->getGrade() .'</td>';
                echo '<td>'. $ns1->getPredikat() .'</td>';
                echo '<td>'. $ns1->getStatus() .'</td>';
                echo '</tr>';
          ?>    
          </tbody>
      </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

