
        <div class="page-inner">
            <div class="page-title">
                <h3>Add New User</h3>
            </div>
            <div id="main-wrapper">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-white">
                            <div class="panel-heading clearfix">
                                <h4 class="panel-title">New User Information</h4>
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal" method='POST' action="<?php echo URL; ?>admin/_addCounselor">
                                    <div class="form-group"> 
                                        <label for="input-fname" class="col-sm-2 ">First Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name='fname' id="input-fname" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="input-lname" class="col-sm-2 ">Last Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="input-lname" name='lname'>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="input-address" class="col-sm-2 ">Address</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="input-address" name='address'>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="input-contact" class="col-sm-2 ">Contact No</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="input-contact" name='contact'>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="input-email" class="col-sm-2 ">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="input-email" name='email'>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="input-email" class="col-sm-2 ">Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="input-password" name='password'>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="input-email" class="col-sm-2 ">Role</label>
                                        <div class="col-sm-10">
                                            <select required name='role'>
                                                <option>-Select one-</option>
                                                <option value='1'>Admin</option>
                                                <option value = '2'>Counselor</option>
                                            </select>
                                        </div>
                                    </div>




                                    <input class="btn btn-success" type="submit" value='Submit' name='submit_add_counselor'/>


                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- Row -->
            </div><!-- Main Wrapper -->
            
    
   