<!-- Input -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    TAMBAH DATA SUPPLIER
                </h2>
            </div>
            <div class="body">
                <form method="POST">
                    <label for="">ID Supplier</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" name="id_supplier" />
                        </div>
                    </div>

                    <label for="">Nama Supplier</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" name="nama_supplier" />
                        </div>
                    </div>

                    <label for="">Alamat</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" name="alm" />
                        </div>
                    </div>
                    
                    <label for="">Telepon</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" name="tlp" />
                        </div>
                    </div>

                    <label for="">Bank</label>
                    <div class="form-group">
                        <div class="form-line">
                                    <select name="bk" class="form-control show-tick">
                                        <option value="">-- Pilih Bank --</option>
                                        <option value="BNI">BNI</option>
                                        <option value="BRI">BRI</option>
                                        <option value="BCA">BCA</option>
                                        <option value="MANDIRI">MANDIRI</option>
                                        <option value="DANAMON">DANAMON</option>
                                    </select>
                        </div>
                    </div>

                    <label for="">Rekening</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" name="rk" />
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
    $id_supplier = $_POST['id_supplier'];
    $nama_supplier = $_POST['nama_supplier'];
    $alm = $_POST['alm'];
    $tlp = $_POST['tlp'];
    $bk = $_POST['bk'];
    $rk = $_POST['rk'];

    $sql = $koneksi->query("INSERT INTO supplier VALUES ('$id_supplier','$nama_supplier','$alm','$tlp','$bk','$rk')");

    if ($sql){
        ?>

            <script type="text/javascript">
                alert("Data Berhasil Ditambahkan");
                window.location.href="?page=supplier";
            </script>
        
        <?php 

    }
}

 ?>