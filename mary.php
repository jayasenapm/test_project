<?php 

$IDNO=$_GET['IDNO'];

?>



<div class="page-header">
							<h1>
								Form Elements
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									පවුලේ විස්තර (විවාහක නම්)
								</small>
							</h1>
						</div><!-- /.page-header -->
						
						
						
						
						
						
						<div class="row" style="background-color:  #56d9e9 ;">
							<div class="col-xs-12">
							<br>
			<h3>යම් කිසි තනතුරක වැඩ බැලීම/රාජකාරි ඉටු කිරීමක් සිදුකරයිනම් ඒ පිළිබඳ විස්තර</h3>
			<?php
		$k=0;
		$result = $db->prepare("SELECT * FROM work WHERE  IDNO = '".$IDNO."'");
		$result->execute();

		for($i=0; $row = $result->fetch(); $i++){
			$k++;
			if($k==1){
			
				
		?>
		
		<form action="work.php" class="form-horizontal" role="form" method="get" enctype="multipart/form-data">
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1">වැඩ බලන තනතුර </label>
					
				<div class="col-sm-9">
				<input type="hidden" name="ID" id="15" placeholder="" value="<?php echo $IDNO ;?>" class="form-control" />
				<input type="text" name="now" id="form-field-1-1" value="<?php echo $row['Now']; ?>" placeholder="Text Field" class="form-control" disabled />
				</div>
			</div>	
				
				<div class="form-group ">
										<label class="control-label col-sm-3 requiredField" for="date">
										උපන් දිනය<span class="asteriskField"> *</span></label>
										<div class="col-sm-3">
										<div class="input-group">
										<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
										</div>
										<input class="form-control" id="date" name="birth" value="<?php echo $row['WDATE']; ?>" placeholder="MM/DD/YYYY" type="text" disabled/>
										</div>
										</div>
									</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1">වැඩ බලන ආයතනය </label>

				<div class="col-sm-9">
				<input type="text" name="ins" id="form-field-1-1" value="<?php echo $row['INS']; ?>" placeholder="Text Field" class="form-control" disabled />
				</div>
			</div>	
			<div class="form-group ">
										<label class="control-label col-sm-3 requiredField" for="date">
										</span></label>
										<div class="col-sm-3">
										<div class="input-group">
										
											<input type="submit" class="btn btn-info" value="Submit Button">
											<button type="reset" class="btn btn-info" value="Reset">Reset</button>
										</div>
										</div>
									</div>
			
			
			
				</form>
		
		
		<?php
			}
		}
	if($k==0){
			
		?>
		
				<form action="work.php" class="form-horizontal" role="form" method="get" enctype="multipart/form-data">
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1">වැඩ බලන තනතුර </label>
					
				<div class="col-sm-9">
				<input type="hidden" name="ID" id="15" placeholder="" value="<?php echo $IDNO ;?>" class="form-control" />
				<input type="text" name="now" id="form-field-1-1" value="" placeholder="Text Field" class="form-control" required />
				</div>
			</div>	
				
				<div class="form-group ">
										<label class="control-label col-sm-3 requiredField" for="date">
										උපන් දිනය<span class="asteriskField"> *</span></label>
										<div class="col-sm-3">
										<div class="input-group">
										<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
										</div>
										<input class="form-control" id="date" name="birth" value="" placeholder="MM/DD/YYYY" type="text" required="required"/>
										</div>
										</div>
									</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1">වැඩ බලන ආයතනය </label>

				<div class="col-sm-9">
				<input type="text" name="ins" id="form-field-1-1" value="" placeholder="Text Field" class="form-control" required />
				</div>
			</div>	
			<div class="form-group ">
										<label class="control-label col-sm-3 requiredField" for="date">
										</span></label>
										<div class="col-sm-3">
										<div class="input-group">
										
											<input type="submit" class="btn btn-info" value="Submit Button">
											<button type="reset" class="btn btn-info" value="Reset">Reset</button>
										</div>
										</div>
									</div>
			
			
			
				</form>
				
				
				<?php
			
			}
		
		?>
		
			
			
			

			
	<h3>බිරිද/ස්වාමියා<a href="#myModal5556" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a></h3>
	
	<div class="modal fade" id="myModal5556" role="dialog">
	<div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">බිරිද/ස්වාමියා</h4>
        </div>
        <div class="modal-body">
          <form id="contactform" role="form" action="addwife.php" >
                    <div class="form-group">
                        <label for="name">නම</label>
                        <input type="text" name="name" id="15" placeholder="" value="" class="form-control" />
						<input type="hidden" name="ID" id="15" placeholder="" value="<?php echo $IDNO ;?>" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="emailid">උප්පැන්න සහතිකයේ අංකය</label>
                        <input type="text" name="bNO" id="emailid" placeholder="" value="" class="form-control" required="required" />
                    </div>
                    <div class="form-group ">
										<label class="control-label  requiredField" for="date">
										උපන් දිනය<span class="asteriskField"> *</span></label>
										
										<div class="input-group">
										<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
										</div>
										<input class="form-control" id="date" name="birth" placeholder="MM/DD/YYYY" type="text" required="required"/>
										</div>
										
									</div>
                    <div class="form-group">
                        <label for="message">ජා.හැ.අංකය</label>
						<input type="text"  name="IDNO" id="subject" placeholder="" value="" class="form-control" required="required" />
                    </div>
					<div class="form-group">
                        <label for="message">සේවය කරන ආයතනය හා තනතුර</label>
						<input type="text"  name="isns" id="subject" placeholder="" value="" class="form-control" required="required" />
                    </div>
					
					
					 <button type="submit" class="btn btn-default" >ADD</button>
					 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					
                </form>
		  
		  
		  
		  
		  
        </div>
        <div class="modal-footer">
         
        </div>
      </div>
      
    </div>
	</div>
	
	
	
	<table class="table table-bordered">
    <thead>
      <tr>
        <th>නම</th>
        <th>උප්පැන්න සහතිකයේ අංකය</th>
        <th>උපන් දිනය</th>
		<th>ජා.හැ.අංකය</th>
		<th>සේවය කරන ආයතනය හා තනතුර</th>
		
      </tr>
    </thead>
    <tbody>
	<?php
		
		$result1 = $db->prepare("SELECT * FROM wife WHERE  IDNO = '".$IDNO."'");
		$result1->execute();

		for($i=0; $row1= $result1->fetch(); $i++){
				
		?>
      <tr>
        <td><?php echo $row1['Name']; ?></td>
        <td><?php echo $row1['BNO']; ?></td>
        <td><?php echo $row1['BD']; ?></td>
		<td><?php echo $row1['WIDNO']; ?></td>
		<td><?php echo $row1['Institut']; ?></td>
      </tr>
		<?php } ?>
     
    </tbody>
  </table>
	<h3>දරුවන් <a href="#myModal5557" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a></h3>
							
		<div class="modal fade" id="myModal5557" role="dialog">
	<div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">දරුවන්</h4>
        </div>
        <div class="modal-body">
          <form id="contactform" role="form" action="child.php" >
                    <div class="form-group">
                        <label for="name">නම</label>
                        <input type="text" name="name" id="15" placeholder="" value="" class="form-control" />
						<input type="hidden" name="ID" id="15" placeholder="" value="<?php echo $IDNO ;?>" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="emailid">උප්පැන්න සහතිකයේ අංකය</label>
                        <input type="text" name="bNO" id="emailid" placeholder="" value="" class="form-control" required="required" />
                    </div>
                    <div class="form-group ">
										<label class="control-label  requiredField" for="date">
										උපන් දිනය<span class="asteriskField"> *</span></label>
										
										<div class="input-group">
										<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
										</div>
										<input class="form-control" id="date" name="birth" placeholder="MM/DD/YYYY" type="text" required="required"/>
										</div>
										
									</div>
                    <div class="form-group">
                        <label for="message">ජා.හැ.අංකය</label>
						<input type="text"  name="IDNO" id="subject" placeholder="" value="" class="form-control" required="required" />
                    </div>
					<div class="form-group">
                        <label for="message">සේවය කරන ආයතනය හා තනතුර</label>
						<input type="text"  name="isns" id="subject" placeholder="" value="" class="form-control" required="required" />
                    </div>
					
					
					 <button type="submit" class="btn btn-default" >ADD</button>
					 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					
                </form>
		  
		  
		  
		  
		  
        </div>
        <div class="modal-footer">
         
        </div>
      </div>
      
    </div>
	</div>					
							
							
	<table class="table table-bordered">
    <thead>
      <tr>
        <th>නම</th>
        <th>උප්පැන්න සහතිකයේ අංකය</th>
        <th>උපන් දිනය</th>
		<th>ජා.හැ.අංකය</th>
		<th>සේවය කරන ආයතනය හා තනතුර</th>
		
      </tr>
    </thead>
    <tbody>
     <?php
		
		$result1 = $db->prepare("SELECT * FROM child WHERE  IDNO = '".$IDNO."'");
		$result1->execute();

		for($i=0; $row1= $result1->fetch(); $i++){
				
		?>
      <tr>
        <td><?php echo $row1['CNAME']; ?></td>
        <td><?php echo $row1['BNO']; ?></td>
        <td><?php echo $row1['BD']; ?></td>
		<td><?php echo $row1['CIDNO']; ?></td>
		<td><?php echo $row1['Insti']; ?></td>
      </tr>
		<?php } ?>
     
     
    </tbody>
  </table>						
							
							
							
							
							</div>
						</div>