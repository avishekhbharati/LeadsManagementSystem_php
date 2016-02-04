
        <div class="page-inner">
            <div class="page-title">
                <h3>Lead Detail</h3>
            </div>
            <div id="main-wrapper">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-white">
                            <div class="panel-body">
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label class="col-sm-2 ">First Name</label>
                                        <div class="col-sm-10">
                                            <label><strong><?php echo $detailInfo->fname; ?></strong></label>
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <label class="col-sm-2 ">Last Name</label>
                                        <div class="col-sm-10">
                                            <label><strong><?php echo $detailInfo->lname; ?></strong></label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 ">Contact No</label>
                                        <div class="col-sm-10">
                                            <label><strong><?php echo $detailInfo->contactno; ?></strong></label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 ">College</label>
                                        <div class="col-sm-10">
                                            <label><strong><?php echo $detailInfo->college; ?></strong></label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 ">Follow Up Count</label>
                                        <div class="col-sm-10">
                                            <label><strong><?php echo $getFollowup; ?></strong></label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 ">Email</label>
                                        <div class="col-sm-10">
                                            <label><strong><?php echo $detailInfo->email; ?></strong></label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 ">Address</label>
                                        <div class="col-sm-10">
                                            <label><strong><?php echo $detailInfo->address; ?></strong></label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 ">Feedbacks</label>
                                        <div class="col-sm-10">
                                            <?php  foreach ($feedback as $value) {?>
                                            <label><strong><?php echo $value->date; ?></strong> <?php echo '  :  '; echo $value->feedback; ?></label><br/>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 ">Interested In</label>
                                        <div class="col-sm-10">
                                            <label><strong><?php echo $detailInfo->course_name; ?></strong></label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="input-status" class="col-sm-2 ">Lead Status</label>
                                        <div class="col-sm-10">
                                            <label><strong><?php echo $detailInfo->status; ?></strong></label>
                                        </div>
                                    </div>
<!--
                                    <div class="form-group">
                                        <label for="input-status" class="col-sm-2 ">Next Reschedule</label>
                                        <div class="col-sm-10">
                                            <a href="#" id="dob" data-type="combodate" data-value="1984-05-15" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1" data-title="Select Date of birth" class="editable editable-click">15/05/1984</a>
                                        </div>
                                    </div> -->


                                    <button class="btn btn-success" type="button">Submit</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- Row -->
            </div><!-- Main Wrapper -->
            <div class="page-footer">
                <p class="no-s">By Avisekh Bharati | Bhushan Pokharel | Himansu Hamal | Deepak Bhattarai</p>
            </div>
        </div><!-- Lead Detail -->

   