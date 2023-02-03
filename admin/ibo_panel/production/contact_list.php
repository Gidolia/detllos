<?php 
include "config.php";
top_structure('Contact List', 0, 'warning', 'Success', 'done');
sidebar();
header_bar();?>

  
 <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Contact List</h3>
              </div>
            </div>

            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Contact Lists</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="card-box table-responsive"> 
                     <table id="datatable-buttons" class="table table-striped jambo_table" >
                      <thead>
                        <tr class="headings">
                        <th>S.No</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Company Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Job Title</th>
                        <th>Service</th>
                        <th>Comment</th>
                        <th>Date / Time</th>
                        <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php 
                                $au=1;
                                $e="SELECT * FROM `contact` ORDER BY `c_id` DESC";
                                $d=$con->query($e);
                                $au="0";
                                while($R=$d->fetch_assoc()){ 
                            ?>
                            <tr>
                                <td>
                                    <?php echo ++$au;?>
                                </td>        
                                <td>
                                   <?php echo $R[f_name];?>
                                </td>
                                <td>
                                  <?php echo $R[l_name];?>
                                </td>
                                <td>
                                  <?php echo $R[company_name];?>
                                </td>
                                <td>
                                  <?php echo $R[email];?>
                                </td>
                                <td>
                                  <?php echo $R[phone];?>
                                </td>
                                <td>
                                  <?php echo $R[job_title];?>
                                </td>
                                <td>
                                  <?php echo $R[service];?>
                                </td>
                                <td>
                                  <?php echo $R[comment];?>
                                </td>
                                <td>
                                  <?php echo $R[r_date]."/".$R[r_time];?>
                                </td>
                                <td>
                                  <a href="delete_contact.php?id=<?php echo $R[c_id]?>"><button class="btn btn-danger">Delete</button></a>
                                </td>
                                 
                                </tr>
                                <?php      
                                } ?>
                      </tbody>
                    </table>
                    </div> 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
<?php 
bottom_structure('ARZOO');

?>