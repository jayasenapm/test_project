<?php 

$zone=$_SESSION['SESS_LAST_NAME'];


?>


<div class="conainer">
	



<div class="row">
        <div class="col-md-12 portfolio-item">
		<form action="Welcome.php?id=134&d1=&d2=" class="form-horizontal" role="form" method="get" enctype="multipart/form-data">
									<div class="form-group">
									<input type="hidden"  name="id" id="subject" value="134" placeholder="" class="form-control" />
										<label class="col-md-3 control-label no-padding-right" for="form-field-1">පාසලේ නම:</label>

										<div class="col-md-6">
												<select class="form-control" Name="catid" onchange="">
												<option></option>
												<?php
											include('connect.php');
												if($zone=='admin'){
													$result = $db->prepare("SELECT * FROM school2017");
												}else{
													
													$result = $db->prepare("SELECT * FROM school2017 WHERE  Division = '".$zone."'");
												}
	
												
												$result->bindParam(':userid', $res);
												$result->execute();
												for($i=0; $row = $result->fetch(); $i++){
												?>
												
												
												<option value="<?php echo $row['CENSUSNO'];?>"><?php echo $row['CENSUSNO'].'-'. $row['NAMEOFSCHOOL'];?></option>
												<?php
												}
												?>
												</select>
												
												
												
												
												
												
												
												
												
										</div>
										<button type="submit" class="btn btn-primary">Submit</button>
									</div>
									</form>
		</div>
		</div>

											<?php
											if(isset($_GET['catid'])){

												$cid=$_GET['catid'];
												include('connect.php');
	
												$result = $db->prepare("SELECT * FROM school2017 WHERE  CENSUSNO = '".$cid."'");
											}else{
												include('connect.php');
	
												$result = $db->prepare("SELECT * FROM school2017 ");
											}
												
												
												$result->execute();
												for($i=0; $row125 = $result->fetch(); $i++){
												
													
											?>






<br>
<br>


<form action="editschool.php" class="form-horizontal" role="form" method="get" enctype="multipart/form-data">
	

	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> අංකය: </label>

			<div class="col-sm-9">
			<input type="text" id="form-field-1-1" name="scholno" value="<?php echo $row125['CENSUSNO']; ?>" placeholder="" class="form-control" required/>
										
			</div>
	</div>
	<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">දිස්ත්‍රික්කය:</label>

										<div class="col-sm-3">
												<select class="form-control" Name="DISTRICT">
												<option><?php echo $row125['Division']; ?></option>
												<?php
													$count=0;
											include('connect.php');
	
												$result = $db->prepare("SELECT DISTRICT FROM school2017 GROUP BY DISTRICT ORDER BY CENSUSNO");
												
												$result->execute();
												for($i=0; $row = $result->fetch(); $i++){
												?>
												
												
												<option value="<?php echo $row['DISTRICT'];?>"><?php echo $row['DISTRICT'];?></option>
												<?php
												}
												?>
												</select>
												
											
												
												 
											
												
												
												
										</div>
	</div>
											



	<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">කලාපය:</label>

										<div class="col-sm-3">
												<select class="form-control" Name="zone">
												<option><?php echo $row125['Zone']; ?></option>
												<?php
													$count=0;
											
	
												$result = $db->prepare("SELECT Zone FROM school2017 GROUP BY Zone ORDER BY CENSUSNO");
												
												$result->execute();
												for($i=0; $row = $result->fetch(); $i++){
												?>
												
												
												<option value="<?php echo $row['Zone'];?>"><?php echo $row['Zone'];?></option>
												<?php
												}
												?>
												</select>
												
											
												
												 
											
												
												
												
										</div>
	</div>

<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">කොට්ඨාසය:</label>

										<div class="col-sm-3">
												<select class="form-control" Name="Division">
												<option><?php echo $row125['Division']; ?></option>
												<?php
													$count=0;
											include('connect.php');
	
												$result = $db->prepare("SELECT Division FROM school2017 GROUP BY Division ORDER BY CENSUSNO");
												
												$result->execute();
												for($i=0; $row = $result->fetch(); $i++){
												?>
												
												
												<option value="<?php echo $row['Division'];?>"><?php echo $row['Division'];?></option>
												<?php
												}
												?>
												</select>
												
											
												
												 
											
												
												
												
										</div>
	</div>

	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1">පාසලේ නම: </label>

			<div class="col-sm-9">
			<input type="text" id="form-field-1-1" value="<?php echo $row125['NAMEOFSCHOOL']; ?>" name="scholname" placeholder="" class="form-control" required/>
										
			</div>
	</div>

	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1">ලිපිනය: </label>

			<div class="col-sm-9">
			<input type="text" id="form-field-1-1"  value="<?php echo $row125['ADDRESS']; ?>" name="address" placeholder="" class="form-control" required/>
										
			</div>
	</div>

	<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">මාද්‍යය:</label>

										<div class="col-sm-3">
												<select class="form-control" Name="mid">
												<option><?php echo $row125['Medum']; ?></option>
												<option>SINHALA</option>
												<option>TAMIL</option>
												<option>ENGLISH</option>
												</select>
												
											
												
												 
											
												
												
												
										</div>
	</div>


	<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">වර්ගය:</label>

										<div class="col-sm-3">
												<select class="form-control" Name="type">
													<option><?php echo $row125['Type']; ?></option>
												<option>1AB</option>
												<option>1C</option>
												<option>Type 2</option>
												<option>Type 3</option>
												</select>
												
											
												
												 
											
												
												
												
										</div>
	</div>

<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">ජාතික/පළාත්:</label>

										<div class="col-sm-3">
												<select class="form-control" Name="cat">
													
												<option><?php echo $row125['NATPRO']; ?></option>
												<option>PROVINCIAL</option>
												<option>NATIONAL</option>
												
												</select>
												
											
												
												 
											
												
												
												
										</div>
	</div>




<div class="form-group ">
	<label class="control-label col-sm-3 requiredField" for="date">
										</label>
									<div class="input-group">
										
											<input type="submit" class="btn btn-info" value="Edit">
											<button type="reset" class="btn btn-info" value="Reset">Reset</button>
									</div>


</div>
										
							
</form>


<?php } ?>


		</div>