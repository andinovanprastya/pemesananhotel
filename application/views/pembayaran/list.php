<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Pembayaran</h4>
                                    <!-- <p class="category">Here is a subtitle for this table</p> -->
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <!-- <a href="#pablo" class="btn btn-primary btn-round">Tambah room</a> -->
                                        <a class="btn btn-primary btn-round" href="<?php echo base_url('index.php/pembayaran/create'); ?>">
                                            <i class="fa fa-plus"></i>   Tambah Data
                                        </a>

                                       
                            </button>
                                        <thead class="text-primary" >
                                            <th>Id</th>
                                            <th>Id Booking</th>
                                            <th>Tgl Bayar</th>
                                            <th>Total</th>
                                            <th>Status</th>
                                            <th>Opsi</th>
                                        </thead>
                                        <tbody>
                                            <?php
                                                foreach ($datapembayaran as $pembayaran){
                                                    echo "<tr>
                                                            <td>$pembayaran->id_pembayaran</td>
                                                            <td>$pembayaran->id_booking</td>
                                                            <td>$pembayaran->tgl_bayar</td>
                                                            <td>$pembayaran->total</td>
                                                            <td>$pembayaran->status</td>
                                                            
                                                            <td>".anchor('pembayaran/edit/'.$pembayaran->id_pembayaran,'Edit')." |
                                                                ".anchor('pembayaran/delete/'.$pembayaran->id_pembayaran,'Delete')."</td>
                                                          </tr>";
                                                }
                                            ?>
                                            <!-- <tr>
                                                <td>Dakota Rice</td>
                                                <td>Niger</td>
                                                <td>Oud-Turnhout</td>
                                                <td class="text-primary">$36,738</td>
                                            </tr> -->
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                </div>
            </div>