 
        
        <div class="page-inner">
            <div class="page-title">
                <h3>Counselor Dashboard</h3>
            </div>
            <div id="main-wrapper">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-white">
                            <div class="panel-body">
                                <div role="tabpanel">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-pills" role="tablist">
                                        <li role="presentation" class="active"><a href="#dueToday" aria-controls="home" role="tab" data-toggle="tab">Due Leads Today</a></li>
                                        <li role="presentation"><a href="#totalLeads" aria-controls="settings" role="tab" data-toggle="tab">Total Leads Followed</a></li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active fade in" id="dueToday">


                                            <div class="panel panel-white">
                                                <div class="panel-heading clearfix">
                                                    <h4 class="panel-title">Total Leads that are due to be followed today.</h4>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="table-responsive">
                                                        <table id="dueToday " class="display table" cellspacing="0" width="100%">
                                                            <thead>
                                                                <tr>
                                                                    <th>SNo</th>
                                                                    <th>First Name</th>
                                                                    <th>Last Name</th>
                                                                    <th>Follow Up Count</th>
                                                                    <th>Action</th>                                               
                                                                </tr>
                                                            </thead>
                                                            
                                                            <tbody>

                                                                <?php $i=0; foreach ($followupToday as $data) { 

                                                                      foreach ($followupCount as $count) {
                                                                               if($data->lead_id == $count->lead_id && ($count->count < 9)){
                                                                        ?>                                               
                                                                            <tr>
                                                                                <td><?php echo $data->lead_id; ?></td>
                                                                                <td><?php echo $data->fname ;?></td>
                                                                                <td><?php echo $data->lname; ?></td>
                                                                                <td><?php echo $count->count-1; ?></td>                                                                                 
                                                                                <td>
                                                                                    <a href="<?php echo URL;?>lead/followup/<?php echo $data->lead_id; ?>">
                                                                                        Follow Up
                                                                                    </a>                                                                                
                                                                                   
                                                                                </td>
                                                                            </tr>

                                                                <?php $i++; }} }  ?>

                                                            
                                                            </tbody>
                                                        </table>  
                                                    </div>
                                                </div>

                                                <div class='panel-footer'>
                                                    <h3>Total Leads to be followed today : <?php echo $i; ?></h3>
                                                </div>
                                            </div>


                                        </div>




                                    <!-- Total leads followed by the counselor -->



                                        <div role="tabpanel" class="tab-pane fade" id="totalLeads">
                                            <div class="panel panel-white">
                                                <div class="panel-heading clearfix">
                                                    <h4 class="panel-title">Total number of leads assigned to the counsellor.</h4>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="table-responsive">
                                                        <table id="totalLeads" class="display table" cellspacing="0" width="100%">
                                                            <thead>
                                                                <tr>
                                                                    <th>Lead ID</th>
                                                                    <th>First name</th>
                                                                    <th>last name</th>
                                                                    <th>Address</th> 
                                                                    <th>Contact Num.</th> 
                                                                    <th>Follow up count </th>
                                              
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $i =0; foreach ($GetLeads as $data) { 
                                                                    foreach ($followupCount as $count) {
                                                                       if($data->lead_id == $count->lead_id){
                                                                    ?>
                                                                    <tr>
                                                                        <td><?php echo $data->lead_id; ?></td>
                                                                        <td><?php echo $data->fname; ?></td>
                                                                        <td><?php echo $data->lname; ?></td>
                                                                        <td><?php echo $data->address; ?></td>
                                                                        <td><?php echo $data->contactno; ?></td>
                                                                        <td><?php echo $count->count-1; ?></td>
                                                                    </tr>                                                              
                                                                <?php $i++; }}} ?>
                                                            </tbody>
                                                            
                                                        </table>  

                                                    </div>

                                                </div>
                                                <div class="panel-footer">
                                                        <h3> Total leads followed : <?php echo $i; ?> </h3>

                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  

                    </div>

                </div>
            </div><!-- Main Wrapper -->
            <div class="page-footer">
                <p class="no-s">By Avisekh Bharati | Bhushan Pokharel | Himansu Hamal | Deepak Bhattarai</p>
            </div>
        </div><!-- Page Inner -->
    