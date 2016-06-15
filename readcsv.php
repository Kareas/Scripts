<?php

	
	$row = 1;
	if (($handle = fopen("csvfileinsamedirectory.csv", "r")) !== FALSE) {
		while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
			$num = count($data);
			$row++;
			
			for ($c=0; $c < $num; $c++) {
				
				//skip headers
				if($row != 2){
					
					//column 1
					if($c == 0){
						$col2 = $data[$c];
					}
					//column 1
					if($c == 1){
						$col1 = $data[$c];
					}
					
					
					 
				}
				
				
			}
			
			
			
			
			echo "Column 1" . $col1;
			echo "Column 2" . $col2;
					
				
			
		}
		fclose($handle);
	}
		
?>
