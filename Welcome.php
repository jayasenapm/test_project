
<?php 

$id=$_GET['id'];
//
//unset($_SESSION['SESS_FIRST_NAME']);

if(isset($_SESSION['SESS_FIRST_NAME']) && !empty($_SESSION['SESS_FIRST_NAME'])) {
	session_start();
  $username=$_SESSION['SESS_FIRST_NAME'];
}
session_start();
if(isset($_SESSION['SESS_MEMBER_ID']) && !empty($_SESSION['SESS_MEMBER_ID'])) {
$userid=$_SESSION['SESS_MEMBER_ID'];
}

?>




<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">
	<!--<link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">-->
		<link rel="stylesheet" type="text/css" href="css/dataTables.colVis.css">
		<script type="text/javascript" language="javascript" src="js/jquery.js"></script>
		<script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>
		<script type="text/javascript" language="javascript" src="js/dataTables.colVis.js"></script>
	<!-- Bootstrap Date-Picker Plugin -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	 <script src="typeahead.min.js"></script>
		
		<script type="text/javascript" language="javascript" >
			$(document).ready(function() {
			   var dataTable =  $('#employee-grid').DataTable( {
			   	processing: true,
				serverSide: true,
				ajax: "employee-grid-data.php", // json datasource
			
			    } );
			   var colvis = new $.fn.dataTable.ColVis( dataTable, {
					buttonText: '<img src="images/down.gif" >',
					activate: 'mouseover',
					exclude: [ 0 ]	
    			   } );
			   $( colvis.button() ).prependTo('th:nth-child(1)');
		    
			} );
		</script>
	
	<script>
	$(document).ready(function () {
    //Hover Menu in Header
    $('ul.nav li.dropdown').hover(function () {
        $(this).find('.mega-dropdown-menu').stop(true, true).delay(200).fadeIn(200);
        $('.darkness').stop(true, true).fadeIn();
    }, function () {
        $(this).find('.mega-dropdown-menu').stop(true, true).delay(200).fadeOut(200);
         $('.darkness').stop(true, true).delay(200).fadeOut();
    });
});

	</script>

	<script>
    $(document).ready(function(){
    $('input.typeahead').typeahead({
        name: 'typeahead',
        remote:'search.php?key=%QUERY',
        limit : 10
    });
});
    </script>
	
	<script>
function showUser4(str) {
    if (str == "") {
        document.getElementById("txtHint57").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint57").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getuser4.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>

	
	
	
   <style type="text/css">
body {
    width:100%;
    height:100%;
    font-family:Arial;
    font-size:14px;
	padding-top:0;
	margin-top:0;
}
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
.darkness {
    background: rgba(0, 0, 0, 0.7);
    display: none;
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    z-index: 5;
}
.panel-body .btn:not(.btn-block) { width:120px;margin-bottom:10px; }
.doubleicon {position: relative;
width: 194px;
padding: 10px;
height: 100px;
float: left;
margin: 15px;
background: #f1f1f1;
border: 1px solid #ccc;
border-radius: 10px;}
.doubleicon{hover:background-color:black;}
.doubleicon .glyphicon:first-child {font-size: 26px;}
.doubleicon .glyphicon:last-child {position: absolute;font-size: 14px;height: 14px;width: 14px;right: 5px;top: 26px;text-shadow: -2px -1px 0 #fff;}

.text-danger{ color:#F50C0C}
.text-success {color: #3eb440;}
.text-warning {color: #cbaf18;}

.footer {
    /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#a90329+0,8f0222+67,6d0019+100;Brown+Red+3D */
background: #a90329; /* Old browsers */
background: -moz-linear-gradient(top, #a90329 0%, #8f0222 67%, #6d0019 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top, #a90329 0%,#8f0222 67%,#6d0019 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom, #a90329 0%,#8f0222 67%,#6d0019 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a90329', endColorstr='#6d0019',GradientType=0 ); /* IE6-9 */
    margin: 0;
    padding: 20px 0;
}
.footer_dv {
    width: 100%;
}
.footer_dv h4 {
    color: #fcab0e;
    font-family: roboto;
    font-weight: bold;
    margin-bottom: 30px;
    text-transform: uppercase;
}
.footer_dv ul {
    list-style: outside none none;
    margin: 0;
    padding: 0;
}
.footer_dv ul li:first-child {
    border-top: medium none;
    box-shadow: none;
}
.footer_dv ul li {
    border-top: 1px solid #000;
    box-shadow: 0 -1px 0 rgba(255, 255, 255, 0.2);
    color: #f1f2f2;
    padding: 5px 0;
}
.footer_dv p {
    color: #fff;
    font-size: 14px;
    line-height: 20px;
    margin: 0 0 15px;
    text-align: justify;
}

    .btn-w3r {
	width: 200px;  
    height: 200px;  
    -moz-border-radius: 50%;  
    -webkit-border-radius: 50%;  
    border-radius: 50%;
        background: #cb60b3; /* Old browsers */  
        background: -moz-linear-gradient(top,  #cb60b3 0%, #ad1283 50%, #de47ac 100%); /* FF3.6+ */  
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#cb60b3), color-stop(50%,#ad1283), color-stop(100%,#de47ac)); /   *   Chrome,Safari4+ */  
        background: -webkit-linear-gradient(top,  #cb60b3 0%,#ad1283 50%,#de47ac 100%); /* Chrome10+,Safari5.1+ */  
        background: -o-linear-gradient(top,  #cb60b3 0%,#ad1283 50%,#de47ac 100%); /* Opera 11.10+ */  
        background: -ms-linear-gradient(top,  #cb60b3 0%,#ad1283 50%,#de47ac 100%); /* IE10+ */  
        background: linear-gradient(to bottom,  #cb60b3 0%,#ad1283 50%,#de47ac 100%); /* W3C */  
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cb60b3', endColorstr='#de47ac',GradientType=0 ); /* IE6-9 */
		
        }  
		
		.btn-w3r:hover {  
    background: #333;   
    color:#e75616;  
    }
.circle {
  margin: 36px;
  display: inline-block;
  padding: 16px;
  text-align: center;
  width: 180px;
  height: 180px;
  border-radius: 50%;
  border: 2px solid #1d2087;
}

.circle::before,
.circle::after {
  position: absolute;
  z-index: -1;
  display: block;
  content: '';
}
.circle,
.circle::before,
.circle::after {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: all .5s;
  transition: all .5s;
}

.circle {
  position: relative;
  z-index: 2;
  background-color: #fff;
  border: 5px solid #5c5eae;
  color: #5c5eae;
  line-height: 50px;
  overflow: hidden;
}

.circle:hover {
  color: #fff;
}
.circle::after {
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border-radius: 50%;
  -webkit-transform: scale(.5);
  transform: scale(.5);
}
.circle:hover::after {
  background: #9de2ea;
  border-radius: 50%;
  -webkit-transform: scale(.9);
  transform: scale(.9);
}

.circle1 {
  opacity: 0.6;
}

.circle2 {
  opacity: 0.6;
}

.circle3 {
  opacity: 0.8;
}

.circle a {
  text-decoration: none;
  color: #1d2087;
}

.circle h2 {
  font-size: 60px;
}

.circle h2 small {
  color: #1d2087;
}

.circle p {
  font-size: 24px;
  line-height: 26px;
}



@media (max-width: 300px) {
 #maincontent {
    background-color:   #107c89 ;
    
  }
}
@media (min-width: 301px) and (max-width: 900px) {
  #maincontent {
    background-color:  #107c89 ;
   
  }
}
@media (min-width: 901px) and (max-width: 1600px) {
  #maincontent {
    
    background-image: url("images/hrm.jpg");
  }
}

div.container {
			    max-width: 980px;
			    margin: 0 auto;
			}
			div.header {
			    margin: 0 auto;
			    max-width:980px;
			}
			body {
			    background: #f7f7f7;
			    color: #333;
			}
			
	.activity_rounded {
    display: inline-block;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    -khtml-border-radius: 50%;
    border: 3px solid #fff;
}

.activity_rounded img  {
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    -khtml-border-radius: 50%;
    vertical-align: middle;
    behavior: url(css/PIE.htc);
}		
	.tex h2{
		text-align: center;
		color:white;
		text-outline: 2px 2px black;
	}
	.tex p{
		text-align: center;
		color:white;
		text-outline: 2px 2px black;
	}
	.resum2 p{
		text-align: center;
		color:black;
		text-outline: 2px 2px black;
	}
	
	.bs-example{
	font-family: sans-serif;
	position: relative;
	margin: 50px;
}
.typeahead, .tt-query, .tt-hint {
	border: 2px solid #CCCCCC;
	border-radius: 8px;
	font-size: 24px;
	height: 30px;
	line-height: 30px;
	outline: medium none;
	padding: 8px 12px;
	width: 396px;
}
.typeahead {
	background-color: #FFFFFF;
}
.typeahead:focus {
	border: 2px solid #0097CF;
}
.tt-query {
	box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
}
.tt-hint {
	color: #999999;
}
.tt-dropdown-menu {
	background-color: #FFFFFF;
	border: 1px solid rgba(0, 0, 0, 0.2);
	border-radius: 8px;
	box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
	margin-top: 12px;
	padding: 8px 0;
	width: 422px;
}
.tt-suggestion {
	font-size: 24px;
	line-height: 24px;
	padding: 3px 20px;
}
.tt-suggestion.tt-is-under-cursor {
	background-color: #0097CF;
	color: #FFFFFF;
}
.tt-suggestion p {
	margin: 0;
}
header,.navbar{
  /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#a90329+0,8f0222+67,6d0019+100;Brown+Red+3D */
background: #a90329; /* Old browsers */
background: -moz-linear-gradient(top, #a90329 0%, #8f0222 67%, #6d0019 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top, #a90329 0%,#8f0222 67%,#6d0019 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom, #a90329 0%,#8f0222 67%,#6d0019 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a90329', endColorstr='#6d0019',GradientType=0 ); /* IE6-9 */
	
</style> 





</head>
<body>
    <header style="height:100px; padding-top:10px; background-color: green;  ">
        <div style="padding-left:150px;">
		 <img src="images/logo.png" >
        <strong style="padding-left:600px;"></strong><small></small>
		</div>
    </header>
    <nav class="navbar navbar-default mega-nav">
        <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#MainMenu" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="MainMenu">
            <ul class="nav navbar-nav menu-list">
                
                <!--<li><a href="Welcome.php?id=1">Home</a></li>-->
                
                <li><a href="Welcome.php?id=9&d1=&d2=">Add Subject</a></li>
                <li><a href="Welcome.php?id=133&d1=&d2=">Add School</a></li>
                <li><a href="Welcome.php?id=134&d1=&d2=">Edit School</a></li>
				        <li><a href="Welcome.php?id=8&d1=&d2=&catid=">Manage Emplyee</a></li>
                 <li><a href="Welcome.php?id=135&d1=&d2=&catid=">School List</a></li>
            </ul>
			
			<ul class="nav navbar-nav navbar-right">
			<?php
			 if(isset($_SESSION['SESS_FIRST_NAME']) && !empty($_SESSION['SESS_FIRST_NAME'])) {
				$username=$_SESSION['SESS_FIRST_NAME'];
				?>
				<li><a href="#"><span class="glyphicon glyphicon-user"></span><?php echo $username?></a></li>
				
				<?php
				include('connect.php');
				$result = $db->prepare("SELECT * FROM user WHERE ID= :userid");
				$result->bindParam(':userid', $userid);
				$result->execute();

				for($i=0; $row = $result->fetch(); $i++){
					if($username==$row['username'])
				{
				?>
				<li><a href="loginout.php"><span class="glyphicon glyphicon-log-in"></span> Login Out</a></li>
				</ul>
			
			
        </div>
        </div>
    </nav>
    <main role="contents" style="height: 700px; overflow: scroll;" >
        <div class="container" style="padding-top:0;";>
		
		
		
		
		
	
		
	<section class="section_0">
	<?php
	if($id==1){
		
       include 'dashBoard.php';
     
	}elseif($id==2){
		
		 include 'input.php';
		
	}elseif($id==3){
		
		 include 'Table.php';
		
	}elseif($id==4){
		
		 include 'wiev.php';
		
	}elseif($id==6){
		
		 include 'fileuplode.php';
		
	}elseif($id==7){
		
		 include 'downlode.php';
		
	}elseif($id==8){
		
		 include 'mm.php';
		
	}elseif($id==9){
		
		 include 'jay.php';
		
	}elseif($id==11){
		
		 include 'mary.php';
		
	}elseif($id==133){
    
     include 'addschoo.php';
    
  }elseif($id==134){
    
     include 'editschoo.php';
    
  }elseif($id==135){
    
     include 'schoollist.php';
    
  }
	
	?>
    </section>
	</div>
	
								<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal1" class="modal fade">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                              <h4 class="modal-title">Login</h4>
                                          </div>
                                          <div class="modal-body">

                                              <form role="form" action="login.php" method="post">
                                                  <div class="form-group">
                                                      <label for="exampleInputEmail1">User Name</label>
													 
                                                      <input type="text" class="form-control" id="exampleInputEmail3" name="username" placeholder="">
                                                  </div>
												<div class="form-group">
                                                      <label for="exampleInputEmail1">Pass Word</label>
													 
                                                      <input type="password" class="form-control" id="exampleInputEmail3" name="password" placeholder="">
                                                  </div>
                                                 
                                                  <button type="submit" class="btn btn-primary">Login</button>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
								</div>
		
		
		
		
	
		
        
    </main>
				
				
				
				
				<?php
				}
				}
				
			 }else{
				 ?>
				 <li><a href="#"><span class="glyphicon glyphicon-user"></span>user</a></li>
				 <li><a href="#myModal1" data-toggle="modal" ><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				 
				 </ul>
			
			
        </div>
        </div>
    </nav>
    <main role="contents">
        <div class="container" style="padding-top:0;";>
		
		
		
		
		
	
		
	<section class="section_0">
	<?php
	if($id==1){
		
       include 'dashBoard.php';
     
	}elseif($id==2){
		
		 include 'input.php';
		
	}elseif($id==3){
		
		 include 'Table.php';
		
	}elseif($id==4){
		
		 include 'wiev.php';
		
	}elseif($id==6){
		
		 include 'fileuplode.php';
		
	}elseif($id==7){
		
		 include 'downlode.php';
		
	}
	?>
    </section>
	</div>
	
								<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal1" class="modal fade">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                              <h4 class="modal-title">Login</h4>
                                          </div>
                                          <div class="modal-body">

                                              <form role="form" action="login.php" method="post">
                                                  <div class="form-group">
                                                      <label for="exampleInputEmail1">User Name</label>
													 
                                                      <input type="text" class="form-control" id="exampleInputEmail3" name="username" placeholder="">
                                                  </div>
												<div class="form-group">
                                                      <label for="exampleInputEmail1">Pass Word</label>
													 
                                                      <input type="password" class="form-control" id="exampleInputEmail3" name="password" placeholder="">
                                                  </div>
                                                 
                                                  <button type="submit" class="btn btn-primary">Login</button>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
								</div>
		
		
		
		
	
		
        
    </main>
				 
				 
				 
				 
				 <?php
				 
			 }
			?>
				
			
	
    <section class="footer">
   
    	<div class="row" style="padding-left:50px;">
        	<div class="col-lg-4  col-md-4 col-sm-4">
            	<div class="footer_dv">
                	<h4>Address</h4>
                	<ul>
                    	<li class="line_rv"><a href="canon-printer-support.php">Uva provincial Department of Education</a></li>
               
                        <li><a href="hp-printer-support.php">Welagedara Road</a></li>
                        <li><a href="dell-printer-support.php">Badulla</a></li>
                        
                    </ul>
                </div>
            </div>
            <div class="col-lg-4  col-md-4 col-sm-4">
            	<div class="footer_dv">
                	<h4>Phone</h4>
                	<ul>
                    	<li><a href="tosiba-printer-support.php">0552222607</a></li>
                       
                       
                        
                    </ul>
                </div>
            </div>
            <div class="col-lg-4  col-md-4 col-sm-4">
            	<div class="footer_dv">
                	<h4>Contact us</h4>
                	<p></p>
      			<p><br>

				
                </p></div>
            </div>
        </div>
   
</section>
</body>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	
<!-- Extra JavaScript/CSS added manually in "Settings" tab -->
<!-- Include jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
	$(document).ready(function(){
		var date_input=$('input[name="birth"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'mm/dd/yyyy',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script>
<script>
	$(document).ready(function(){
		var date_input=$('input[name="datefirst"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'mm/dd/yyyy',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script>
<script>
	$(document).ready(function(){
		var date_input=$('input[name="datenow"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'mm/dd/yyyy',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script>
<script>
	$(document).ready(function(){
		var date_input=$('input[name="datenow1"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'mm/dd/yyyy',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script>
<script>
	$(document).ready(function(){
		var date_input=$('input[name="datethatplace"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'mm/dd/yyyy',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script>
<script>
	$(document).ready(function(){
		var date_input=$('input[name="date1exam"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'mm/dd/yyyy',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script>
<script>
	$(document).ready(function(){
		var date_input=$('input[name="date2exam"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'mm/dd/yyyy',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script>
<script>
	$(document).ready(function(){
		var date_input=$('input[name="dateLetter"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'mm/dd/yyyy',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script>	
<script>
	$(document).ready(function(){
		var date_input=$('input[name="date1exam"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'mm/dd/yyyy',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script>
<script>
	$(document).ready(function(){
		var date_input=$('input[name="date1exammust"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'mm/dd/yyyy',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script>
<script>
	$(document).ready(function(){
		var date_input=$('input[name="myplace"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'mm/dd/yyyy',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script>
<script>
	$(document).ready(function(){
		var date_input=$('input[name="date2exam"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'mm/dd/yyyy',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script>
<script>
	$(document).ready(function(){
		var date_input=$('input[name="date2exammust"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'mm/dd/yyyy',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script>
<script>
	$(document).ready(function(){
		var date_input=$('input[name="date3exam"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'mm/dd/yyyy',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script>
<script>
	$(document).ready(function(){
		var date_input=$('input[name="date3exammust"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'mm/dd/yyyy',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script>
<script>
	$(document).ready(function(){
		var date_input=$('input[name="2222"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'mm/dd/yyyy',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script>
<script>
	$(document).ready(function(){
		var date_input=$('input[name="tissrviceletdate"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'mm/dd/yyyy',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script>




</body>

</html>