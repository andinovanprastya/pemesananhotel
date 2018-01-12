
<div class="content">
    <?php echo form_open('user/edit');?>
    <?php echo form_hidden('user_id',$datauser[0]->user_id);?>
    
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Edit User</h4>
                                    <!-- <p class="category">Complete your profile</p> -->
                                </div>
                                <div class="card-content">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Id</label>
                                                    <input type="text" name="user_id" class="form-control" disabled <?php echo form_input('',$datauser[0]->user_id,"disabled");?>

                                                <!-- </div> -->
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Nama</label>
                                                    <input type="text" class="form-control" name="nama"
                                                    <?php echo form_input('user',$datauser[0]->nama);?>
                                                </div>
                                                
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Alamat</label>
                                                            <input type="text" class="form-control" name="alamat"
                                                            <?php echo form_input('user',$datauser[0]->alamat);?>
                                                        </div>
                                                    </div>
                                                </div>

                                                 <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Telp</label>
                                                            <input type="number" class="form-control" name="telp"
                                                            <?php echo form_input('user',$datauser[0]->telp);?>
                                                        </div>
                                                    </div>
                                                </div>

                                                 <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Email</label>
                                                            <input type="email" class="form-control" name="email"
                                                            <?php echo form_input('user',$datauser[0]->email);?>
                                                        </div>
                                                    </div>
                                                </div>

                                                 <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Username</label>
                                                            <input type="text" class="form-control" name="username"
                                                            <?php echo form_input('user',$datauser[0]->username);?>
                                                        </div>
                                                    </div>
                                                </div>

                                                 <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Password</label>
                                                            <input type="text" class="form-control" name="password"
                                                            <?php echo form_input('user',$datauser[0]->password);?>
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
<?php
    echo form_close();
?>