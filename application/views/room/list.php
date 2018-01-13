<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">DATA ROOM TYPE</h4>
                                    <!-- <p class="category">Here is a subtitle for this table</p> -->
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <!-- <a href="#pablo" class="btn btn-primary btn-round">Tambah room</a> -->
                                        <a class="btn btn-primary btn-round" href="<?php echo base_url('index.php/room/create'); ?>">
                                            <i class="fa fa-plus"></i>   Tambah Data
                                        </a>

                                       
                            </button>
                                        <thead class="text-primary" >
                                            <th>Id</th>
                                            <th>Nama Ruangan</th>
                                            <th>Service</th>
                                            <th>Opsi</th>
                                        </thead>
                                        <tbody>
                                            <?php
                                                foreach ($dataroom as $room){
                                                    echo "<tr>
                                                            <td>$room->room_id</td>
                                                            <td>$room->roomtype_id</td>
                                                            <td>$room->id_service</td>
                                                            
                                                            <td>".anchor('room/edit/'.$room->room_id,'Edit')." |
                                                                ".anchor('room/delete/'.$room->room_id,'Delete')."</td>
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