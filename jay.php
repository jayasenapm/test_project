<div class="container">
<br>
      
        <div class="row">
        <div class="col-md-12 portfolio-item">
              
		
		           
		<form action="addsub2.php" class="form-horizontal" role="form" method="get" enctype="multipart/form-data">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">අංශය:</label>

										<div class="col-sm-3">
												<select class="form-control" Name="suid">
												<option></option>
												<?php
													$count=0;
											include('connect.php');
	
												$result = $db->prepare("SELECT * FROM subject ORDER BY SUID");
												$result->bindParam(':userid', $res);
												$result->execute();
												for($i=0; $row = $result->fetch(); $i++){
												?>
												
												
												<option value="<?php echo $row['SUID'];?>"><?php echo $row['SuName'];?></option>
												<?php
												}
												?>
												</select>
												
												<a href="#myModal1" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a>
												
												 
											
												
												
												
										</div>
									</div>
									
									
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> විෂය අංකය: </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1-1" name="subjectno" placeholder="" class="form-control" required/>
										
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> විෂය: </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1-1" name="subject2" placeholder="" class="form-control" required/>
										
										</div>
									</div>
									
									<div class="form-group ">
										<label class="control-label col-sm-3 requiredField" for="date">
										</span></label>
										
										<div class="input-group">
										
											<input type="submit" class="btn btn-info" value="Submit Button">
											<button type="reset" class="btn btn-info" value="Reset">Reset</button>
									</div>
									</div>
									
									
									
									
								
									</form>
									
									<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal1" class="modal fade">
														<div class="modal-dialog">
															<div class="modal-content">
																<div class="modal-header">
																<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
															<h4 class="modal-title">Add New Subject</h4>
														</div>
														<div class="modal-body">

															<form role="form" action="addsub.php">
																<div class="form-group">
																	<label for="exampleInputEmail1">Subject Name:</label>
													  
																	<input type="text" class="form-control" id="exampleInputEmail3" name="sname" value="">
																</div>
                                               
                                                 
															<button type="submit" class="btn btn-primary">Save</button>
															</form>
														</div>
														</div>
														</div>
													</div>
												
									
									
									
						
         </div>
		
		 
		    
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
           <div class="col-md-12 portfolio-item">
              
		
		           
		<table class="table table-condensed">
		<thead>
			<tr>
        <th colspan="3">ගුරු විෂය වර්ගය</th>
       
			</tr>
		</thead>
		<tbody>
		<tr>
		<?php
		$no=0;
		$count=0;
		$result = $db->prepare("SELECT * FROM subject ORDER BY SUID");
							$result->bindParam(':userid', $res);
							$result->execute();
							for($i=0; $row = $result->fetch(); $i++){
								$id=$row['SUID'];
								
		$result3 = $db->prepare("SELECT * FROM subject_2 where SUID=:userid ");
							$result3->bindParam(':userid',$id );
							$result3->execute();
							for($i=0; $row3 = $result3->fetch(); $i++){
								$no=$no+1;
							}
							
		
								
		?>
		<td rowspan="<?php echo $no; ?>"><?php echo $row['SuName']; ?></td>
		
		<?php
		
		$result2 = $db->prepare("SELECT * FROM subject_2 where SUID=:userid ORDER BY Order1 ASC");
							$result2->bindParam(':userid',$id );
							$result2->execute();
							for($i=0; $row2 = $result2->fetch(); $i++){
								$count=$count+1;
		?>
		<td><?php echo $row2['suName2']; ?>
		
													
		
		
									
		<?php
		$result4 = $db->prepare("SELECT * FROM subject3 where suid2=:userid");
							$result4->bindParam(':userid',$row2['suid2'] );
							$result4->execute();
							for($i=0; $row4 = $result4->fetch(); $i++){
		?>
		<br>
		<hr>
		<?php echo $row4['suid3']; ?><?php echo $row4['SuName']; ?> 
		
							<?php } ?>
		
		
		
		</td>
		
		
		</tr>
		
		<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal<?php echo $count; ?>" class="modal fade">
														<div class="modal-dialog">
															<div class="modal-content">
																<div class="modal-header">
																<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
															<h4 class="modal-title">Add sub Subject</h4>
														</div>
														<div class="modal-body">
														
													
														

															<form role="form" action="addsubsub.php">
															
														
															
															
																<div class="form-group">
																	<label for="exampleInputEmail1"> Subject Number:</label>
													  
																	<input type="text" class="form-control" id="exampleInputEmail3" name="suno" value="<?php echo $row2['suid2']; ?>">
																</div><div class="form-group">
																	<label for="exampleInputEmail1">Add Sub Subject No:</label>
													  
																	<input type="text" class="form-control" id="" name="subno" value="">
																</div>
																<div class="form-group">
																	<label for="exampleInputEmail1">Add Sub Subject Name:</label>
													  
																	<input type="text" class="form-control" id="" name="suname" value="">
																</div>
                                                 
															<button type="submit" class="btn btn-primary">Save</button>
															</form>
														</div>
														</div>
														</div>
													</div>
		
		
		
		
		<?php } ?>
		
		
		
		
		
		
		
		<?php } ?>
		
		
		</tbody>
		</table>
									
												
         </div>
        </div>
        <!-- /.row -->

      
        

        <hr>

     

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p></p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>