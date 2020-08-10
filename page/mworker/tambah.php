<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>TAMBAH WORKER</h2>   
            </div>
            <div class="body">
                <form method="POST">
                    <label for="">Nama Worker</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="nama" class="form-control"/>
                        </div>
                    </div>
                    <label for="">Alamat</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="alamat" class="form-control"/>
                        </div>
                    </div>
                    <label for="">No Hp</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="number" name="no" class="form-control"/>
                        </div>
                    </div>
                    <label for="">Kategori</label>
                    <div class="form-group">
                        <div class="form-line">
                            <select name="kategori" class="form-control show-tick">
                                <option value="">- Pilih -</option>
                                <option value="Mandor">Mandor</option>
                                <option value="Kuli">Kuli</option>
                            </select>
                        </div>
                    </div>
                    <label for="">Gaji</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="gaji" class="form-control"/>
                            </div>
                        </div>
                    <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</div>
<?php
    if (isset($_POST['simpan'])){
        $nama_worker = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $no = $_POST['no'];
        $kategori = $_POST['kategori'];
        $gaji = $_POST['gaji'];
        $sql = $koneksi->query("INSERT INTO worker VALUES('', '$nama_worker', '$alamat', '$no', '$kategori', '$gaji')");
        if($sql){
            ?>
            <script type="text/javascript">
                window.location.href="?page=mworker";
            </script>
            <?php
        }
    }
?>