<?php 
session_start();
include('connect.php');
$q = $_GET['q'];
$total=0;
$dis=0;

				

				
?>


<div id="txtHint57">
<br>

<?php
if($q=='1'){
	?>
	<form action="ss.php">
		



<!-- Text input-->

<div class="form-group">
  <label class="col-md-3 control-label">ගුරුභවතාගේ නම</label>  
    <div class="col-md-9 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="first_name" placeholder="" value="" class="form-control"  type="text">
    </div>
  </div>
</div>
<br>
<br>
<!-- Text input-->
<div class="form-group"> 
  <label class="col-md-3 control-label">විෂය</label>
    <div class="col-md-9 selectContainer">
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

<br>
<br>



									<div class="form-group ">
										<label class="control-label col-sm-3 requiredField" for="date">
										උපන් දිනය<span class="asteriskField"> *</span></label>
										<div class="col-sm-9">
										<div class="input-group">
										<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
										</div>
										<input class="form-control" id="date" name="birth" placeholder="MM/DD/YYYY" type="date" required="required"/>
										</div>
										</div>
									</div>







<br>
<br>
<!-- Text input-->
       <div class="form-group">
  <label class="col-md-3 control-label">ජාතික හැදුනම්පත්‍ර අංකය</label>  
    <div class="col-md-9 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="IDNO" placeholder="" value="" class="form-control"  type="text">
    </div>
  </div>
</div>

<br>
<br>
<!-- Text input-->
       
									<div class="form-group ">
										<label class="control-label col-sm-3 requiredField" for="date">
										පත්වීම් දිනය<span class="asteriskField"> *</span></label>
										<div class="col-sm-9">
										<div class="input-group">
										<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
										</div>
										<input class="form-control" id="date" name="appdate" placeholder="MM/DD/YYYY" type="date" required="required"/>
										</div>
										</div>
									</div>

<br>
<br>
<!-- Text input-->
      
<div class="form-group">
  <label class="col-md-3 control-label">ලිපිනය</label>  
    <div class="col-md-9 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="address" placeholder="Address" value="" class="form-control" type="text">
    </div>
  </div>
</div>
<br>
<br>
<!-- Text input-->
 

								<div class="form-group ">
										<label class="col-md-4 control-label">දැනට සේවය කරනු ලබන පාසලට පත්වූ දිනය</label>  
										
										<div class="col-sm-8">
										<div class="input-group">
										<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
										</div>
										<input class="form-control" id="date" name="nowdate" placeholder="MM/DD/YYYY" type="date" required="required"/>
										</div>
										</div>
									</div>

<br>
<br>

   
<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label">ඉගැනවිය හැකි වෙනත් විෂයන්</label>  
   <div class="col-md-9 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
  <input name="othsubj" placeholder="" value="" class="form-control" type="text">
    </div>
  </div>

</div>


<br>
<br>

<!-- Text area -->
  
<div class="form-group">
  <label class="col-md-3 control-label">විශේෂ දක්ෂතා</label>
    <div class="col-md-9 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
        	<textarea class="form-control" name="skil" value="" placeholder=""></textarea>
  </div>
  </div>
</div>

						
															

<br>
<br>


		
<label class="col-md-4 control-label"></label>
  <div class="col-md-8">
    <button type="submit" class="btn btn-warning" >Send <span class="glyphicon glyphicon-send"></span></button>
  </div>
  
  <br>
  <br>
  </form>
	
	
	<?php
	
}else{

?>
	<form action="ss.php">
		



<!-- Text input-->

<div class="form-group">
  
<?php
$result11 = $db->prepare("SELECT * FROM table7 WHERE IDN = '".$q."'");
$result11->bindParam(':userid', $res);
$result11->execute();for($i=0; $row11 = $result11->fetch(); $i++){


?>


  
  <div class="col-md-9 inputGroupContainer">
  <div class="input-group">
  
  <input  name="first_name" placeholder="" class="form-control" value="<?php echo $row11['TNAME']; ?>"  type="hidden">
    </div>
  </div>
  

</div>
<br>
<br>
<!-- Text input-->
<div class="form-group"> 
  <label class="col-md-3 control-label">විෂය</label>
    <div class="col-md-9 selectContainer">
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

<br>
<br>



									<div class="form-group ">
										<label class="control-label col-sm-3 requiredField" for="date">
										උපන් දිනය<span class="asteriskField"> *</span></label>
										<div class="col-sm-9">
										<div class="input-group">
										<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
										</div>
										<input class="form-control" id="date" name="birth" placeholder="MM/DD/YYYY" type="date" required="required"/>
										</div>
										</div>
									</div>







<br>
<br>
<!-- Text input-->
       <div class="form-group">
  <label class="col-md-3 control-label">ජාතික හැදුනම්පත්‍ර අංකය</label>  
    <div class="col-md-9 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="IDNO" placeholder="" value="<?php echo $row11['IDN']; ?>" class="form-control"  type="text">
    </div>
  </div>
</div>

<br>
<br>
<!-- Text input-->
       
									<div class="form-group ">
										<label class="control-label col-sm-3 requiredField" for="date">
										පත්වීම් දිනය<span class="asteriskField"> *</span></label>
										<div class="col-sm-9">
										<div class="input-group">
										<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
										</div>
										<input class="form-control" id="date" name="appdate" placeholder="MM/DD/YYYY" type="date" required="required"/>
										</div>
										</div>
									</div>

<br>
<br>
<!-- Text input-->
      
<div class="form-group">
  <label class="col-md-3 control-label">ලිපිනය</label>  
    <div class="col-md-9 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="address" placeholder="Address" value="" class="form-control" type="text">
    </div>
  </div>
</div>
<br>
<br>
<!-- Text input-->
 

								<div class="form-group ">
										<label class="col-md-4 control-label">දැනට සේවය කරනු ලබන පාසලට පත්වූ දිනය</label>  
										
										<div class="col-sm-8">
										<div class="input-group">
										<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
										</div>
										<input class="form-control" id="date" name="nowdate" placeholder="MM/DD/YYYY" type="date" required="required"/>
										</div>
										</div>
									</div>

<br>
<br>

   
<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label">ඉගැනවිය හැකි වෙනත් විෂයන්</label>  
   <div class="col-md-9 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
  <input name="othsubj" placeholder="" value="" class="form-control" type="text">
    </div>
  </div>

</div>


<br>
<br>

<!-- Text area -->
  
<div class="form-group">
  <label class="col-md-3 control-label">විශේෂ දක්ෂතා</label>
    <div class="col-md-9 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
        	<textarea class="form-control" name="skil" value="" placeholder=""></textarea>
  </div>
  </div>
</div>

	<?php } ?>						
															

<br>
<br>


		
<label class="col-md-4 control-label"></label>
  <div class="col-md-8">
    <button type="submit" class="btn btn-warning" >Send <span class="glyphicon glyphicon-send"></span></button>
  </div>
  
  <br>
  <br>
  </form>

		

<?php } ?>
</div>