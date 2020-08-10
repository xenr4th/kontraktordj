<!-- Input -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    TAMBAH DATA SALES ORDER
                </h2>
            </div>
            <div class="body">
                <form method="POST" enctype="multipart/form-data">
                    <label for="">ID SO</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" name="id_so" />
                        </div>
                    </div>

                    <label for="">Pekerjaan</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" name="pekerjaan" />
                        </div>
                    </div>

                    <label for="">Jumlah</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="number" class="form-control" name="jumlah" />
                        </div>
                    </div>
                    
                    <label for="">Satuan</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" name="satuan" />
                        </div>
                    </div>

                    <label for="">Harga</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="number" class="form-control" name="harga" />
                        </div>
                    </div>

                    <label for="">Foto</label>
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
    $upload = move_uploaded_file($lokasi, "images/".$foto);

    if ($upload) {
    
    $sql = $koneksi->query("INSERT INTO so_detail VALUES ('','$id_so','$pekerjaan','$jumlah','$satuan','$foto','$harga')");

    if ($sql){
        ?>

            <script type="text/javascript">
                alert("Data Berhasil Ditambahkan");
                window.location.href="?page=sales_order";
            </script>
        
        <?php 

        }
    }

}

?>