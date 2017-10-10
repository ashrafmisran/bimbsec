<content class="container row">
	<h1 class="ash-margin"><b>Analysts&apos;</b> Reports</h1>
	<table class="ash-margin" style="width: 80%">
		<tbody>
			<?php
				$sql = 'SELECT * FROM analysts ORDER BY report_time DESC';
				$result = $conn->query($sql);
				
				while ( $row = $result->fetch_assoc() ){
				    echo '<tr>';
				    	echo '<td><img src="https://png.icons8.com/statistics/color/48" title="Statistics" width="48" height="48"></td>';
				    	echo '<td><a href="analysts/'.$row['report_filename'].'" target="_blank">'.$row['report_title'].'</a></td>';
				    	echo '<td>'. $row['report_time']     .'</td>';
				    	echo '<td>'. $row['report_category'] .'</td>';
				    echo '</tr>';
				}
			?>
		</tbody>
	</table>
</content>