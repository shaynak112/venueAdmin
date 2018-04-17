 <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <a href='adminhome.php'><p>K-Kitty</p>
          <p>Team Cat</p></a>
        </div>
      </div>

 <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Navigation</li>
        


        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-music"></i>
            <span>HR</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href='HREmployeeList.php'><i class='fa fa-circle-o'></i>Employee Information</a></li>
              <li><a href='HRJobPositions.php'><i class='fa fa-circle-o'></i>List of Jobs</a></li>
              <li><a href='HRJobPostings.php'><i class='fa fa-circle-o'></i>Job Postings</a></li>
              <li><a href='HRAddJob.php'><i class='fa fa-circle-o'></i>Add A Job</a></li>
            <li><a href="eventsAll.php"><i class="fa fa-circle-o"></i>Job Applications</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-eyedropper"></i>
            <span>Bookings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="GLAddToGuestlist.php"><i class="fa fa-pencil"></i>Add or Modify A Booking</a></li>
            <li><a href='GLAdminAddToGuestlist.php'><i class='fa fa-folder'></i>Daily Bookings</a></li>
            <li><a href='viewBookings.php'><i class='fa fa-folder-o'></i>View Bookings</a></li>
            <li><a href='GLguestlists.php'><i class='fa fa-handshake-o'></i>Paid Bookings</a></li>
            <li><a href='GLguestlists.php'><i class='fa fa-gavel'></i>Unpaid Bookings</a></li>
          </ul>
        </li>

        <li class='treeview'>
          <a href='#'>
            <i class='fa fa-calculator'></i>
            <span>Payroll</span>
            <span class='pull-right-container'>
              <i class='fa fa-angle-left pull-right'></i>
            </span>
          </a>
          <ul class='treeview-menu'>
            <li><a href='financeSummary.php'><i class='fa fa-circle-o'></i>Current Pay Period</a></li>
            <li><a href='financeNew.php'><i class='fa fa-circle-o'></i>Previous Pay Periods</a></li>
            <li><a href='financeUpdate.php'><i class='fa fa-circle-o'></i>Payouts</a></li>
            <li><a href='financeUpdate.php'><i class='fa fa-circle-o'></i>Returned Payments</a></li>
          </ul>
        </li>

        <li class='treeview'>
          <a href='#'>
            <i class='fa fa-calendar'></i>
            <span>Scheduling</span>
            <span class='pull-right-container'>
              <i class='fa fa-angle-left pull-right'></i>
            </span>
          </a>
          <ul class='treeview-menu'>
            <li><a href='financeSummary.php'><i class='fa fa-circle-o'></i>Weekly Schedule</a></li>
            <li><a href='financeNew.php'><i class='fa fa-calendar-minus-o'></i>Previous Weekly Schedule</a></li>
            <li><a href='financeUpdate.php'><i class='fa fa-calendar-check-o'></i>Availability</a></li>
            <li><a href='financeUpdate.php'><i class='fa fa-calendar-plus-o'></i>Add Shifts</a></li>
            <li><a href='financeUpdate.php'><i class='fa fa-check-square'></i>Schedule</a></li>
          </ul>
        </li>

        <li class='treeview'>
          <a href='#'>
            <i class='fa fa-music'></i>
            <span>AfterHours</span>
            <span class='pull-right-container'>
              <i class='fa fa-angle-left pull-right'></i>
            </span>
          </a>
          <ul class='treeview-menu'>
            <li><a href='financeSummary.php'><i class='fa fa-circle-o'></i>Special Events</a></li>
            <li><a href='financeNew.php'><i class='fa fa-circle-o'></i>Events</a></li>
            <li><a href='financeUpdate.php'><i class='fa fa-circle-o'></i>Guestlists</a></li>
          </ul>
        </li>

        <li class='treeview'>
          <a href='#'>
            <i class='fa fa-calculator'></i>
            <span>Financials</span>
            <span class='pull-right-container'>
              <i class='fa fa-angle-left pull-right'></i>
            </span>
          </a>
          <ul class='treeview-menu'>
            <li><a href='financeUpdate.php'><i class='fa fa-circle-o'></i>Summary</a></li>
            <li><a href='financeSummary.php'><i class='fa fa-circle-o'></i>After Hours</a></li>
            <li><a href='financeNew.php'><i class='fa fa-circle-o'></i>Daytime Events</a></li>
            <li><a href='financeUpdate.php'><i class='fa fa-circle-o'></i>Evenings</a></li>
            <li><a href='financeUpdate.php'><i class='fa fa-circle-o'></i>Daily</a></li>
            <li><a href='financeUpdate.php'><i class='fa fa-circle-o'></i>Monthly</a></li>
            <li><a href='financeUpdate.php'><i class='fa fa-circle-o'></i>Yearly</a></li>
            <li><a href='finPayments.php'><i class='fa fa-circle-o'></i>Payments</a></li>
          </ul>
        </li>

        <li class='treeview'>
          <a href='#'>
            <i class='fa fa-calculator'></i>
            <span>Other</span>
            <span class='pull-right-container'>
              <i class='fa fa-angle-left pull-right'></i>
            </span>
          </a>
          <ul class='treeview-menu'>
            <li><a href='financeSummary.php'><i class='fa fa-mobile-phone'></i>Contacts</a></li>
            <li><a href='financeNew.php'><i class='fa fa-newspaper-o'></i>Newsletter</a></li>
            <li><a href='financeUpdate.php'><i class='fa fa-circle-o'></i>Social Media Analysis</a></li>
            <li><a href='financeUpdate.php'><i class='fa fa-users'></i>Partners</a></li>
            <li><a href='financeUpdate.php'><i class='fa fa-circle-o'></i>Public Website</a></li>
            <li><a href='http://webmail.gaia-toronto.com/'><i class='fa fa-envelope'></i>Email</a></li>
          </ul>
        </li>           



        <li>
          <a href='otherEvents.php'>
            <i class='fa fa-ticket'></i> <span>Logout</span>
            <span class='pull-right-container'>
            </span>
          </a>
        </li>


        

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>


