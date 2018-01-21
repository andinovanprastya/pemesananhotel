<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">USER</h4>
                                    <!-- <p class="category">Here is a subtitle for this table</p> -->
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <!-- <a href="#pablo" class="btn btn-primary btn-round">Tambah roomtype</a> -->
                                        <a class="btn btn-primary btn-round" href="<?php echo base_url('index.php/user/create'); ?>">
                                            <i class="fa fa-plus"></i>   Tambah Data
                                        </a>

                                       
                            </button>
                                        <thead class="text-primary" >
                                            <th>Id</th>
                                            <th>Nama </th>
                                            <th>Alamat</th>
                                            <th>Telp</th>
                                            <th>Email</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Opsi</th>
                                        </thead>
                                        <tbody>
                                            <?php
                                                foreach ($datauser as $user){
                                                    echo "<tr>
                                                            <td>$user->user_id</td>
                                                            <td>$user->nama</td>
                                                            <td>$user->alamat</td>
                                                            <td>$user->telp</td>
                                                            <td>$user->email</td>
                                                            <td>$user->username</td>
                                                            <td>$user->password</td>
                                                            
                                                            
                                                            <td>".anchor('user/edit/'.$user->user_id,'Edit')." |
                                                                ".anchor('user/delete/'.$user->user_id,'Delete')."</td>
                                                          </tr>";
                                                }
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