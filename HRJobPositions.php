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
        Employees
      </h1>
      <ol class="breadcrumb">
        <li><a href="adminhome.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Employees</li>
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
              
              <h4 style='padding-bottom:15px;'><strong>Employees</strong></h4>

              <?php

    $dbconn = new Dbconnect;
    $db = $dbconn->getDb();
    $query = "SELECT * FROM jobPositions ORDER BY duration, position ASC";
    $statement = $db->prepare($query);
    $statement->execute();
    $allJobs = $statement->fetchAll(PDO::FETCH_OBJ);

    echo "<table>";
    echo "<tr>";
    echo "<th>Position</th>";
    echo "<th>Hourly Rate</th>";
    echo "<th>Duration</th>";
    echo "<th>Requirements</th>";
    echo "</tr>";

    foreach($allJobs as $g)
    {
      echo "<tr>";
      echo "<td>" . $g->position . "</td>";
      echo "<td>$" . $g->rate . "</td>";
      echo "<td>" . $g->duration . "</td>";
      echo "<td>" . $g->requirements . "</td>";
      echo "</tr>";
    }




    ?>

               
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