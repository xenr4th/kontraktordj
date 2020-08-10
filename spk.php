<?php
  include('konek.php');
  session_start();

  if(isset($_GET['ni'])){
    $ni   = $_GET['ni'];
    $query4  = mysqli_query($db_link,'select * from customer where nama_customer = "'.$ni.'"');
    $query1  = mysqli_query($db_link,'SELECT sales_order.id_so, sales_order.nama_customer, sales_order.tanggal_pesan, sales_order.pekerjaan, worker.nama_worker, worker.alamat, worker.no_hp, worker.kategori, worker.gaji from worker INNER JOIN sales_order ON worker.pekerjaan = sales_order.pekerjaan WHERE nama_customer = "'.$ni.'"');
    $data1 = mysqli_fetch_array($query1);
    $data4 = mysqli_fetch_array($query4);
  }

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Daftar User</title>
    <style>
      .head{
        border-bottom: 2px solid black;
      }
    .amid .mid .kpd{
      width: 250px;
      border: 2px solid black;
      position: absolute;
      right: 20px;
    }
    .bot{
      position: absolute;
      right: 100px;
    }
    .amid{
      margin-bottom: 100px;
    }

    .tbb{
      margin-top: 150px;
      margin-bottom: 50px;
    }

    @media print{
      .none{
        display: none;
      }
    }
    </style>
  </head>
  <body>
    <button onclick="goBack()" type="button" class="none btn btn-primary ml-2 mt-2">Back</button>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
    <button onclick="myFuntion()" type="button" class="none btn btn-primary ml-2 mt-2">Cetak</button>
      <script>
      function myFuntion() {
        window.print();
      }
      </script>
      <div class="head text-center my-3">
        <h3>PT. Bandja</h3>
        <p>Jl. Simpang Lima No. 100 BSB City, telp (021 100 0001) Semarang</p>
      </div>
      <div class="amid mb-5">
        <div class="mid">
          <h3 class="text-center">Surat Pengantar Kerja</h3>
          <div class="kpd mt-3">
            <p class="mt-2 ml-2">Kepada Yth : <?php echo $data4['nama_customer']; ?></p>
            <p class="ml-2">Alamat : <?php echo $data4['alamat']; ?></p>
          </div>
        </div>
        <br>
        <p class="ml-3">No. SO : <?php echo $data1['id_so']; ?></p>
        <p class="ml-3">Pekerjaan : <?php echo $data1['pekerjaan']; ?></p><br>
        <p class="ml-3">Dengan Hormat,</p><br>
        <p class="ml-3">Sehubungan dengan surat perintah kerja ini perusahaan menugaskan kepada karyawan dibawah ini untuk melaksanakan pekerjaan yang telah ditugaskan oleh perusahaan.

      </div>
      <form action="stam.php" method="POST">
        <div class="tbb row justify-content-center">
           <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Worker</th>
                                <th>Alamat</th>
                                <th>No. HP</th>
                                <th>Kategori</th>
                            </tr>
                        </thead>
            <?php 
               $no=1;
                    $sql = $koneksi->query("SELECT * FROM worker");
                    while($data = $sql->fetch_assoc()){
            ?>
            <tbody>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['nama_worker']; ?></td>
                <td><?php echo $data['alamat']; ?></td>
                <td><?php echo $data['no_hp']; ?></td>
                <td><?php echo $data['kategori']; ?></td>
              </tr>
            </tbody>
            <?php } ?>
          </table>
        </div>
      </form>

      <div class="amid mb-5">
        <p class="ml-3">Demikian surat perintah kerja ini dibuat, agar dapat dilaksanakan sebaik-baiknya dengan penuh tanggung jawab.</p>
      </div>

      <div class="bot">
        <p>Semarang, <?php echo date('d F Y', strtotime($data1['tanggal_pesan'])); ?></p>
        <p class="ml-5">Hormat Kami</p>
        <br><br>
        <p class="ml-4">(Manager PT. Bandja)</p>
      </div>