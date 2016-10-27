<html>
	<head>
		<meta name="viewport" content="width=device-width" />
		<title>Relay</title>
	</head>

	<body bgcolor="#FFFFFF">	
		<?php
			$relay1 = "22";
			$relay2 = "26";
			$relay3 = "23";
			$relay4 = "24";
			$relay5 = "27";
			$relay6 = "25";
			$relay7 = "28";
			$relay8 = "29";
			
			system("gpio mode $relay1 out");
			system("gpio mode $relay2 out");
			system("gpio mode $relay3 out");
			system("gpio mode $relay4 out");
			system("gpio mode $relay5 out");
			system("gpio mode $relay6 out");
			system("gpio mode $relay7 out");
			system("gpio mode $relay8 out");
		?>
		
		<?php	
			$button = $_GET['button'];
			switch($button) {
				case 1:
					$val = shell_exec("gpio read $relay1");
					if ($val == 1) {
						$val = trim(@shell_exec("gpio write $relay1 0"));
					}
					else {
						$val = trim(@shell_exec("gpio write $relay1 1"));
					}
					break;
				case 2:
					$val = shell_exec("gpio read $relay2");
					if ($val == 1) {
						$val = trim(@shell_exec("gpio write $relay2 0"));
					}
					else {
						$val = trim(@shell_exec("gpio write $relay2 1"));
					}
					break;
				case 3:
					$val = shell_exec("gpio read $relay3");
					if ($val == 1) {
						$val = trim(@shell_exec("gpio write $relay3 0"));
					}
					else {
						$val = trim(@shell_exec("gpio write $relay3 1"));
					}
					break;
				case 4:
					$val = shell_exec("gpio read $relay4");
					if ($val == 1) {
						$val = trim(@shell_exec("gpio write $relay4 0"));
					}
					else {
						$val = trim(@shell_exec("gpio write $relay4 1"));
					}
					break;
				case 5:
					$val = shell_exec("gpio read $relay5");
					if ($val == 1) {
						$val = trim(@shell_exec("gpio write $relay5 0"));
					}
					else {
						$val = trim(@shell_exec("gpio write $relay5 1"));
					}
					break;
				case 6:
					$val = shell_exec("gpio read $relay6");
					if ($val == 1) {
						$val = trim(@shell_exec("gpio write $relay6 0"));
					}
					else {
						$val = trim(@shell_exec("gpio write $relay6 1"));
					}
					break;
				case 7:
					$val = shell_exec("gpio read $relay7");
					if ($val == 1) {
						$val = trim(@shell_exec("gpio write $relay7 0"));
					}
					else {
						$val = trim(@shell_exec("gpio write $relay7 1"));
					}
					break;
				case 8:
					$val = shell_exec("gpio read $relay8");
					if ($val == 1) {
						$val = trim(@shell_exec("gpio write $relay8 0"));
					}
					else {
						$val = trim(@shell_exec("gpio write $relay8 1"));
					}
					break;
			}	
		?> 
		
		<table>
			<tr>
				<td width="120">
					<form method="get" action="relay.php">
						<input type="image" src="			
							<?php $val = shell_exec("gpio read $relay1");
									if($val == 1) {
										echo "button_off.png";
									}
									else {
										echo "button_on.png";
									} ?>" >
						<input type="hidden" name="button" value="1">
					</form>
				</td>
				
				<td width="120">
					<form method="get" action="relay.php">	
						<input type="image" src="
							<?php $val = shell_exec("gpio read $relay2");
								if($val == 1) {
									echo "button_off.png";
								}
								else {
									echo "button_on.png";
								} ?>" >
						<input type="hidden" name="button" value="2">
					</form>
				</td>
			</tr>
			
			<tr>
				<td>
					<form method="get" action="relay.php">
						<input type="image" src="
							<?php $val = shell_exec("gpio read $relay3");
								if($val == 1) {
									echo "button_off.png";
								}
								else {
									echo "button_on.png";
								} ?>" >	
					<input type="hidden" name="button" value="3">
					</form>
				</td>
				
				<td>
					<form method="get" action="relay.php">
						<input type="image" src="
							<?php $val = shell_exec("gpio read $relay4");
								if($val == 1) {
									echo "button_off.png";
								}
								else {
									echo "button_on.png";
								} ?>" >	
						<input type="hidden" name="button" value="4">
					</form>				
				</td>
			</tr>
			
			<tr>
				<td>
					<form method="get" action="relay.php">
						<input type="image" src="
							<?php $val = shell_exec("gpio read $relay5");
								if($val == 1) {
									echo "button_off.png";
								}
								else {
									echo "button_on.png";
								} ?>" >	
					<input type="hidden" name="button" value="5">
					</form>				
				</td>
				
				<td>
					<form method="get" action="relay.php">
						<input type="image" src="
							<?php $val = shell_exec("gpio read $relay6");
								if($val == 1) {
									echo "button_off.png";
								}
								else {
									echo "button_on.png";
								} ?>" >	
						<input type="hidden" name="button" value="6">
					</form>
				</td>
			</tr>
			
			<tr>
				<td>
					<form method="get" action="relay.php">
						<input type="image" src="
							<?php $val = shell_exec("gpio read $relay7");
								if($val == 1) {
									echo "button_off.png";
								}
								else {
									echo "button_on.png";
								} ?>" >	
						<input type="hidden" name="button" value="7">
					</form>
				</td>
				
				<td>
					<form method="get" action="relay.php">
						<input type="image" src="
							<?php $val = shell_exec("gpio read $relay8");
								if($val == 1) {
									echo "button_off.png";
								}
								else {
									echo "button_on.png";
								} ?>" >			
						<input type="hidden" name="button" value="8">
					</form>
				</td>
			</tr>
		</table>		
	</body>
</html>



