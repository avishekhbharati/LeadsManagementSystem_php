
        <div class="page-inner">
            <div class="page-title">
                <h3>Lead Status Report</h3>
            </div>
            <div id="main-wrapper">
                <div class="row">
                    <div class="col-md-12">

                        <div class="panel panel-white">                           
                        <form action="<?php echo URL; ?>report/leadByStatus" method="POST">  
              
                            <div class="panel-heading clearfix">
                                Lead Status
                                    <select name='status'>
                                        <option value=''>-Select One-</option>
                                        <option value='active'>Active</option>
                                        <option value='expired'>Expired</option>
                                        <option value='dismissed'>Dismissed</option>
                                        <option value='postponed'>Postponed</option>
                                    </select>
                                    <input class="btn btn-success" name='btn_submit' type="submit" value="Generate Report" />
                            </div>
                            </form>
                            
                            
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table id="dueToday" class="display table" cellspacing="0" width="100%">
                                        <thead>
                                            <th>SNo</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Interested Course</th>
                                            <th>Semester</th>    
                                            <th>Registered_date</th>
                                            <th>Status</th>                                               
                                        </thead>
                                        

                                        <tbody>
                                           <?php $i = 1; if(! is_null($list)){ foreach ($list as $data) {?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php  echo $data->fname; ?></td>
                                                <td><?php  echo $data->lname; ?></td>
                                                <td><?php  echo $data->course_name; ?></td>
                                                <td><?php  echo $data->semester; ?></td>
                                                <td><?php  echo $data->date; ?></td>
                                                <td><?php echo $data->status; ?></td>

                                                   <?php $i = $i+1; ?>                                          
                                            </tr>

                                            <?php }} ?>
                                        </tbody>
                                    </table>  
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div><!-- Main Wrapper -->
            
        </div><!-- Page Inner -->
    </main><!-- Page Content -->
    

    