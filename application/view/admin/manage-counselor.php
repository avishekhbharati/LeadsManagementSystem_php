
        <div class="page-inner">
            <div class="page-title">
                <h3>Manage User</h3>
            </div>
            <div id="main-wrapper">
                <div class="row">
                    <div class="col-md-12">

                        <div class="panel panel-white">
                            <div class="panel-heading clearfix">
                                <a href="<?php echo URL;?>admin/addCounselor"><button class="btn btn-success" type="button">Add New User +</button></a>
                            </div>
                            
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table id="dueToday" class="display table" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Role</th>
                                                <th>Action</th>                                                
                                            </tr>
                                        </thead>
                                       
                                        <tbody>

                                            <?php foreach ($list as $user) {?>
                                            <tr>
                                                <td><?php echo $user->user_id; ?></td>
                                                <td><?php echo $user->fname; ?></td>
                                                <td><?php echo $user->lname; ?></td>
                                                <td><?php   if( $user->role == 1){echo 'admin';} else{echo 'counselor';}; ?></td>                                                
                                                <td>
                                                    <a href="<?php echo URL; ?>admin/editUser/<?php echo $user->user_id; ?>">
                                                        Edit
                                                    </a> 
                                                    |
                                                    <a href="<?php echo URL; ?>admin/userDetails/<?php echo $user->user_id; ?>">
                                                        Detail
                                                    </a>
                                                </td>
                                            </tr>

                                            <?php  } ?>
                                           

                                        </tbody>
                                    </table>  
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div><!-- Main Wrapper -->      