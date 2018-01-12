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
                                        <!-- <a href="#pablo" class="btn btn-primary btn-round">Tambah roomtype</a> -->
                                        <a class="btn btn-primary btn-round" href="<?php echo base_url('index.php/roomtype/create'); ?>">
                                            <i class="fa fa-plus"></i>   Tambah Data
                                        </a>

                                       
                            </button>
                                        <thead class="text-primary" >
                                            <th>Id</th>
                                            <th>Nama Ruangan</th>
                                            <th>Harga</th>
                                            <th>Opsi</th>
                                        </thead>
                                        <tbody>
                                            <?php
                                                foreach ($datatype as $roomtype){
                                                    echo "<tr>
                                                            <td>$roomtype->roomtype_id</td>
                                                            <td>$roomtype->room_name</td>
                                                            <td>$roomtype->price</td>
                                                            
                                                            <td>".anchor('roomtype/edit/'.$roomtype->roomtype_id,'Edit')." |
                                                                ".anchor('roomtype/delete/'.$roomtype->roomtype_id,'Delete')."</td>
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