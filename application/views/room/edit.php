
<div class="content">
    <?php echo form_open('room/edit');?>
    <?php echo form_hidden('room_id',$dataroom[0]->room_id);?>
    
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
                                                    <input type="text" name="room_id" class="form-control" disabled <?php echo form_input('',$dataroom[0]->room_id,"disabled");?>

                                                <!-- </div> -->
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Room Name</label>
                                                    

                                                    <select class="form-control" name="roomtype_id">
                                                    <?php foreach ($room_name as $data) {?>
                                                    <option value="<?php echo $data->roomtype_id; ?>"><?php echo $data->room_name; ?></option>
                                                    <?php } ?> 
                                                    </select>

                                                </div>
                                                
                                                <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Service</label>
                                                         <select class="form-control" name="id_service">
                                                            <?php foreach ($service as $key) {?>
                                                            <option value="<?php echo $key->id_service; ?>"><?php echo $key->service; ?></option>
                                                            <?php } ?> 
                                                        </select>
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
            </div>
<?php
    echo form_close();
?>