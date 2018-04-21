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
        Add A Job
      </h1>
      <ol class="breadcrumb">
        <li><a href="adminhome.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add A Jobs</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Next Event) -->
      <div class="row">
        <div class="col-lg-12 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-purple" style='font-color:black;margin-left:10%;margin-right:10%;'>
            <div class="inner" '>
              
              <h4 style='padding-bottom:15px;'><strong>Add A New Job</strong></h4>



              <form name="addJobPosting" class="form-horizontal" enctype="multipart/form-data" method="post" action="" style='padding:15px;'>

      <div>
      <label class="control-label" for="title">Job Title: </label>
      <input class="form-control" id="title" type="text" name="title"/>
      </div>

      <div>
      <label class="control-label" for="datePosted">Date To Post - must be in format similar to below: <br/>2017-08-26 22:00:00</label>
      <input class="form-control" id="datePosted" type="text" name="datePosted"/>
      </div>

      <div>
      <label class="control-label" for="dateClose">Date To Close - must be in format similar to below: <br/>2017-08-26 22:00:00</label>
      <input class="form-control" id="dateClose" type="text" name="dateClose"/>
      </div>

      <div>
      <label class="control-label" for="rate">Hourly Rate: </label>
      <input class="form-control" id="rate" type="text" name="rate"/>
      </div>

      <div>
      <label class="control-label" for="numHours">Approximate Weekly Hours: </label>
      <input class="form-control" id="numHours" type="text" name="numHours"/>
      </div>

      <div>
      <label class="control-label" for="numNeeded">Number of Employees Needed: </label>
      <input class="form-control" id="numNeeded" type="text" name="numNeeded"/>
      </div>

      <br/>

      <label>Duration</label>
      <div class="radio">
      <label><input type="radio" name = 'duration' value='part time'>part time</label>
      </div>
      <div class="radio">
      <label><input type="radio" name = 'duration' value='contract'>contract</label>
      </div>
      <div class="radio">
      <label><input type="radio" name = 'duration' value='full time'>full time</label>
      </div>

      <br/>

      <div class="form-group" style='margin-left:5%;'>
      <label for="description">Description (please put br tag in between every line): </label>
      <textarea class="form-control" rows="5" id="description" name="description"></textarea>
      </div>

      
      <br/>

      <input class="btn btn-primary" type="submit" value="Add Job" name="addNewJob" id="addNewJob" />
       <br/>

    </form>



<?php

    //on submission of form
    if(isset($_POST["addNewJob"]))
    {
        //database connection
        $conn1 = new Dbconnect;
        $db1 = $conn1->getDb();

        //$val = new Validate();
          
        $title = $_POST['title'];
        $rate = $_POST['rate'];
        $numHours = $_POST['numHours'];
        $numNeeded = $_POST['numNeeded'];
        $duration = $_POST['duration'];
        $datePosted = $_POST['datePosted'];
        $dateClose = $_POST['dateClose'];
        $description = $_POST['description'];

    
    //database query
        $query1 = "INSERT INTO jobPostings (title, rate, numHours, numNeeded, duration, datePosted, dateClose, description) VALUES (:title, :rate, :numHours, :numNeeded, :duration, :datePosted, :dateClose, :description)";



      $statement1 = $db1->prepare($query1);
      
   

      $statement1->bindValue(':title', $title, PDO::PARAM_STR);
      $statement1->bindValue(':rate', $rate, PDO::PARAM_INT);
      $statement1->bindValue(':numHours', $numHours, PDO::PARAM_INT);
      $statement1->bindValue(':numNeeded', $numNeeded, PDO::PARAM_INT);
      $statement1->bindValue(':duration', $duration, PDO::PARAM_STR);
      $statement1->bindValue(':datePosted', $datePosted, PDO::PARAM_STR);
      $statement1->bindValue(':dateClose', $dateClose, PDO::PARAM_STR);
      $statement1->bindValue(':description', $description, PDO::PARAM_STR);


      

      $statement1->execute();

      echo "Job Posting Added.";

      $conn1=null;
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