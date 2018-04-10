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
        Job Postings
      </h1>
      <ol class="breadcrumb">
        <li><a href="adminhome.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Job Postings</li>
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
              
              <h4 style='padding-bottom:15px;'><strong>Current Job Postings</strong></h4>

              <?php

    $dbconn = new Dbconnect;
    $db = $dbconn->getDb();
    $query = "SELECT * FROM jobPostings ORDER BY dateClose ASC";
    $statement = $db->prepare($query);
    $statement->execute();
    $postedJobs = $statement->fetchAll(PDO::FETCH_OBJ);

    foreach($postedJobs as $g)
    {
      echo "<div style='width:29%;margin-left:1%;border:solid 2px black;border-radius:15px;vertical-align:top;display:inline-block;margin-bottom:20px;padding:5px;'>";
      echo "<div style='font-weight:strong;margin-bottom:5px;font-size:1.3em;'>" . $g->title . "</div>";
      echo "Duration: " . $g->duration . "<br/>";
      echo "Hourly Rate: $" . $g->rate . "<br/>";
      echo "Approximate Weeklly Hours: " . $g->numHours . "<br/>";
      echo "Number of Staff Needed: " . $g->numNeeded . "<br/>";
      echo "Post Date: " . $g->datePosted . "<br/>";
      echo "Close Date: " . $g->dateClose . "<br/>";
      echo "Description of Job:<br/>";
      echo $g->description;
      echo "</div>";

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