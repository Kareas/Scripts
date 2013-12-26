<?php

	
	$row = 1;
	if (($handle = fopen("csvfileinsamedirectory.csv", "r")) !== FALSE) {
		while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
			$num = count($data);
			$row++;
			
			for ($c=0; $c < $num; $c++) {
				
				//skip headers
				if($row != 2){
					//oct1
					if($c == 0){
						$oct1 = $data[$c];
					}
					//oct2
					if($c == 1){
						$oct2 = $data[$c];
					}
					//oct3
					if($c == 2){
						$oct3 = $data[$c];
					}
					//oct4
					if($c == 3){
						$oct4 = $data[$c];
					}
					//description
					if($c == 4){
						$desc = $data[$c];
					}
					//DNS
					if($c == 5){
						$dns = $data[$c];
					}
					//location
					if($c == 6){
						$loc = $data[$c];
					}
					//patchpanel
					if($c == 7){
						$pp = $data[$c];
					}
					//switch
					if($c == 8){
						$switch = $data[$c];
					}
					//Port
					if($c == 9){
						$port = $data[$c];
					} 
					//Wire MAC adddress
					if($c == 10){
						$wiredmac = $data[$c];
					}
					
					 
				}
				
				
			}
			
			
			//remove periods for db
			$macaddressaddpieces = explode(".", $$wiredmac);

			//remove periods for db
			//$wirelessmacaddpieces = explode(".", $wirelessmacadd);
			
			echo "IP: ".$oct1.$oct2.$oct3.$oct4." DESC: ".$desc." DNS: ".$dns.
					" Location: ".$loc." Patch: ".$pp." Port: ".$port." Wired MAC: ".$wiredmac."<br>";
					
				
			
		}
		fclose($handle);
	}
		
?>
