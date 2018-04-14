<?php $pjGroup = "1,4";
 include '/home/dh_d3m65i/gaia-toronto.com/admin/scripts2/app/views/pjLayouts/pjActionProtect.php'; ?>

<?php
include '../header.php';
include '../head.php';
include 'empNav.php';
?>



     
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Gaia Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="emphome.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Gaia Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Next Event) -->
      <div class="row">
        <div class="col-lg-6 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-purple" style='font-color:black;'>
            <div class="inner">
              
              <h4 style='padding-bottom:15px;'><strong>Announcements Events</strong></h4>

                <div>

                
                <p>Announcements</p>
                <p>Big things happening next week</p>
                <p>Availability due!</p>

                </div>
            </div><!--end inner-->
          </div><!--end purple box-->

        </div> <!--col-etc-->
        <!-- ./col -->
        <div class="col-lg-5 col-xs-12" >
          <!-- small box -->
          <div class="small-box bg-black">
            <div class="inner">
              <h4>Schedule</h4>
              <br/>
               
               <ul>
                <li>next shift</li>
                <li>next pay</li>

               </ul>


            </div><!--end inner div-->
          </div><!--end small-box-->
        </div><!-- ./col lg 6 -->
        
        <!-- ./col -->
      </div>
      <!-- /.row -->

      <div class='row'>
        <div class='col-lg-12 bg-grey'>
        <div style='width:100%;border:3px solid purple;border-radius:25px;text-align:center;height:10px;background-color:purple;margin-bottom:15px;'></div>
        </div>
      </div>
      

      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
        <div class="box box-solid bg-black" style='font-color:white;vertical-align:top;display:inline-block;padding:5px;'>
         

        <h2 style='margin-bottom:0px;margin-left:30%;'>Pages That Work!</h2>
            
            <p>A lot of the pages in the nav menu are in progress. The ones listed here are at least started!</p>

              <h3>Pages started</h3>

              <ul>
                <li>Announcements</li>
                <li>HR - HR Contacts</li>

              </ul>



     
            

        </div>
        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-4 connectedSortable">

          <!-- Upcoming Events -->
          <div class="box box-solid bg-purple" style='vertical-align:top;margin-left:5%;padding-right:10%;display:inline-block;padding:3px;'>
            <div class="box-header">
              <h2 style='font-color:white;'>Connect/Contact Us</h2>              

              </div>
            <!-- /.box-header -->

              <ul>
                <li>social media</li>
                <li>our contacts</li>


              </ul>

            
              <br/>
              <br/>
            


          </div>
          <!-- /.box -->

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

  
</section>
</div>

        



<?php

include '../footer.php';

?>