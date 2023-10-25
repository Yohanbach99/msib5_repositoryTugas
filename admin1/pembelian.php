<?php
$model = new Pembelian();
$data_pembelian = $model->dataPembelian();


?>


<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tables</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                                .
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                        <th>No</th>
                                            <th>tanggal</th>
                                            <th>Nomor</th>
                                            <th>Produk ID</th>
                                            <th>Jumlah</th>
                                            <th>harga</th>
                                            <th>Vendor ID</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>No</th>
                                            <th>tanggal</th>
                                            <th>Nomor</th>
                                            <th>Produk ID</th>
                                            <th>Jumlah</th>
                                            <th>harga</th>
                                            <th>Vendor ID</th>
                                           
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $no =1;
                                        foreach ($data_pembelian as $pembelian){
                                            
                                        ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $pembelian['id']?></td>
                                            <td><?= $pembelian['tanggal']?></td>
                                            <td><?= $pembelian['nomor']?></td>
                                            <td><?= $pembelian['produk_id']?></td>
                                            <td><?= $pembelian['jumlah']?></td>
                                            <td><?= $pembelian['harga']?></td>
                                            <td><?= $pembelian['vendor_id']?></td>
                                        </tr>
                                        <?php
                                        $no ++;
                                        }
                                        ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>