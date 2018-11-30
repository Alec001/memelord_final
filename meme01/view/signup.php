<?php
	session_start();
	require('header.php');
?>


<body align="center">

	<h2>User Sign-up Form</h2>
	<p><span class = "error">All fields are compulsory.</span></p>
    <p><span class = "error">Please tick the check box when you have completed each field.</span></p>
    
	<form method="post" class="form-inline cen" action="../model/addUser.php" id="reg"  >
		<div class="form-group">
    <label for="username">Username</label>
   <div class="form-group">
       <input type="text" id="username" name="username" class="username form-control cen" pattern="[a-zA-Z0-9]{3,20}" >
       <div id="loader" class="modal1">
       </div>
       <div class="status" id="status">
       
       </div>
		</div>
  </div>
<input type="checkbox" id="check1" onclick="function1()">
<input type="button" id="userc" value="Check Username Availability">
		<br>
  
		<div id="p1">
         <div class="form-group">
    <label for="pass">Password</label>
   <div class="form-group">
       <input type="text" id="pass" name="pass" class="form-control cen">
            <aside id="uname_error" title="Please enter a Password"></aside>
		</div>
  </div>
    <input type="checkbox" id="check2" onclick="function2()">
    </div>
        
        <div id="p2">
		<div class="form-group">
            <label for="name">Name</label>
			 <input type="text" id="name" name="name" class="form-control cen" pattern="[a-zA-Z]{3,20}">
            <aside id="name_error" title="Please enter a name"></aside>
		</div>
  <input type="checkbox" id="check3" onclick="function3()">
        </div>
   
		
<div id="p3">
		<div class="form-group">
            <label for="email">Email</label>
			<input type="email" id="email" name="email" class="form-control cen">
            <div id="status2">
            <p>This email is available</p>
            </div>
            <div id="status3">
            <p>This email is not available</p>
            </div>
            
		</div>
    <input type="checkbox" id="check4" onclick="function4()">
            </div>
     
		
<div id="p4">
    <label for="radio">Gender</label>
		<div class="radio" id="radio">
			<input type="radio" id="male" name="gender" value="female">Female
			<input type="radio" id="female" name="gender" value="male">Male
</div> 
    <input type="checkbox" id="check5" onclick="function5()">
    </div>
		
<div id="p5">
		<input type="submit" name="submit" value="Submit" class="btn btn-primary sub1" id="sub1" onclick="check_availability.php">
		<input type="reset" name="reset" value="Reset" class="btn btn-primary">
    </div>

		
<?php
  require('footer.php');
?>
