<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<form action="updateBalance.php?pin=2" method="post">
<center><h4><i class="icon-edit icon-large"></i> Receive Payment </h4></center>
<hr>
<div id="ac">

<input type="hidden" name="memi" value="<?php echo $id; ?>" />
<span>Invoice Name : </span><input type="text" style="width:265px; height:30px;"  name="code" value="<?php echo $row['InvoiceNo']; ?>" Required/><br>
<span>Date : </span><input type="text" style="width:265px; height:30px;"  name="gen" value="<?php echo $row['Date']; ?>" /><br>
<span> </span><input type="hidden" style="width:265px; height:30px;"  name="name" value="<?php echo $row['ReAmount']; ?>" /><br>
<span>Type</span><select name="type" style="width: 268px; height:30px;  margin-bottom: 15px;">
<option value="" >Select Type</option>
<option value="cash" >cash</option>
<option value="chq" >checq</option>

</select>

<span></span><input type="text" name="chqNo" placeholder="chequ No" style="width: 250px; height:30px;  margin-bottom: 15px;"  required/><br>
<span>Amount: </span><input type="text" style="width:265px; height:30px;"  name="rec"  /><br>

<div style="float:right; margin-right:10px;">

<button class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-save icon-large"></i> Save Changes</button>
</div>
</div>
</form>