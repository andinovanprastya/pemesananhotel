
<div class="content">
    <?php echo form_open_multipart('room/create'); ?>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Insert Room Type</h4>
                                    <!-- <p class="category">Complete your profile</p> -->
                                </div>
                                <div class="card-content">
                                    <form>

                                        

                                        


                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Nama Ruangan</label>
                                                    <!-- <input type="file" class="form-control" name="gambar"> -->
                                                    <select class="form-control" name="id_service">

                                                    <?php foreach ($service as $key) {?>
                                                    <option value="<?php echo $key->id_service; ?>"><?php echo $key->service; ?></option>
                                                    <?php } ?> 
                                                </div>
                                            </div>
                                        </div>

                                        <!-- <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Service</label>
                                                     <select class="form-control" name="id_service">
                                                        <option value=""></option>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Price</label>
                                                    <input type="number" class="form-control" name="price">
                                                </div>
                                            </div>
                                        </div> -->

                                        
                                        
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
<?php
    echo form_close();
?>