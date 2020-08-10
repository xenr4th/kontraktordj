<?php 

$id_detail1 = $_GET['id_detail'];

$sql = $koneksi->query("SELECT * FROM so_detail WHERE id_detail='$id_detail1'");
$tampil = $sql->fetch_assoc();

 ?>

<!-- Input -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    UBAH DATA SALES ORDER
                </h2>
            </div>
            <div class="body">
                <form method="POST" enctype="multipart/form-data">
                    <label for="">ID SO</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" name="id_so" value="<?php echo $tampil['id_so']; ?>" />
                        </div>
                    </div>
                    <label for="">Pekerjaan</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" name="pekerjaan"  value="<?php echo $tampil['pekerjaan']; ?>" />
                        </div>
                    </div>
                    <label for="">Jumlah</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="number" class="form-control" name="jumlah"  value="<?php echo $tampil['jumlah']; ?>" />
                        </div>
                    </div>
                    <label for="">Satuan</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" name="satuan"  value="<?php echo $tampil['satuan']; ?>" />
                        </div>
                    </div>
                    <label for="">Harga</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="number" class="form-control" name="harga"  value="<?php echo $tampil['harga']; ?>" />
                        </div>
                    </div>
                    <label for="">Foto</label>
                    <div class="form-group">
                        <div class="form-line">
                            <img src="images/<?php echo $tampil['foto']; ?>" width="100" height="100" alt="">
                        </div>
                    </div>
                    <label for="">Ganti Foto</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="file" class="form-control" name="foto" />
                        </div>
                    </div>
                    <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
        
<?php

if (isset($_POST['simpan'])) {
    $id_so = $_POST['id_so'];
    $pekerjaan = $_POST['pekerjaan'];
    $jumlah = $_POST['jumlah'];
    $satuan = $_POST['satuan'];
    $harga = $_POST['harga'];
    $foto = $_FILES['foto']['name'];
    $lokasi = $_FILES['foto']['tmp_name'];
    

    if (!empty($lokasi)) {

        $upload = move_uploaded_file($lokasi, "images/".$foto);

        $sql1 = $koneksi->query("UPDATE so_detail SET id_so='$id_so', pekerjaan='$pekerjaan', jumlah='$jumlah', satuan='$satuan', foto='$foto', harga='$harga' WHERE id_detail='$id_detail1'");

        if ($sql1){
            ?>

            <script type="text/javascript">
                alert("Data Berhasil Diubah");
                window.location.href="?page=sales_order";
            </script>
        
        <?php 

            }

        }else{

            $sql1 = $koneksi->query("UPDATE so_detail SET id_so='$id_so', pekerjaan='$pekerjaan', jumlah='$jumlah', satuan='$satuan', harga='$harga' WHERE id_detail='$id_detail1'");
    
        }

    }

 ?>