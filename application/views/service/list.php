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
                                        <!-- <a href="#pablo" class="btn btn-primary btn-round">Tambah service</a> -->
                                        <a class="btn btn-primary btn-round" href="<?php echo base_url('index.php/service/create'); ?>">
                                            <i class="fa fa-plus"></i>   Tambah Data
                                        </a>

                                       
                            </button>
                                        <thead class="text-primary" >
                                            <th>Id</th>
                                            <th>Service</th>
                                            <th>Gambar</th>
                                            <th>Charge</th>
                                            <th>Opsi</th>
                                        </thead>
                                        <tbody>
                                            <?php
                                                foreach ($dataservice as $service){
                                                    echo "<tr>
                                                            <td>$service->id_service</td>
                                                            <td>$service->service</td>
                                                            <td>$service->gambar</td>
                                                            <td>$service->charge</td>
                                                            
                                                            <td>".anchor('service/edit/'.$service->id_service,'Edit')." |
                                                                ".anchor('service/delete/'.$service->id_service,'Delete')."</td>
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