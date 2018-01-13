
<div class="content">
    <?php echo form_open('booking/edit');?>
    <?php echo form_hidden('id_booking',$databooking[0]->id_booking);?>
    
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
                                                    <input type="text" name="id_booking" class="form-control" disabled <?php echo form_input('',$databooking[0]->id_booking,"disabled");?>

                                                <!-- </div> -->
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">User Id</label>
                                                    

                                                    <select class="form-control" name="user_id">
                                                    <?php foreach ($user_id as $data) {?>
                                                    <option value="<?php echo $data->user_id; ?>"><?php echo $data->user_id; ?></option>
                                                    <?php } ?> 
                                                    </select>
                                                </div>
                                               
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Room Id</label>
                                                             <select class="form-control" name="room_id">
                                                                <?php foreach ($room_id as $key) {?>
                                                                <option value="<?php echo $key->room_id; ?>"><?php echo $key->room_id; ?></option>
                                                                <?php } ?> 
                                                            </select>
                                                        </div>
                                                  </div>
                                                </div>

                                                    <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Booking Date</label>
                                                            <input type="date" class="form-control" name="booking_date"
                                                            <?php echo form_input('booking',$databooking[0]->booking_date);?>
                                                        </div>
                                                    </div>
                                                </div>

                                                    <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Checkin</label>
                                                            <input type="date" class="form-control" name="checkin"
                                                            <?php echo form_input('booking',$databooking[0]->checkin);?>
                                                        </div>
                                                    </div>
                                                </div>

                                                    <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Checkout</label>
                                                            <input type="date" class="form-control" name="checkout"
                                                            <?php echo form_input('booking',$databooking[0]->checkout);?>
                                                        </div>
                                                    </div>
                                                </div>

                                                    <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Status</label>
                                                            <input type="text" class="form-control" name="status"
                                                            <?php echo form_input('booking',$databooking[0]->status);?>
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