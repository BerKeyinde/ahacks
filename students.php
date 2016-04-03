<div class="container">
<form action="index.php" method="POST">
	
	<div class="jumbotron">
		<h4>Students</h4>
		
		<table border="1">
		<tr>
			<td width="200em;" align="center">
				&nbsp;&nbsp;&nbsp;Name
			</td>
			<td width="200em;" align="center">
				&nbsp;&nbsp;&nbsp;Contact Number
			</td>
			<td width="250em;" align="center">
				&nbsp;&nbsp;&nbsp;Email Address
			</td>
		</tr>
			<?php
				mysql_select_db("ahacks", $conn);
				$s_stat = 3;
				$query7 = "SELECT * FROM subsciptions WHERE totor_code = '$gid' and subscription_status = '$s_stat'";
				$result7 = mysql_query($query7);
				while ($data7 = mysql_fetch_assoc($result7)) {
					$t_id = $data7["tutee_id"];
					mysql_select_db("ahacks", $conn);
					$sql8 = "SELECT * FROM users WHERE username = '$t_id'";
					$result8 = mysql_query($sql8);
					$data8 = mysql_fetch_assoc($result8);
					$last_name = $data8["last_name"];
					$first_name = $data8["first_name"];
					$email = $data8["email"];
					$bday_month = $data8["bday_month"];
					$bday_day = $data8["bday_day"];
					$bday_year = $data8["bday_year"];
					$contact = $data8["contact_number"];
					$skill_tags = $data8["skill_tags"];
					$account_type = $data["account_type"];
					$residential_address = $data8["residential_address"];
				  	$gid = $data8["id"];
					echo '
						<tr>
							<td>
								&nbsp;&nbsp;&nbsp;'.$first_name.' '.$last_name.'
							</td>
							<td align = "center">
								&nbsp;&nbsp;&nbsp;'.$contact.'
							</td>
							<td align = "center">
								&nbsp;&nbsp;&nbsp;'.$email.'
							</td>
						</tr>
					';
				}
			?>
		</table>
		
	</div>
		
		
		
</div>
</form>
</div>