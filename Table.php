
<!DOCTYPE html>
<html>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Employee List </title>
	<head>
		
		
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
		
		
		
		
		
		<link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">
		<link rel="stylesheet" type="text/css" href="css/dataTables.colVis.css">
		
		<script type="text/javascript" language="javascript" src="js/jquery.js"></script>
		<script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.css"/>
		<script type="text/javascript" src="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.js"></script>
		<script type="text/javascript" language="javascript" src="js/dataTables.colVis.js"></script>
		
		<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.print.min.js"></script>
		<script type="text/javascript" language="javascript" >
			/*$(document).ready(function() {
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
			
			$(document).ready(function() {
    var dataTable=$('#employee-grid').DataTable( {
		processing: true,
				serverSide: true,
				ajax: "employee-grid-data.php", // json datasource
        dom: 'Brtip',
        buttons: [
            {
                extend: 'print',
				
                exportOptions: {
                    columns: ':visible'
                }
				
            },
            'colvis'
        ],
		
        columnDefs: [ {
            targets: -1,
            visible: false
        } ]
    } );
} );*/

$(document).ready(function() {
   var dataTable =  $('#employee-grid').DataTable( {

			   	processing: true,
				serverSide: true,
				ajax: "employee-grid-data.php",
				
        dom: 'lBfrtip',
        buttons: [
            {
                extend: 'print',
                exportOptions: {
                    columns: [ 0, ':visible' ]
                }
            },
            {
                extend: 'excelHtml5',
                exportOptions: {
                    columns: ':visible'
                }
            },
			
			
            {
                extend: 'pdfHtml5',
                exportOptions: {
                   columns: ':visible'
                }
            },
            'colvis'
        ]
    } );
	
} );

			
		</script>
		<style>
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
    background: #222222 none repeat scroll 0 0;
    border-top: 4px solid #fcab0e;
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
    background-color: green;
    
  }
}
@media (min-width: 301px) and (max-width: 900px) {
  #maincontent {
    background-color: green;
   
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
			div.container {
			    max-width: 100%px;
			    margin: 0 auto;
			}
			div.header {
			    margin: 0 auto;
			    max-width:100%px;
			}
			body {
			    background: #f7f7f7;
			    color: #333;
			}
			@media print {
      .print, {
          display:none
       }
}
		</style>
		<script>
		
		
		</script>
	</head>
	<body>
	<header style="height:100px; padding-top:10px;  ">
        <div style="padding-left:150px;">
		 <img src="images/logo.png" >
        <strong style="padding-left:600px;">Hotline</strong><small>+9425784512</small>
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
                
                <li><a href="Welcome.php?id=1">Home</a></li>
               
                <li><a href="#">Latest News</a></li>
               
				
            </ul>
			
			<ul class="nav navbar-nav navbar-right">
     
    </ul>
            
        </div>
        </div>
    </nav>

		<center><h1>Employment Information    </h1></center>
       
		<div class="container">
			 
			<table id="employee-grid"   class="display" cellspacing="0" >
			
				<thead>
					<tr>
						<th>ජා.හැ.අ </th>
						<th>සම්පුර්ණ නම </th>
						<th>මුලකුරු සමග නම</th>
						<th>FULL NAME</th>
						<th>NAME</th>
						<th>ලිපිනය</th>
						<th>දුරකථන අංකය</th>
						<th>විද්‍යුත් ලිපිනය</th>
						<th>උපන් දිනය</th>
						<th>ස්ත්‍රී/පුරිෂ භාවය </th>
						<th>ජන වර්ගය</th>
						<th>ආගම</th>
						<th>විවාහක/අවිවාහක භාවය</th>
						<th>ඉහලම අධ්‍යාපන සුදුසුකම</th>
						<th>ඉහලම වෘත්තීය සුදුසුකම</th>
						<th>සේවක වර්ගය</th>
						<th>මුල් පත්වීමේ ස්වාභාවය</th>
						<th>මුල් පත් වූ දිනය</th>
						
						<th>පත්වීම් ලිපියේ අංකය</th>
						<th>අයත්වන වර්තමාන සේවය</th>
						<th>අයත්වන වර්තමාන සේවය</th>
						<th>වර්තමාන සේවයට පත් වූ දිනය</th>
						<th>පත්වීම් ලිපියට අනුව සේවක ගණය</th>
						<th>විශේෂ නම් අදාල විෂය</th>
						<th>බදවා ගැනීමෙ ස්වභාවය</th>
						<th>වර්තමාන සේවයට අයත් ශේණිය</th>
						<th>එම සේවයට පත් වූ දිනය</th>
						<th>වර්තමාන සේවා ස්ථානයේ වැඩ භාර ගත් දිනය </th>
						<th>පළමු කාර්යක්ෂමතා කඩඉම් පරික්ෂණය සමත් වූ දිනය</th>
						<th>දෙවන කාර්යක්ෂමතා කඩඉම් පරික්ෂණය සමත් වූ දිනය</th>
						
					</tr>
				</thead>
			</table>
		</div>
		

	
		
		
	</body>
</html>
