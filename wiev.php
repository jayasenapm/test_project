<?php

include('connect.php');
$ID=$_GET['IDNO'];
if(isset($_SESSION['SESS_FIRST_NAME']) && !empty($_SESSION['SESS_FIRST_NAME'])) {
	
if($ID==""){
	?>
	<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" style="background-color:  #56d9e1 ;">

	</div>
	<div class="col-sm-12 col-md-4 col-lg-4 col-xs-12" style="background-color:  #56d9e9 ;">
	
	
	
	
	
			<center>	<form class="navbar-form" action="Welcome.php?id=4" method="get">
                            <input type="text" class="form-control" name="IDNO" placeholder="Search" >
							<input type="hidden" class="form-control" name="id" value="4" placeholder="Search" >
							<button type="submit" class="btn btn-info btn-sm">
							<i class="ace-icon fa fa-key bigger-110"></i>Find
							</button>
							
                        </form>
		<div class="activity_rounded"><img src="uploads/" height="100" width="100" /></div>
        
		
    
		<!--<p><a href="remove.php?name=<?php echo $row['Image']; ?>&id=$id" class="btn btn-danger btn-xs" role="button">Remove</a></p></center> -->
		
		<div class="tex">
		<h2><small></small></h2>
		<div class="resum">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" >
		<p style="color:Black;">සම්පූර්ණ නම</p>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
		<p></p>
		<hr>
		</div>
		</div>
		<div class="resum">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" >
		<p style="color:Black;">මුලකුරු සමඟ නම</p>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
		<p></p>
		<hr>
		</div>
		</div>
		<div class="resum">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" >
		<p style="color:Black;">ජා.හැ.අංකය</p>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
		<p></p>
		<hr>
		</div>
		</div>
		<div class="resum">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" >
		<p style="color:Black;">පුද්ගලික දුරකතන අංකය</p>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
		<p></p>
		<hr>
		</div>
		</div>
		<div class="resum">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" >
		<p style="color:Black;">පුද්ගලික විද්‍යුත් ලිපිනය</p>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
		<p></p>
		<hr>
		</div>
		</div>
		
		<div class="resum">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" >
		<p style="color:Black;">උපන් දිනය</p>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
		<p></p>
		<hr>
		</div>
		</div>
		
		<div class="resum">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" >
		<p style="color:Black;">උප්පැන්න සහතිකයේ අංකය</p>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
		<p></p>
		<hr>
		</div>
		</div>
		
		<div class="resum">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" >
		<p style="color:Black;">ස්ත්‍රී/පුරිෂ භාවය</p>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
		<p></p>
		<hr>
		</div>
		</div>
		<div class="resum">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" >
		<p style="color:Black;">ජන වර්ගය</p>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
		<p></p>
		<hr>
		</div>
		</div>
		<div class="resum">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" >
		<p style="color:Black;">ආගම</p>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
		<p></p>
		<hr>
		</div>
		</div>
		
		</div>
		</div> 
		
		<div class="col-sm-12 col-md-8 col-lg-8 col-xs-12" style="background-color:;">
        
		
        
		
    
		<!--<p><a href="remove.php?name=<?php echo $row['Image']; ?>&id=$id" class="btn btn-danger btn-xs" role="button">Remove</a></p></center> -->
		
		<div class="tex">
		<br>
		<div class="resum">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" >
		<p style="color:Black;">පුද්ගලික ලිපිනය</p>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
		<p></p>
		<hr>
		</div>
		</div>
		
		
		
		
		
		
		
		<div class="resum">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" >
		<p style="color:Black;">විවාහක/අවිවාහක භාවය</p>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
		<p></p>
		<hr>
		</div>
		</div>
		<div class="resum">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" >
		<p style="color:Black;">ඉහලම අධ්‍යාපන සුදුසුකම</p>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
		<p></p>
		<hr>
		</div>
		</div>
		<div class="resum">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" >
		<p style="color:Black;">ඉහලම වෘත්තීය සුදුසුකම</p>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
		<p></p>
		<hr>
		</div>
		</div>
		<div class="resum">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" >
		<p style="color:Black;">මුල් පත්වීමේ ස්වාභාවය</p>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
		<p></p>
		<hr>
		</div>
		</div>
		<div class="resum">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" >
		<p style="color:Black;">මුල් පත් වූ දිනය</p>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
		<p></p>
		<hr>
		</div>
		</div>
		<div class="resum">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" >
		<p style="color:Black;">පත්වීම් ලිපියේ අංකය</p>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
		<p></p>
		<hr>
		</div>
		</div>
		<div class="resum">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" >
		<p style="color:Black;">අයත්වන වර්තමාන සේවය</p>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
		<p></p>
		<hr>
		</div>
		</div>
		<div class="resum">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" >
		<p style="color:Black;">වර්තමාන සේවයට පත් වූ දිනය</p>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
		<p></p>
		<hr>
		</div>
		</div>
		<div class="resum">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" >
		<p style="color:Black;">පත්වීම් ලිපියට අනුව සේවක ගණය</p>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
		<p></p>
		<hr>
		</div>
		</div>
		<div class="resum">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" >
		<p style="color:Black;">විශේෂ නම් අදාල විෂය</p>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
		<p></p>
		<hr>
		</div>
		</div>
		<div class="resum">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" >
		<p style="color:Black;">බදවා ගැනීමෙ ස්වභාවය</p>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
		<p></p>
		<hr>
		</div>
		</div>
		<div class="resum">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" >
		<p style="color:Black;">වර්තමාන සේවයට අයත් ශේණිය</p>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
		<p></p>
		<hr>
		</div>
		</div>
		<div class="resum">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" >
		<p style="color:Black;">එම සේවයට පත් වූ දිනය</p>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
		<p></p>
		<hr>
		</div>
		</div>
			<div class="resum">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" >
		<p style="color:Black;">වර්තමාන සේවා ස්ථානයේ වැඩ භාර ගත් දිනය</p>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
		<p></p>
		<hr>
		</div>
		</div>
		<div class="resum">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" >
		<p style="color:Black;">පළමු කාර්යක්ෂමතා  පරික්ෂණය සමත් වූ දිනය</p>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
		<p></p>
		<hr>
		</div>
		</div>
			<div class="resum">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" >
		<p style="color:Black;">දෙවන කාර්යක්ෂමතා  පරික්ෂණය සමත් වූ දිනය</p>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
		<p></p>
		<hr>
		</div>
		</div>
		</div>
		</div>
		
		
		

      </div>
	
	
	
	
	
	<?php
}else{
	
$result = $db->prepare("SELECT * FROM employee WHERE IDNO= :userid");
$result->bindParam(':userid', $ID);
$result->execute();


	
for($i=0; $row = $result->fetch(); $i++){
//$asasa=$row['price'];


?>





	

		<div class="col-sm-12 col-md-4 col-lg-4 col-xs-12" style="background-color:  #56d9e9 ;">
        <center>	<form class="navbar-form" action="Welcome.php?id=4" method="get">
                            <input type="text" class="form-control" name="IDNO" placeholder="Search" >
							<input type="hidden" class="form-control" name="id" value="4" placeholder="Search" >
							<button type="submit" class="btn btn-info btn-sm">
							<i class="ace-icon fa fa-key bigger-110"></i>Find
							</button>
							
                        </form>
		<center><div class="activity_rounded"><img src="uploads/<?php echo $row['Image']; ?>" height="100" width="100" /></div>
        
		
    
		<!--<p><a href="remove.php?name=<?php echo $row['Image']; ?>&id=$id" class="btn btn-danger btn-xs" role="button">Remove</a></p></center> -->
		
		<div class="tex">
		<h2><?php echo $row['NameWiInSh'];?> <br><small>(<?php echo $row['service'];?>)</small></h2>
		<div class="resum">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" >
		<p style="color:Black;">සම්පූර්ණ නම</p>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
		<p><?php echo $row['NameinfullSi'];?><a href="#myModal" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a>
		</p>
		

		<hr>
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

                                              <form role="form" action="update.php">
                                                  <div class="form-group">
                                                      <label for="exampleInputEmail1">සම්පූර්ණ නම</label>
													  <input type="hidden" class="form-control" id="exampleInputEmail3" name="IDNO" value="<?php echo $row['IDNO'];?>">
													  <input type="hidden" class="form-control" id="exampleInputEmail3" name="no" value="1">
                                                      <input type="text" class="form-control" id="exampleInputEmail3" name="fname" placeholder="<?php echo $row['NameinfullSi'];?>">
                                                  </div>
                                               
                                                 
                                                  <button type="submit" class="btn btn-primary">Save</button>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
								</div>


	



		


		
		
		
		
		<div class="resum">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" >
		<p style="color:Black;">ජා.හැ.අංකය</p>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
		<p><?php echo $row['IDNO'];?><a href="#myModal1" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a></p>
		<hr>
		</div>
		</div>
								<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal1" class="modal fade">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                              <h4 class="modal-title">Edit</h4>
                                          </div>
                                          <div class="modal-body">

                                              <form role="form" action="update.php">
                                                  <div class="form-group">
                                                      <label for="exampleInputEmail1">ජා.හැ.අංකය</label>
													  <input type="hidden" class="form-control" id="exampleInputEmail3" name="IDNO" value="<?php echo $row['IDNO'];?>">
													  <input type="hidden" class="form-control" id="exampleInputEmail3" name="no" value="2">
                                                      <input type="text" class="form-control" id="exampleInputEmail3" name="fname" value="<?php echo $row['IDNO'];?>">
                                                  </div>
                                               
                                                 
                                                  <button type="submit" class="btn btn-primary">Save</button>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
								</div>
		
		
		<div class="resum">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" >
		<p style="color:Black;">පුද්ගලික දුරකතන අංකය</p>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
		<p><?php echo $row['MobilNo'];?><a href="#myModal2" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a></p>
		<hr>
		</div>
		</div>
		<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal2" class="modal fade">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                              <h4 class="modal-title">Edit</h4>
                                          </div>
                                          <div class="modal-body">

                                              <form role="form" action="update.php">
                                                  <div class="form-group">
                                                      <label for="exampleInputEmail1">පුද්ගලික දුරකතන අංකය</label>
													  <input type="hidden" class="form-control" id="exampleInputEmail3" name="IDNO" value="<?php echo $row['IDNO'];?>">
													  <input type="hidden" class="form-control" id="exampleInputEmail3" name="no" value="3">
                                                      <input type="text" class="form-control" id="exampleInputEmail3" name="fname" value="<?php echo $row['MobilNo'];?>">
                                                  </div>
                                               
                                                 
                                                  <button type="submit" class="btn btn-primary">Save</button>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
								</div>
		
		
		
		<div class="resum">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" >
		<p style="color:Black;">පුද්ගලික විද්‍යුත් ලිපිනය</p>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
		<p><?php echo $row['email'];?><a href="#myModal3" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a></p>
		<hr>
		</div>
		</div>
								<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal3" class="modal fade">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                              <h4 class="modal-title">Edit</h4>
                                          </div>
                                          <div class="modal-body">

                                              <form role="form" action="update.php">
                                                  <div class="form-group">
                                                      <label for="exampleInputEmail1">පුද්ගලික විද්‍යුත් ලිපිනය</label>
													  <input type="hidden" class="form-control" id="exampleInputEmail3" name="IDNO" value="<?php echo $row['IDNO'];?>">
													  <input type="hidden" class="form-control" id="exampleInputEmail3" name="no" value="4">
                                                      <input type="text" class="form-control" id="exampleInputEmail3" name="fname" value="<?php echo $row['email'];?>">
                                                  </div>
                                               
                                                 
                                                  <button type="submit" class="btn btn-primary">Save</button>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
								</div>
		
		<div class="resum">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" >
		<p style="color:Black;">උපන් දිනය</p>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
		<p><?php echo $row['Birth'];?><a href="#myModal4" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a></p>
		<hr>
		</div>
		</div>
		
		<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal4" class="modal fade">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                              <h4 class="modal-title">Edit</h4>
                                          </div>
                                          <div class="modal-body">

                                              <form role="form" action="update.php">
                                                  <div class="form-group">
                                                      <label for="exampleInputEmail1">උපන් දිනය</label>
													  <input type="hidden" class="form-control" id="exampleInputEmail3" name="IDNO" value="<?php echo $row['IDNO'];?>">
													  <input type="hidden" class="form-control" id="exampleInputEmail3" name="no" value="6">
                                                      <input type="text" class="form-control" id="exampleInputEmail3" name="fname" value="<?php echo $row['Birth'];?>">
                                                  </div>
                                               
                                                 
                                                  <button type="submit" class="btn btn-primary">Save</button>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
								</div>
		
		<div class="resum">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" >
		<p style="color:Black;">උප්පැන්න සහතිකයේ අංකය</p>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
		<p></p>
		<hr>
		</div>
		</div>
		
		
		
		
		
		<div class="resum">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" >
		<p style="color:Black;">ස්ත්‍රී/පුරිෂ භාවය</p>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
		<p><?php echo $row['gender'];?><a href="#myModal6" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a></p>
		<hr>
		</div>
		</div>
		<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal6" class="modal fade">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                              <h4 class="modal-title">Edit</h4>
                                          </div>
                                          <div class="modal-body">

                                              <form role="form" action="update.php">
                                                  <div class="form-group">
                                                      <label for="exampleInputEmail1">ස්ත්‍රී/පුරිෂ භාවය</label>
													  <input type="hidden" class="form-control" id="exampleInputEmail3" name="IDNO" value="<?php echo $row['IDNO'];?>">
													  <input type="hidden" class="form-control" id="exampleInputEmail3" name="no" value="7">
													  <div class="radio">
													<label>
														<input name="fname" type="radio" value="ස්ත්‍රී" class="ace " required="required"/>
														<span class="lbl">ස්ත්‍ර</span>
													</label>
											

											
													<label>
														<input name="fname" type="radio" value="පුරුෂ" class="ace" required="required" />
														<span class="lbl"> පුරිෂ</span>
													</label>
												</div>
                                                     
                                                  </div>
                                               
                                                 
                                                  <button type="submit" class="btn btn-primary">Save</button>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
								</div>
		
		
		
		
		<div class="resum">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" >
		<p style="color:Black;">ජන වර්ගය</p>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
		<p><?php echo $row['Natanality'];?><a href="#myModal8" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a></p>
		<hr>
		</div>
		</div>
		<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal8" class="modal fade">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                              <h4 class="modal-title">Edit</h4>
                                          </div>
                                          <div class="modal-body">

                                              <form role="form" action="update.php">
                                                  <div class="form-group">
                                                      <label for="exampleInputEmail1">ජන වර්ගය</label>
													  <input type="hidden" class="form-control" id="exampleInputEmail3" name="IDNO" value="<?php echo $row['IDNO'];?>">
													  <input type="hidden" class="form-control" id="exampleInputEmail3" name="no" value="8">
													  
													  <select class="form-control" name="fname" required>
															<option value=""></option>
															<option value="සිංහල">සිංහල</option>
															<option value="‍රී ලංකා දෙමළ">ශ්‍රී ලංකා දෙමළ</option>
															<option value="ඉන්දියානු දෙමළ">ඉන්දියානු දෙමළ</option>
															<option value="‍ශ්‍රී ලංකා මුස්ලිම්">ශ්‍රී ලංකා මුස්ලිම්</option>
															<option value="වෙනත්">වෙනත්</option>
												
														</select>
													  
													  
                                                     
													  
													  
													  
                                                  </div>
                                               
                                                 
                                                  <button type="submit" class="btn btn-primary">Save</button>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
								</div>
		
		
		
		
		<div class="resum">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" >
		<p style="color:Black;">ආගම</p>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
		
		<p><?php echo $row['Religan'];?><a href="#myModal9" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a></p>
		<hr>
		</div>
		</div>
		
		<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal9" class="modal fade">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                              <h4 class="modal-title">Edit</h4>
                                          </div>
                                          <div class="modal-body">

                                              <form role="form" action="update.php">
                                                  <div class="form-group">
                                                      <label for="exampleInputEmail1">ආගම</label>
													  <input type="hidden" class="form-control" id="exampleInputEmail3" name="IDNO" value="<?php echo $row['IDNO'];?>">
													  <input type="hidden" class="form-control" id="exampleInputEmail3" name="no" value="9">
													  
													  <select class="form-control" name="fname" required>
															<option value=""></option>
												<option value="බෞද්ධ">බෞද්ධ</option>
												<option value="හිනුද">හින්දු</option>
												<option value="ඉස්ලාම්">ඉස්ලාම්</option>
												<option value="කතෝලික">කතෝලික</option>
												<option value="ක්‍රිස්තියානි">ක්‍රිස්තියානි</option>
												<option value="වෙනත්">වෙනත්</option>
												
														</select>
													  
													  
                                                     
													  
													  
													  
                                                  </div>
                                               
                                                 
                                                  <button type="submit" class="btn btn-primary">Save</button>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
								</div>
		
		
		
		
		<div class="resum2">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" >
		<p style="color:Black;">මුල් පත් වූ දිනය</p>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
		<p><?php echo $row['fistDate'];?><a href="#myModal10" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a></p>
		<hr>
		</div>
		</div>
		<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal10" class="modal fade">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                              <h4 class="modal-title">Edit</h4>
                                          </div>
                                          <div class="modal-body">

                                              <form role="form" action="update.php">
                                                  <div class="form-group">
                                                      <label for="exampleInputEmail1">මුල් පත් වූ දිනය</label>
													  <input type="hidden" class="form-control" id="exampleInputEmail3" name="IDNO" value="<?php echo $row['IDNO'];?>">
													  <input type="hidden" class="form-control" id="exampleInputEmail3" name="no" value="10">
                                                      <input type="text" class="form-control" id="exampleInputEmail3" name="fname" value="<?php echo $row['fistDate'];?>">
                                                  </div>
                                               
                                                 
                                                  <button type="submit" class="btn btn-primary">Save</button>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
								</div>
		
		
		
		
		<div class="resum2">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" >
		<p style="color:Black;">පත්වීම් ලිපියේ අංකය</p>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
		<p><?php echo $row['appNo'];?><a href="#myModal11" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a></p>
		<hr>
		</div>
		</div>
		
							<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal11" class="modal fade">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                              <h4 class="modal-title">Edit</h4>
                                          </div>
                                          <div class="modal-body">

                                              <form role="form" action="update.php">
                                                  <div class="form-group">
                                                      <label for="exampleInputEmail1">පත්වීම් ලිපියේ අංකය</label>
													  <input type="hidden" class="form-control" id="exampleInputEmail3" name="IDNO" value="<?php echo $row['IDNO'];?>">
													  <input type="hidden" class="form-control" id="exampleInputEmail3" name="no" value="11">
                                                      <input type="text" class="form-control" id="exampleInputEmail3" name="fname" value="<?php echo $row['appNo'];?>">
                                                  </div>
                                               
                                                 
                                                  <button type="submit" class="btn btn-primary">Save</button>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
								</div>
		
		
		
		
		</div>
		</div> 
		
		<div class="col-sm-12 col-md-8 col-lg-8 col-xs-12" style="background-color:;">
        
							
		
		<br>
		
		
		<div class="tex">
		<br>
		<div class="resum2">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" >
		<p style="color:Black;">පුද්ගලික ලිපිනය</p>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
		<p><?php echo $row['Address'];?><a href="#myModal12" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a></p>
		<hr>
		</div>
		</div>
		
							<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal12" class="modal fade">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                              <h4 class="modal-title">Edit</h4>
                                          </div>
                                          <div class="modal-body">

                                              <form role="form" action="update.php">
                                                  <div class="form-group">
                                                      <label for="exampleInputEmail1">පුද්ගලික ලිපිනය</label>
													  <input type="hidden" class="form-control" id="exampleInputEmail3" name="IDNO" value="<?php echo $row['IDNO'];?>">
													  <input type="hidden" class="form-control" id="exampleInputEmail3" name="no" value="12">
                                                      <input type="text" class="form-control" id="exampleInputEmail3" name="fname" value="<?php echo $row['Address'];?>">
                                                  </div>
                                               
                                                 
                                                  <button type="submit" class="btn btn-primary">Save</button>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
								</div>
		
		
		
		
		
		<div class="resum2">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" >
		<p style="color:Black;">විවාහක/අවිවාහක භාවය</p>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
		<p><?php echo $row['states'];?><a href="#myModal13" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a></p>
		<hr>
		</div>
		</div>
		<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal13" class="modal fade">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                              <h4 class="modal-title">Edit</h4>
                                          </div>
                                          <div class="modal-body">

                                              <form role="form" action="update.php">
                                                  <div class="form-group">
                                                      <label for="exampleInputEmail1">පුද්ගලික ලිපිනය</label>
													  <input type="hidden" class="form-control" id="exampleInputEmail3" name="IDNO" value="<?php echo $row['IDNO'];?>">
													  <input type="hidden" class="form-control" id="exampleInputEmail3" name="no" value="13">
													  <div class="radio">
													<label>
														<input name="fname" type="radio" class="ace " value="විවාහක" />
														<span class="lbl"> විවාහක</span>
													</label>
											

											
													<label>
														<input name="fname" type="radio" class="ace" value="අවිවාහාක" />
														<span class="lbl"> අවිවාහාක</span>
													</label>
													
													<label>
														<input name="fname" type="radio" class="ace" value="වැන්දඹු" />
														<span class="lbl"> වැන්දඹු</span>
													</label>
													<label>
														<input name="fname" type="radio" class="ace" value="වෙනත්" />
														<span class="lbl"> වෙනත්</span>
													</label>
												</div>

													  
													  
													  
													  
                                                      
                                                  </div>
                                               
                                                 
                                                  <button type="submit" class="btn btn-primary">Save</button>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
								</div>
		
		
		
		
		<div class="resum2">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" >
		<p style="color:Black;">ඉහලම අධ්‍යාපන සුදුසුකම</p>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
		<p><?php echo $row['hiqualifi'];?><a href="#myModal15" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a></p>
		<hr>
		</div>
		</div>
		
		<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal15" class="modal fade">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                              <h4 class="modal-title">Edit</h4>
                                          </div>
                                          <div class="modal-body">

                                              <form role="form" action="update.php">
                                                  <div class="form-group">
                                                      <label for="exampleInputEmail1">ඉහලම අධ්‍යාපන සුදුසුකම</label>
													  <input type="hidden" class="form-control" id="exampleInputEmail3" name="IDNO" value="<?php echo $row['IDNO'];?>">
													  <input type="hidden" class="form-control" id="exampleInputEmail3" name="no" value="15">
													  
													  <select class="form-control" name="fname" required>
														<option></option>
												<option value="අධ්‍යාපන පරිපාලන සේවය ">අ.පො.ස. (සා.පෙළ)ට අඩු</option>
												<option value="අ.පො.ස. (සා.පෙළ)ල හෝ සමාන ">අ.පො.ස. (සා.පෙළ)ල හෝ සමාන</option>
												<option value="අ.පො.ස. (උ.පෙළ)ල හෝ සමාන ">අ.පො.ස. (උ.පෙළ)ල හෝ සමාන</option>
												<option value="උපාධි හා ඊට සමාන ">උපාධි හා ඊට සමාන </option>
												<option value="ශාස්ත්‍රපති හා ඊට සමාන ">ශාස්ත්‍රපති හා ඊට සමාන</option>
												<option value="දර්ශනපති හා ඊට සමාන්තර ">දර්ශනපති හා ඊට සමාන්තර</option>
												<option value="දර්ශනශූරී උපාධි හා ඊට සමාන්තර ">දර්ශනශූරී උපාධි හා ඊට සමාන්තර</option>
												
														</select>
													  
													  
                                                     
													  
													  
													  
                                                  </div>
                                               
                                                 
                                                  <button type="submit" class="btn btn-primary">Save</button>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
								</div>
		
		
		
		
		<div class="resum2">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" >
		<p style="color:Black;">ඉහලම වෘත්තීය සුදුසුකම</p>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
		<p><?php echo $row['hiProf'];?><a href="#myModal16" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a></p>
		<hr>
		</div>
		</div>
		
		<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal16" class="modal fade">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                              <h4 class="modal-title">Edit</h4>
                                          </div>
                                          <div class="modal-body">

                                              <form role="form" action="update.php">
                                                  <div class="form-group">
                                                      <label for="exampleInputEmail1">ඉහලම වෘත්තීය සුදුසුකම</label>
													  <input type="hidden" class="form-control" id="exampleInputEmail3" name="IDNO" value="<?php echo $row['IDNO'];?>">
													  <input type="hidden" class="form-control" id="exampleInputEmail3" name="no" value="16">
													  
													  <select class="form-control" name="fname" required>
														<option></option>
												<option></option>
												<option value="දර්ශනශූරී අධ්‍යාපනය පිළිබඳ">දර්ශනශූරී අධ්‍යාපනය පිළිබඳ</option>
												<option value="දර්ශනපති අධ්‍යාපනය පිළිබඳ">දර්ශනපති අධ්‍යාපනය පිළිබඳ</option>
												<option value="අධ්‍යාපනපති උපාධි">අධ්‍යාපනපති උපාධි</option>
												<option value="අධ්‍යාපනය පිළිබඳව ශාස්ත්‍රපති උපාධිය">අධ්‍යාපනය පිළිබඳව ශාස්ත්‍රපති උපාධිය</option>
												<option value="පශ්චාත් උපාධි අධ්‍යාපන ඩිප්ලෝමා">පශ්චාත් උපාධි අධ්‍යාපන ඩිප්ලෝමා</option>
												<option value="ගුරු අධ්‍යාපනය පිළිබඳ ශාස්ත්‍රපති උපාධිය">ගුරු අධ්‍යාපනය පිළිබඳ ශාස්ත්‍රපති උපාධිය</option>
												<option value="අධ්‍යාපන කළමනාකරණය පිළිබඳ විද්‍යාපති">අධ්‍යාපන කළමනාකරණය පිළිබඳ විද්‍යාපති</option>
												<option value="අධ්‍යාපන කළමනාකරණය පිළිබඳ පශ්චාත් උපාධි ඩිප්ලෝමා">අධ්‍යාපන කළමනාකරණය පිළිබඳ පශ්චාත් උපාධි ඩිප්ලෝමා</option>
												<option value="දෙවන භාෂාවක් ලෙස ඉංග්‍රිසි ඉගැන්විමේ පශ්චාත් උපාධි ඩිප්ලෝමා">දෙවන භාෂාවක් ලෙස ඉංග්‍රිසි ඉගැන්විමේ පශ්චාත් උපාධි ඩිප්ලෝමා</option>
												<option value="NIE හෝ විවෘත විශ්ව විද්‍යාල අධ්‍යාපන වේදී උපාධිය">NIE හෝ විවෘත විශ්ව විද්‍යාල අධ්‍යාපන වේදී උපාධිය</option>
												<option value="දෙවන භාෂාවක් ලෙස ඉංග්‍රිසි ඉගැන්විමේ  ඩිප්ලෝමා">දෙවන භාෂාවක් ලෙස ඉංග්‍රිසි ඉගැන්විමේ  ඩිප්ලෝමා</option>
												<option value="ගුරු පුස්තකාලාධිපති ඩිප්ලෝමා පාඨමාලාව">ගුරු පුස්තකාලාධිපති ඩිප්ලෝමා පාඨමාලාව </option>
												<option value="ගුරු පුස්තකාලාධිපති සහතික පත්‍ර පාඨමාලාව">ගුරු පුස්තකාලාධිපති සහතික පත්‍ර පාඨමාලාව</option>
												<option value="ගුරු පුස්තකාල විද්‍යා පශ්චාත් උපාධි ඩිප්ලෝමා පාඨමාලාව">ගුරු පුස්තකාල විද්‍යා පශ්චාත් උපාධි ඩිප්ලෝමා පාඨමාලාව</option>
												<option value="ගුරු පුස්තකාලාධිපති විද්‍යාපති උපාධි">ගුරු පුස්තකාලාධිපති විද්‍යාපති උපාධි</option>
												<option value="කෘෂී අධ්‍යාපනය පිළිබඳ ඩිප්ලෝමා">කෘෂී අධ්‍යාපනය පිළිබඳ ඩිප්ලෝමා</option>
												<option value="ගුරු පුහුණු සහතිකය ආයතනික">ගුරු පුහුණු සහතිකය ආයතනික</option>
												<option value="ගුරු පුහුණු සහතිකය දුරස්ත">ගුරු පුහුණු සහතිකය දුරස්ත</option>
												<option value="ජාතික ශික්ෂණ විද්‍යා ඩිප්ලෝමා">ජාතික ශික්ෂණ විද්‍යා ඩිප්ලෝමා</option>
												<option value="තාක්ෂණ ඩිප්ලෝමා">තාක්ෂණ ඩිප්ලෝමා</option>
												<option value="උසස් තාක්ෂණ ඩිප්ලෝමා">උසස් තාක්ෂණ ඩිප්ලෝමා</option>
												<option value="වෘත්තීය සුදුසුකම ලබා නොමැත">වෘත්තීය සුදුසුකම ලබා නොමැත</option>
												
														</select>
													  
													  
                                                     
													  
													  
													  
                                                  </div>
                                               
                                                 
                                                  <button type="submit" class="btn btn-primary">Save</button>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
								</div>
		
		
		
		
		
		<div class="resum2">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" >
		<p style="color:Black;">මුල් පත්වීමේ ස්වාභාවය</p>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
		<p><?php echo $row['statofEpointment'];?><a href="#myModal17" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a></p>
		<hr>
		</div>
		</div>
		
		<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal17" class="modal fade">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                              <h4 class="modal-title">Edit</h4>
                                          </div>
                                          <div class="modal-body">

                                              <form role="form" action="update.php">
                                                  <div class="form-group">
                                                      <label for="exampleInputEmail1">මුල් පත්වීමේ ස්වාභාවය</label>
													  <input type="hidden" class="form-control" id="exampleInputEmail3" name="IDNO" value="<?php echo $row['IDNO'];?>">
													  <input type="hidden" class="form-control" id="exampleInputEmail3" name="no" value="17">
													  
													  <select class="form-control" name="fname" required>
														<option></option>
												<option></option>
												<option>අධ්‍යාපන පරිපාලන සේවය</option>
												<option>ගුරු අධ්‍යාපන‍ඥ සේවය</option>
												<option>ගුරු සේවය</option>
												<option>වෙනත්</option>
												
														</select>
													  
													  
                                                     
													  
													  
													  
                                                  </div>
                                               
                                                 
                                                  <button type="submit" class="btn btn-primary">Save</button>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
								</div>
		
		
		
		
		
		<div class="resum2">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" >
		<p style="color:Black;">අයත්වන වර්තමාන සේවය</p>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
		<p><?php echo $row['presentser'];?><a href="#myModal18" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a></p>
		<hr>
		</div>
		</div>
		<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal18" class="modal fade">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                              <h4 class="modal-title">Edit</h4>
                                          </div>
                                          <div class="modal-body">

                                              <form role="form" action="update.php">
                                                  <div class="form-group">
                                                      <label for="exampleInputEmail1">අයත්වන වර්තමාන සේවය</label>
													  <input type="hidden" class="form-control" id="exampleInputEmail3" name="IDNO" value="<?php echo $row['IDNO'];?>">
													  <input type="hidden" class="form-control" id="exampleInputEmail3" name="no" value="18">
													  
													  <select class="form-control" name="fname" required>
														<option></option>
												<option></option>
												<option>ශ්‍රී ලංකා අධ්‍යාපන පරිපාලන සේවය I (SLEAS) අධි ශ්‍රේණිය</option>
												<option>ශ්‍රී ලංකා අධ්‍යාපන පරිපාලන සේවය I (SLEAS I) </option>
												<option>ශ්‍රී ලංකා අධ්‍යාපන පරිපාලන සේවය II (SLEAS II) </option>
												<option>ශ්‍රී ලංකා අධ්‍යාපන පරිපාලන සේවය III (SLEAS III)</option>
												<option>ශ්‍රී ලංකා විදුහල්පති සේවය 1 (SLPS 1)</option>
												<option>ශ්‍රී ලංකා විදුහල්පති සේවය 2 (SLPS 2)</option>
												<option>ශ්‍රී ලංකා විදුහල්පති සේවය 3 (SLPS 3)</option>
												<option>ගුරු අධ්‍යාපන‍ඥ සේවය I (SLTE I)</option>
												<option>ගුරු අධ්‍යාපන‍ඥ සේවය II (SLTE II)</option>
												<option>ගුරු අධ්‍යාපන‍ඥ සේවය III (SLTE III)</option>
												<option>ශ්‍රී ලංකා ගුරු සේවය 1</option>
												<option>ශ්‍රී ලංකා ගුරු සේවය 1-2</option>
												<option>ශ්‍රී ලංකා ගුරු සේවය 2-11</option>
												<option>ශ්‍රී ලංකා ගුරු සේවය 3-1 (අ)</option>
												<option>ශ්‍රී ලංකා ගුරු සේවය 3-1(ආ)</option>
												<option>ශ්‍රී ලංකා ගුරු සේවය 3-1(ඇ)</option>
												<option>ශ්‍රී ලංකා ගුරු සේවය 3-11</option>
												<option>ශ්‍රී උපදේශක</option>
												
														</select>
													  
													  
                                                     
													  
													  
													  
                                                  </div>
                                               
                                                 
                                                  <button type="submit" class="btn btn-primary">Save</button>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
								</div>
		
		
		
		
		<div class="resum2">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" >
		<p style="color:Black;">වර්තමාන සේවයට පත් වූ දිනය</p>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
		<p><?php echo $row['nowDate'];?><a href="#myModal19" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a></p>
		<hr>
		</div>
		</div>
		
								<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal19" class="modal fade">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                              <h4 class="modal-title">Edit</h4>
                                          </div>
                                          <div class="modal-body">

                                              <form role="form" action="update.php">
                                                  <div class="form-group">
                                                      <label for="exampleInputEmail1">වර්තමාන සේවයට පත් වූ දිනය</label>
													  <input type="hidden" class="form-control" id="exampleInputEmail3" name="IDNO" value="<?php echo $row['IDNO'];?>">
													  <input type="hidden" class="form-control" id="exampleInputEmail3" name="no" value="19">
                                                      <input type="text" class="form-control" id="exampleInputEmail3" name="fname" value="<?php echo $row['nowDate'];?>">
                                                  </div>
                                               
                                                 
                                                  <button type="submit" class="btn btn-primary">Save</button>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
								</div>
		
		
		
		
		
		<div class="resum2">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" >
		<p style="color:Black;">පත්වීම් ලිපියට අනුව සේවක ගණය</p>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
		<p><?php echo $row['appservice'];?><a href="#myModal20" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a></p>
		<hr>
		</div>
		</div>
		
		<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal20" class="modal fade">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                              <h4 class="modal-title">Edit</h4>
                                          </div>
                                          <div class="modal-body">

                                              <form role="form" action="update.php">
                                                  <div class="form-group">
                                                      <label for="exampleInputEmail1">පත්වීම් ලිපියට අනුව සේවක ගණය</label>
													  <input type="hidden" class="form-control" id="exampleInputEmail3" name="IDNO" value="<?php echo $row['IDNO'];?>">
													  <input type="hidden" class="form-control" id="exampleInputEmail3" name="no" value="20">
													  
													  <select class="form-control" name="fname" required>
														<option></option>
												<option></option>
												<option>සාමාන්‍ය</option>
												<option>විශේෂ</option>
												<option>අධි සේවක</option>
												<option>වෙනත්</option>
												
														</select>
													  
													  
                                                     
													  
													  
													  
                                                  </div>
                                               
                                                 
                                                  <button type="submit" class="btn btn-primary">Save</button>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
								</div>
		
		
		
		
		
		<div class="resum2">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" >
		<p style="color:Black;">විශේෂ නම් අදාල විෂය</p>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
		<p><?php echo $row['Subject'];?><a href="#myModal21" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a></p>
		<hr>
		</div>
		</div>
		
		<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal21" class="modal fade">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                              <h4 class="modal-title">Edit</h4>
                                          </div>
                                          <div class="modal-body">

                                              <form role="form" action="update.php">
                                                  <div class="form-group">
                                                      <label for="exampleInputEmail1">විශේෂ නම් අදාල විෂය</label>
													  <input type="hidden" class="form-control" id="exampleInputEmail3" name="IDNO" value="<?php echo $row['IDNO'];?>">
													  <input type="hidden" class="form-control" id="exampleInputEmail3" name="no" value="21">
													  
													  <select class="form-control" name="fname" required>
														<option></option>
												<option></option>
												<option>Shinhala</option>
												<option>Tamil</option>
												<option>English and Other Languages </option>
												<option>Mathematics</option>
												<option>Science</option>
												<option>Commerce</option>
												<option>Informetion Technology</option>
												<option>Physical Education</option>
												<option>Buddhism</option>
												<option>Christianity</option>
												<option>Hindu</option>
												<option>Islam</option>
												<option>Student Counseling and guidance</option>
												<option>Aesthetics</option>
												<option>Technology </option>
												<option>Special Education</option>
												<option>Planning</option>
												<option>Primary Education</option>
												<option>History</option>
												<option>Other</option>
												
														</select>
													  
													  
                                                     
													  
													  
													  
                                                  </div>
                                               
                                                 
                                                  <button type="submit" class="btn btn-primary">Save</button>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
								</div>
		
		
		
		
		
		
		<div class="resum2">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" >
		<p style="color:Black;">බදවා ගැනීමෙ ස්වභාවය</p>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
		<p><?php echo $row['appoiStat'];?><a href="#myModal22" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a></p>
		<hr>
		</div>
		</div>
		<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal22" class="modal fade">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                              <h4 class="modal-title">Edit</h4>
                                          </div>
                                          <div class="modal-body">

                                              <form role="form" action="update.php">
                                                  <div class="form-group">
                                                      <label for="exampleInputEmail1">බදවා ගැනීමෙ ස්වභාවය</label>
													  <input type="hidden" class="form-control" id="exampleInputEmail3" name="IDNO" value="<?php echo $row['IDNO'];?>">
													  <input type="hidden" class="form-control" id="exampleInputEmail3" name="no" value="22">
													  
													  <select class="form-control" name="fname" required>
														<option></option>
												<option></option>
												<option>විවෘත</option>
												<option>සීමිත</option>
												<option>කුසලතා මත</option>
												
														</select>
													  
													  
                                                     
													  
													  
													  
                                                  </div>
                                               
                                                 
                                                  <button type="submit" class="btn btn-primary">Save</button>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
								</div>
		
		
		
		
		<div class="resum2">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" >
		<p style="color:Black;">වර්තමාන සේවයට අයත් ශේණිය</p>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
		<p><?php echo $row['Nowgrade'];?><a href="#myModal23" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a></p>
		<hr>
		</div>
		</div>
		<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal23" class="modal fade">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                              <h4 class="modal-title">Edit</h4>
                                          </div>
                                          <div class="modal-body">

                                              <form role="form" action="update.php">
                                                  <div class="form-group">
                                                      <label for="exampleInputEmail1">වර්තමාන සේවයට අයත් ශේණිය</label>
													  <input type="hidden" class="form-control" id="exampleInputEmail3" name="IDNO" value="<?php echo $row['IDNO'];?>">
													  <input type="hidden" class="form-control" id="exampleInputEmail3" name="no" value="23">
													  
													  <select class="form-control" name="fname" required>
														<option></option>
												<option >අතිරේක ලේකම්</option>
												<option >විභාග කොමසාරිස් ජනරාල්</option>
												<option >අතිරේක කොමසාරිස්</option>
												<option >නියෝජ්‍ය කොමසාරිස්</option>
												<option >සහකාර කොමසාරිස්</option>
												<option >අධ්‍යක්ෂ ජෙනරාල්</option>
												<option >පළාත් අධ්‍යාපන අධ්‍යක්ෂ</option>
												<option >අධ්‍යාපන අධ්‍යක්ෂ</option>
												<option >අතිරේක පළාත් අධ්‍යාපන අධ්‍යක්ෂ</option>
												<option >පිඨාධිපති</option>
												<option >උප පිඨාධිපති</option>
												<option >කලාප අධ්‍යාපන අධ්‍යක්ෂ</option>
												<option >නියෝජ්‍ය අධ්‍යාපන අධ්‍යක්ෂ</option>
												<option >කොට්ඨාස අධ්‍යාපන අධ්‍යක්ෂ</option>
												<option >සහකාර අධ්‍යාපන අධ්‍යක්ෂ</option>
												<option >විදුහල්පති</option>
												<option >නියෝජ්‍ය විදුහල්පති</option>
												<option >සහකාර විදුහල්පති</option>
												<option >ගුරු මධ්‍යස්තාන කළමනාකරු</option>
												<option >ගුරු මධ්‍යස්තාන කථිකාචාර්ය</option>
												<option >පරිගණක මධ්‍යස්තාන උපදේශක</option>
												<option >ඉංග්‍රිසි උපදේශක</option>
												<option >සම්පත් මධ්‍යස්තාන කළමනාකරු</option>
												<option >ගුරු උපදේශක</option>
												<option >වෙනත්</option>>
												
														</select>
													  
													  
                                                     
													  
													  
													  
                                                  </div>
                                               
                                                 
                                                  <button type="submit" class="btn btn-primary">Save</button>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
								</div>
		
		
		
		
		<div class="resum2">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" >
		<p style="color:Black;">එම සේවයට පත් වූ දිනය</p>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
		<p><?php echo $row['ThatData'];?><a href="#myModal24" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a></p>
		<hr>
		</div>
		</div>
		
		<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal24" class="modal fade">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                              <h4 class="modal-title">Edit</h4>
                                          </div>
                                          <div class="modal-body">

                                              <form role="form" action="update.php">
                                                  <div class="form-group">
                                                      <label for="exampleInputEmail1">එම සේවයට පත් වූ දිනය</label>
													  <input type="hidden" class="form-control" id="exampleInputEmail3" name="IDNO" value="<?php echo $row['IDNO'];?>">
													  <input type="hidden" class="form-control" id="exampleInputEmail3" name="no" value="24">
                                                      <input type="text" class="form-control" id="exampleInputEmail3" name="fname" value="<?php echo $row['ThatData'];?>">
                                                  </div>
                                               
                                                 
                                                  <button type="submit" class="btn btn-primary">Save</button>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
								</div>
		
		
		
		
			<div class="resum2">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" >
		<p style="color:Black;">වර්තමාන සේවා ස්ථානයේ වැඩ භාර ගත් දිනය</p>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
		<p><?php echo $row['newDate'];?><a href="#myModal25" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a></p>
		<hr>
		</div>
		</div>
		<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal25" class="modal fade">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                              <h4 class="modal-title">Edit</h4>
                                          </div>
                                          <div class="modal-body">

                                              <form role="form" action="update.php">
                                                  <div class="form-group">
                                                      <label for="exampleInputEmail1">වර්තමාන සේවා ස්ථානයේ වැඩ භාර ගත් දිනය</label>
													  <input type="hidden" class="form-control" id="exampleInputEmail3" name="IDNO" value="<?php echo $row['IDNO'];?>">
													  <input type="hidden" class="form-control" id="exampleInputEmail3" name="no" value="25">
                                                      <input type="text" class="form-control" id="exampleInputEmail3" name="fname" value="<?php echo $row['newDate'];?>">
                                                  </div>
                                               
                                                 
                                                  <button type="submit" class="btn btn-primary">Save</button>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
								</div>
		
		
		
		<div class="resum2">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" >
		<p style="color:Black;">පළමු කාර්යක්ෂමතා  පරික්ෂණය සමත් වූ දිනය</p>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
		<p><?php echo $row['fistexam'];?><a href="#myModal26" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a></p>
		<hr>
		</div>
		</div>
		
		<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal26" class="modal fade">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                              <h4 class="modal-title">Edit</h4>
                                          </div>
                                          <div class="modal-body">

                                              <form role="form" action="update.php">
                                                  <div class="form-group">
                                                      <label for="exampleInputEmail1">පළමු කාර්යක්ෂමතා  පරික්ෂණය සමත් වූ දිනය</label>
													  <input type="hidden" class="form-control" id="exampleInputEmail3" name="IDNO" value="<?php echo $row['IDNO'];?>">
													  <input type="hidden" class="form-control" id="exampleInputEmail3" name="no" value="26">
                                                      <input type="text" class="form-control" id="exampleInputEmail3" name="fname" value="<?php echo $row['fistexam'];?>">
                                                  </div>
                                               
                                                 
                                                  <button type="submit" class="btn btn-primary">Save</button>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
								</div>
		
		
			<div class="resum2">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" >
		<p style="color:Black;">දෙවන කාර්යක්ෂමතා  පරික්ෂණය සමත් වූ දිනය</p>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
		<p><?php echo $row['SecontExam'];?><a href="#myModal27" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a></p>
		<hr>
		</div>
		</div>
		
		<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal27" class="modal fade">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                              <h4 class="modal-title">Edit</h4>
                                          </div>
                                          <div class="modal-body">

                                              <form role="form" action="update.php">
                                                  <div class="form-group">
                                                      <label for="exampleInputEmail1">දෙවන කාර්යක්ෂමතා  පරික්ෂණය සමත් වූ දිනය</label>
													  <input type="hidden" class="form-control" id="exampleInputEmail3" name="IDNO" value="<?php echo $row['IDNO'];?>">
													  <input type="hidden" class="form-control" id="exampleInputEmail3" name="no" value="27">
                                                      <input type="text" class="form-control" id="exampleInputEmail3" name="fname" value="<?php echo $row['SecontExam'];?>">
                                                  </div>
                                               
                                                 
                                                  <button type="submit" class="btn btn-primary">Save</button>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
								</div>
		
		
		
		
		
		</div>
		
		
		
	
		
		
		</div>
		</div>
		
		
		

      </div>

						
						




<?php

}

}
}else{
	
	
	
	if($ID==""){
	?>
	<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" style="background-color:  #56d9e1 ;">
	
	</div>
	<div class="col-sm-12 col-md-4 col-lg-4 col-xs-12" style="background-color:  #56d9e9 ;">
			<center>	<form class="navbar-form" action="Welcome.php?id=4" method="get">
                            <input type="text" class="form-control" name="IDNO" placeholder="Search" >
							<input type="hidden" class="form-control" name="id" value="4" placeholder="Search" >
							<button type="submit" class="btn btn-info btn-sm">
							<i class="ace-icon fa fa-key bigger-110"></i>Find
							</button>
							
                        </form>
		<div class="activity_rounded"><img src="uploads/" height="100" width="100" /></div>
        
		
    
		<!--<p><a href="remove.php?name=<?php echo $row['Image']; ?>&id=$id" class="btn btn-danger btn-xs" role="button">Remove</a></p></center> -->
		
		<div class="tex">
		<h2><small></small></h2>
		<div class="resum">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" >
		<p style="color:Black;">සම්පූර්ණ නම</p>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
		<p></p>
		<hr>
		</div>
		</div>
		<div class="resum">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" >
		<p style="color:Black;">මුලකුරු සමඟ නම</p>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
		<p></p>
		<hr>
		</div>
		</div>
		<div class="resum">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" >
		<p style="color:Black;">ජා.හැ.අංකය</p>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
		<p></p>
		<hr>
		</div>
		</div>
		<div class="resum">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" >
		<p style="color:Black;">පුද්ගලික දුරකතන අංකය</p>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
		<p></p>
		<hr>
		</div>
		</div>
		<div class="resum">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" >
		<p style="color:Black;">පුද්ගලික විද්‍යුත් ලිපිනය</p>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
		<p></p>
		<hr>
		</div>
		</div>
		
		<div class="resum">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" >
		<p style="color:Black;">උපන් දිනය</p>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
		<p></p>
		<hr>
		</div>
		</div>
		
		
		
		<div class="resum">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" >
		<p style="color:Black;">ස්ත්‍රී/පුරිෂ භාවය</p>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
		<p></p>
		<hr>
		</div>
		</div>
		<div class="resum">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" >
		<p style="color:Black;">ජන වර්ගය</p>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
		<p></p>
		<hr>
		</div>
		</div>
		<div class="resum">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" >
		<p style="color:Black;">ආගම</p>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
		<p></p>
		<hr>
		</div>
		</div>
		
		</div>
		</div> 
		
		<div class="col-sm-12 col-md-8 col-lg-8 col-xs-12" style="background-color:;">
        
		
        
		
    
		<!--<p><a href="remove.php?name=<?php echo $row['Image']; ?>&id=$id" class="btn btn-danger btn-xs" role="button">Remove</a></p></center> -->
		
		<div class="tex">
		<br>
		<div class="resum">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" >
		<p style="color:Black;">පුද්ගලික ලිපිනය</p>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
		<p></p>
		<hr>
		</div>
		</div>
		
		
		
		
		
		
		
		<div class="resum">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" >
		<p style="color:Black;">විවාහක/අවිවාහක භාවය</p>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
		<p></p>
		<hr>
		</div>
		</div>
		<div class="resum">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" >
		<p style="color:Black;">ඉහලම අධ්‍යාපන සුදුසුකම</p>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
		<p></p>
		<hr>
		</div>
		</div>
		<div class="resum">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" >
		<p style="color:Black;">ඉහලම වෘත්තීය සුදුසුකම</p>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
		<p></p>
		<hr>
		</div>
		</div>
		<div class="resum">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" >
		<p style="color:Black;">මුල් පත්වීමේ ස්වාභාවය</p>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
		<p></p>
		<hr>
		</div>
		</div>
		<div class="resum">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" >
		<p style="color:Black;">මුල් පත් වූ දිනය</p>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
		<p></p>
		<hr>
		</div>
		</div>
		<div class="resum">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" >
		<p style="color:Black;">පත්වීම් ලිපියේ අංකය</p>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
		<p></p>
		<hr>
		</div>
		</div>
		<div class="resum">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" >
		<p style="color:Black;">අයත්වන වර්තමාන සේවය</p>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
		<p></p>
		<hr>
		</div>
		</div>
		<div class="resum">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" >
		<p style="color:Black;">වර්තමාන සේවයට පත් වූ දිනය</p>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
		<p></p>
		<hr>
		</div>
		</div>
		<div class="resum">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" >
		<p style="color:Black;">පත්වීම් ලිපියට අනුව සේවක ගණය</p>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
		<p></p>
		<hr>
		</div>
		</div>
		<div class="resum">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" >
		<p style="color:Black;">විශේෂ නම් අදාල විෂය</p>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
		<p></p>
		<hr>
		</div>
		</div>
		<div class="resum">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" >
		<p style="color:Black;">බදවා ගැනීමෙ ස්වභාවය</p>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
		<p></p>
		<hr>
		</div>
		</div>
		<div class="resum">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" >
		<p style="color:Black;">වර්තමාන සේවයට අයත් ශේණිය</p>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
		<p></p>
		<hr>
		</div>
		</div>
		<div class="resum">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" >
		<p style="color:Black;">එම සේවයට පත් වූ දිනය</p>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
		<p></p>
		<hr>
		</div>
		</div>
			<div class="resum">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" >
		<p style="color:Black;">වර්තමාන සේවා ස්ථානයේ වැඩ භාර ගත් දිනය</p>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
		<p></p>
		<hr>
		</div>
		</div>
		<div class="resum">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" >
		<p style="color:Black;">පළමු කාර්යක්ෂමතා  පරික්ෂණය සමත් වූ දිනය</p>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
		<p></p>
		<hr>
		</div>
		</div>
			<div class="resum">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" >
		<p style="color:Black;">දෙවන කාර්යක්ෂමතා  පරික්ෂණය සමත් වූ දිනය</p>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
		<p></p>
		<hr>
		</div>
		</div>
		</div>
		</div>
		
		
		

      </div>
	
	
	
	
	
	<?php
}else{
	
$result = $db->prepare("SELECT * FROM employee WHERE IDNO= :userid");
$result->bindParam(':userid', $ID);
$result->execute();


	
for($i=0; $row = $result->fetch(); $i++){
//$asasa=$row['price'];


?>


		
		<div class="col-sm-12 col-md-4 col-lg-4 col-xs-12" style="background-color:  #56d9e9 ;">
		
        <center>	<form class="navbar-form" action="Welcome.php?id=4" method="get">
                            <input type="text" class="form-control" name="IDNO" placeholder="Search" >
							<input type="hidden" class="form-control" name="id" value="4" placeholder="Search" >
							<button type="submit" class="btn btn-info btn-sm">
							<i class="ace-icon fa fa-key bigger-110"></i>Find
							</button>
							
                        </form>
		<center><div class="activity_rounded"><img src="uploads/<?php echo $row['Image']; ?>" height="100" width="100" /></div>
        
		
    
		<!--<p><a href="remove.php?name=<?php echo $row['Image']; ?>&id=$id" class="btn btn-danger btn-xs" role="button">Remove</a></p></center> -->
		
		<div class="tex">
		<h2><?php echo $row['NameWiInSh'];?> <br><small>(<?php echo $row['service'];?>)</small></h2>
		<div class="resum">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" >
		<p style="color:Black;">සම්පූර්ණ නම</p>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
		<p><?php echo $row['NameinfullSi'];?>
		</p>
		

		<hr>
		</div>
		</div>
							


	



		


		
		
		
		
		<div class="resum">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" >
		<p style="color:Black;">ජා.හැ.අංකය</p>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
		<p><?php echo $row['IDNO'];?></p>
		<hr>
		</div>
		</div>
		<div class="resum">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" >
		<p style="color:Black;">පුද්ගලික දුරකතන අංකය</p>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
		<p><?php echo $row['MobilNo'];?></p>
		<hr>
		</div>
		</div>
		<div class="resum">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" >
		<p style="color:Black;">පුද්ගලික විද්‍යුත් ලිපිනය</p>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
		<p><?php echo $row['email'];?></p>
		<hr>
		</div>
		</div>
		
		
		<div class="resum">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" >
		<p style="color:Black;">උපන් දිනය</p>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
		<p><?php echo $row['Birth'];?></p>
		<hr>
		</div>
		</div>
		
		
		
		<div class="resum">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" >
		<p style="color:Black;">ස්ත්‍රී/පුරිෂ භාවය</p>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
		<p><?php echo $row['gender'];?></p>
		<hr>
		</div>
		</div>
		<div class="resum">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" >
		<p style="color:Black;">ජන වර්ගය</p>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
		<p><?php echo $row['Natanality'];?></p>
		<hr>
		</div>
		</div>
		<div class="resum">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" >
		<p style="color:Black;">ආගම</p>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
		<p><?php echo $row['Religan'];?></p>
		<hr>
		</div>
		</div>
		<div class="resum2">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" >
		<p style="color:Black;">මුල් පත් වූ දිනය</p>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
		<p><?php echo $row['fistDate'];?></p>
		<hr>
		</div>
		</div>
		<div class="resum2">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" >
		<p style="color:Black;">පත්වීම් ලිපියේ අංකය</p>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
		<p><?php echo $row['appNo'];?></p>
		<hr>
		</div>
		</div>
		
		
		
		
		
		
		</div>
		</div> 
		
		<div class="col-sm-12 col-md-8 col-lg-8 col-xs-12" style="background-color:;">
        
							
		
		<br>
		
		
		<div class="tex">
		<br>
		<div class="resum2">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" >
		<p style="color:Black;">පුද්ගලික ලිපිනය</p>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
		<p><?php echo $row['Address'];?></p>
		<hr>
		</div>
		</div>
		
		
		
		
		
		
		
		<div class="resum2">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" >
		<p style="color:Black;">විවාහක/අවිවාහක භාවය</p>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
		<p><?php echo $row['states'];?></p>
		<hr>
		</div>
		</div>
		<div class="resum2">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" >
		<p style="color:Black;">ඉහලම අධ්‍යාපන සුදුසුකම</p>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
		<p><?php echo $row['hiqualifi'];?></a></p>
		<hr>
		</div>
		</div>
		<div class="resum2">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" >
		<p style="color:Black;">ඉහලම වෘත්තීය සුදුසුකම</p>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
		<p><?php echo $row['hiProf'];?></p>
		<hr>
		</div>
		</div>
		<div class="resum2">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" >
		<p style="color:Black;">මුල් පත්වීමේ ස්වාභාවය</p>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
		<p><?php echo $row['statofEpointment'];?></a></p>
		<hr>
		</div>
		</div>
		
		<div class="resum2">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" >
		<p style="color:Black;">අයත්වන වර්තමාන සේවය</p>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
		<p><?php echo $row['presentser'];?></p>
		<hr>
		</div>
		</div>
		<div class="resum2">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" >
		<p style="color:Black;">වර්තමාන සේවයට පත් වූ දිනය</p>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
		<p><?php echo $row['nowDate'];?></p>
		<hr>
		</div>
		</div>
		<div class="resum2">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" >
		<p style="color:Black;">පත්වීම් ලිපියට අනුව සේවක ගණය</p>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
		<p><?php echo $row['appservice'];?></p>
		<hr>
		</div>
		</div>
		<div class="resum2">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" >
		<p style="color:Black;">විශේෂ නම් අදාල විෂය</p>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
		<p><?php echo $row['Subject'];?></p>
		<hr>
		</div>
		</div>
		<div class="resum2">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" >
		<p style="color:Black;">බදවා ගැනීමෙ ස්වභාවය</p>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
		<p><?php echo $row['appoiStat'];?></p>
		<hr>
		</div>
		</div>
		<div class="resum2">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" >
		<p style="color:Black;">වර්තමාන සේවයට අයත් ශේණිය</p>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
		<p><?php echo $row['Nowgrade'];?></p>
		<hr>
		</div>
		</div>
		<div class="resum2">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" >
		<p style="color:Black;">එම සේවයට පත් වූ දිනය</p>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
		<p><?php echo $row['ThatData'];?></p>
		<hr>
		</div>
		</div>
			<div class="resum2">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" >
		<p style="color:Black;">වර්තමාන සේවා ස්ථානයේ වැඩ භාර ගත් දිනය</p>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
		<p><?php echo $row['newDate'];?></p>
		<hr>
		</div>
		</div>
		<div class="resum2">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" >
		<p style="color:Black;">පළමු කාර්යක්ෂමතා  පරික්ෂණය සමත් වූ දිනය</p>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
		<p><?php echo $row['fistexam'];?></p>
		<hr>
		</div>
		</div>
			<div class="resum2">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" >
		<p style="color:Black;">දෙවන කාර්යක්ෂමතා  පරික්ෂණය සමත් වූ දිනය</p>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
		<p><?php echo $row['SecontExam'];?></p>
		<hr>
		</div>
		</div>
		</div>
		
		
		
	
		
		
		</div>
		</div>
		
		
		

      </div>

						
						




<?php

}

}
	
	
}
?>

