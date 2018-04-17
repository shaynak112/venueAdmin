<?php $pjGroup = "1";
 include '/home/dh_d3m65i/gaia-toronto.com/admin/scripts2/app/views/pjLayouts/pjActionProtect.php'; ?>

<?php
include 'header.php';
include 'head.php';
include 'adminNav.php';
include 'dbConnect.php';
?>



     
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Budget
      </h1>
      <ol class="breadcrumb">
        <li><a href="adminhome.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Budget</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Next Event) -->
      <div class="row">
        <div class="col-lg-12 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-purple" style='font-color:black;'>
            <div class="inner">
              
             
<p>Very much in progress.</p>

              <?php

    $dbconn = new Dbconnect;
    $db = $dbconn->getDb();
    $query = "SELECT * FROM finStaffHourly";
    $statement = $db->prepare($query);
    $statement->execute();
    $costStaff = $statement->fetchAll(PDO::FETCH_OBJ);

    $cashier = 0;
    $bar = 0;
    $security = 0;
    $door = 0;
    $coat = 0;
    $maint = 0;
    $sound = 0;
    $warehouse = 0;
    $foodSup = 0;
    $securitySup = 0;

    foreach($costStaff as $g)
    {
     $cost = $g->cashierNumStaff * $g->cashierHours * $g->cashierRate;
     $cashier = $cashier + $cost;
     $cost = $g->barNumStaff * $g->barHours * $g->barRate;
     $bar = $bar + $cost;
     $cost = $g->securityNumStaff * $g->securityHours * $g->securityRate;
     $security = $scurity + $cost;
     $cost = $g->doorNumStaff * $g->doorHours * $g->doorRate;
     $door = $door + $cost;
     $cost = $g->coatNumStaff * $g->coatHours * $g->coatRate;
     $coat = $coat + $cost;
     $cost = $g->maintNumStaff * $g->maintHours * $g->maintRate;
     $maint = $maint + $cost;
     $cost = $g->soundNumStaff * $g->soundHours * $g->soundRate;
     $sound = $sound + $cost;
     $cost = $g->warehouseNumStaff * $g->warehouseHours * $g->warehouseRate;
     $warehouse = $warehouse + $cost;
     $cost = $g->foodSupNumStaff * $g->foodSupHours * $g->foodSupRate;
     $foodSup = $foodSup + $cost;
     $cost = $g->securitySupNumStaff * $g->securitySupHours * $g->securitySupRate;
     $securitySup = $securitySup + $cost;

    }



    ?>

<br/>
    <h4>Type of Event ex Daytime</h4>
<br/>
<br/>
    <table>

      <tr>
        <th style='padding-left:1%;padding-right:2%;'></th>
        <th style='padding-left:1%;padding-right:2%;'>Week 1</th>
        <th style='padding-left:1%;padding-right:2%;'>Week 2</th>
        <th style='padding-left:1%;padding-right:2%;'>Week 3</th>
        <th style='padding-left:1%;padding-right:2%;'>Week 4</th>
        <th style='padding-left:1%;padding-right:2%;'>Total</th>
      </tr>

      <tr>
        <td style='padding-left:1%;padding-right:2%;'>Staff</td>
        <td style='padding-left:1%;padding-right:2%;'>$1,050.00</td>
        <td style='padding-left:1%;padding-right:2%;'>$1,050.00</td>
        <td style='padding-left:1%;padding-right:2%;'>$1,050.00</td>
        <td style='padding-left:1%;padding-right:2%;'>$1,050.00</td>
        <td style='padding-left:1%;padding-right:2%;'>$4,200.00</td>
      </tr>



    </table>

               
            </div><!--end inner-->
          </div><!--end purple box-->

        </div> <!--col-etc-->
        <!-- ./col -->
        
       
      </div>
      <!-- /.row -->

      
      

      

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

  
</section>
</div>

        



<?php

include 'footer.php';

?>