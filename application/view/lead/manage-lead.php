
        <div class="page-inner">
            <div class="page-title">
                <h3>Manage Leads</h3>
            </div>
            <div id="main-wrapper">
                <div class="row">
                    <div class="col-md-12">

                        <div class="panel panel-white">
                            <div class="panel-heading clearfix">
                                <a href="<?php echo URL.'lead/addlead'?>"><button class="btn btn-success" type="button">Add New +</button></a>
                            </div>
                            
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table id="dueToday" class="display table" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>SNo</th>
                                                <th>first name </th>
                                                <th>last name</th>
                                                <th>Lead Status</th>
                                                <th>Action</th>                                                
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            <?php foreach ($AllLead as $lead) {  ?>                                               
                                            <tr>
                                                <td><?php echo $lead->lead_id; ?></td>
                                                <td><?php echo $lead->fname ;?></td>
                                                <td><?php echo $lead->lname; ?></td>
                                                <td><?php echo $lead->status; ?></td>
                                                <td>
                                                    <a href="<?php echo URL;?>lead/editLead/<?php echo $lead->lead_id; ?>">
                                                        Edit
                                                    </a> 
                                                    |
                                                    <a href="<?php echo URL; ?>lead/detailLead/<?php echo $lead->lead_id; ?>">
                                                        Detail
                                                    </a>
                                                </td>
                                            </tr>

                                            <?php }  ?>
                                                                                     

                                        </tbody>
                                    </table>  
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
   