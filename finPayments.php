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
        Payments
      </h1>
      <ol class="breadcrumb">
        <li><a href="adminhome.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Payments</li>
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
              
             
<p>Note: currently has option to view receipt for everything, need to update that as it only works for files that we have receipts for.</p>

              <?php

    $dbconn = new Dbconnect;
    $db = $dbconn->getDb();
    $query = "SELECT * FROM finPayments ORDER BY paymentDate DESC";
    $statement = $db->prepare($query);
    $statement->execute();
    $allJobs = $statement->fetchAll(PDO::FETCH_OBJ);

    echo "<table>";
    echo "<tr>";
    echo "<th style='padding-left:1%;padding-right:1%;'>Payment Date</th>";
    echo "<th style='padding-left:1%;padding-right:1%;'>Invoice Date</th>";
    echo "<th style='padding-left:1%;padding-right:1%;'>Payment Method</th>";
    echo "<th style='padding-left:1%;padding-right:1%;'>Complete?</th>";
    echo "<th style='padding-left:1%;padding-right:1%;'>Paid</th>";
    echo "<th style='padding-left:1%;padding-right:1%;'>Remaining</th>";
    echo "<th style='padding-left:1%;padding-right:1%;'>Company</th>";
    echo "<th style='padding-left:1%;padding-right:1%;'>Description</th>";
    echo "<th style='padding-left:1%;padding-right:1%;'>Category</th>";
    echo "<th style='padding-left:1%;padding-right:1%;'>Receipt</th>";
    echo "</tr>";

    foreach($allJobs as $g)
    {
      echo "<tr>";
      echo "<td style='padding-left:1%;padding-right:1%;'>" . $g->paymentDate . "</td>";
      echo "<td style='padding-left:1%;padding-right:1%;'>" . $g->invoiceDate . "</td>";
      echo "<td style='padding-left:1%;padding-right:1%;'>" . $g->methodOfPay . "</td>";
      echo "<td style='padding-left:1%;padding-right:1%;'>" . $g->complete . "</td>";
      echo "<td style='padding-left:1%;padding-right:1%;'>$" . $g->amountPaid . "</td>";
      echo "<td style='padding-left:1%;padding-right:1%;'>$" . $g->amountRemaining . "</td>";
      echo "<td style='padding-left:1%;padding-right:1%;'>" . $g->company . "</td>";
      echo "<td style='padding-left:1%;padding-right:1%;'>" . $g->description . "</td>";
      echo "<td style='padding-left:1%;padding-right:1%;'>" . $g->category . "</td>";
      echo "<td style='padding-left:1%;padding-right:1%;'><a href='" . $g->invoiceURL . "' target='_blank'>View Receipt</a></td>";

      echo "</tr>";
    }

  echo "</table>";


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