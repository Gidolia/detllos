<?php 
include "config.php";
top_structure('Index', 0, 'warning', 'Success', 'done');
sidebar();
header_bar();?>

  
        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
            
              
            
              
              
            <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-6">
                <div class="tile-stats">
                  
                  <div class="count"><i class="fa fa-user"></i> <?php
                 $fvfdv="SELECT * FROM `contact`";
                 $dc=$con->query($fvfdv);
                 echo $dc->num_rows;
                 ?> </div>
                  <h3>Total Contacted</h3>
                </div>
              </div>
              
            
            
           
              
            </div>
          </div>
          
         
          
          
          
          
        </div>
        <!-- /page content -->

                
            
            <!-- Main content -->
            
        </div>
    </div>
  

<?php 
bottom_structure('ToyMyBoy');

?>