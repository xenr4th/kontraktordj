<!-- #END# Exportable Table -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                    <h2 class="text-center">
                        LAPORAN SALES ORDER 
                    </h2>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover dataTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Customer</th>
                                    <th>Pekerjaan</th>
                                    <th>jumlah</th>
                                    <th>Satuan</th>
                                    <th>Foto</th>
                                    <th>Harga</th>
                                    <th>Tanggal So</th>
                                    <th>Cetak</th>
                                </tr>
                            </thead>
                            <?php 
                                $no=1;
                                $sql = $koneksi->query("SELECT sales_order.id_so, sales_order.nama_customer, sales_order.tanggal_so, so_pekerjaan.pekerjaan, so_pekerjaan.id_pekerjaan, so_pekerjaan.jumlah, so_pekerjaan.satuan, so_pekerjaan.foto, so_pekerjaan.harga FROM sales_order INNER JOIN so_pekerjaan ON sales_order.id_so=so_pekerjaan.id_so");
                                while($data = $sql->fetch_assoc()){
                            ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $data['nama_customer']; ?></td>
                                    <td><?php echo $data['pekerjaan']; ?></td>
                                    <td><?php echo $data['jumlah']; ?></td>
                                    <td><?php echo $data['satuan']; ?></td>
                                    <td><img src="images/<?php echo $data['foto']; ?>" width="50" height="50" alt=""></td>
                                    <td>Rp. <?php echo number_format($data['harga']); ?></td>
                                    <td><?php echo $data['tanggal_so']; ?></td>
                                    <td><a href="?page=lapSo&aksi=lnote&id_so=<?php echo $data['id_so'] ?>&id_pekerjaan=<?php echo $data['id_pekerjaan'] ?>" class="btn btn-primary" >Lihat Laporan</a></td>
                                </tr>
                            </tbody>
                            <?php } ?>
                        </table>
                        <a href="page/laporan/lapSo/cetak.php" target="blank" class ="btn btn-primary" target="_blank"><i class="material-icons">print</i><span>PRINT</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
                   



