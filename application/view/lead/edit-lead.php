
        <div class="page-inner">
            <div class="page-title">
                <h3>Edit Lead Detail</h3>
            </div>
            <div id="main-wrapper">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-white">
                            <div class="panel-body">
                                <form class="form-horizontal" action="<?php echo URL.'lead/_editLead' ?>" method='POST'>
                                    <div class="form-group">
                                        <label for="input-fname"  class="col-sm-2 ">First Name</label>
                                        
                                        <div class="col-sm-10">
                                            <input type="text" name='fname' class="form-control" id="input-fname" value="<?php echo $leadInfo->fname;  ?>">
                                            <input type='text' hidden name='leadid' value="<?php echo $leadInfo->lead_id; ?>" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="input-lname" class="col-sm-2 ">Last Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" name='lname' class="form-control" id="input-lname" value="<?php echo $leadInfo->lname;  ?>">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="input-address" class="col-sm-2 ">Address</label>
                                        <div class="col-sm-10">
                                            <input type="text" name='address' class="form-control" id="input-address" value="<?php echo $leadInfo->address;  ?>" >
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="input-contact" class="col-sm-2 ">Contact No</label>
                                        <div class="col-sm-10">
                                            <input type="text" name='contact' class="form-control" id="input-contact" value="<?php echo $leadInfo->contactno;  ?>" >
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="input-college" class="col-sm-2 ">College</label>
                                        <div class="col-sm-10">
                                            <input type="text"  name='college' class="form-control" id="input-contact" value="<?php echo $leadInfo->college;  ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="input-email" class="col-sm-2 ">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" name='email' class="form-control" id="input-email" value="<?php echo $leadInfo->email;  ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="input-interest" class="col-sm-2 ">Interested In</label>
                                        <div class="col-sm-10">
                                            <select name='course' class="js-states form-control" tabindex="-1" style="width: 100%">
                                                <?php foreach ($courses as $course) { ?>
                                                <option value="<?php echo $course->course_id; ?>" <?php echo ($leadInfo->course_id == $course->course_id)?'selected' : ''; ?>> <?php echo $course->course_name; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="input-status" class="col-sm-2 ">Lead Status</label>
                                        <div class="col-sm-10">
                                            <select name='status' class="js-states form-control" tabindex="-1" style=" width: 100%" name="status">
                                                <option value="active" <?php echo ($leadInfo->status == 'active')? 'Selected':'' ?>> Active</option>
                                                <option value="expired" <?php echo ($leadInfo->status == 'expired')? 'Selected':'' ?>>Expired</option>
                                                <option value="dismissed" <?php echo ($leadInfo->status == 'dismissed')? 'Selected':'' ?>>Dismissed</option>
                                                <option value="postponed" <?php echo ($leadInfo->status == 'postponed')? 'Selected':'' ?>>Postponed</option>
                                            </select>
                                        </div>
                                    </div> 


                                    <div class="form-group">
                                        <label for="input-interest" class="col-sm-2 ">IsStudent</label>
                                        <div class="col-sm-10">
                                                <label><input type='radio' name='isStudent' value='1'>Yes</label> &nbsp; &nbsp; &nbsp;
                                                <label><input type='radio' name='isStudent' checked value='0' >No </label>
                                        </div>
                                    </div>




                                    <input class="btn btn-success" type="submit" name='btn_submit_edit'>


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

   