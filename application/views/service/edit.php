
<div class="content">
    <?php echo form_open('service/edit');?>
    <?php echo form_hidden('id_service',$dataservice[0]->id_service);?>
    
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Edit Service</h4>
                                    <!-- <p class="category">Complete your profile</p> -->
                                </div>
                                <div class="card-content">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Id</label>
                                                    <input type="text" name="id_service" class="form-control" disabled <?php echo form_input('',$dataservice[0]->id_service,"disabled");?>

                                                <!-- </div> -->
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Service</label>
                                                    <input type="text" class="form-control" name="service"
                                                    <?php echo form_input('service',$dataservice[0]->service);?>
                                                </div>
                                                
                                                <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Gambar</label>
                                                        <input type="file" class="form-control" name="gambar"
                                                        <?php echo form_input('service',$dataservice[0]->gambar);?>
                                                </div>

                                                
                                                    </div>


                                                </div>
                                                    <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Charge</label>
                                                            <input type="text" class="form-control" name="charge"
                                                            <?php echo form_input('service',$dataservice[0]->charge);?>
                                                        </div>

                                                    </div>
                                                    
                                            </div>


                                        </div>

                                        
                                        </div>
                                        <button type="submit" class="btn btn-primary pull-right" href="<?php echo form_submit('submit','Simpan');?>">
                                            
                                        Save</button>


                                        <!-- <a class="btn btn-primary btn-round" href="<?php echo form_submit('submit', 'Simpan') ?>">
                                            <i class="fa fa-plus"></i>   Tambah Data
                                        </a> -->

                                        <!-- <?php echo form_submit('submit','Simpan');?> -->


                                        <div class="clearfix"></div>
                                    </form>
                               
                            </div>
                        </div>
                     </div>
                     </div>
                     </div>   
                </div>
            </div>
<?php
    echo form_close();
?>