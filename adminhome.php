<?php $pjGroup = "1";
 include '/home/dh_d3m65i/gaia-toronto.com/admin/scripts2/app/views/pjLayouts/pjActionProtect.php'; ?>

<?php
include 'header.php';
include 'head.php';
include 'adminNav.php';
?>



     
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Gaia Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="adminhome.php"><i class="fa fa-dashboard"></i> Home</a></li>
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
              
              <h4 style='padding-bottom:15px;'><strong>Upcoming Events</strong></h4>

                <div>

                
                <p>List of upcoming events</p>
                <p>Yoga class</p>
                <p>International DJ</p>
                <p>Special Artist Talk</p>

                </div>
            </div><!--end inner-->
          </div><!--end purple box-->

        </div> <!--col-etc-->
        <!-- ./col -->
        <div class="col-lg-5 col-xs-12" >
          <!-- small box -->
          <div class="small-box bg-black">
            <div class="inner">
              <h4>Public side will include:</h4>
              <br/>
               
               <ul>
                <li>about</li>
                <li>booking system</li>
                <li>payment system</li>
                <li>current and previous events</li>
                <li>gallery</li>
                <li>blog</li>
                <li>job postings</li>
                <li>newsletter</li>
                <li>contact</li>
                <li>future: livestream</li>

               </ul>

               <p>can include social media analysis briefly here</p>

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
        <div class="box box-solid bg-black" style='font-color:white;vertical-align:top;display:inline-block;padding:3px;'>
         

        <h2 style='margin-bottom:0px;margin-left:30%;'>Unsure</h2>
            

              <h3>A few ideas</h3>

              <ul>
                <li>Forum for admins</li>
                <li>financial summary for current year</li>
                <li>upcoming bookings</li>
                <li>incoming messages</li>
                <li>jobs applications</li>

              </ul>



     
            

        </div>
        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-4 connectedSortable">

          <!-- Upcoming Events -->
          <div class="box box-solid bg-purple" style='vertical-align:top;margin-left:5%;padding-right:10%;display:inline-block;padding:3px;'>
            <div class="box-header">
              <h2 style='font-color:white;'>Unpaid Bookings</h2>              

              </div>
            <!-- /.box-header -->



              <div>
                <table>
                  <tr>
                  <th style='width:50%;'>Event</th>
                  <th style='width:50%;'>Date</th>
                  <th style='width:50%;'>Amount Unpaid</th>
                  </tr>

                  <tr>
                    <td style='width:50%;'>Hula Hoop Class</td>
                    <td style='width:50%;'>August 15</td>
                    <td style='width:50%;'>$1,000</td>
                  </tr>

                  <tr>
                    <td style='width:50%;'>Web Dev Networking Event</td>
                    <td style='width:50%;'>August 20</td>
                    <td style='width:50%;'>$2,000</td>
                  </tr>

                  <tr>
                    <td style='width:50%;'>Meditation Session</td>
                    <td style='width:50%;'>August 22</td>
                    <td style='width:50%;'>$1,200</td>
                  </tr>

                </table>
              </div>
            
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

include 'footer.php';

?>