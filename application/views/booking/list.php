<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">DATA BOOKING</h4>
                                    <!-- <p class="category">Here is a subtitle for this table</p> -->
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <!-- <a href="#pablo" class="btn btn-primary btn-round">Tambah room</a> -->
                                        <a class="btn btn-primary btn-round" href="<?php echo base_url('index.php/booking/create'); ?>">
                                            <i class="fa fa-plus"></i>   Tambah Data
                                        </a>

                                       
                            </button>
                                        <thead class="text-primary" >
                                            <th>Id</th>
                                            <th>User id</th>
                                            <th>Room id</th>
                                            <th>Tanggal Pemesanan</th>
                                            <th>Checkin</th>
                                            <th>Checkout</th>
                                            <th>Status</th>
                                            <th>Opsi</th>
                                        </thead>
                                        <tbody>
                                            <?php
                                                foreach ($databooking as $booking){
                                                    echo "<tr>
                                                            <td>$booking->id_booking</td>
                                                            <td>$booking->user_id</td>
                                                            <td>$booking->room_id</td>
                                                            <td>$booking->booking_date</td>
                                                            <td>$booking->checkin</td>
                                                            <td>$booking->checkout</td>
                                                            <td>$booking->status</td>
                                                            <td>".anchor('booking/edit/'.$booking->id_booking,'Edit')." |
                                                                ".anchor('booking/delete/'.$booking->id_booking,'Delete')."</td>
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