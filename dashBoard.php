
<?php
if(isset($_SESSION['SESS_FIRST_NAME']) && !empty($_SESSION['SESS_FIRST_NAME'])) {
	?>
	<div id="maincontent">
	
	<div class="row" style="margin-top:0px; ">

<div class="col-sm-6 col-md-3 col-lg-3 col-xs-12">
        <div class="circle circle1">
          <a href="Welcome.php?id=2"><h3><span class="glyphicon glyphicon-user" style="color:#e51ec2"></h3></small><p>Add Employee</p></a>
        </div>
      </div>
      <div class="col-sm-6 col-md-3 col-lg-3 col-xs-12">
        <div class="circle circle1">
        <a href="Table.php"><h3><span class="glyphicon glyphicon-calendar" style="color:#e51ec2"></h3></small><p>Employee List  </p></a>
        </div>
      </div>
	   <div class="col-sm-6 col-md-3 col-lg-3 col-xs-12">
        <div class="circle circle1">
          <a href="#myModal" data-toggle="modal" ><h3><span class="glyphicon glyphicon-calendar" style="color:#e51ec2"></h3></small><p>Add Service </p></a>
        </div>
      </div>
	  
	  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                              <h4 class="modal-title">Edit</h4>
                                          </div>
                                          <div class="modal-body">

                                              <form role="form" action="AddService.php">
                                                  <div class="form-group">
                                                      <label for="exampleInputEmail1">සේවක වර්ගය</label>
													  
                                                      <input type="text" class="form-control" id="exampleInputEmail3" name="service" placeholder="">
                                                  </div>
                                               
                                                 
                                                  <button type="submit" class="btn btn-primary">Add</button>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
								</div>
	  
	  
	  
	  
	   <div class="col-sm-6 col-md-3 col-lg-3 col-xs-12">
        <div class="circle circle1">
         <a href="Welcome.php?id=4&IDNO="><h3><span class="glyphicon glyphicon-user" style="color:#e51ec2"></h3></small><p>Search Employee </p></a>
        </div>
		
      </div>
     
      
   
      <div class="col-sm-6 col-md-3 col-lg-3 col-xs-12">
        <div class="circle circle1">
          <a href="index2.html"><h3><span class="glyphicon glyphicon-user" style="color:#e51ec2"></h3></small><p>School </p></a>
        </div>
      </div>
      <div class="col-sm-6 col-md-3 col-lg-3 col-xs-12">
        <div class="circle circle1">
          <a href="Welcome.php?id=6&IDNO="><h3><span class="glyphicon glyphicon-user" style="color:#e51ec2"></h3></small><p>Ulode File</p></a>
        </div>
      </div>
	   <div class="col-sm-6 col-md-3 col-lg-3 col-xs-12">
        <div class="circle circle1">
		
          <a href="Welcome.php?id=7&IDNO="><h3><span class="glyphicon glyphicon-user" style="color:#e51ec2"></h3></small><p>Downlode</p></a>
        </div>
      </div>
	   <div class="col-sm-6 col-md-3 col-lg-3 col-xs-12">
        <div class="circle circle1">
		
          <a href="Welcome.php?id=8&IDNO=1&catid=1"><h3><span class="glyphicon glyphicon-user" style="color:#e51ec2"></h3></small><p>Mange Emplye</p></a>
        </div>
      </div>
	  </div>
	  </div>
	
	<?php
}else{
	?>
	<div id="maincontent">	
	<div class="row" style="margin-top:0px; ">

<div class="col-sm-6 col-md-3 col-lg-3 col-xs-12">
        <div class="circle circle1">
          <h3><span class="glyphicon glyphicon-user" style="color:#e51ec2"></h3></small><p>Add Employee</p>
        </div>
      </div>
      <div class="col-sm-6 col-md-3 col-lg-3 col-xs-12">
        <div class="circle circle1">
        <a href="Table.php"><h3><span class="glyphicon glyphicon-calendar" style="color:#e51ec2"></h3></small><p>Employee List  </p></a>
        </div>
      </div>
	   <div class="col-sm-6 col-md-3 col-lg-3 col-xs-12">
        <div class="circle circle1">
          <h3><span class="glyphicon glyphicon-calendar" style="color:#e51ec2"></h3></small><p>Add Service </p>
        </div>
      </div>
	   <div class="col-sm-6 col-md-3 col-lg-3 col-xs-12">
        <div class="circle circle1">
         <a href="Welcome.php?id=4&IDNO="><h3><span class="glyphicon glyphicon-user" style="color:#e51ec2"></h3></small><p>Search Employee </p></a>
        </div>
      </div>
     
      
   
      <div class="col-sm-6 col-md-3 col-lg-3 col-xs-12">
        <div class="circle circle1">
          <a href="index2.html"><h3><span class="glyphicon glyphicon-user" style="color:#e51ec2"></h3></small><p>School</p></a>
        </div>
      </div>
      <div class="col-sm-6 col-md-3 col-lg-3 col-xs-12">
        <div class="circle circle1">
          <a href="Welcome.php?id=7&IDNO="><h3><span class="glyphicon glyphicon-user" style="color:#e51ec2"></h3></small><p>Downlode</p></a>
        </div>
      </div>
	  
	 
	  </div>
	  </div>
	
	
	<?php
	
}


?>

