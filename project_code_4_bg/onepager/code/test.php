<html>
	<body>
		<?php
			function hi($option){
				$csvData = file_get_contents("data.csv");
				$lines = explode(PHP_EOL, $csvData);
				$array = array();
				$sort = array();
				$i = 0;
				foreach ($lines as $line) {
					$sort = str_getcsv($line);
					$tmp = $option;
					$tmp2 = $sort[2];
					if (strcmp($tmp,$tmp2) == 0){
						$array[$i] = $sort;
						$i++;
					}
				}
				
				for ($j = 0; $j < $i; $j++){
					echo "<tr>";
						echo "<td><p>".$array[$j][0]."</p></td>";
						echo "<td><a href = \"".$array[$j][1]."\" target = \" blank_ \"><p>Our link!</p></a></td>";
						echo "<td><p>".$array[$j][2]."</p></td>";
					echo "</tr>";
				}
			}
			?>
		
		
		<table border = "1">
			<?php
				hi("Земеделие");
				hi("Министерство на външните работи");
			?>
		</table>
	</body>
</html>