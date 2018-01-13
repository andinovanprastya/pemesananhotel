
<div class="content">
    <?php echo form_open_multipart('pembayaran/create'); ?>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Insert Pembayaran</h4>
                                    <!-- <p class="category">Complete your profile</p> -->
                                </div>
                                <div class="card-content">
                                    <form>


                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Nama Ruangan</label>
                                                    <!-- <input type="file" class="form-control" name="gambar"> -->
                                                    <select class="form-control" name="roomtype_id">
                                                    <?php foreach ($room_name as $data) {?>
                                                    <option value="<?php echo $data->roomtype_id; ?>"><?php echo $data->room_name; ?></option>
                                                    <?php } ?> 
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Tanggal pembayaran</label>
                                                    <input type="date" class="form-control" name="tgl_bayar">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Total</label>
                                                    <input type="number" class="form-control" name="total">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Status</label>
                                                    <input type="text" class="form-control" name="status">
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