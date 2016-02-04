

        <!--Design Changes starts from here-->

        <div class="page-inner">
            <div class="page-title">
                <h3>Counselor Report</h3>
            </div>
            <div id="main-wrapper">
                <div class="row">
                    <div class="col-md-12">

                        <div class="panel panel-white">



                            <div class="panel-heading clearfix">
                                <form method='post' action='<?php echo URL;?>report/index'>
                                Select Counselor
                                <select name='opt'>

                                    <option name=''>-Select Counselor-</option>
                                    <!-- PHP loop here  -->
                                    <?php foreach ($allCounselor as $data) {?>
                                        <option value='<?php echo $data->user_id ?>'><?php echo $data->fullname ?></option>    
                                    <?php } ?>                                
                                </select>
                                <input type='submit' name='btn_report_counselor' value='Genrate Report' class='btn btn-primary' />
                                </form>
                             </div>




                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table id="dueToday" class="display table" cellspacing="0" width="100%">
                                        <thead>
                                        <th>lead_id</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Interested Course</th>
                                        <th>Semester</th>    
                                        </thead>
                                        <tbody>
                                        <?php if(!is_null($list)){foreach ($list as $data) {?>
                                            <tr>
                                                <td><?php echo $data->lead_id; ?></td>
                                                <td><?php echo $data->fname; ?></td>
                                                <td><?php echo $data->lname; ?></td>
                                                <td><?php echo $data->course_name; ?></td>
                                                <td><?php echo $data->semester; ?></td>
                                            </tr>

                                            <?php }} ?>
                                            

                                        </tbody>
                                    </table>  
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            


           
            
       

        <!--Design Changes ends from here-->
   