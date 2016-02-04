
        <div class="page-inner">
            <div class="page-title">
                <h3>Follow Up Lead</h3>
            </div>
            <div id="main-wrapper">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-white">
                            <div class="panel-heading clearfix">
                                <h4 class="panel-title">Lead Information</h4>
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal" method='POST' action="<?php echo URL; ?> lead/_followupLead">

                                    <div class="form-group">
                                        <label for="input-fullname" class="col-sm-2 ">Lead ID</label>
                                        <div class="col-sm-10">
                                            <input   name='leadid' type="hidden" class="form-control" value="<?php echo $leadInfo->lead_id; ?>" id="input-fullname">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="input-fullname" class="col-sm-2 ">First Name</label>
                                        <div class="col-sm-10">
                                            <input disabled name='fname' type="text" class="form-control" value="<?php echo $leadInfo->fname; ?>" id="input-fullname">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="input-fullname" class="col-sm-2 ">Last Name</label>
                                        <div class="col-sm-10">
                                            <input value="<?php echo $leadInfo->lname; ?>" disabled name='lname' type="text" class="form-control" id="input-fullname">
                                        </div>
                                    </div>

                                   
                                    <div class="form-group">
                                        <label for="input-email" class="col-sm-2 ">Email</label>
                                        <div class="col-sm-10">
                                            <input disabled value="<?php echo $leadInfo->email; ?>" type="text" class="form-control" id="input-email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="input-contact" class="col-sm-2 ">Contact</label>
                                        <div class="col-sm-10">
                                            <input disabled value="<?php echo $leadInfo->contactno; ?>" type="text" class="form-control" id="input-contact">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="input-fullname" class="col-sm-2 ">Status</label>
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
                                        <label class="col-sm-2 ">Lead Feedback</label>
                                        <div class="col-sm-10">
                                            <textarea name='feedback' class="form-control"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="input-status" class="col-sm-2 ">Next Reschedule</label>
                                        <div class="col-sm-10">
                                            <input required name='next_followup' type='date' name='feedback_date' required />
                                        </div>
                                    </div>
                                    <input type='submit'  name='btn_submit' class="btn btn-success"  />
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

   