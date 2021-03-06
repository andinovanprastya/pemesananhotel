
<div class="content">
    <?php echo form_open_multipart('booking/create'); ?>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Insert Booking</h4>
                                    <!-- <p class="category">Complete your profile</p> -->
                                </div>
                                <div class="card-content">
                                    <form>


                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Nama Cust</label>
                                                    <!-- <input type="file" class="form-control" name="gambar"> -->
                                                    <select class="form-control" name="user_id">
                                                    <?php foreach ($nama as $data) {?>
                                                    <option value="<?php echo $data->user_id; ?>"><?php echo $data->nama; ?></option>
                                                    <?php } ?> 
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Nama Ruangan</label>
                                                    <!-- <input type="file" class="form-control" name="gambar"> -->
                                                    <select class="form-control" name="roomtype_id">
                                                    <?php foreach ($room_name as $key) {?>
                                                    <option value="<?php echo $key->roomtype_id; ?>"><?php echo $key->room_name; ?></option>
                                                    <?php } ?> 
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Tgl Pesan</label>
                                                    <input type="date" class="form-control" name="booking_date">
                                                </div>
                                            </div>
                                        </div>

                                         <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Checkin</label>
                                                    <input type="date" class="form-control" name="checkin">
                                                </div>
                                            </div>
                                        </div>

                                         <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Checkout</label>
                                                    <input type="date" class="form-control" name="checkout">
                                                </div>
                                            </div>
                                        </div>

                                         <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Status</label>
                                                    <input type="text" class="form-control" name="booking_date">
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
<?php
    echo form_close();
?>