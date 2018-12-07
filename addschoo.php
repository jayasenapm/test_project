

<br>
<br>


<form action="addschool.php" class="form-horizontal" role="form" method="get" enctype="multipart/form-data">
	

	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> අංකය: </label>

			<div class="col-sm-9">
			<input type="text" id="form-field-1-1" name="scholno" placeholder="" class="form-control" required/>
										
			</div>
	</div>
	<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">දිස්ත්‍රික්කය:</label>

										<div class="col-sm-3">
												<select class="form-control" Name="DISTRICT">
												<option></option>
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
												<option></option>
												<?php
													$count=0;
											include('connect.php');
	
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
												<option></option>
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
			<input type="text" id="form-field-1-1" name="scholname" placeholder="" class="form-control" required/>
										
			</div>
	</div>

	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1">ලිපිනය: </label>

			<div class="col-sm-9">
			<input type="text" id="form-field-1-1" name="address" placeholder="" class="form-control" required/>
										
			</div>
	</div>

	<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">මාද්‍යය:</label>

										<div class="col-sm-3">
												<select class="form-control" Name="mid">
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
												<option>PROVINCIAL</option>
												<option>NATIONAL</option>
												
												</select>
												
											
												
												 
											
												
												
												
										</div>
	</div>




<div class="form-group ">
	<label class="control-label col-sm-3 requiredField" for="date">
										</label>
									<div class="input-group">
										
											<input type="submit" class="btn btn-info" value="Submit Button">
											<button type="reset" class="btn btn-info" value="Reset">Reset</button>
									</div>


</div>
										
							
</form>