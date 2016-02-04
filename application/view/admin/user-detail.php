

        <div class="page-inner">
            <div class="page-title">
                <h3>Counselor Detail</h3>
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
                                            <label><strong><?php echo $data->fname; ?></strong></label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 ">Last Name</label>
                                        <div class="col-sm-10">
                                            <label><strong><?php echo $data->lname; ?></strong></label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 ">Address</label>
                                        <div class="col-sm-10">
                                            <label><strong><?php echo $data->address; ?></strong></label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 ">Contact No</label>
                                        <div class="col-sm-10">
                                            <label><strong><?php echo $data->contactno; ?></strong></label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 ">Email</label>
                                        <div class="col-sm-10">
                                            <label><strong><?php echo $data->email; ?></strong></label>
                                        </div>
                                    </div>


                                    <a href="<?php echo URL; ?>admin"><button class="btn btn-success" type="button">Return Back</button></a>

                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- Row -->
            </div><!-- Main Wrapper -->
            
        </div><!-- Lead Detail -->

   