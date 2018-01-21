
<div class="content">
    <?php echo form_open_multipart('user/create2'); ?>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Booking on site</h4>
                                    <!-- <p class="category">Complete your profile</p> -->
                                </div>
                                <div class="card-content">
                                    <form>
                                        <!-- <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Id Type room</label>
                                                    <input type="text" name="roomtype_id" class="form-control" disabled>
                                                </div>
                                            </div>
                                        </div> -->

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Nama</label>
                                                    <input type="text" class="form-control" name="nama">
                                                    <!-- <?php echo form_input('room_name');?> -->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Alamat</label>
                                                    <input type="text" class="form-control" name="alamat">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Telp</label>
                                                    <input type="number" class="form-control" name="telp">
                                                    <!-- <?php echo form_input('room_name');?> -->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Email</label>
                                                    <input type="email" class="form-control" name="email">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Username</label>
                                                    <input type="text" class="form-control" name="username">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Password</label>
                                                    <input type="password" class="form-control" name="password">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary pull-right" href="<?php echo form_submit('submit','Simpan');?>">
                                            
                                        Save</button>


                                    


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