	
	<form action="savecat.php" method="post">
<center><h4><i class="icon-plus-sign icon-large"></i> Add Categories </h4></center>
<hr>
<div id="ac">
<span>Product Name : </span>
<select name="users" style="width:265px; height:30px;" class="chzn-select"  onchange="showUser(this.value)" required>
  <option></option>
	<?php
	include('../connect.php');
	
	$result = $db->prepare("SELECT * FROM catagary");
		$result->bindParam(':userid', $res);
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
		<option value="<?php echo $row['CID'];?>">
		
		
		 <?php echo $row['Discription']; ?></option>
	<?php
				}
			?>


  </select>

<span>Name : </span><input type="text" style="width:265px; height:30px;" name="wi" required><br>





<div style="float:right; margin-right:10px;">
<button class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-save icon-large"></i> Save</button>
</div>
</div>
</form>