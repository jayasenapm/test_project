<!DOCTYPE html>
<html>
<head>
<title></title>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
        <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
</head>
	<script src="js5/jquery.js" type="text/javascript"></script>
	<script src="js5/bootstrap.js" type="text/javascript"></script>
	<script type="text/javascript" charset="utf-8" language="javascript" src="js5/jquery.dataTables.js"></script>
	<script type="text/javascript" charset="utf-8" language="javascript" src="js5/DT_bootstrap.js"></script>
	<script type="text/javascript" src="js5/jquery_1.5.2.js"></script>
	<script type="text/javascript" src="js5/vpb_uploader.js"></script>
	<script type="text/javascript">
$(document).ready(function()
{
	// Call the main function
	new vpb_multiple_file_uploader
	({
		vpb_form_id: "vasplus_form_id", // Form ID
		autoSubmit: true,
		vpb_server_url: "upload3.php" 
	});
});
</script>
<style>
header, footer {
    min-height:50px;
    position:relative;
}
[role="contents"] {
    position:relative;
}
.mega-nav {
    background:#2a8fcf;
    border-radius:0;
    margin-bottom:0;
}
.mega-nav.navbar-default .navbar-nav > li > a {
    color:#fff;
    transition: all 200ms ease-out;
    -webkit-transition: all 200ms ease-out;
    -ms-transition: all 200ms ease-out;
}
.mega-nav.navbar-default .navbar-nav > li > a:hover {
    background:#0075b3;
} 
.mega-nav.navbar-default .navbar-nav > li.dropdown > a:hover,
.mega-nav.navbar-default .navbar-nav > li.dropdown > a:focus,
.mega-nav.navbar-default .navbar-nav > li.dropdown > a:active{
    background:#0075b3;
    color:#fff;
} 
#MainMenu {
    padding-left:0;
}
#MainMenu .menu-list li {
    transition: all 200ms ease-out;
    -webkit-transition: all 200ms ease-out;
    -ms-transition: all 200ms ease-out;
}
#MainMenu .menu-list li + li {
    border-left:1px solid rgba(255, 255, 255, 0.5);
}

.mega-nav.navbar-default .navbar-nav > li.menu-list .list-category a {
    color:#333;
}
</style>
<body>

<?php
if(isset($_SESSION['SESS_FIRST_NAME']) && !empty($_SESSION['SESS_FIRST_NAME'])) {
	


?>



  <h2>Files Upload</h2>
<br clear="all" />

    <form name="vasplus_form_id" id="vasplus_form_id" action="javascript:void(0);" enctype="multipart/form-data" style="width:800px; margin-top:20px;">
			
            <input type="file" name="vasplus_multiple_files" id="vasplus_multiple_files" multiple="multiple" style="padding:5px;"/> 
			<input type="text" name="name" id="" style="padding:5px;"/> <br>
          <input type="submit" value="Upload" style="padding:5px;"/>
 
        <br clear="all">

    </form>

	<table class="table table-striped table-bordered" id="vpb_added_files_box">
		<thead>
			<tr>
				<th>File Name</th>
				<th>Status</th>
				<th>File Size</th>
				<th>Action</th>
			<tr>
		</thead>
		<tbody>
		
		</tbody>
 
	</table>
	
	
	<table class="table table-striped table-bordered" id="vpb_added_files_box">
		<thead>
			<tr>
				<th>File Name</th>
				<th>Downlode</th>
				
				
				
			</tr>
			
			
			
	
		<tbody>
		<?php
			include('connect.php');
	
				$result = $db->prepare("SELECT * FROM file_name");
				$result->bindParam(':userid', $res);
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
				?>
		
		
		
		<tr>
				<td><?php echo $row['Name'];?></td>
				<td>hgfhghf</td>
				
				
				
			</tr>
		</tbody>
				<?php } ?>
	</table>
	
	
<?php } ?>


		

</body>
</html>