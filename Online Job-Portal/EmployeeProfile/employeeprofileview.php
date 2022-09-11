<link href="css/styles.css" rel="stylesheet" />
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<?php 

  include("connection.php");

  // write query for all pizzas
  $sql = "SELECT * FROM `job_seeker`   ORDER BY `JOB_SEEKER_ID` DESC LIMIT 1";

  // get the result set (set of rows)
  $result = mysqli_query($conn, $sql);

  // fetch the resulting rows as an array
  $online_job_portal = mysqli_fetch_all($result, MYSQLI_ASSOC);

  // free the $result from memory (good practise)
  mysqli_free_result($result);

  // close connection
  mysqli_close($conn);


?>
<!------ Include the above in your HEAD tag ---------->

<head>
  <title>Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>


<hr>
<div class="container bootstrap snippet">
    <div class="row">
  		<div class="col-sm-10"><h1><p class="text-uppercase text-light"><strong>profile</strong></p></h1></div>
    	<div class="col-sm-2"><a href="/users" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="assets/profile_icon.png"></a></div>
    </div>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
              

      <div class="text-center">
        <img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="avatar img-circle img-thumbnail" alt="avatar">
      </div></hr><br>

               
          
          
          
          <ul class="list-group">
            <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Completed Works</strong></span> 0</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Rating</strong></span> 1/10</li>           
          </ul> 
               
          
          
        </div><!--/col-3-->
    	<div class="col-sm-9">
            

              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                  <form class="form" action="update.php" method="post" id="registrationForm">
                      <?php foreach($online_job_portal as $job_portal){ ?>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="inputlg"><h4>Selected Job</h4></label>
                              <div style="color:greenyellow; font-size:160%;"><i><?php echo htmlspecialchars($job_portal['JOB_NAME']); ?></i></div>
                          </div>
                      </div>

                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="inputlg"><h4>Selected Salary</h4></label>
                              <div style="color:greenyellow; font-size:160%;"><i><?php echo htmlspecialchars($job_portal['MINIMUM_SALARY']); ?></i></div>                             
                              </select>
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="Email"><h4>Email</h4></label>
                              <div style="color:greenyellow; font-size:160%;"><i><?php echo htmlspecialchars($job_portal['EMAIL']); ?></i></div>
                          </div>
                      </div>

                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>Phone No.</h4></label>
                              <div style="color:greenyellow; font-size:160%;"><i><?php echo htmlspecialchars($job_portal['PHN_NO']); ?></i></div>
                          </div>
                      </div>
          
                      
                      
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="Address"><h4>Address</h4></label>
                              <div style="color:greenyellow; font-size:160%;"><i><?php echo htmlspecialchars($job_portal['ADDRESS']); ?></i></div>
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="City"><h4>City</h4></label>
                              <div style="color:greenyellow; font-size:160%;"><i><?php echo htmlspecialchars($job_portal['CITY']); ?></i></div>
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="experience"><h4>Experience</h4></label>
                              <div style="color:greenyellow; font-size:160%;"><i><?php echo htmlspecialchars($job_portal['EXPERIENCE']); ?></i></div>
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="Qualification"><h4>Qualification</h4></label>
                              <div style="color:greenyellow; font-size:160%;"><i><?php echo htmlspecialchars($job_portal['QUALIFICATION']); ?></i></div>
                          </div>
                      </div>
                      
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<a href="./employeeprofile.php" class="btn btn-primary btn-lg" role="button" type="reset"><i class="glyphicon glyphicon-repeat"></i> RESET </a>
                                <a href="http://localhost/online%20Job-portal/Homepage/homepage.php" class="btn btn-lg btn-success" type="submit" name="save"><i class="glyphicon glyphicon-ok-sign"></i> Done</a>
                            </div>
                      </div>
                      <?php } ?>
              	</form>
              
              <hr>
              
             </div><!--/tab-pane-->
             <div class="tab-pane" id="messages">
               
               <h2></h2>
               
               <hr>
                  <form class="form" action="##" method="post" id="registrationForm">
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>First name</h4></label>
                              <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Last name</h4></label>
                              <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>Phone</h4></label>
                              <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">
                          </div>
                      </div>
          
                    
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="Address"><h4>Address</h4></label>
                              <input type="Address" class="form-control" name="Address" id="Address" placeholder="address" title="enter your Address">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="Experience"><h4>Experience</h4></label>
                              <input type="Experience" class="Experience" name="Experience" id="Experience" placeholder="work experience" title="Experience.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="City"><h4>City Name</h4></label>
                              <input type="City" class="form-control" name="City" id="City" placeholder="City" title="enter your city name.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="Qualification"><h4>Verify</h4></label>
                              <input type="password" class="form-control" name="Qualification" id="Qualification" placeholder="Qualification" title="Qualification.">
                          </div>
                      </div>
                      
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> DONE</button>
                               	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                      </div>
              	</form>
               
             </div><!--/tab-pane-->
             <div class="tab-pane" id="settings">
            		
               	
                  <hr>
                  <form class="form" action="##" method="post" id="registrationForm">
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>First name</h4></label>
                              <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Last name</h4></label>
                              <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>Phone</h4></label>
                              <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Mobile</h4></label>
                              <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Location</h4></label>
                              <input type="email" class="form-control" id="location" placeholder="somewhere" title="enter a location">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="password"><h4>Password</h4></label>
                              <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="password2"><h4>Verify</h4></label>
                              <input type="password" class="form-control" name="password2" id="password2" placeholder="password2" title="enter your password2.">
                          </div>
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success pull-right" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               	<!--<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>-->
                            </div>
                      </div>
              	</form>
              </div>
               
              </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
                                                      