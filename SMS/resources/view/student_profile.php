<div class="row user">
  <div class="col-md-12">
    <div class="profile">
      <div class="info"><img class="user-img" src="<?php echo $student_passport; ?>">
        <h4><?php echo $surname ." " .$lastname; ?></h4>
        <p>Student</p>
      </div>
      <div class="cover-image"></div>
    </div>
  </div>
  <div class="col-md-9">
    <div class="tab-content">
      <div class="tab-pane active" id="user-timeline">
        <div class="timeline">
          <div class="post">
            <div class="post-media"><a href="#"></a>
              <div class="content"> 
               <h5><a href="#">Class: <?php echo $student_class; ?></a></h5>
			  
                <h5><a href="#">Reg Number: <?php echo $student_reg_number; ?></a></h5>
				<h5><a href="#">Father Name: <?php echo $father_name; ?></a></h5>
				<h5><a href="#">Mother Name: <?php echo $mother_name; ?></a></h5>
				<h5><a href="#">Father Phone No: <?php echo $father_phone; ?></a></h5>
                <h5><a href="#">Birthday: <?php echo $student_dob ." " .$student_mob ." " .$student_yob; ?></a></h5>
                <h5><a href="#">Sex: <?php echo $student_gender; ?></a></h5>
                <h5><a href="#">State: <?php echo $student_state; ?></a></h5>
				<h5><a href="#">Student Country: <?php echo $student_nationality; ?></a></h5>
				
                <h5><a href="#">Term: <?php echo $current_term; ?></a></h5>
                <h5><a href="#">Session: <?php echo $current_session; ?></a></h5>
				<h5><a href="#">Previous School Details :- <?php echo $previous_school; ?></a></h5>
				 <h5><a href="#">Other Emergency/Nearset Contact No.- <?php echo $nearest_contact1." , " .$nearest_contact2." , " .$nearest_contact3; ?></a></h5>
                <p class="text-muted"><small>Date Registered / Addmission Date: <?php echo $student_reg_day ." " .$student_reg_month ." " .$student_reg_year; ?></small></p>
              </div>
            </div>
            <div class="post-content">
              <!--<p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,	quis tion ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>-->
            </div>
          </div>

        </div>
      </div>

      <div class="tab-pane fade" id="user-settings">
        <div class="card user-settings">
          <h4 class="line-head">Settings</h4>
          <form>
            <div class="row mb-20">
              <div class="col-md-4">
                <label>First Name</label>
                <input class="form-control" type="text">
              </div>
              <div class="col-md-4">
                <label>Last Name</label>
                <input class="form-control" type="text">
              </div>
            </div>
            <div class="row">
              <div class="col-md-8 mb-20">
                <label>Email</label>
                <input class="form-control" type="text">
              </div>
              <div class="clearfix"></div>
              <div class="col-md-8 mb-20">
                <label>Mobile No</label>
                <input class="form-control" type="text">
              </div>
              <div class="clearfix"></div>
              <div class="col-md-8 mb-20">
                <label>Office Phone</label>
                <input class="form-control" type="text">
              </div>
              <div class="clearfix"></div>
              <div class="col-md-8 mb-20">
                <label>Home Phone</label>
                <input class="form-control" type="text">
              </div>
            </div>
            <div class="row mb-10">
              <div class="col-md-12">
                <button class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i> Save</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card p-0">
      <ul class="nav nav-tabs nav-stacked user-tabs">
        <li class="active"><a href="#user-timeline" data-toggle="tab">Timeline</a></li>
        <li><a href="#user-settings" data-toggle="tab">Settings</a></li>
      </ul>
    </div>
  </div>
</div>