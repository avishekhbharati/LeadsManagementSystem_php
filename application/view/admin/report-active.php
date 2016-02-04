
        <div class="page-inner">
            <div class="page-title">
                <h3>Active Leads Report</h3>
            </div>
            <div id="main-wrapper">
                <div class="row">
                    <div class="col-md-12">

                        <div class="panel panel-white">
                            <form method='POST' action='<?php echo URL ?>report/activeReport'>
                            <div class="panel-heading clearfix">
                                Select Year
                                
                                    <select name='year'>
                                    <option name= '2013'>2013</option>
                                    <option name= '2014'>2014</option>
                                    <option name='2015'>2015</option>
                                    <option name='2016'>2016</option>
                                    <option name='2017'>2017</option>
                                    </select>
                                    | Select Semester
                                    <select name='semester'>
                                    <option name='autumn'>Autumn</option>
                                    <option name='spring'>Spring</option>
                                    </select>
                                    <input type='submit' class="btn btn-success" name='btn_report_activeLead' type="button">
                               
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
                                                <th> status</th>
                                                
                                        </thead>
                                        
                                        <tbody>
                                            <?php $i = 1; if(! is_null($list)){ foreach ($list as $data) {?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php  echo $data->fname; ?></td>
                                                <td><?php  echo $data->lname; ?></td>
                                                <td> <?php echo $data->course_name; ?></td>
                                                <td> <?php echo $data->status; ?></td>
                                                   <?php $i = $i+1; ?>                                          
                                            </tr>

                                            <?php }} ?>
                                        </tbody>
                                    </table>  
                                </div>
                                
                               <!--  <h1>Total Interested Leads: <span style="font-size: 40px;">60 </span></h1>
                                <h1>Total Enrolled Leads: <span style="font-size: 40px;">40</span></h1>
                                     -->
                                
                            </div>
                        
                            
                            
                            
                        </div>

                    </div>

                </div>
            </div><!-- Main Wrapper -->
            
        </div><!-- Page Inner -->
    </main><!-- Page Content -->

