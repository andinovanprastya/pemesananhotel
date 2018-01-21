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
                                                foreach ($dataservice as $service){ ?>
                                                    <tr>
                                                            <td><?php echo$service->id_service?></td>
                                                            <td><?php echo$service->service?></td>
                                                            <td><img src="<?=base_url()?>upload/service/<?=$service->gambar ?>" style="width:100px;heigth:100px" class="img-responsive"></td>
                                                            <td><?php echo$service->charge?></td>
                                                            
                                                    <?php echo "<td>".anchor('service/edit/'.$service->id_service,'     Edit')." |".anchor('service/delete/'.$service->id_service,'     Delete')."</td>" ?>
                                                          </tr>
                                             <?php   }
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