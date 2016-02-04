        <div class="page-inner">
            <div class="page-title">
                <h3>Edit Counselor Detail</h3>
            </div>
            <div id="main-wrapper">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-white">
                            <div class="panel-heading clearfix">
                                <h4 class="panel-title">New Counselor Information</h4>
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal" method="Post" action="<?php echo URL;?>admin/_editUser">
                                    <div class="form-group">
                                        <label for="input-fname" class="col-sm-2 ">First Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" name='fname' value="<?php echo $data->fname; ?>" class="form-control" id="input-fname" >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="input-lname" class="col-sm-2 ">Last Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" name='lname'  value="<?php echo $data->lname; ?>"  class="form-control" id="input-lname">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="input-address" class="col-sm-2 ">Address</label>
                                        <div class="col-sm-10">
                                            <input type="text" name='address' value="<?php echo $data->address; ?>"  class="form-control" id="input-address">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="input-contact" class="col-sm-2 ">Contact No</label>
                                        <div class="col-sm-10">
                                            <input type="text" name='contactno' value="<?php echo $data->contactno; ?>"  class="form-control" id="input-contact">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="input-email" class="col-sm-2 ">Email</label>
                                        <div class="col-sm-10">
                                            <input type="text" name='email' value="<?php echo $data->email; ?>"  class="form-control" id="input-email">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="input-email" class="col-sm-2 ">Role</label>
                                        <div class="col-sm-10">
                                            <select name="role">
                                                <option value=''> -Select one- </option>
                                                <option <?php if($data->role == '1'){ echo 'selected';} else{ echo '';}  ?> value='1'>Admin</option>
                                                <option <?php if($data->role == '2'){ echo 'selected'; }else{ echo '';}  ?> value='2'>Counselor</option>
                                            </select>
                                        </div>
                                    </div>




                                    <input type="hidden" name="user_id" value="<?php echo $data->user_id; ?>">
                                    <input type="submit" class="btn btn-success" name="btn_submit" value="Edit" />



                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- Row -->
            </div><!-- Main Wrapper -->
            <div class="page-footer">
                <p class="no-s">By Avisekh Bharati | Bhushan Pokharel | Himansu Hamal | Deepak Bhattarai</p>
            </div>
        </div><!-- Page Inner -->

  