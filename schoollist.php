
<?php 
include('connect.php'); 

$zone=$_SESSION['SESS_LAST_NAME'];

?>
<br>

<table class="table table-bordered">
	<thead>
		<th>අනු අංකය</th>
		<th>අංකය</th>
		<th>පාසලේ නම</th>
		<th>මාධ්‍ය</th>
		<th>අනුමත ගුරු සංඛ්‍යාව</th>
		<th>සිටින ගුරු සංඛ්‍යාව</th>
		<th>හිග ගුරු සංඛ්‍යාව</th>
		<th>අතිරික්ත තුරු සංඛ්‍යාව</th>
		
	</thead>
	<tbody>
		<?php
			$snoo=0;
			$sno='';
			$anumatha=0;
			$sitina=0;

			$result17 = $db->prepare("SELECT * FROM school2017 WHERE Division = '".$zone."'");
			$result17->execute();
		
			for($i=0; $row17 = $result17->fetch(); $i++){
				$sno= $row17['CENSUSNO'];
				$snoo=$snoo+1;		
			?>
		<tr>
			<td><?php echo $snoo; ?></td>
			<td><?php echo $row17['CENSUSNO']; ?></td>

			<td><?php echo $row17['NAMEOFSCHOOL']; ?></td>

			<td><?php echo $row17['Medum']; ?></td>
			<?php 
						$anumatha=0;
						$sitina=0;
						$ss='';
						$result = $db->prepare("SELECT * FROM status WHERE cNo = '".$sno."'");
						$result->execute();
					
						for($i=0; $row18 = $result->fetch(); $i++){
							$ss=$row18['cNo'];
							$anumatha=$anumatha+$row18['anumatha'];

						$result1 = $db->prepare("SELECT * FROM teachers WHERE Cno = '".$ss."'");
						$result1->execute();
					
						for($i=0; $row19 = $result1->fetch(); $i++){
							$sitina=$sitina+1;
							
						}
							
						}




						

			?>

			<td><?php echo $anumatha; ?></td>
			<td><?php echo $sitina; ?></td>
				<?php 
				$kk=$anumatha-$sitina;
				if($kk>0){
					?>
				<td><?php echo $kk; ?></td>
				<td>-</td>
					<?php

					}else{
						?>
					<td>-</td>
					<td bgcolor=""><?php echo $kk; ?></td>
				<?php	
					}
				?>
			
			

		</tr>
	<?php } ?>
	</tbody>
</table>