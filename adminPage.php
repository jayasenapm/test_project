<?php 



//unset($_SESSION['SESS_FIRST_NAME']);

if(isset($_SESSION['SESS_FIRST_NAME']) && !empty($_SESSION['SESS_FIRST_NAME'])) {
	session_start();
  $username=$_SESSION['SESS_FIRST_NAME'];
}
session_start();
if(isset($_SESSION['SESS_MEMBER_ID']) && !empty($_SESSION['SESS_MEMBER_ID'])) {
$userid=$_SESSION['SESS_MEMBER_ID'];
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>msy</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="scripts/jquery.bootstrap.newsbox.min.js" type="text/javascript"></script>
<link href="css/site.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="container">




<!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="images/1.jpg" width="100" alt="">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#" style="color:white; hover:black;">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
					<?php
					if(isset($_SESSION['SESS_FIRST_NAME']) && !empty($_SESSION['SESS_FIRST_NAME'])) {
					$username=$_SESSION['SESS_FIRST_NAME'];
					?>
					
					<li><a href="#" ><span><?php echo $username; ?></span> <img src="images/about.jpg" width="100px;" class="img-circle special-img"></a></li>
					
					
					
					
					</ul>
					<ul class="nav navbar-nav navbar-right">
					
					<li><a href="loginout.php"><span class="glyphicon glyphicon-log-out"></span> Login Out</a></li>
					<?php }else{
						?>
					</ul>
					<ul class="nav navbar-nav navbar-right">	
					<li><a href="#" data-toggle="modal" data-target="#at-login"><span class="glyphicon glyphicon-log-in"></span> Sign Up</a></li>	
						<?php
					
					}
					?>
                </ul>
				
				
				 
				
				
	   
    </ul>
            </div>
			
			
			
			
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	</div>

							<!-- /.row -->
<section class="at-login-form">
				<!-- MODAL LOGIN -->
				<div class="modal fade" id="at-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
							</div>
							<div class="modal-body">
									
										
										
										<form action="login.php" method="post">
											<div class="form-group">
												<input type="text" class="form-control-form " name="username" id="exampleInputEmaillog" placeholder="Email">
											</div>
											<div class="form-group">
												<input type="password" class="form-control-form " name="password" id="exampleInputPasswordpas" placeholder="Password">
											</div>
											<div class="row">	
												<div class="col-md-6">
													<div class="checkbox">
														<label>
															<input type="checkbox"> Remember me
														</label>
													</div>	
												</div>
												<div class="col-md-4 col-md-offset-2">	
													<p class="frgt-pswd"   data-toggle="modal" data-dismiss="modal"  data-target="#at-reset-pswd">	Forgot Password ?</p>
												</div>
											</div>
											<button type="submit" class="btn-lgin">Login</button>
										</form>
									</div>
									<div class="modal-footer">
										<div class="row">	
											<div class="col-md-6">
												<p class="ta-l">Don't have an account ? </p>
											</div>	
											<div class="col-md-4 col-md-offset-2">	
												<button class="btn-gst"  data-toggle="modal"  data-dismiss="modal" data-target="#at-signup" >Sign Up </button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>				
			</section>
					
							
							
							
							
							
							
							
							

     
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    


<!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	<script src="scripts/jquery.bootstrap.newsbox.min.js" type="text/javascript"></script>
	
</body>
</html>