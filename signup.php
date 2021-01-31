<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
				.nav-item{
			margin-right:0.5rem;
			font-weight: 600;
			font-size: 1.2rem;
		}
		
		*{transition: all 0.2s linear !important;}
		.navIcon{    background: red;
    				 padding: 0.8rem;
    				 font-size: 1.4rem;
    				 color: white;
    				 border-radius: 49%;
    				 margin-right: 1rem;}
    	.nav-item .nav-link{color:#205868 !important;}

    	.fixed{
    		position: fixed;
    z-index: 999;
    top: 0px;
    	}





    	/**/
    	.row .col-lg-3 img{ max-width: 10% !important; }
    	.hotsectorsDiv .col-lg-3 { background-color: white; }
    	/*.#446a83*/
    	.hotsectorsDiv .col-lg-3:hover{
    		background-color: #446a83;
    		color:white;
    	}
    	/**/

    	.footer{background-color: #26272b; color:#bbb;}
    	.footer a{
    		 background-color: #26272b; color:#bbb;
    	}
    	.footer i{
    		color:white;
    		margin-right: 0.5rem;
    	}
    	.footer i.fa-facebook{padding: 0.8rem;
    background: #3b5998;
    border-radius: 50%;
    font-size: 1.5rem;}
    .footer i.fa-twitter{padding: 0.8rem;
    background: #00aced;
    border-radius: 50%;
    font-size: 1.5rem;}
    .footer i.fa-linkedin{padding: 0.8rem;
    background: #007bb6;
    border-radius: 50%;
    font-size: 1.5rem;}
    .footer i.fa-instagram{padding: 0.8rem;
    background: #e4405f;
    border-radius: 50%;
    font-size: 1.5rem;}
    .footer i.fa-youtube{padding: 0.8rem;
    background: #b00;
    border-radius: 50%;
    font-size: 1.5rem;}
	</style>
<body style="background: #beb7b7 url(images/interviewer_1.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-blend-mode: multiply;">	


<div class="container-fluid mt-5 pt-5">
	<div class="row justify-content-center">
		<div class="col-lg-4">
			

<div class="">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header row" style="border-bottom: none;">
        <h5 class="modal-title text-center" id="exampleModalLabel">
          <!-- <img src="images/jenext-logo.png" class="img-fluid" style="max-width: 40%;"> -->
         </h5>
         
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         
        </button>
      </div>
      <div class="modal-body">
        <h3 class="text-center mb-4"> Create New Account</h3>
        <form method="post" action="mysql.php">
  <div class="form-group">
    <label for="fullname">Full Name</label>
    <input type="text" 
           class="form-control" 
           id="fullname" 
           aria-describedby="emailHelp" 
           placeholder="Enter Full Name" 
           name="name"
           required>
  </div>
  <div class="form-group">
    <label for="moblieNo">Mobile No</label>
    <input type="number" 
           class="form-control" 
           id="moblieNo" 
           placeholder="Enter Mobile No"
           name="mobileno" 
           required minlength="10">
  </div>

  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" 
           class="form-control" 
           id="password" 
           placeholder="Enter Password"
           name="password" 
           required minlength="4">
  </div>

   <div class="form-group">
    <label for="pincode">Pin code</label>
    <input type="password" 
           class="form-control" 
           id="pincode" 
           placeholder="Enter Pin Code"
           name="pincode" 
           required minlength="6">
  </div>

   <div class="form-group">
    <select class="custom-select" name="language" required>
  <option selected>Select Language</option>
  <option value="Bangoli">Bangoli</option>
  <option value="English">English</option>
  <option value="Hindi">Hindi</option>
  <option value="Cannada">Cannada</option>
  <option value="Malayalam">Malayalam</option>
  <option value="Marathi">Marathi</option>
  <option value="Tamil">Tamil</option>
  <option value="Telegu">Telegu</option>
  <option value="অসমীয়া">অসমীয়া</option>
</select>
  </div>

    <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
    <label class="form-check-label" for="exampleCheck1">I Accept Terms & conditions</label>
  </div>
 
  <button type="submit" 
          class="btn btn-primary btn-block p-3"
          name="signup" 
          style="background-color: #e36c09 !important; color:white; border:none; border-radius: 0;">Continue</button>
</form> 
<small id="emailHelp" class="form-text text-muted">If already a member <a href="login.php">Login</a> now. OR go back to
    <a href="index.php">Home</a>
 
  Page</small> 
      </div>
     
    </div>
  </div>
</div> 


		</div>
	</div>
</div>



<script src="bootstrap/js/jquery.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html>
