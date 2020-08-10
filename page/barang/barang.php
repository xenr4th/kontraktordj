
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                BAHAN
                            </h2>
                             
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>id bahan</th>
                                            <th>id so</th>
                                            <th>id po</th>
                                            <th>pekerjaan</th>
                                            <th>supplier</th>
                                            <th>nama bahan</th>
                                            <th>satuan</th>
                                            <th>jumlah</th>
                                            <th>harga</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    
                                    <tbody>

                                        <?php

                                        $sql = $koneksi->query("select * from bahan");

                                        while ($data = $sql->fetch_assoc()) {

                                        
                                        ?>

                                        <tr>
                                         
                                            <td><?php echo $data['id_bahan']?></td>
                                            <td><?php echo $data['id_so']?></td>
                                            <td><?php echo $data['id_po']?></td>
                                            <td><?php echo $data['pekerjaan']?></td>
                                            <td><?php echo $data['supplier']?></td>
                                            <td><?php echo $data['nama_bahan']?></td>
                                            <td><?php echo $data['satuan']?></td>
                                            <td><?php echo $data['jumlah']?></td>
                                            <td><?php echo $data['harga']?></td>
                                            <td>
                                                <a href="?page=barang&aksi=ubah&id_bahan=<?php echo $data['id_bahan']?>" class="btn btn-success">Ubah</a>
                                                <a onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini ....??????')
                                                " href="?page=barang&aksi=hapus&id_bahan=<?php echo $data['id_bahan'];?>" class="btn btn-danger" >
                                                Hapus</a>

                                            </td>
                                        </tr>

                                        <?php } ?>

                                        </tbody>


                                    </table>
                                    <a href="?page=barang&aksi=tambah" class="btn btn-primary">Tambah</a>

                                </div>


