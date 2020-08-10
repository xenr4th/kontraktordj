<?php 
    
    $ipp = $_GET['id_pekerjaan'];
    $ipq = $koneksi->query("SELECT * FROM so_bahan WHERE id_pekerjaan = $ipp");
    $ipl = $ipq->fetch_assoc();
    $ipqp = $koneksi->query("SELECT * FROM so_pekerjaan WHERE id_pekerjaan = $ipp");
    $iplp = $ipqp->fetch_assoc();
    $isp = $_GET['id_so'];

 ?>
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
                <img src="images/logo.png" alt="" style="float: left; width: 150px;">
                <div class="head text-center">
                    <h3>Kontraktor DJ Teknik</h3>
                    <p><b>Jl. Simpang Lima No. 100 BSB City</b></p>
                    <p><b>Telp (021 100 0001) Semarang</b></p>
                </div>
                <div class="amid">
                    <div class="mid">
                        <div class="kpd mt-3">
                            <br>
                            <p class="mt-2 ml-2">No : <?php echo $ipl['id_pekerjaan']; ?></p>
                            <p class="ml-2">Lamp : -</p>
                            <p class="ml-2">Hal : Pengiriman Barang</p><br>
                        </div>
                    </div>
                </div>
                <div class="body">
                    <p> Barang-barang yang diperlukan dalam pembuatan <b><?php echo $iplp['pekerjaan'] ?></b> Anda antara lain :</p>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Bahan</th>
                                    <th>Nama Bahan</th>
                                    <th>Jumlah</th>
                                    <th>Satuan</th>
                                    <th>Harga</th>
                                </tr>
                            </thead>
                            <?php
                                $pkp = $_GET['id_pekerjaan'];
                                $no=1;
                                $sql = $koneksi->query("SELECT * FROM so_bahan WHERE id_pekerjaan='$pkp'");
                                while($data = $sql->fetch_assoc()){
                            ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $no++; ?></td> 
                                    <td><?php echo $data['kode_bahan']; ?></td>
                                    <td><?php echo $data['nama_bahan']; ?></td>
                                    <td><?php echo $data['jumlah_sb']; ?></td>
                                    <td><?php echo $data['satuan']; ?></td>
                                    <td>Rp. <?php echo number_format($data['harga']); ?></td>
                                </tr>
                            </tbody>
                            <?php } ?>
                        </table>
                        <p > Barang-barang yang Anda pesan diatas akan kami kirim paling lambat 1 minggu dari tanggal pesan Anda. Dan mengenai pembayaran dapat dilakukan saat barang sampai di tempat</p>
                        <br>
                        <p> Atas perhatian saudara kami ucapkan terima kasih</p>
                        <br>
                        <div class="bot">
                            <p>Semarang, <?php echo date('d M Y'); ?></p>
                            <p class="ml-5">Hormat Kami</p>
                            <br>
                            <br>
                            <p class="ml-4">(Manager PT. DJTECHNIK)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<a href="page/laporan/lapSo/cnote.php" target="blank" class ="btn btn-primary">Cetak</a>




