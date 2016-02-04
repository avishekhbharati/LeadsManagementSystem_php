
        <div class="page-inner">
            <div class="page-title">
                <h3>Report by Date, Counselor, Semester</h3>
            </div>
            <div id="main-wrapper">
                <div class="row">
                    <div class="col-md-12">

                        <div class="panel panel-white">                           
                            
                            <form method='get' action='<?php echo URL ?>report/customReport'>
                                <div class="panel-heading clearfix">
                                    Select Date
                                    <input type='date' name='date' />
                                    | Select Semester 
                                    <select name='semester'>
                                        <option value=''>-Select semster-</option>
                                        <option value='autumn'>Autumn</option>
                                        <option value='spring'>Spring</option>
                                    </select>
                                    | Select Counselor               
                                     <select name='counselor'>
                                        <option value=''>-Select Counselor-</option>
                                        <!-- PHP loop here  -->
                                        <?php foreach ($allCounselor as $data) {?>
                                            <option value='<?php echo $data->user_id ?>'><?php echo $data->fullname ?></option>    
                                        <?php } ?>                                
                                    </select>
                                    <input type='submit' class='btn btn-success' name='btn_submit'>
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
                                                <th>Year</th>
                                        </thead>
                                        
                                        <tbody>
                                            <?php $i=1; if(!is_null($customData)){ foreach ($customData as $data) { ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td> <?php echo $data->fname; ?> </td>
                                                    <td> <?php echo $data->lname; ?> </td>
                                                    <td> <?php echo $data->course_name; ?> </td>
                                                    <td> <?php echo $data->semester; ?> </td>
                                                    <td> <?php echo $data->date; ?> </td>
                                                   
                                                </tr>


                                            <?php $i++; }} ?>


                                           

                                        </tbody>
                                    </table>  
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div><!-- Main Wrapper -->
            
    

