<!-- Input -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    TAMBAH DATA CUSTOMER
                </h2>
            </div>
            <div class="body">
                <form method="POST">
                    <label for="">ID Customer</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" name="id_customer" />
                        </div>
                    </div>

                    <label for="">Nama Customer</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" name="nama_customer" />
                        </div>
                    </div>

                    <label for="">No HP</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="number" class="form-control" name="no_hp" />
                        </div>
                    </div>
                    
                    <label for="">Alamat</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" name="alamat" />
                        </div>
                    </div>

                    <label for="">Kategori</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" name="kategori" />
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
    $id_customer = $_POST['id_customer'];
    $nama_customer = $_POST['nama_customer'];
    $no_hp = $_POST['no_hp'];
    $alamat = $_POST['alamat'];
    $kategori = $_POST['kategori'];

    $sql = $koneksi->query("INSERT INTO customer VALUES ('$id_customer','$nama_customer','$no_hp','$alamat','$kategori')");

    if ($sql){
        ?>

            <script type="text/javascript">
                window.location.href="?page=customer";
            </script>
        
        <?php 

    }
}

 ?>