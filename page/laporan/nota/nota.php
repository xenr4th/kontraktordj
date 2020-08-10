<!-- #END# Exportable Table -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <style>
                    .head{
                        border-bottom: 2px solid black;
                    }
                </style>
                <h2>Nota</h2>
                <div class="head text-center my-3">
                    <h3>Kontraktor DJ Teknik</h3>
                    <p>Jl. Simpang Lima No. 100 BSB City, telp (021 100 0001) Semarang</p>
                </div>
                <div class="amid mb-5">
                    <div class="mid">
                        <div class="kpd mt-3">
                            <p>
                                <?php
                                $tanggal= mktime(date("m"),date("d"),date("Y"));
                                echo "Tanggal : <b>".date("d-M-Y", $tanggal)."</b> ";
                                date_default_timezone_set('Asia/Jakarta');
                                $jam=date("H:i:s");
                                echo "| Pukul : <b>". $jam." "."</b>";
                                $a = date ("H");
                                if (($a>=6) && ($a<=11)){
                                echo "<b>, Selamat Pagi !!</b>";
                                }
                                else if(($a>11) && ($a<=15))
                                {
                                echo ", Selamat Pagi !!";}
                                else if (($a>15) && ($a<=18)){
                                echo ", Selamat Siang !!";}
                                else { echo ", <b> Selamat Malam </b>";}
                                ?>
                            </p>
                            <br>
                            <p class="mt-2 ml-2">No : <?php echo $data4['no']; ?></p>
                            <p class="ml-2">Lamp : <?php echo $data4['alamat']; ?></p>
                            <p class="ml-2">Hal : <?php echo $data4['hal']; ?></p><br>
                            <p> Dengan hormat,</p><br>
                            <p> Sehubungan dengan kurangnya persedian barang dikantor, kami mengharapkan saudara mengirimkan barang-barang sebagai berikut:</p>
                        </div>
                    </div>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Kode Bahan</th>
                                    <th>Nama Bahan</th>
                                    <th>Kategori</th>
                                    <th>Satuan</th>
                                    <th>Harga Jual</th>
                                    <th>Stok</th>
                                </tr>
                            </thead>
                            <?php 
                                $no=1;
                                $sql = $koneksi->query("SELECT * FROM stok_bahan");
                                while($data = $sql->fetch_assoc()){
                            ?>
                            <tbody>
                                <tr> 
                                    <td><?php echo $data['kode_bahan']; ?></td>
                                    <td><?php echo $data['nama_bahan']; ?></td>
                                    <td><?php echo $data['kategori']; ?></td>
                                    <td><?php echo $data['satuan']; ?></td>
                                    <td>Rp. <?php echo $data['harga_jual']; ?></td>
                                    <td><?php echo $data['stok']; ?></td>
                                </tr>
                            </tbody>
                            <?php } ?>
                        </table>
                        <p > Barang-barang yang kami pesan diatas harap tiba digudang kami paling lambat 1 minggu. Dan mengenai pembayaran akan kami lakukan setelah barang sampai ditempat.</p>
                        <br>
                        <p> Atas perhatian saudara kami ucapkan terima kasih</p>
                        <br>
                        <div class="bot">
                            <p>Semarang, <?php echo date('d F Y', strtotime($data1['tanggal_pesan'])); ?></p>
                            <p class="ml-5">Hormat Kami</p>
                            <br>
                            <br>
                            <p class="ml-4">(Manager PT. Bandja)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<a href="page/laporan/nota/cetak.php" target="blank" class ="btn btn-primary"><i class="material-icons">print</i><span>PRINT</span></a>




