<?php $pjGroup = "1";
 include '/home/dh_d3m65i/gaia-toronto.com/admin/scripts2/app/views/pjLayouts/pjActionProtect.php'; ?>

 <?php
include 'header.php';
include 'css/bookingCalendarStyle.php';
include 'head.php';
include 'adminNav.php';
?>


<!--<html xmlns="http://www.w3.org/1999/xhtml">-->



<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Bookings
      </h1>
      <ol class="breadcrumb">
        <li><a href="adminhome.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Bookings</li>
      </ol>
    </section>

<!-- Main content -->
    <section class="content">
      <!-- Small boxes (Next Event) -->
      <div class="row">
        <div class="col-lg-12 col-xs-12">
        	<div class="small-box bg-purple" style='font-color:black;'>
            	<div class="inner">


<?php
/* draws a calendar */
function draw_calendar($month,$year){

	include 'bookingCalendar/config.php';

	// Create connection
	$conn = mysqli_connect($servername, $username, $password,  $dbname);

	// Check connection
	if (!$conn) {
    	die("Connection failed: " . mysqli_connect_error());
	}

	/* draw table */
	$calendar = '<table cellpadding="0" cellspacing="0" class="calendar">';

	/* table headings */
	$calendar.= '<tr class="calendar-row"><td class="calendar-day-head">'.implode('</td><td class="calendar-day-head">',$headings).'</td></tr>';

	/* days and weeks vars now ... */
	$running_day = date('w',mktime(0,0,0,$month,1,$year));
	$days_in_month = date('t',mktime(0,0,0,$month,1,$year));
	$days_in_this_week = 1;
	$day_counter = 0;
	$dates_array = array();

	/* row for week one */
	$calendar.= '<tr class="calendar-row">';

	/* print "blank" days until the first of the current week */
	for($x = 0; $x < $running_day; $x++):
		$calendar.= '<td class="calendar-day-np"> </td>';
		$days_in_this_week++;
	endfor;

	/* keep going with days.... */
	for($list_day = 1; $list_day <= $days_in_month; $list_day++):
		$calendar.= '<td class="calendar-day">';
			/* add in the day number */
			$calendar.= '<div class="day-number">'.$list_day.'</div>';

			/** QUERY THE DATABASE FOR AN ENTRY FOR THIS DAY !!  IF MATCHES FOUND, PRINT THEM !! **/
			$calendar.= str_repeat('<p> </p>',2);
			$current_epoch = mktime(0,0,0,$month,$list_day,$year);
			
			$sql = "SELECT * FROM $tablename WHERE $current_epoch BETWEEN start_day AND end_day";
						
			$result = mysqli_query($conn, $sql);
    		
    		if (mysqli_num_rows($result) > 0) {
    			// output data of each row
    			while($row = mysqli_fetch_assoc($result)) {
					if($row["canceled"] == 1) $calendar .= "<font color=\"grey\"><s>";
    				$calendar .= "<b>" . $row["eventName"] . "</b><br>ID: " . $row["id"] . "<br>" . $row["name"] . "<br>" . $row["phone"] . "<br>";
    				if($current_epoch == $row["start_day"] AND $current_epoch != $row["end_day"]) {
    					$calendar .= "Start: " . sprintf("%02d:%02d", $row["start_time"]/60/60, ($row["start_time"]%(60*60)/60)) . "<br>";
    				}
    				if($current_epoch == $row["start_day"] AND $current_epoch == $row["end_day"]) {
    					$calendar .= "Start: " . sprintf("%02d:%02d", $row["start_time"]/60/60, ($row["start_time"]%(60*60)/60)) . "<br>";
    				}
    				if($current_epoch == $row["end_day"]) {
    					$calendar .= "End: " . sprintf("%02d:%02d", $row["end_time"]/60/60, ($row["end_time"]%(60*60)/60)) . "<br>";
    				}
    				if($current_epoch != $row["start_day"] AND $current_epoch != $row["end_day"]) {
	    				$calendar .= "All Day Booking<br>";
	    			}
					if($row["canceled"] == 1) $calendar .= "</s></font>";
    			}
			} else {
    			$calendar .= "<br/><br/><br/>";
			}
			
		$calendar.= '</td>';
		if($running_day == 6):
			$calendar.= '</tr>';
			if(($day_counter+1) != $days_in_month):
				$calendar.= '<tr class="calendar-row">';
			endif;
			$running_day = -1;
			$days_in_this_week = 0;
		endif;
		$days_in_this_week++; $running_day++; $day_counter++;
	endfor;

	/* finish the rest of the days in the week */
	if($days_in_this_week < 8):
		for($x = 1; $x <= (8 - $days_in_this_week); $x++):
			$calendar.= '<td class="calendar-day-np"> </td>';
		endfor;
	endif;

	/* final row */
	$calendar.= '</tr>';

	/* end the table */
	$calendar.= '</table>';
	
	mysqli_close($conn);
	
	/* all done, return result */
	return $calendar;
}

include 'bookingCalendar/config.php';

$d = new DateTime(date("Y-m-d"));
echo '<h3>' . $months[$d->format('n')-1] . ' ' . $d->format('Y') . '</h3>';
echo draw_calendar($d->format('m'),$d->format('Y'));

$d->modify( 'first day of next month' );
echo '<h3>' . $months[$d->format('n')-1] . ' ' . $d->format('Y') . '</h3>';
echo draw_calendar($d->format('m'),$d->format('Y'));

$d->modify( 'first day of next month' );
echo '<h3>' . $months[$d->format('n')-1] . ' ' . $d->format('Y') . '</h3>';
echo draw_calendar($d->format('m'),$d->format('Y'));

?>

</div>
</div>
</div>
</div>
</section>
</div>
<?php

include 'footer.php';

?>