<?php
	require('header.php');
?>
<br>
<body>
	<form method="POST" action="../model/login.php" id="login">
		<div class="form-group" align="center">
            <label for="uname">Username</label>
		<input type="text" id="uname" name="uname"  class="form-group"><br>
		</div>
		<div class="form-group" align="center">
            <label for="pwd">Password</label>
		<input type="text" id="pwd" name="pwd" class="form-group"><br>
           
		</div>
        <div align="center">
        <label for="remember">Remember Me?</label>
        <input type="checkbox" id="remember" name="remember">
        </div>
        
		<div align="center">
		<input type="submit" value="Login" class="btn btn-primary">
		<a href="signup.php"><input type="button" value="Sign Up" class="btn btn-primary"></a>
		</div>
		<br><br>
<h1 id="platform"></h1>
		<?php
			if(isset($_GET["act"]))
				if($_GET["act"] == "invalid"){ 
                    
        
?>
<!-- Modal -->
<div class="modal fade" id="loginerr" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login Error</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        The Username or Password you entered was incorrect
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
        
        <?php 
                    
                }
        ?>
        

	</form>

<?php
require('footer.php');
?>
