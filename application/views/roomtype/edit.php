
<div class="content">
    <?php echo form_open_multipart('roomtype/edit');?>
    <?php echo form_hidden('roomtype_id',$datatype[0]->roomtype_id);?>
    
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Edit Room Type</h4>
                                    <!-- <p class="category">Complete your profile</p> -->
                                </div>
                                <div class="card-content">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Id</label>
                                                    <input type="text" name="roomtype_id" class="form-control" disabled <?php echo form_input('',$datatype[0]->roomtype_id,"disabled");?>

                                                <!-- </div> -->
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Room Name</label>
                                                    <input type="text" class="form-control" name="room_name"
                                                    <?php echo form_input('roomtype',$datatype[0]->room_name);?>
                                                </div>
                                                
                                                <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Gambar</label>
                                                        <input type="file" class="form-control" name="gambar"
                                                        <?php echo form_input('roomtype',$datatype[0]->gambar);?>
                                                </div>

                                                
                                                    </div>


                                                </div>
                                                    <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Stok</label>
                                                            <input type="text" class="form-control" name="stok"
                                                            <?php echo form_input('roomtype',$datatype[0]->stok);?>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Price</label>
                                                            <input type="text" class="form-control" name="price"
                                                            <?php echo form_input('roomtype',$datatype[0]->price);?>
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
            </div>
<?php
    echo form_close();
?>