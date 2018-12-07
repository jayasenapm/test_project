
<?php 
$zone=$_SESSION['SESS_LAST_NAME'];

?>




<div class="container" style="">
<br>


				
				
					<div class="inner_content_w3_agile_info">
					
							
							<div class="row">
        <div class="col-md-12 portfolio-item">
		<form action="Welcome.php?id=8" class="form-horizontal" role="form" method="get" enctype="multipart/form-data">
									<div class="form-group">
									<input type="hidden"  name="id" id="subject" value="8" placeholder="" class="form-control" />
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
		
		
		
        <div class="row">
		<?php
		$cno=$_GET['catid'];
		$_SESSION["CNO"] =$cno;
		$result = $db->prepare("SELECT * FROM school2017 WHERE  CENSUSNO = '".$cno."'");
		$result->execute();


		$age;
		$wi;
		$product;
		for($i=0; $row = $result->fetch(); $i++){
	
		
		?>
		
		<div id="txtHint">
		<?php $_SESSION["cenc"] = $row['CENSUSNO'];
		
		
		
		
		 ?>
		 	<h3><?php echo $row['CENSUSNO'].' -'.$row['NAMEOFSCHOOL'];; ?></h3>
		<div class="col-md-4 portfolio-item">
		<?Php
			$d1=0;
			$d2=0;
			$d3=0;
			$d4=0;
			$d5=0;
			$d6=0;
			$d7=0;
			$d=0;
			$result17 = $db->prepare("SELECT * FROM student WHERE SNO = '".$cno."'");
			$result17->execute();
		
			for($i=0; $row17 = $result17->fetch(); $i++){
				$d=1;
				$d1=$row17['onefive'];
				$d2=$row17['sixleven'];
				$d3=$row17['ALscin'];
				$d4=$row17['ALtech'];
				$d5=$row17['ALArt'];
				$d6=$row17['ALCom'];
				$d7=$row17['Speci'];
				
			}
	if($d==0){
		?>
		<h4>ලේඛණගත ශිෂ්‍ය සංඛ්‍යාව<a href="#myModal555" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a></h4> 
	<div class="modal fade" id="myModal555" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">ලේඛණගත ශිෂ්‍ය සංඛ්‍යාව</h4>
        </div>
        <div class="modal-body">
          <form id="contactform" role="form" action="dd.php" >
                    <div class="form-group">
                        <label for="name">ප්‍රාථමික(1-5)</label>
                        <input type="text" name="15" id="15" placeholder="" value="" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="emailid">ද්විතීක(6-11)</label>
                        <input type="text" name="secon" id="emailid" placeholder=""  class="form-control" required="required" />
                    </div>
                    <div class="form-group">
                        <label for="subject">උසස් පෙළ (12-13) විද්‍යා</label>
                        <input type="text"  name="sci" id="subject" placeholder="" class="form-control" required="required" />
                    </div>
                    <div class="form-group">
                        <label for="message">උසස් පෙළ (12-13) තාක්ෂණ</label>
						<input type="text"  name="tech" id="subject" placeholder="" class="form-control" required="required" />
                    </div>
					<div class="form-group">
                        <label for="message">උසස් පෙළ (12-13) කලා</label>
						<input type="text"  name="art" id="subject" placeholder="" class="form-control" required="required" />
                    </div>
					<div class="form-group">
                        <label for="message">උසස් පෙළ (12-13) වාණිජ</label>
						<input type="text"  name="com" id="subject" placeholder="" class="form-control" required="required" />
                    </div>
					<div class="form-group">
                        <label for="message">විශේෂ අධ්‍යාපන</label>
						<input type="text"  name="spec" id="subject" placeholder="" class="form-control" required="required" />
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
		
		
		
		<?php
		
	}else{
		?>
		<h4>ලේඛණගත ප සංඛ්‍යාව<a href="#myModal5556" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-book"></span></a></h4> 
		<div class="modal fade" id="myModal5556" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">ලේඛණගත ශිෂ්‍ය සංඛ්‍යාව</h4>
        </div>
        <div class="modal-body">
          <form id="contactform" role="form" action="ddupdate.php" >
                    <div class="form-group">
                        <label for="name">ප්‍රාථමික(1-5)</label>
                        <input type="text" name="15" id="15" placeholder="" value="<?php echo $d1; ?>" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="emailid">ද්විතීක(6-11)</label>
                        <input type="text" name="secon" id="emailid" placeholder="" value="<?php echo $d2; ?>" class="form-control" required="required" />
                    </div>
                    <div class="form-group">
                        <label for="subject">උසස් පෙළ (12-13) විද්‍යා</label>
                        <input type="text"  name="sci" id="subject" placeholder="" value="<?php echo $d3; ?>" class="form-control" required="required" />
                    </div>
                    <div class="form-group">
                        <label for="message">උසස් පෙළ (12-13) තාක්ෂණ</label>
						<input type="text"  name="tech" id="subject" placeholder="" value="<?php echo $d3; ?>" class="form-control" required="required" />
                    </div>
					<div class="form-group">
                        <label for="message">උසස් පෙළ (12-13) කලා</label>
						<input type="text"  name="art" id="subject" placeholder="" value="<?php echo $d4; ?>" class="form-control" required="required" />
                    </div>
					<div class="form-group">
                        <label for="message">උසස් පෙළ (12-13) වාණිජ</label>
						<input type="text"  name="com" id="subject" placeholder="" value="<?php echo $d5; ?>" class="form-control" required="required" />
                    </div>
					<div class="form-group">
                        <label for="message">විශේෂ අධ්‍යාපන</label>
						<input type="text"  name="spec" id="subject" placeholder="" value="<?php echo $d6; ?>" class="form-control" required="required" />
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
		<?php
		
		
	}
	
		?>
              
		
		
		     
<!-- Modal -->
		
		
  
  
		<?php
		$id=0;
		$result7 = $db->prepare("SELECT * FROM student WHERE SNO = '".$cno."'");
		$result7->execute();
		
			
		for($i=0; $row7 = $result7->fetch(); $i++){
			$id++;
		?>


			 
		<table class="table table-bordered">
		<thead>
			<tr>
        <th>අංශය</th>
        <th>ශිෂ්‍ය සංඛ්‍යාව</th>
       
			</tr>
		</thead>
		<tbody>
		<tr>
        <td>ප්‍රාථමික(1-5)</td>
        <td><?php echo $row7['onefive']; ?></td>
        
		</tr>
		<tr>
        <td>ද්විතීක(6-11)</td>
        <td><?php echo $row7['sixleven']; ?></td>
       
		</tr>
		<tr>
        <td>උසස් පෙළ (12-13) විද්‍යා</td>
        <td><?php echo $row7['ALscin']; ?></td>
       
		</tr>
		<tr>
        <td>උසස් පෙළ (12-13) තාක්ෂණ</td>
        <td><?php echo $row7['ALtech']; ?></td>
       
		</tr>
		<tr>
        <td>උසස් පෙළ (12-13) කලා</td>
        <td><?php echo $row7['ALArt']; ?></td>
       
		</tr>
		<tr>
        <td>උසස් පෙළ (12-13) වාණිජ</td>
        <td><?php echo $row7['ALCom']; ?></td>
       
		</tr>
		<tr>
        <td>විශේෂ අධ්‍යාපන</td>
        <td><?php echo $row7['Speci']; ?></td>
       
		</tr>
		</tbody>
		</table>
		<?php } 
		
		if($id==0){
			?>
			
			<table class="table table-bordered">
		<thead>
			<tr>
        <th>අංශය</th>
        <th>ශිෂ්‍ය සංඛ්‍යාව</th>
       
			</tr>
		</thead>
		<tbody>
		<tr>
        <td>ප්‍රාථමික(1-5)</td>
        <td><?php echo $row7['onefive']; ?></td>
        
		</tr>
		<tr>
        <td>ද්විතීක(6-11)</td>
        <td><?php echo $row7['sixleven']; ?></td>
       
		</tr>
		<tr>
        <td>උසස් පෙළ (12-13) විද්‍යා</td>
        <td><?php echo $row7['ALscin']; ?></td>
       
		</tr>
		<tr>
        <td>උසස් පෙළ (12-13) තාක්ෂණ</td>
        <td><?php echo $row7['ALtech']; ?></td>
       
		</tr>
		<tr>
        <td>උසස් පෙළ (12-13) කලා</td>
        <td><?php echo $row7['ALArt']; ?></td>
       
		</tr>
		<tr>
        <td>උසස් පෙළ (12-13) වාණිජ</td>
        <td><?php echo $row7['ALCom']; ?></td>
       
		</tr>
		<tr>
        <td>විශේෂ අධ්‍යාපන</td>
        <td><?php echo $row7['Speci']; ?></td>
       
		</tr>
		</tbody>
		</table>
			
			<?php
			
		}
		
		
		
		
		?>
         </div>
		<div class="col-md-8 portfolio-item">
              
		<?Php
			$d11=0;
			$d21=0;
			$d31=0;
			$d41=0;
			$d51=0;
			$d61=0;
			$d71=0;
			$dd=0;
			$result18 = $db->prepare("SELECT * FROM class WHERE CNO = '".$cno."'");
			$result18->execute();
		
			for($i=0; $row18 = $result18->fetch(); $i++){
				$dd=1;
				$d11=$row18['OneFive'];
				$d21=$row18['SixLeven'];
				$d31=$row18['ALscin'];
				$d41=$row18['ALtech'];
				$d51=$row18['ALArt'];
				$d61=$row18['ALCom'];
				$d71=$row18['ALspecil'];
				
			}	  
			 
			if($dd==0){
				?>
				<h4>පන්ති  සංඛ්‍යාව<a href="#myModal557" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a></h4>
				
				<div class="modal fade" id="myModal557" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">පන්ති සංඛ්‍යාව</h4>
        </div>
        <div class="modal-body">
          <form id="contactform" role="form" action="class.php" >
                    <div class="form-group">
                        <label for="name">ප්‍රාථමික(1-5)</label>
                        <input type="text" name="15" id="15" placeholder="" class="form-control" required="required"/>
                    </div>
                    <div class="form-group">
                        <label for="emailid">ද්විතීක(6-11)</label>
                        <input type="text" name="secon" id="emailid" placeholder=""  class="form-control" required="required" />
                    </div>
                    <div class="form-group">
                        <label for="subject">උසස් පෙළ (12-13) විද්‍යා</label>
                        <input type="text"  name="sci" id="subject" placeholder="" class="form-control" required="required" />
                    </div>
                    <div class="form-group">
                        <label for="message">උසස් පෙළ (12-13) තාක්ෂණ</label>
						<input type="text"  name="tech" id="subject" placeholder="" class="form-control" required="required" />
                    </div>
					<div class="form-group">
                        <label for="message">උසස් පෙළ (12-13) කලා</label>
						<input type="text"  name="art" id="subject" placeholder="" class="form-control" required="required" />
                    </div>
					<div class="form-group">
                        <label for="message">උසස් පෙළ (12-13) වාණිජ</label>
						<input type="text"  name="com" id="subject" placeholder="" class="form-control" required="required" />
                    </div>
					<div class="form-group">
                        <label for="message">විශේෂ අධ්‍යාපන</label>
						<input type="text"  name="spec" id="subject" placeholder="" class="form-control" required="required" />
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
				
				
				
				<?php
				
			}else{
				?>
				
				 <h4>පන්ති  සංඛ්‍යාව<a href="#myModal557" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-book"></span></a> </h4>    
				
				
				<div class="modal fade" id="myModal557" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">පන්ති සංඛ්‍යාව</h4>
        </div>
        <div class="modal-body">
          <form id="contactform" role="form" action="class.php" >
                    <div class="form-group">
                        <label for="name">ප්‍රාථමික(1-5)</label>
                        <input type="text" name="15" id="15" value="<?php echo $d11 ; ?>" placeholder="" class="form-control" required="required"/>
                    </div>
                    <div class="form-group">
                        <label for="emailid">ද්විතීක(6-11)</label>
                        <input type="text" name="secon" id="emailid" placeholder=""  value="<?php echo $d21 ; ?>"  class="form-control" required="required" />
                    </div>
                    <div class="form-group">
                        <label for="subject">උසස් පෙළ (12-13) විද්‍යා</label>
                        <input type="text"  name="sci" id="subject" placeholder=""  value="<?php echo $d31 ; ?>" class="form-control" required="required" />
                    </div>
                    <div class="form-group">
                        <label for="message">උසස් පෙළ (12-13) තාක්ෂණ</label>
						<input type="text"  name="tech" id="subject" placeholder=""  value="<?php echo $d41 ; ?>" class="form-control" required="required" />
                    </div>
					<div class="form-group">
                        <label for="message">උසස් පෙළ (12-13) කලා</label>
						<input type="text"  name="art" id="subject" placeholder=""  value="<?php echo $d51 ; ?>" class="form-control" required="required" />
                    </div>
					<div class="form-group">
                        <label for="message">උසස් පෙළ (12-13) වාණිජ</label>
						<input type="text"  name="com" id="subject" placeholder=""  value="<?php echo $d61 ; ?>" class="form-control" required="required" />
                    </div>
					<div class="form-group">
                        <label for="message">විශේෂ අධ්‍යාපන</label>
						<input type="text"  name="spec" id="subject" placeholder=""  value="<?php echo $d71 ; ?>" class="form-control" required="required" />
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
				
				
				
				
				
				<?php
				
				
			}

			 
			?>  
			  
			  
		
		 
			 
			   
		  


		<?php
		$cl=0;
		$result7 = $db->prepare("SELECT * FROM class WHERE CNO = '".$cno."'");
		$result7->execute();

		for($i=0; $row7 = $result7->fetch(); $i++){
			$cl++;
				
			
		?>



		 
		<table class="table table-bordered">
		<thead>
			<tr>
        <th>අංශය</th>
        <th>ශිෂ්‍ය සංඛ්‍යාව</th>
       
			</tr>
		</thead>
		<tbody>
		<tr>
        <td>ප්‍රාථමික(1-5)</td>
        <td><?php echo $row7['OneFive']; ?></td>
        
		</tr>
		<tr>
        <td>ද්විතීක(6-11)</td>
        <td><?php echo $row7['SixLeven']; ?></td>
       
		</tr>
		<tr>
        <td>උසස් පෙළ (12-13) විද්‍යා</td>
        <td><?php echo $row7['ALscin']; ?></td>
       
		</tr>
		<tr>
        <td>උසස් පෙළ (12-13) තාක්ෂණ</td>
        <td><?php echo $row7['ALtech']; ?></td>
       
		</tr>
		<tr>
        <td>උසස් පෙළ (12-13) කලා</td>
        <td><?php echo $row7['ALArt']; ?></td>
       
		</tr>
		<tr>
        <td>උසස් පෙළ (12-13) වාණිජ</td>
        <td><?php echo $row7['ALCom']; ?></td>
       
		</tr>
		<tr>
        <td>විශේෂ අධ්‍යාපන</td>
        <td><?php echo $row7['ALspecil']; ?></td>
       
		</tr>
		</tbody>
		</table>
		
			<?php } 
			
			if($cl==0){
			?>
			<table class="table table-bordered">
		<thead>
			<tr>
        <th>අංශය</th>
        <th>ශිෂ්‍ය සංඛ්‍යාව</th>
       
			</tr>
		</thead>
		<tbody>
		<tr>
        <td>ප්‍රාථමික(1-5)</td>
        <td><?php echo $row7['OneFive']; ?></td>
        
		</tr>
		<tr>
        <td>ද්විතීක(6-11)</td>
        <td><?php echo $row7['SixLeven']; ?></td>
       
		</tr>
		<tr>
        <td>උසස් පෙළ (12-13) විද්‍යා</td>
        <td><?php echo $row7['ALscin']; ?></td>
       
		</tr>
		<tr>
        <td>උසස් පෙළ (12-13) තාක්ෂණ</td>
        <td><?php echo $row7['ALtech']; ?></td>
       
		</tr>
		<tr>
        <td>උසස් පෙළ (12-13) කලා</td>
        <td><?php echo $row7['ALArt']; ?></td>
       
		</tr>
		<tr>
        <td>උසස් පෙළ (12-13) වාණිජ</td>
        <td><?php echo $row7['ALCom']; ?></td>
       
		</tr>
		<tr>
        <td>විශේෂ අධ්‍යාපන</td>
        <td><?php echo $row7['ALspecil']; ?></td>
       
		</tr>
		</tbody>
		</table>
			
			
			<?php
			}
			?>
		
		
</div>
		
	
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
           <div class="col-md-12 portfolio-item">
              
		<h4>අනුමත ගුරුවරුන් සංඛ්‍යාව හා සිටින ගුරුවරුන් සංඛ්‍යාව</h4>
		           
		<table class="table table-bordered">
		<thead>
			<tr>
        <th colspan="2">ගුරු විෂය වර්ගය</th><th colspan="">අනුමත</th><th colspan="">සිටින</th><th colspan="">ඌණ</th><th colspan="">අතිරික්ත</th><th colspan="">මාරුකිරීම</th>
       
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
		$k=0;
		$result2 = $db->prepare("SELECT * FROM subject_2 where SUID=:userid ORDER BY Order1 ASC");
							$result2->bindParam(':userid',$id );
							$result2->execute();
							for($i=0; $row2 = $result2->fetch(); $i++){
								$count=$count+1;
								$suid=$row2['suid2'];
								$k++;
		?>
		<td><a href="#myModal2<?php echo $count; ?>" data-toggle="modal" ><?php echo $row2['suid2']; ?><?php echo $row2['suName2']; ?>
		
													
		
		
									
		
		
		</td>
		</a>
		<?php
		$anumath=0;
		$result3 = $db->prepare("SELECT * FROM status where cNo=:userid and suid=:suid ");
							$result3->bindParam(':userid',$cno );
							$result3->bindParam(':suid',$row2['suid2'] );
							$result3->execute();
							for($i=0; $row3 = $result3->fetch(); $i++){
								
							$anumath=	$row3['anumatha'];
								
								
							}
								
		
		?>
		
		
		
		
		<td><?php echo $anumath; ?><a href="#myModal<?php echo $count; ?>" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a></td>
								
		
		
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal<?php echo $count; ?>" class="modal fade">
														<div class="modal-dialog">
															<div class="modal-content">
																<div class="modal-header">
																<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
															<h4 class="modal-title">Add sub Subject</h4>
														</div>
														<div class="modal-body">
														
													
														

															<form role="form" action="addststus.php">
															
														
															
															
																<div class="form-group">
																	<label for="exampleInputEmail1"> අනුමත ගරු සංඛ්‍යාව:</label>
																	
																	<input type="hidden" class="form-control" id="exampleInputEmail3" name="suno" value="<?php echo $row2['suid2']; ?>">
																	<input type="hidden" class="form-control" id="exampleInputEmail3" name="cno" value="<?php echo $_SESSION["cenc"]; ?>">
																	<input type="text" class="form-control" id="exampleInputEmail3" name="quan" value="">
																</div><div class="form-group">
																	
																	
																</div>
																
                                                 
															<button type="submit" class="btn btn-primary">Save</button>
															</form>
														</div>
														</div>
														</div>
													</div>
		
		
		<?php
		$sitina=0;
		$result4 = $db->prepare("SELECT * FROM teachers where cNo=:userid and Subject=:suid ");
							$result4->bindParam(':userid',$cno );
							$result4->bindParam(':suid',$row2['suid2'] );
							$result4->execute();
							for($i=0; $row4 = $result4->fetch(); $i++){
								
							$sitina++;
								
								
							}
								
		
		?>
		<td><a href="#k<?php echo $k ; ?>" data-toggle="modal" ><?php echo  $sitina; ?> </a>
		
		<a href="#myModal27" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a></td>




	<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal27" class="modal fade">
														<div class="modal-dialog">
															<div class="modal-content" style="width:100%; height: 900px;">
																
															<div class="modal-header">
																<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
															<h4 class="modal-title">නව ගුරුවරයෙකු ඇතුලත් කිරීම </h4>
															</div>

															<div class="modal-body">
															<form action="ss.php">
																
															<div class="form-group" style="">
														  <label class="col-md-12 ">ගුරුභවතාගේ නම</label>  
														    <div class="col-md-12 ">
														    <div class="input-group">
														        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
														  		<input name="first_name" placeholder="" value="" class="form-control"  type="text">
														    </div>
														  </div>
														</div>


														<div class="form-group"> 
														  <label class="col-md-12 control-label">විෂය</label>
														    <div class="col-md-12 selectContainer">
														    <div class="input-group">
														        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
														    <select name="subject" class="form-control selectpicker" >
														      <option value=" " >විෂය තෝරන්න</option>
															 
															  <?php
															  $result13 = $db->prepare("SELECT * FROM subject_2 ");
																					
																					$result13->execute();
																					for($i=0; $row13 = $result13->fetch(); $i++){
																						?>
																						 <option value="<?php echo $row13['suid2']; ?>"><?php echo $row13['suName2']; ?></option>
																					
																					
																						<?php
																						
																					}
															  
															  
															  ?>
															  
														     
														      
														      
														    </select>
														  </div>
														</div>
														</div>

														<div class="form-group ">
														<label class="control-label col-sm-12 requiredField" for="date">
														උපන් දිනය<span class="asteriskField"> *</span></label>
														<div class="col-sm-12">
														<div class="input-group">
														<div class="input-group-addon">
														<i class="fa fa-calendar"></i>
														</div>
														
														<input class="form-control" id="date" name="birthd" placeholder="MM/DD/YYYY" type="date" required="required"/>
														</div>
														</div>
													</div>

													 <div class="form-group">
													  <label class="col-md-12 control-label">ජාතික හැදුනම්පත්‍ර අංකය</label>  
													    <div class="col-md-12 inputGroupContainer">
													    <div class="input-group">
													        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
													  <input name="IDNO" placeholder="" value="" class="form-control"  type="text">
													    </div>
													  </div>
													</div>



													<div class="form-group ">
													<label class="control-label col-sm-12 requiredField" for="date">
													පත්වීම් දිනය<span class="asteriskField"> *</span></label>
													<div class="col-sm-12">
													<div class="input-group">
													<div class="input-group-addon">
													<i class="fa fa-calendar"></i>
													</div>
													<input class="form-control" id="date" name="appdate" placeholder="MM/DD/YYYY" type="date" required="required">
													</div>
													</div>
													</div>
													<div class="form-group">
													  <label class="col-md-12 control-label">ලිපිනය</label>  
													    <div class="col-md-12 inputGroupContainer">
													    <div class="input-group">
													        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
														<textarea class="form-control" name="address" value="" placeholder=""></textarea>
															
															
													  
													    </div>
													  </div>
													</div>

												<div class="form-group">
													  <label class="col-md-12 control-label">දැනට සේවය කරනු ලබන පාසලට පත්වූ දිනය</label>  
													    <div class="col-md-12 inputGroupContainer">
													    <div class="input-group">
													        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
														<input class="form-control" id="date" name="nowdate" placeholder="MM/DD/YYYY" type="date" required="required">
															
															
													  
													    </div>
													  </div>
													</div>


										  
										  

										
									
										<div class="form-group">
										  <label class="col-md-12 control-label">ඉගැනවිය හැකි වෙනත් විෂයන්</label>  
										   <div class="col-md-12 inputGroupContainer">
										    <div class="input-group">
										        <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
										  <input name="othsubj" placeholder="" value="" class="form-control" type="text">
										    </div>
										  </div>

										</div>
										<div class="form-group">
										  <label class="col-md-12 control-label">විශේෂ දක්ෂතා</label>
										    <div class="col-md-12 inputGroupContainer">
										    <div class="input-group">
										        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
										        	<textarea class="form-control" name="skil" value="" placeholder=""></textarea>
										  </div>
										  </div>
										</div>
										<div class="form-group">
											
										<label class="col-md-12 control-label"></label>
										<div class="col-md-12" style="padding-left: 50%;">
										    <button  type="submit" class="btn btn-warning " >Send <span class="glyphicon glyphicon-send"></span></button>
										  </div>

										</div>

											</form>
	
											</div>

											</div>
															

											</div>
														
															
											</div>
								
								
							<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="k<?php echo $k ; ?>" class="modal fade">
														<div class="modal-dialog">
															<div class="modal-content" style="width:50%;">
																<div class="modal-header">
																<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
															<h4 class="modal-title">විෂයට සිටින ගුරුවරු  ලැයිස්තුව </h4>
														</div>
														<div class="modal-body">
														<?php
														$s=0;
														$result12= $db->prepare("SELECT * FROM teachers WHERE Subject='".$row2['suid2']."' and  CNO = '".$cno."'");
														$result12->bindParam(':userid', $res);
														$result12->execute();
														for($i=0; $row12 = $result12->fetch(); $i++){
															$s++;
															?>
														<h5><?php echo $s.'.'. $row12['TeachersName']; ?> </h5>
														<?php
														}
														?>
													
														</div>
														</div>
													</div>
								</div>
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
		<?php 
		$balance=$anumath-$sitina;
		if($balance>0){
			?>
			<td><?php echo $balance ; ?></td>
			<td>00</td>
			<?php
			
		}else{
		?>
		<td>00</td>
		<td><?php echo $balance *(-1) ; ?></td>
		
		<?php
			
		}
		?>
		
		
		<td>
		<a href="#myModal22<?php echo $count; ?>" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-new-window"></span></a>
		
		<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal22<?php echo $count; ?>" class="modal fade">
														<div class="modal-dialog" style="width:90%;">
															<div class="modal-content" >
																<div class="modal-header">
																<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
															<h4 class="modal-title">ගුරු මාරු/විශ්‍රාම ගැන්වීම්/පළාතේන් පිට/මිය යම්</h4>
														</div>
														<div class="modal-body">
													<form action="nn.php"  method="get" >	
													
													<div class="form-group">
													<div class="table-responsive">
													<table class="table table-condensed">
													<thead>
													<tr>
													<th><input type="checkbox" id="toggleChkSelFabricante" name="toggleChkSelFabricante"></th>
													<th>නම</th>
													<th>උපන්දිනය</th>
													<th>ජාතික.හැ.අ</th>
													<th>පත්වීම් දිනය</th>
													<th>මේ දක්වා සේවය කර ඇති කාලය</th>
													</tr>
													</thead>
													
													<tbody id="selFabricanteBody">
													
													<?php
														$statusss='';
														$result12= $db->prepare("SELECT * FROM teachers WHERE CNO = '".$cno."'");
														$result12->bindParam(':userid', $res);
														$result12->execute();
														
														for($i=0; $row12 = $result12->fetch(); $i++){
														$statusss=$row12['status'];
															if($statusss==''){


														?>

													
													<tr>
													
													<td></td>
													
													<td><?php echo $row12['TeachersName']; ?></td>
													<td><?php echo $row12['BirthDay']; ?></td>
													<td ><?php echo $row12['IDNO']; ?>
													 <input name="IDNO" placeholder="" value="<?php echo $row12['IDNO'] ; ?>" class="form-control"  type="hidden">
													
													</td>
													<td><?php echo $row12['AppDay']; ?></td>
													<td><?php echo $row12['PreDate']; ?></td>
													<td>
													
													
													</td>
													
													<td width="200px;">
	<select name="subject" class="form-control selectpicker" >
      <option value=" " >විෂය තෝරන්න</option>
	 
	  <?php
	  $result13 = $db->prepare("SELECT * FROM subject_2 ");
							
							$result13->execute();
							for($i=0; $row13 = $result13->fetch(); $i++){
								?>
								 <option value="<?php echo $row13['suid2']; ?>"><?php echo $row13['suName2']; ?></option>
							
							
								<?php
								
							}
	  
	  
	  ?>
	  
     
      
      
    </select>	
													
													</td>
													
								<td width="200px;">
	<select name="school" class="form-control selectpicker" >
      <option value=" " >පාසල තෝරන්න</option>
	 
	  <?php
	  $result13 = $db->prepare("SELECT * FROM provincialsummery ");
							
							$result13->execute();
							for($i=0; $row13 = $result13->fetch(); $i++){
								?>
								 <option value="<?php echo $row13['CENSUSNO']; ?>"><?php echo $row13['CENSUSNO']; ?>-<?php echo $row13['NAMEOFSCHOOL']; ?></option>
							
							
								<?php
								
							}
	  
	  
	  ?>
	  
     
      
      
    </select>	
													
													</td>					
													
													<td><button type="submit" name="btn" value="change" class="btn btn-success" >මාරු කිරීම</button></td>
													<td><button type="submit" name="btn" value="reti"class="btn btn-warning" >විශ්‍රාම ගැන්වීම</button></td>
													<td><button type="submit" name="btn" value="out" class="btn btn-success" > පළාතේන් පිට</button></td>
													<td><button type="submit" name="btn" value="ded" class="btn btn-danger" >මිය යම්</button></td>
													<td><button type="submit" name="btn" value="terminat" class="btn btn-info" >වැඩ අවසන් කිරීම</button></td>
													
													
													
													</form>
													</tr>
													
													<?php }} ?>
													</tbody>
													</table>
													</div>
													</div>
													<div>
													
														

														
														</div>
														</div>
														</div>
													</div>
		
		
		
		
		
		</td>
		
		</tr>
		
		
		
		
		
		
		<?php } ?>
		
		
		
		
		
		
		
		<?php } ?>
		
		
		</tbody>
		</table>
									
												
         </div>
        </div>
      
		

		
		
         </div>
		<?php } ?> 
        </div>	   
					
					
					
					
					
					

				    </div>
					<!-- //inner_content_w3_agile_info-->
				</div>
		<!-- //inner_content-->
	</div>
<!-- banner -->
<!--copy rights start here-->
<div class="copyrights">
	 <p></p>
</div>	
<!--copy rights end here-->
<!-- js -->
</div>