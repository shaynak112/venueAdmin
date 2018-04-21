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
        Contacts
      </h1>
      <ol class="breadcrumb">
        <li><a href="adminhome.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Contacts</li>
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
              
              <h4 style='padding-bottom:15px;'><strong>Contacts</strong></h4>

              <?php

    $dbconn = new Dbconnect;
    $db = $dbconn->getDb();
    $query = "SELECT * FROM memberlogin_members WHERE company_name IS NOT NULL AND status='T' ORDER BY company_name, last_name, first_name ASC";
    $statement = $db->prepare($query);
    $statement->execute();
    $allContacts = $statement->fetchAll(PDO::FETCH_OBJ);

    foreach($allContacts as $g)
    {
      echo $g->first_name . " " . $g->last_name . ", " . $g->company_name . "<br/>";
      echo $g->email . "    " . $g->phone . "<br/>";
      echo $g->address . ", " . $g->city . ", " . $g->state . "  " . $g->zip . "<br/><br/>";
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