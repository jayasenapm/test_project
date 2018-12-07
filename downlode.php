







<br>
<br>

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
				<td><a href="uplode2/<?php echo $row['Name'];?>" >download</a></td>
				
				
				
			</tr>
		</tbody>
				<?php } ?>
	</table>