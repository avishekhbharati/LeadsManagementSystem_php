
        <div class="page-inner">

            <?PHP 
                $dateToday = date("Y-m-d");
                //echo $dateToday;
             ?>
            <div class="page-title">
                <h3>Add New Lead</h3>
            </div>
            <div id="main-wrapper">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-white">
                            <div class="panel-heading clearfix">
                                <h4 class="panel-title">New Lead Information</h4>
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal" method='post' action='<?php echo URL; ?>lead/_addLead'>
                                    <div class="form-group">
                                        <label for="input-fname" class="col-sm-2 ">First Name</label>
                                        <div class="col-sm-10">
                                            <input required name='fname' type="text" class="form-control" id="input-fname">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="input-lname" class="col-sm-2 ">Last Name</label>
                                        <div class="col-sm-10">
                                            <input required name='lname' type="text" class="form-control" id="input-lname">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="input-address" class="col-sm-2 ">Address</label>
                                        <div class="col-sm-10">
                                            <input required name='address' type="text" class="form-control" id="input-address">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="input-contact" class="col-sm-2 ">Contact No</label>
                                        <div class="col-sm-10">
                                            <input required name='contact' type="text" class="form-control" id="input-contact">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="input-college" class="col-sm-2 ">College</label>
                                        <div class="col-sm-10">
                                            <input required name='college' type="text" class="form-control" id="input-contact">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="input-email" class="col-sm-2 ">Email</label>
                                        <div class="col-sm-10">
                                            <input required name='email' type="email" class="form-control" id="input-email">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="input-interest" class="col-sm-2 ">Interested In</label>
                                        <div class="col-sm-10">
                                            <select required name='course' class="js-states form-control" tabindex="-1" style="width: 100%">                                                
                                                <option value=''>-- Select a course --</option>
                                                <?php foreach ($courses as $course) { ?>
                                                    <option value='<?php echo $course->course_id;?>'> <?php echo $course->course_name?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="input-email" class="col-sm-2 ">Semester</label>
                                        <div class="col-sm-10">
                                            <select name='semester'>
                                                <option value='autumn'>autumn</option>
                                                <option value='spring'>spring</option>
                                            </select>
                                        </div>
                                    </div> 


                                    <div class="form-group">
                                        <label for="input-email" class="col-sm-2 ">Follow up</label>
                                        <div class="col-sm-10">
                                            <input required type="date" name='followup' class="form-control">
                                        </div>
                                    </div>                           

                                    <input name='btn_submit_add' value="Submit" class="btn btn-success" type="submit" />
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

   