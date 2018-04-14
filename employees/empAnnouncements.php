<?php $pjGroup = "1,4";
 include '/home/dh_d3m65i/gaia-toronto.com/admin/scripts2/app/views/pjLayouts/pjActionProtect.php'; ?>

<?php
include '../header.php';
include '../head.php';
include 'empNav.php';
include '../dbConnect.php';
?>



     
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Announcements
      </h1>
      <ol class="breadcrumb">
        <li><a href="emphome.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Announcements</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Next Event) -->
      <div class="row">
        <div class="col-lg-12 col-xs-12">
          <!-- small box -->
          <div class="small-box">
            <div class="inner">

              <br/>
<?php

               $dbconn = new Dbconnect;
              $db = $dbconn->getDb();
              $query = "SELECT * FROM empAnnouncements ORDER BY announceDate DESC";
              $statement = $db->prepare($query);
              $statement->execute();
              $announce = $statement->fetchAll(PDO::FETCH_OBJ);

              foreach($announce as $g)
              {
                echo "<div class='col-lg-5 col-xs-12 bg-purple' style='margin-bottom:15px;padding-left:2%;padding-right:2%;border-radius:20px;margin-left:2%;margin-right:2%;'>";
                echo "<h4>" . $g->announceTitle . "</h4>";
                echo $g->announceUser . " on " . $g->announceDate . "<br/><br/>";
                echo $g->announcement;
                echo "<br/>";
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

include '../footer.php';

?>